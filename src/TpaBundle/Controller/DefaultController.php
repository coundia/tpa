<?php

namespace TpaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/tpa")
     */
    public function indexAction()
    {
        return $this->render('TpaBundle:Default:index.html.twig');
    }

    /**
     * calendrier
     *
     * @Route("/calendrier", name="calendrier")
     * @Method("GET")
     */
    public function calendrierAction()
    {
        return $this->render(':default:calendrier.html.twig');
    }
}
