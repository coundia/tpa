<?php

namespace TpaBundle\Controller;

use TpaBundle\Entity\GestionQualite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Gestionqualite controller.
 *
 * @Route("gestionqualite")
 */
class GestionQualiteController extends Controller
{
    /**
     * Lists all gestionQualite entities.
     *
     * @Route("/", name="gestionqualite_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gestionQualites = $em->getRepository('TpaBundle:GestionQualite')->findAll();

        return $this->render('gestionqualite/index.html.twig', array(
            'gestionQualites' => $gestionQualites,
        ));
    }

    /**
     * Creates a new gestionQualite entity.
     *
     * @Route("/new", name="gestionqualite_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $gestionQualite = new Gestionqualite();
        $form = $this->createForm('TpaBundle\Form\GestionQualiteType', $gestionQualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gestionQualite);
            $em->flush();

            return $this->redirectToRoute('gestionqualite_show', array('id' => $gestionQualite->getId()));
        }

        return $this->render('gestionqualite/new.html.twig', array(
            'gestionQualite' => $gestionQualite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a gestionQualite entity.
     *
     * @Route("/{id}", name="gestionqualite_show")
     * @Method("GET")
     */
    public function showAction(GestionQualite $gestionQualite)
    {
        $deleteForm = $this->createDeleteForm($gestionQualite);

        return $this->render('gestionqualite/show.html.twig', array(
            'gestionQualite' => $gestionQualite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gestionQualite entity.
     *
     * @Route("/{id}/edit", name="gestionqualite_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, GestionQualite $gestionQualite)
    {
        $deleteForm = $this->createDeleteForm($gestionQualite);
        $editForm = $this->createForm('TpaBundle\Form\GestionQualiteType', $gestionQualite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('gestionqualite_edit', array('id' => $gestionQualite->getId()));
        }

        return $this->render('gestionqualite/edit.html.twig', array(
            'gestionQualite' => $gestionQualite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a gestionQualite entity.
     *
     * @Route("/{id}", name="gestionqualite_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, GestionQualite $gestionQualite)
    {
        $form = $this->createDeleteForm($gestionQualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($gestionQualite);
            $em->flush();
        }

        return $this->redirectToRoute('gestionqualite_index');
    }

    /**
     * Creates a form to delete a gestionQualite entity.
     *
     * @param GestionQualite $gestionQualite The gestionQualite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(GestionQualite $gestionQualite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gestionqualite_delete', array('id' => $gestionQualite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
