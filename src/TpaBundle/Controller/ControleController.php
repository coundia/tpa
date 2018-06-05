<?php

namespace TpaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class ControleController extends Controller
{
    /**
     * @Route("/rapportControle",name="rapportControle")
     */
    public function rapportAction()
    {
        return $this->render('controle/rapportControle.html.twig');
    }


}
