<?php

namespace TpaBundle\Controller;
use Symfony\Component\Validator\Constraints\DateTime;
use TpaBundle\Entity\CalendrierProduction;
use TpaBundle\Entity\Certificat;
use TpaBundle\Entity\gestionQualite;
use TpaBundle\Entity\Producteur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TpaBundle\Entity\SiteConditionnement;
use TpaBundle\Entity\SiteProduction;
use Symfony\Component\Intl\DateFormatter\DateFormat;

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

        var_dump($producteurs);exit();


        return $this->render('producteur/index.html.twig', array(
            'producteurs' => $producteurs,
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
     * Creates a new producteur entity.
     *
     * @Route("/new", name="producteur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $producteur = new Producteur();
        $today = new \DateTime ( 'now' );
        //$dateAujourdhui = $today->format('Y-m-d H:i:s');

        $form = $this->createForm('TpaBundle\Form\ProducteurType', $producteur);
        $form->handleRequest($request);
        $producteur->setDate($today);
        //var_dump($today);exit();
        if ($form->isSubmitted() && $form->isValid()) {
            //var_dump($request->get('gestQualiteOui'));exit();
           // var_dump($request->get('perimetre_1'));exit();
            $em = $this->getDoctrine()->getManager();
            $em->persist($producteur);
            $em->flush();
        var_dump($request->get('qualiteNon'));exit();
            $nb_spec=($request->get('nb_spec'));
            for ($i=1;$i<=$nb_spec;$i++){
                $site=new SiteProduction();
                if ($request->get('perimetre_'.$i)=="")
                    break;
                $site->setPerimetre($request->get('perimetre_'.$i));
                $site->setSuperficie($request->get('superficie_'.$i));
                $site->setLocalisation($request->get('localisation_'.$i));
                $site->setSpeculation($request->get('speculation_'.$i));
                $site->setregie($request->get('regie_'.$i));
                $site->setProducteur($producteur);
                $em->persist($site);
                $em->flush();
            }

            //var_dump($nb_spec);exit();
            for ($i=1;$i<=$nb_spec;$i++){
                $calendrier=new CalendrierProduction();
                if ($request->get('spec_'.$i)=="")
                    break;
                $calendrier->setSpeculation($request->get('spec_'.$i));
                $calendrier->setSurfaceCultive($request->get('surface_'.$i));
                $calendrier->setDestination($request->get('destination_'.$i));
                $calendrier->setDateDebut($request->get('date_debut_'.$i));
                $calendrier->setDateFin($request->get('date_fin_'.$i));
                //var_dump($request->get('date_fin_'.$i));exit();
                $calendrier->setProducteur($producteur);
                $em->persist($calendrier);
                $em->flush();
            }
            for ($i=1;$i<=$nb_spec;$i++){
                $siteCond=new SiteConditionnement();
                if ($request->get('speculation_'.$i)=="")
                    break;
                $siteCond->setSpeculation($request->get('speculation_'.$i));
                $siteCond->setSiteCond($request->get('siteCond_'.$i));
                $siteCond->setLacalisation($request->get('localisation_'.$i));
                $siteCond->setProducteur($producteur);
                $em->persist($siteCond);
                $em->flush();
            }
            for ($i=1;$i<=8;$i++){
                $certificat=new Certificat();
                if ($request->get('num_'.$i)=="")
                    break;
                $certificat->setNumeroCert($request->get('num_'.$i));
                $certificat->setDateCert($request->get('date_cert_'.$i));
                $certificat->setCertificat($request->get('certificat_'.$i));
                $certificat->setProducteur($producteur);
                $em->persist($certificat);
                $em->flush();
            }
            return $this->redirectToRoute('producteur_index', array('id' => $producteur->getId()));
        }

        return $this->render('producteur/new.html.twig', array(
            'producteurs' => $producteur,
            'form' => $form->createView(),
        ));
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
