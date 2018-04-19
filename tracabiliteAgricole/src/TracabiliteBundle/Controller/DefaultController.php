<?php

namespace TracabiliteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('TracabiliteBundle::index.html.twig');
    }
    /**
     * @Route("/home",name="home")
     */
    public function homeAction()
    {
        return $this->render('TracabiliteBundle::index.html.twig');
    }
    /**
     * @Route("/admin",name="admin")
     */
   /* public function adminAction()
    {
        return $this->render('FiveProjectBundle:admin:index.html.twig');
    }*/
    /**
     * @Route("/project",name="project")
     */
   /* public function projectAction()
    {
        return $this->render('FiveProjectBundle:admin:index.html.twig');
    }*/
}
