<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


/**
 * Personne controller.
 *
 */
class PersonneController extends Controller
{
    /**
     * Lists all personne entities.
     *
     */
    /**
     * @Route("/index_p", name="index_personne")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $personnes = $em->getRepository('AppBundle:Personne')->findAll();

        return $this->render('personne/index.html.twig', array(
            'personnes' => $personnes,
        ));
    }

    /**
     * Finds and displays a personne entity.
     *
     */
    /**
     * @Route("/show_p", name="personne_show")
     */
    public function showAction(Personne $personne)
    {

        return $this->render('personne/show.html.twig', array(
            'personne' => $personne,
        ));
    }
}
