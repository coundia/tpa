<?php

namespace TpaBundle\Controller;
use function PHPSTORM_META\elementType;
use Symfony\Component\Validator\Constraints\DateTime;

use TpaBundle\Entity\CalendrierProduction;
use TpaBundle\Entity\Certificat;
use TpaBundle\Entity\GestionQualite;
use TpaBundle\Entity\Inscription;
use TpaBundle\Entity\Demande;
use TpaBundle\Entity\Producteur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TpaBundle\Entity\SiteConditionnement;
use TpaBundle\Entity\SiteProduction;
use Symfony\Component\Intl\DateFormatter\DateFormat;

use TpaBundle\Form\CertificatType;

/**
 * Producteur controller.
 *
 * @Route("producteur")
 */
class ProducteurController extends Controller
{
    /**
     * Lists all producteur entities.
     *
     * @Route("/", name="producteur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $producteurs = $em->getRepository('TpaBundle:Producteur')->getproducteur();

       // var_dump($producteurs);exit();


        return $this->render('producteur/index.html.twig', array(
            'producteurs' => $producteurs,
        ));
    }

    /**
     *
     * @Route("/rapport", name="rapport")
     */
    public function rapport()
    {
        return $this->render('producteur/rapport.html.twig');
    }

   

    /**
     *
     * @Route("/{id}/inscription", name="inscription")
     */
    public function Inscription($id)
    {
        $prod=$this->getDoctrine()->getRepository(Producteur::class)->find($id);
        return $this->render('producteur/inscription.html.twig', array(
            'prod' => $prod,
        ));
    }

    /**
     *
     * @Route("/listeProducteur", name="liste_producteur")
     */
    public function listerAction()
    {
        $prod=$this->getDoctrine()->getRepository(Producteur::class)->findAllOrderedByName();
        return $this->render('producteur/listeProducteur.html.twig', array(
            'prod' => $prod,
        ));
    }
    /**
     *
     * @Route("/lister", name="producteur_maj")
     */

    public function majAction()
    {

        return $this->render('producteur/maj.html.twig');

    }
    /**
     *
     * @Route("/saisiIntrant", name="intrant")
     * @Method("GET")
     */
    public function saisiIntrantAction()
    {

        return $this->render('producteur/intrant.html.twig');
    }
    /**
     * Creates a new producteur entity.
     *
     * @Route("/new", name="producteur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $total=5;
        $totalcertificat=6;
        $inscription=new Inscription();
        for ($i=0; $i<$totalcertificat;$i++){
            $inscription->getCertificat()->add(new Certificat());
        }
        $inscription->getProducteur()->add(new Producteur());
       // $g=new GestionQualite();
        
        //$inscription->getQualite()->add(new GestionQualite());


        $producteur = new Producteur();
        $today = new \DateTime ( 'now' );
        $listenom=array("Tesco Nature's Choice","Agriculture Biologique","BRC","Autres (à préciser)");
        //$dateAujourdhui = $today->format('Y-m-d H:i:s');

        $form = $this->createForm('TpaBundle\Form\InscriptionType', $inscription);
        $forms = $this->createForm('TpaBundle\Form\ProducteurType', $producteur);
        $form->handleRequest($request);
        $producteur->setDate($today);
        //var_dump($today);exit();
        if ($form->isSubmitted() && $form->isValid()) {
            $producteur= $inscription->getProducteur()[0];
            $destination=$producteur->getEmail();
           //var_dump(   $request->get('department')); exit();
            $producteur->setRegion($request->get('region'));
            $producteur->setDepartement($request->get('department'));

            if($request->get('regie')==1){
               $producteur->setRegie("oui");
              // $producteur->setVulgarisation("non");

            }
          if($request->get('vulgarisation')==1){
                $producteur->setVulgarisation("oui");
                //$producteur->setRegie("non");
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($producteur);
            $em->flush();
           
        //var_dump($request->get('qualiteNon'));exit();
            $nb_spec=($request->get('nb_spec'));
           
            for ($i=1;$i<=$nb_spec;$i++){
                $site=new SiteProduction();
                if ($request->get('perimetre_'.$i)=="")
                    break;
                $site->setPerimetre($request->get('perimetre_'.$i));
                $site->setSuperficie($request->get('superficie_'.$i));
                $site->setLocalisation($request->get('localisation_'.$i));
                $site->setnb_spec($request->get('nb_spec'));
                if ($request->get('oui_prod')==1){
                    $site->setProd_associe("oui");

                }
                if($request->get('non_prod')==1)
                {$site->setProd_associe("non");}

                if ($request->get('oui_piste')==1){
                    $site->setPiste_associe("oui");
                }
                if(($request->get('non_piste')==1)){$site->setPiste_associe("non");}

                //$site->setSpeculation($request->get('speculation_'.$i));
                //$site->setRegie($request->get('regie_'.$i));
                $site->setProducteur($producteur);
                $em->persist($site);
                $em->flush();
            }
           
            $demande=new Demande();
            $demande->setDateDepot($today);
            $demande->setTypeDemande($request->get('typeDemande'));
           // var_dump($request->get('typeDemande'));exit();
            $demande->setProducteur($producteur);
            $em->persist($demande);
            $em->flush();
            for ($i=1;$i<=$nb_spec;$i++){
                $calendrier=new CalendrierProduction();
              /*  if ($request->get('spec_'.$i)=="")
                    break;*/
                //$calendrier->setSpeculation($request->get('spec_'.$i));
                //$calendrier->setSurfacecultive($request->get('surface_'.$i));
                $calendrier->setDestination($request->get('destination_'.$i));
                $calendrier->setDateDebut($request->get('date_debut_'.$i));
                $calendrier->setDateFin($request->get('date_fin_'.$i));
                //var_dump($request->get('date_fin_1'));exit();
                $calendrier->setProducteur($producteur);
                $em->persist($calendrier);
                $em->flush();
            }
           
            for ($i=1;$i<=$nb_spec;$i++){
                $siteCond=new SiteConditionnement();
                /*if ($request->get('zones_'.$i)=="AUCUNE"){
                    break;}*/
                   // else {
                        //$siteCond->setSpeculation($request->get('speculation_'.$i));
                        $siteCond->setZones($request->get('zones_'.$i));
                        $siteCond->setSitecond($request->get('siteCond_'.$i));
                        $siteCond->setLacalisation($request->get('localisation_'.$i));
                        $siteCond->setProducteur($producteur);

                    //}

                if ($request->get('oui_prest')==1){
                    $siteCond->setcontrat_prestation("oui");
                }
                if($request->get('non_prest')==1)
                {$siteCond->setcontrat_prestation("non");}

                if ($request->get('oui_location')==1){
                    $siteCond->setcontrat_location("oui");
                }
                if ($request->get('non_location')==1)
                {$siteCond->setcontrat_location("non");}



                $em->persist($siteCond);
                $em->flush();
            }
            //var_dump($request->get('opt2'));exit();
            foreach($inscription->getCertificat() as $k){
                if ($k->getCertificat()==null)
                    continue;
                $file = $k->getCertificat();
                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('brochures_directory'),
                    $fileName
                );
                $k->setCertificat($fileName);
                $k->setProducteur($producteur);
                $em->persist($k);
                $em->flush();
            }

           // $em->persist($inscription->getQualite()[0]);
            $em->flush();
            $sujet=('accuse de reception');
            //$sujet=('accuse de reception');
            $message_text=('Bonjour '.$producteur->getNom() .' '. $producteur->getPrenom().' votre demande a bien ete enregistre');
            $message = \Swift_Message::newInstance()
                ->setSubject($sujet)
                ->setFrom('mlouma2019@gmail.com')
                ->setTo($destination)
                ->setBody($message_text);

            $this->get('mailer')->send($message);

            return $this->redirectToRoute('inscription', array('id' => $producteur->getId()));
        }

        return $this->render('producteur/new.html.twig', array(
            'producteurs' => $producteur,
            'liste' =>$listenom,
            'form' => $form->createView(),
        ));
    }
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
    /**
     * Finds and displays a producteur entity.
     *
     * @Route("/{id}", name="producteur_show")
     * @Method("GET")
     */
    public function showAction(Producteur $producteur)
    {

        $deleteForm = $this->createDeleteForm($producteur);

        return $this->render('producteur/show.html.twig', array(
            'producteur' => $producteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }





    /**
     * Displays a form to edit an existing producteur entity.
     *
     * @Route("/{id}/edit", name="producteur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Producteur $producteur)
    {
        $deleteForm = $this->createDeleteForm($producteur);
        $editForm = $this->createForm('TpaBundle\Form\ProducteurType', $producteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('producteur_edit', array('id' => $producteur->getId()));
        }

        return $this->render('producteur/edit.html.twig', array(
            'producteur' => $producteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }







    /**
     * Deletes a producteur entity.
     *
     * @Route("/{id}", name="producteur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Producteur $producteur)
    {
        $form = $this->createDeleteForm($producteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($producteur);
            $em->flush();
        }

        return $this->redirectToRoute('producteur_index');
    }

    /**
     * Creates a form to delete a producteur entity.
     *
     * @param Producteur $producteur The producteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Producteur $producteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('producteur_delete', array('id' => $producteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
