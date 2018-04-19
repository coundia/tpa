<?php

namespace TracabiliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TracabiliteBundle\Entity\Saisi;
class TracabiliteController extends Controller
{
    public function baseAction()
    {
        return $this->render('TracabiliteBundle::base.html.twig');
    }
    public function produitAction()
    {
        return $this->render('TracabiliteBundle::produit.html.twig');
    }
    public function homeAction()
    {
        return $this->render('TracabiliteBundle::home.html.twig');
    }

    public function saisiIntrantAction(Request $request)
    {    $saisi=new Saisi();
        $form=$this->createForm('TracabiliteBundle\Form\SaisiType',$saisi);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($saisi);
            $em->flush($saisi);
        }
        return $this->render('TracabiliteBundle::saisiIntrant.html.twig',array(
            'saisi'=>$saisi,
            'form'=>$form->CreateView(),
        )) ;

    }

    public function calendrierCulturelAction()
    {           return $this->render('TracabiliteBundle::calendrierCulturel.html.twig');

    }
    public function suiviProductionAction()
    {           return $this->render('TracabiliteBundle::suiviProduction.html.twig');

    }
    public function recolteAction()
    {           return $this->render('TracabiliteBundle::recolte.html.twig');

    }
    public function controleConditionnementAction()
    {           return $this->render('TracabiliteBundle::controleConditionnement.html.twig');

    }
    public function exportationAction()
    {           return $this->render('TracabiliteBundle::exportation.html.twig');

    }
    public function rejetAction()
    {           return $this->render('TracabiliteBundle::rejet.html.twig');

    }

    public function indexAction(){
        $userManager = $this->get('fos_user.user_manager');
        $users    =    $userManager->findUsers();
        return$this->render('TracabiliteBundle::index.html.twig', array(
            'user'=>$users,
        ));
    }



}
