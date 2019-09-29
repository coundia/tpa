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
 * @Route("registrepalettisation")
 */
class RegistrePalettisationController extends Controller
{
    /**
     * Lists all registrePalettisation entities.
     *
     * @Route("/", name="registrepalettisation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $registrePalettisations = $em->getRepository('NosFormulairesBundle:RegistrePalettisation')->findAll();

        return $this->render('registrepalettisation/index.html.twig', array(
            'registrePalettisations' => $registrePalettisations,
        ));
    }

    /**
     * Creates a new registrePalettisation entity.
     *
     * @Route("/{id}/new", name="registrepalettisation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$id=0)
    {
        $em = $this->getDoctrine()->getManager();
        $palettisation=new Palettisation();
       
        $total=9;
        
        for ($i=0; $i<$total;$i++){
            $registre=new RegistrePalettisation();
            $registre->setCodeLot($this->getDoctrine()->getManager()->getRepository('NosFormulairesBundle:Lot')->find(1));
            $palettisation->getRegistrepalettisation()->add($registre);
        }
        if($id!=0){
            $palettisation->setCampagne($em->getRepository('NosFormulairesBundle:Campagne')->find($id));
        }
       // var_dump("Bien"); exit();
        $registrePalettisation = new Registrepalettisation();
        $form = $this->createForm('NosFormulairesBundle\Form\PalettisationType', $palettisation);
     //   $form = $this->createForm('NosFormulairesBundle\Form\RegistrePalettisationType', $registrePalettisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          //  var_dump("Bien"); exit();
            $em = $this->getDoctrine()->getManager();
            foreach($palettisation->getRegistrepalettisation() as $k){
                if(strcmp($k->getNPalette(), null) !== 0 ){
                    if( strcmp($k->getParckingListe(), null) !== 0){
                        $k->setIdCampagne($palettisation->getCampagne());
                        $em->persist($k);
                        $em->flush();
                    }
                    else
                        return $this->redirectToRoute('registrepalettisation_new',array('id'=>$id));
                }
                else
                    break;
            }
            return $this->redirectToRoute('campagne_index');
        }

        return $this->render('registrepalettisation/new.html.twig', array(
            'registrePalettisation' => $registrePalettisation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a registrePalettisation entity.
     *
     * @Route("/{id}", name="registrepalettisation_show")
     * @Method("GET")
     */
    public function showAction(RegistrePalettisation $registrePalettisation)
    {
        $deleteForm = $this->createDeleteForm($registrePalettisation);

        return $this->render('registrepalettisation/show.html.twig', array(
            'registrePalettisation' => $registrePalettisation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing registrePalettisation entity.
     *
     * @Route("/{id}/edit", name="registrepalettisation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, RegistrePalettisation $registrePalettisation)
    {
        $deleteForm = $this->createDeleteForm($registrePalettisation);
        $editForm = $this->createForm('NosFormulairesBundle\Form\RegistrePalettisationType', $registrePalettisation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('registrepalettisation_edit', array('id' => $registrePalettisation->getId()));
        }

        return $this->render('registrepalettisation/edit.html.twig', array(
            'registrePalettisation' => $registrePalettisation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a registrePalettisation entity.
     *
     * @Route("/{id}", name="registrepalettisation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, RegistrePalettisation $registrePalettisation)
    {
        $form = $this->createDeleteForm($registrePalettisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($registrePalettisation);
            $em->flush();
        }

        return $this->redirectToRoute('registrepalettisation_index');
    }

    /**
     * Creates a form to delete a registrePalettisation entity.
     *
     * @param RegistrePalettisation $registrePalettisation The registrePalettisation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RegistrePalettisation $registrePalettisation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('registrepalettisation_delete', array('id' => $registrePalettisation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
