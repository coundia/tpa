<?php

namespace NosFormulairesBundle\Controller;

use NosFormulairesBundle\Entity\Campagne;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Campagne controller.
 *
 * @Route("campagne")
 */
class CampagneController extends Controller
{
    /**
     * Lists all campagne entities.
     *
     * @Route("/", name="campagne_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $campagnes = $em->getRepository('NosFormulairesBundle:Campagne')->findAll();

        $listes=array();
        $listes1=array();
        $listes2=array();
        foreach($campagnes as $campagne){
         //   $listes[$suivie->getIdentifiant()]=$em->getRepository('NosFormulairesBundle:RegistrePalettisation')->findBy(array("codeLot"=>$suivie->getIdentifiant()));
            $resultat=$em->getRepository('NosFormulairesBundle:RegistreReception')->findBy(array("idCampagne"=>$campagne));
            if(empty($resultat)){
                $listes[$campagne->getIdentifiant()]= false;
            }
            else
                $listes[$campagne->getIdentifiant()]=true;
            $resultat=$em->getRepository('NosFormulairesBundle:Lot')->findBy(array("idCampagne"=>$campagne));
            if(empty($resultat))
                $listes1[$campagne->getIdentifiant()]= false;
            else
                $listes1[$campagne->getIdentifiant()]=true;
            $resultat=$em->getRepository('NosFormulairesBundle:RegistrePalettisation')->findBy(array("idCampagne"=>$campagne));
                if(empty($resultat))
                    $listes2[$campagne->getIdentifiant()]= false;
                else
                    $listes2[$campagne->getIdentifiant()]=true;
        }

        return $this->render('campagne/index.html.twig', array(
            'campagnes' => $campagnes,  'listes' => $listes,
            'listes1' => $listes1,'listes2' => $listes2,
        ));
    }

    /**
     * Creates a new campagne entity.
     *
     * @Route("/new", name="campagne_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $campagne = new Campagne();
        $form = $this->createForm('NosFormulairesBundle\Form\CampagneType', $campagne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($campagne);
            $em->flush();

            return $this->redirectToRoute('campagne_show', array('identifiant' => $campagne->getIdentifiant()));
        }

        return $this->render('campagne/new.html.twig', array(
            'campagne' => $campagne,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a campagne entity.
     *
     * @Route("/{identifiant}", name="campagne_show")
     * @Method("GET")
     */
    public function showAction(Campagne $campagne)
    {
        $deleteForm = $this->createDeleteForm($campagne);

        $em = $this->getDoctrine()->getManager();

        $receptions = $em->getRepository('NosFormulairesBundle:RegistreReception')->findBy(array('idCampagne'=>$campagne));
        $lots = $em->getRepository('NosFormulairesBundle:Lot')->findBy(array('idCampagne'=>$campagne));
        $palettisations = $em->getRepository('NosFormulairesBundle:RegistrePalettisation')->findBy(array('idCampagne'=>$campagne));
        return $this->render('campagne/show.html.twig', array(
            'campagne' => $campagne,
            'receptions' => $receptions,
            'lots' => $lots,
            'palettisations' => $palettisations,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing campagne entity.
     *
     * @Route("/{identifiant}/edit", name="campagne_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Campagne $campagne)
    {
        $deleteForm = $this->createDeleteForm($campagne);
        $editForm = $this->createForm('NosFormulairesBundle\Form\CampagneType', $campagne);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('campagne_edit', array('identifiant' => $campagne->getIdentifiant()));
        }

        return $this->render('campagne/edit.html.twig', array(
            'campagne' => $campagne,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a campagne entity.
     *
     * @Route("/{identifiant}", name="campagne_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Campagne $campagne)
    {
        $form = $this->createDeleteForm($campagne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($campagne);
            $em->flush();
        }

        return $this->redirectToRoute('campagne_index');
    }

    /**
     * Creates a form to delete a campagne entity.
     *
     * @param Campagne $campagne The campagne entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Campagne $campagne)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('campagne_delete', array('identifiant' => $campagne->getIdentifiant())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
