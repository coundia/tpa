<?php

namespace TpaBundle\Controller;

use TpaBundle\Entity\SiteConditionnement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Siteconditionnement controller.
 *
 * @Route("siteconditionnement")
 */
class SiteConditionnementController extends Controller
{
    /**
     * Lists all siteConditionnement entities.
     *
     * @Route("/", name="siteconditionnement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $siteConditionnements = $em->getRepository('TpaBundle:SiteConditionnement')->findAll();

        return $this->render('siteconditionnement/index.html.twig', array(
            'siteConditionnements' => $siteConditionnements,
        ));
    }

    /**
     * Creates a new siteConditionnement entity.
     *
     * @Route("/new", name="siteconditionnement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $siteConditionnement = new Siteconditionnement();
        $form = $this->createForm('TpaBundle\Form\SiteConditionnementType', $siteConditionnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($siteConditionnement);
            $em->flush();

            return $this->redirectToRoute('siteconditionnement_show', array('id' => $siteConditionnement->getId()));
        }

        return $this->render('siteconditionnement/new.html.twig', array(
            'siteConditionnement' => $siteConditionnement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a siteConditionnement entity.
     *
     * @Route("/{id}", name="siteconditionnement_show")
     * @Method("GET")
     */
    public function showAction(SiteConditionnement $siteConditionnement)
    {
        $deleteForm = $this->createDeleteForm($siteConditionnement);

        return $this->render('siteconditionnement/show.html.twig', array(
            'siteConditionnement' => $siteConditionnement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing siteConditionnement entity.
     *
     * @Route("/{id}/edit", name="siteconditionnement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SiteConditionnement $siteConditionnement)
    {
        $deleteForm = $this->createDeleteForm($siteConditionnement);
        $editForm = $this->createForm('TpaBundle\Form\SiteConditionnementType', $siteConditionnement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('siteconditionnement_edit', array('id' => $siteConditionnement->getId()));
        }

        return $this->render('siteconditionnement/edit.html.twig', array(
            'siteConditionnement' => $siteConditionnement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a siteConditionnement entity.
     *
     * @Route("/{id}", name="siteconditionnement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SiteConditionnement $siteConditionnement)
    {
        $form = $this->createDeleteForm($siteConditionnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($siteConditionnement);
            $em->flush();
        }

        return $this->redirectToRoute('siteconditionnement_index');
    }

    /**
     * Creates a form to delete a siteConditionnement entity.
     *
     * @param SiteConditionnement $siteConditionnement The siteConditionnement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SiteConditionnement $siteConditionnement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('siteconditionnement_delete', array('id' => $siteConditionnement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
