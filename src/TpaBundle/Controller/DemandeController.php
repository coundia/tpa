<?php

namespace TpaBundle\Controller;

use TpaBundle\Entity\Demande;
use TpaBundle\Entity\Certificat;
use TpaBundle\Entity\DemandeInspection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TpaBundle\Entity\FosUser;
use UserBundle\Entity\User;


/**
 * Demande controller.
 *
 * @Route("demande")
 */
class DemandeController extends Controller
{
    /**
     * Lists all demande entities.
     *
     * @Route("/", name="demande_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('TpaBundle:Demande')->findBy(array('statut'=>0));

        return $this->render('demande/index.html.twig', array(
            'demandes' => $demandes,
        ));
    }

//PARTIE INSPECTION

//    /**
//     * demande inspection
//     *
//     * @Route("/inspection", name="demande_inspection")
//     * @Method({"GET", "POST"})
//     */
    /*public function InspectionAction(Request $request)
    {
        $inspection = new DemandeInspection();
        $demande=new Demande();
        $form = $this->createForm('TpaBundle\Form\DemandeInspectionType',$inspection);
        $form->handleRequest($request);
//var_dump($_POST['ProprieteVerger_1']);exit();
       // if ($form->isSubmitted() && $form->isValid()) {
$inspection->setNomPrenom($_POST['nomEntreprise']);
$inspection->setNomEntreprise($_POST['PrenomNOm']);

$inspection->setNumTelDemandeur($_POST['NumTelephone']);

$inspection->setDateAppel($_POST['DateAppel']);
$inspection->setZoneProvenance($_POST['ZoneProvenance']);
    for ($i=1;$i<=3;$i++){
        $inspection->setProprietaire($_POST['ProprieteVerger_'.$i]);
    }

$inspection->setLieuCond($_POST['LieuConditionnement']);
$inspection->setDateCond($_POST['DateConditionnement']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($inspection);
            $em->flush();
        //}
        return $this->render('demande/inspection.html.twig');
    }*/






//
//    /**
//     * Finds and displays a demande inspection entity.
//     *
//     * @Route("/inspection/{id}", name="inspection_show")
//     * @Method("GET")
//     */
/*    public function showInspectionAction(DemandeInspection $DemandeInspection)
    {
        $deleteForm = $this->createDeleteForm($DemandeInspection);
        $em = $this->getDoctrine()->getManager();
        $demandeinspection = $em->getRepository('TpaBundle:DemandeInspection')->findBy(array('statuts'=>0));

        //var_dump($demande);exit();
        return $this->render('inspection/show.html.twig', array(
            'demandeinspection' => $DemandeInspection,
        ));
    }*/








//
//    /**
//     * Lists all demande inspection entities.
//     *
//     * @Route("/liste-inspection", name="inspection_index")
//     * @Method("GET")
//     */
 /*   public function indexInspectionAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listes = $em->getRepository('TpaBundle:DemandeInspection')->findBy(array('statuts'=>0));

        return $this->render('inspection/index.html.twig', array(
            'listes' => $listes,
        ));
    }*/





//
//    /**
//     * demande inspection
//     *
//     * @Route("/fiche-inspection", name="fiche_inspection")
//     * @Method({"GET", "POST"})
//     */

















    /**
     * Lists all demande entities.
     *
     * @Route("/{statut}/valider", name="demande_valider")
     * @Method("GET")
     */
    public function index1Action($statut)
    {
        $em = $this->getDoctrine()->getManager();

        $demandes = $em->getRepository('TpaBundle:Demande')->findBy(array('statut'=>$statut));

        return $this->render('demande/index1.html.twig', array(
            'demandes' => $demandes,
        ));
    }

     /**
     *
     * @Route("/{id}/validerproducteur", name="validerproducteur")
     */
    public function validerproducteur($id)
    {
        // Modification du statut de la demande
        $em = $this->getDoctrine()->getManager();
        $prod=$em->getRepository(Demande::class)->find($id);
        $prod->setStatut(1);
        $email=$prod->getProducteur()->getEmail();
        $em->flush();
        $utilisateur = new User();
        $form = $this->createForm('UserBundle\Form\UserType', $utilisateur);
        $form->getData()->setEmail('nanndiaye68@gmail.com');
        //var_dump($form->getData()->getEmail());exit();
        // Création du compte pour le producteur
        $userManager = $this->get('fos_user.user_manager');

        $user = $userManager->createUser();
        //$form->get('email')->setData($user->getEmail());
        $user->setEnabled(true);
        if($prod->getProducteur()->getEmail()!=null){
            // $user->setUsername($prod->getProducteur()->getEmail());
        $user->setEmail($prod->getProducteur()->getEmail());}
       // else
            $user->setUsername($prod->getProducteur()->getNom()."".$prod->getProducteur()->getPrenom());
        //var_dump($user->getEmail());exit();
        $user->setPlainPassword("passer1234");
        $user->setRoles(array('ROLE_PRODUCTEUR'));
       // $userManager->updateUser($user);


        //$this->sendMailTransaction($prod->getProducteur()->getEmail(),$prod->getProducteur()->getPrenom(),$prod->getProducteur()->getNom(), $user->getUsername(),"passer1234");
        // Redirection vers la liste des demandes
        //return $this->redirectToRoute('demande_index');
        return $this->redirectToRoute('utilisateur_new',array('id' => $prod->getId()));
      /* return $this->render('user/nouveau.html.twig', array(
           'id' => $prod->getId(),
            'email' => $email,
           'form' => $form->createView()
        ));*/

    }

     /**
     *
     * @Route("/{id}/rejeterproducteur", name="rejeterproducteur")
     */
    public function rejeterproducteur($id)
    {
        // Modification du statut de la demande
        $em = $this->getDoctrine()->getManager();
        $prod=$em->getRepository(Demande::class)->find($id);
        $prod->setStatut(2);
        $em->flush();
        // Redirection vers la liste des demandes
        return $this->redirectToRoute('email_send',array('id' => $prod->getId()));
    }

    /**
     * Creates a new demande certificat.
     *
     * @Route("/newcertificat", name="certificat_new")
     * @Method({"GET", "POST"})
     */
    public function newCertificat(Request $request)
    {
        $certificat = new Certificat();
        $form = $this->createForm('TpaBundle\Form\CertificatType', $certificat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $file = $certificat->getCertificat();
            $fileName = 'FR0'.'.'.$file->guessExtension();

            

            // moves the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('brochures_directory'),
                $fileName
            );

            // updates the 'brochure' property to store the PDF file name
            // instead of its contents
            $certificat->setCertificat($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($certificat);
            $em->flush();

            return $this->redirectToRoute('demande_index');
        }

        return $this->render('demande/newcertificat.html.twig', array(
            'certificat' => $certificat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new demande entity.
     *
     * @Route("/new", name="demande_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $demande = new Demande();
        $form = $this->createForm('TpaBundle\Form\DemandeType', $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demande);
            $em->flush();

            return $this->redirectToRoute('demande_show', array('id' => $demande->getId()));
        }

        return $this->render('demande/new.html.twig', array(
            'demande' => $demande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a demande entity.
     *
     * @Route("/{id}", name="demande_show")
     * @Method("GET")
     */
    public function showAction(Demande $demande)
    {
        $deleteForm = $this->createDeleteForm($demande);
        $em = $this->getDoctrine()->getManager();

        $siteproduction = $em->getRepository('TpaBundle:SiteProduction')->findBy(array('producteur'=>$demande->getProducteur()));
        $siteconditionnement = $em->getRepository('TpaBundle:SiteConditionnement')->findBy(array('producteur'=>$demande->getProducteur()));
        $certificats = $em->getRepository('TpaBundle:Certificat')->findBy(array('producteur'=>$demande->getProducteur()));
		$calendrier = $em->getRepository('TpaBundle:CalendrierProduction')->findBy(array('producteur'=>$demande->getProducteur()));
		//var_dump($demande);exit();
        return $this->render('demande/show.html.twig', array(
            'demande' => $demande,
            'delete_form' => $deleteForm->createView(),
            'siteproduction' => $siteproduction,
            'siteconditionnement' => $siteconditionnement,
            'certificats' => $certificats,
			'calendrier' => $calendrier,
        ));
    }

    /**
     * Displays a form to edit an existing demande entity.
     *
     * @Route("/{id}/edit", name="demande_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Demande $demande)
    {
        $deleteForm = $this->createDeleteForm($demande);
        $editForm = $this->createForm('TpaBundle\Form\DemandeType', $demande);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demande_edit', array('id' => $demande->getId()));
        }

        return $this->render('demande/edit.html.twig', array(
            'demande' => $demande,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a demande entity.
     *
     * @Route("/{id}", name="demande_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Demande $demande)
    {
        $form = $this->createDeleteForm($demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($demande);
            $em->flush();
        }

        return $this->redirectToRoute('demande_index');
    }

    /**
     * Deletes a demande inspection entity.
     *
     * @Route("/{id}", name="inspection_delete")
     * @Method("DELETE")
     */
    public function deleteInspectionAction(Request $request, DemandeInspection $demandeInspection)
    {
        $form = $this->createDeleteForm($demandeInspection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($demandeInspection);
            $em->flush();
        }

        return $this->redirectToRoute('inspection_index');
    }


    /**
     * Creates a form to delete a demande entity.
     *
     * @param Demande $demande The demande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Demande $demande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demande_delete', array('id' => $demande->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function sendMail($email,$prenom,$nom,$password){
        //construction du message
        $lien="http://192.168.1.46/Neldam1/web/app_dev.php/login";
        $message="Bonjour M/Mme ".$prenom." ".$nom.", Votre transaction a été validée.<br>Vous pouvez vous connecter dès maintenant avec vos identifiants:<br>Email: ".$email."<br>Mot de passe: ".$password."<br>Vous avez la possibilité de changer votre mot de passe une fois connecté(e).<br>Pour se connecter veuiller cliquer sur ce lien: ".$lien;

        $mail = new \PHPMailer();

        //$mail->Host = 'smtp.domaine.fr';
        $mail->Host = "ssl://smtp.gmail.com";
        $mail->SMTPAuth   = true;
        //$mail->Port = 25; // Par défaut
        $mail->Port = 465;
        $mail->isSMTP();

        // Authentification
        $mail->Username = "kwingoneldam@gmail.com";
        $mail->Password = "neldam2017";

        // Expéditeur
        $mail->SetFrom('kwingoneldam@gmail.com', 'Neldam');
        // Destinataire
        $destinataire= $prenom.' '.$nom;
        $mail->AddAddress($email,$destinataire);
        // Objet
        $mail->Subject = 'les informations des parametres de connexion.';

        // Votre message
        $mail->MsgHTML($message);
        //$mail->addAttachment($path, $name, $encoding, $type);

        // Envoi du mail avec gestion des erreurs
        if(!$mail->Send()) {
            //echo 'Erreur : ' . $mail->ErrorInfo;
            return 'Erreur : ' . $mail->ErrorInfo;
        } else {
            //echo 'Message envoyé !';
            return 'Message envoyé !';
        }
    }

    public function sendMailTransaction($email,$prenom,$nom,$login,$password){
        //construction du message
        $date=new \DateTime(); //this returns the current date time
        $datetra = $date->format('d-m-Y H:i:s');

       // $message="Bonjour M/Mme ".$prenom." ".$nom.", Votre transaction a été validée.<br>Vous pouvez vous connecter dès maintenant avec vos identifiants:<br>Email: ".$email."<br>Mot de passe: ".$password."<br>Vous avez la possibilité de changer votre mot de passe une fois connecté(e).;
        $message="  Bonjour M/Mme ".$prenom." ".$nom." Votre login est :".$login." et votre mot de passe ".$password;
        $mail = new \PHPMailer();

        //$mail->Host = 'smtp.domaine.fr';
        $mail->Host = "ssl://smtp.gmail.com";
        $mail->SMTPAuth   = true;
        //$mail->Port = 25; // Par défaut
        $mail->Port = 465;
        $mail->isSMTP();

        // Authentification
        $mail->Username = "sgiexportation@gmail.com";
        $mail->Password = "Systeme@2018+";

        // Expéditeur
        $mail->SetFrom('sgiexportation@gmail.com', 'Système de Gestion intégré des Exportations');
        // Destinataire
        $destinataire= $prenom.' '.$nom;
        $mail->AddAddress($email,$destinataire);
        // Objet
        $mail->Subject = 'Ouverture de compte.';

        // Votre message
        $mail->MsgHTML($message);
        //$mail->addAttachment($path, $name, $encoding, $type);

        // Envoi du mail avec gestion des erreurs
        if(!$mail->Send()) {
            //echo 'Erreur : ' . $mail->ErrorInfo;
            return 'Erreur : ' . $mail->ErrorInfo;
        } else {
            //echo 'Message envoyé !';
            return 'Message envoyé !';
        }
    }
}
