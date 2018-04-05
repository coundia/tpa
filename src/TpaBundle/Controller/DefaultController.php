<?php

namespace TpaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/tpa")
     */
    public function indexAction()
    {
        return $this->render('TpaBundle:Default:index.html.twig');
    }
}
