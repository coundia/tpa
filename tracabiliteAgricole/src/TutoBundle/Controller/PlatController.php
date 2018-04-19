<?php

namespace TutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TutoBundle\Entity\Plat;
class PlatController extends Controller
{
    public function baseAction()
    {
     return $this->render('TutoBundle::base.html.twig');  
    }

    public function menuAction(Request $request)
    {
         $plat=new plat();
            $form=$this->createForm('TutoBundle\Form\PlatType',$plat);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {
                $em=$this->getDoctrine()->getManager();
                $em->persist($plat);
                $em->flush($plat);
            }
            return $this->render('TutoBundle::menu.html.twig',array(
                 'plat'=>$plat,
                 'form' => $form->CreateView(),
             ));
        
    }


    public function ajoutAction(Request $request)
    {    $plat=new Plat();
    $form=$this->createForm('TutoBundle\Form\PlatType',$plat);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->persist($plat);
        $em->flush($plat);
    }
    return $this->render('TutoBundle::ajoutPlat.html.twig',array(
        'plat'=>$plat,
        'form'=>$form->CreateView(),
    )) ;   

}









}
