<?php

namespace TpaBundle\Controller;


use TpaBundle\Entity\Demande;
use TpaBundle\Entity\GestionQualite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\MonologBundle\SwiftMailer;
use Symfony\Component\HttpFoundation\JsonResponse;
 use Symfony\Component\HttpFoundation\Response;
use UserBundle\Entity\User;



/**
 * Email Controler.
 *
 * @Route("email")
 */
class EmailController extends Controller
{
    /**
     * Lists all gestionQualite entities.
     *
     * @Route("/emailToSend", name="email_to_send")
     * @Method({"GET", "POST"})
     */
  /*  public function testemailAction(Request $request )
        // public function testemailAction( SwiftMailer\MessageFactory $mailer)


    {
        $form = $this->createForm('TpaBundle\Form\EmailType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->redirectToRoute('email_send');

    }return $this->render('email/email.html.twig');
    }*/


    /**
     * La gestion des emails
     *
     * @Route("/{id}/emailsend", name="email_send")
     * @Method({"GET", "POST"})
     */
    public function emailAction( Request $request,$id)
        // public function testemailAction( SwiftMailer\MessageFactory $mailer)
    {
$user=new User();
        $form = $this->createForm('UserBundle\Form\UserType',$user);
        $form->handleRequest($request);

        // var_dump($destination);exit();
        if ($form->isSubmitted() && $form->isValid()) {

       /*     $destination=$_POST['destination'];
            $sujet=$_POST['sujet'];
            $message_text=$_POST['message'];
            //var_dump($destination);exit();
            $message = \Swift_Message::newInstance()
                ->setSubject($sujet)
                ->setFrom('mlouma2019@gmail.com')
                ->setTo($destination)
                ->setBody($message_text);

            $this->get('mailer')->send($message);
            //return $this->redirectToRoute('email_send');*/
            return $this->redirectToRoute('email_envoi');
       }
        $em = $this->getDoctrine()->getManager();
        $prod=new Demande();
        $prod=$em->getRepository(Demande::class)->find($id);
        $email=$prod->getProducteur()->getEmail();
        //var_dump($email);exit();
       return $this->render('email/email.html.twig',array('email'=>$email));

        //return $this->redirectToRoute('email_envoi');

    }








    /**
     * La gestion des emails
     *
     * @Route("/envoi", name="email_envoi")
     * @Method({"GET", "POST"})
     */
    public function envoiAction( Request $request)
        // public function testemailAction( SwiftMailer\MessageFactory $mailer)
    {
        $user=new User();
        $form = $this->createForm('UserBundle\Form\UserType',$user);
        $form->handleRequest($request);
       // $destination=($request->get('email'));
       $destination=$_POST['destination'];

       // var_dump($recipients_emails);exit();
        $sujet=$_POST['sujet'];
        //var_dump($sujet);exit();
        $message_text=$_POST['message'];
       // foreach ($recipients_emails as $dest){
            //var_dump($destination);exit();
            $message = \Swift_Message::newInstance()
                ->setSubject($sujet)
                ->setFrom('mlouma2019@gmail.com')
                ->setTo($destination)
                ->setBody($message_text);

            $this->get('mailer')->send($message);
   // }
            return $this->redirectToRoute('demande_index');

        //var_dump('merci');exit();







    }










    /**
     * La gestion des emails
     *
     * @Route("/envoyerEmails", name="essai")
     * @Method({"GET", "POST"})
     */
public function essaiAction(Request $request)
{
    $user=new User();
    $form = $this->createForm('UserBundle\Form\UserType',$user);
    $form->handleRequest($request);

    // var_dump($destination);exit();
    if ($form->isSubmitted() && $form->isValid()) {

        /*     $destination=$_POST['destination'];
             $sujet=$_POST['sujet'];
             $message_text=$_POST['message'];
             //var_dump($destination);exit();
             $message = \Swift_Message::newInstance()
                 ->setSubject($sujet)
                 ->setFrom('mlouma2019@gmail.com')
                 ->setTo($destination)
                 ->setBody($message_text);

             $this->get('mailer')->send($message);
             //return $this->redirectToRoute('email_send');*/
        return $this->redirectToRoute('email_group');
    }

    //var_dump($email);exit();
    return $this->render('email/essai.html.twig');



}


    /**
     * La gestion des emails
     *
     * @Route("/envoi_groupe", name="email_group")
     * @Method({"GET", "POST"})
     */
    public function groupeAction( Request $request)
        // public function testemailAction( SwiftMailer\MessageFactory $mailer)
    {
        $user=new User();
        $form = $this->createForm('UserBundle\Form\UserType',$user);
        $form->handleRequest($request);
        // $destination=($request->get('email'));


        $destination=array($_POST['destination']);
//piece jointe

            //fin piece jointe

        $taille=sizeof($destination);//Taille du tableau $liste

        for($i=0;$i<$taille;$i++){
            $recipients_emails=explode(';',$destination[$i],6);

        }

             //var_dump($urlFile);exit();
            $sujet=$_POST['sujet'];
            //var_dump($sujet);exit();
            $message_text=$_POST['message'];
            // foreach ($recipients_emails as $dest){
            //var_dump($destination);exit();
           $urlFile=$_FILES['file']['name'];

      //  for ($i=0;$i<sizeof($recipients_emails);$i++){
           // if ($urlFile != null) {

               //$urFilePath = $_SERVER['DOCUMENT_ROOT'] . "/report/web/upload/doc/newsletter/" . $urlFile;
        $urFilePath = $_SERVER['DOCUMENT_ROOT'] . "/upload/" .$urlFile;
                $message = \Swift_Message::newInstance()

                    ->setSubject($sujet)
                    ->setFrom('mlouma2019@gmail.com')
                    //->attach(\Swift_Attachment::fromPath($_FILES['file']['tmp_name'])->setFilename('motif_rejet'))
                   ->attach(\Swift_Attachment::fromPath($_FILES['file']['tmp_name'])->setFilename($_FILES['file']['name']))

                   /*$type = $message->getHeaders()->get('Content-Type');
                   $type->setParameter('charset', 'utf-8')*/
                    ->setBody($message_text);

//var_dump($urFilePath);exit();

        foreach ($recipients_emails as $address => $name)
        {
            if (is_int($address)) {
                $message->setTo($name);
            } else {
                $message->setTo([$address => $name]);
            }

            //$numSent += $mailer->send($message, $failedRecipients);






                  // ->attach(\Swift_Attachment::fromPath($urlFile), "application/octet-stream");

           // }
           /* else {
                $message = \Swift_Message::newInstance()
                    ->setSubject($sujet)
                    ->setFrom('mlouma2019@gmail.com')
                    ->setTo('nanndiaye68@gmail.com')
                    ->setBody($message_text);
            }*/

//            $type = $message->getHeaders()->get('Content-Type');
//            $type->setValue('text/html');
//            $type->setParameter('charset', 'utf-8');

            $this->get('mailer')->send($message);
        }

        return $this->redirectToRoute('demande_index');

        //var_dump('merci');exit();







    }








}