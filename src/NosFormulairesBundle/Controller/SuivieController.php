<?php

namespace NosFormulairesBundle\Controller;

use NosFormulairesBundle\Entity\RegistrePalettisation;
use NosFormulairesBundle\Entity\Palettisation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Registrepalettisation controller.
 *
 * @Route("suivie")
 */
class SuivieController extends Controller
{
    /**
     * Lists all suivie entities.
     *
     * @Route("/{id}", name="suivie_index")
     * @Method("GET")
     */
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $suivies = $em->getRepository('NosFormulairesBundle:Lot')->findBy(array("idCampagne"=>$id));

        $listes=array();
        $choix=false;

        foreach($suivies as $suivie){
            $listes[$suivie->getIdentifiant()]=$em->getRepository('NosFormulairesBundle:RegistrePalettisation')->findBy(array("codeLot"=>$suivie->getIdentifiant()));
            $resultat=$em->getRepository('NosFormulairesBundle:RegistreReception')->findBy(array("idCampagne"=>$id));
            if(empty($resultat)){
                $choix=false;
            }
            else
                $choix=true;
        }

        return $this->render('suivie/index.html.twig', array(
            'suivies' => $suivies,'listes' => $listes,'choix' => $choix,
        ));
    }

   
}
