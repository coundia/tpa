<?php

namespace TpaBundle\Controller;

use TpaBundle\Entity\CalendrierProduction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Calendrierproduction controller.
 *
 * @Route("calendrierproduction")
 */
class CalendrierProductionController extends Controller
{
    /**
     * Lists all calendrierProduction entities.
     *
     * @Route("/", name="calendrierproduction_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $calendrierProductions = $em->getRepository('TpaBundle:CalendrierProduction')->findAll();

        return $this->render('calendrierproduction/index.html.twig', array(
            'calendrierProductions' => $calendrierProductions,
        ));
    }

    /**
     * Creates a new calendrierProduction entity.
     *
     * @Route("/new", name="calendrierproduction_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $calendrierProduction = new Calendrierproduction();
        $form = $this->createForm('TpaBundle\Form\CalendrierProductionType', $calendrierProduction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($calendrierProduction);
            $em->flush();

            return $this->redirectToRoute('calendrierproduction_show', array('id' => $calendrierProduction->getId()));
        }

        return $this->render('calendrierproduction/new.html.twig', array(
            'calendrierProduction' => $calendrierProduction,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a calendrierProduction entity.
     *
     * @Route("/{id}", name="calendrierproduction_show")
     * @Method("GET")
     */
    public function showAction(CalendrierProduction $calendrierProduction)
    {
        $deleteForm = $this->createDeleteForm($calendrierProduction);

        return $this->render('calendrierproduction/show.html.twig', array(
            'calendrierProduction' => $calendrierProduction,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing calendrierProduction entity.
     *
     * @Route("/{id}/edit", name="calendrierproduction_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CalendrierProduction $calendrierProduction)
    {
        $deleteForm = $this->createDeleteForm($calendrierProduction);
        $editForm = $this->createForm('TpaBundle\Form\CalendrierProductionType', $calendrierProduction);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('calendrierproduction_edit', array('id' => $calendrierProduction->getId()));
        }

        return $this->render('calendrierproduction/edit.html.twig', array(
            'calendrierProduction' => $calendrierProduction,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a calendrierProduction entity.
     *
     * @Route("/{id}", name="calendrierproduction_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CalendrierProduction $calendrierProduction)
    {
        $form = $this->createDeleteForm($calendrierProduction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($calendrierProduction);
            $em->flush();
        }

        return $this->redirectToRoute('calendrierproduction_index');
    }

    /**
     * Creates a form to delete a calendrierProduction entity.
     *
     * @param CalendrierProduction $calendrierProduction The calendrierProduction entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CalendrierProduction $calendrierProduction)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('calendrierproduction_delete', array('id' => $calendrierProduction->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
