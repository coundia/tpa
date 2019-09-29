<?php

namespace NosFormulairesBundle\Controller;

use NosFormulairesBundle\Entity\RegistreReception;
use NosFormulairesBundle\Entity\MyClasse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Registrereception controller.
 *
 * @Route("registrereception")
 */
class RegistreReceptionController extends Controller
{
    /**
     * Lists all registreReception entities.
     *
     * @Route("/", name="registrereception_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $registreReceptions = $em->getRepository('NosFormulairesBundle:RegistreReception')->findAll();

        return $this->render('registrereception/index.html.twig', array(
            'registreReceptions' => $registreReceptions,
        ));
    }

    /**
     * Creates a new registreReception entity.
     *
     * @Route("/{id}/new", name="registrereception_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$id=0)
    {
        $myclasse=new MyClasse();
        $em = $this->getDoctrine()->getManager();
        $total=9;
        for ($i=0; $i<$total;$i++){
            $myclasse->getRegistrereception()->add(new Registrereception());
        }
        if($id!=0){
            $myclasse->setCampagne($em->getRepository('NosFormulairesBundle:Campagne')->find($id));
        }
        $form1 = $this->createForm('NosFormulairesBundle\Form\MyClasseType', $myclasse);
        $registreReception = new Registrereception();
    //    $form = $this->createForm('NosFormulairesBundle\Form\RegistreReceptionType', $registreReception);
        $form1->handleRequest($request);

        if ($form1->isSubmitted() && $form1->isValid()) {
            $em = $this->getDoctrine()->getManager();
            foreach($myclasse->getRegistrereception() as $k){
                if(strcmp($k->getParcelleOrigine(), null) !== 0){
                    $k->setIdCampagne($myclasse->getCampagne());
                    $em->persist($k);
                    $em->flush();
                }
                else
                    break;
               
            }
            return $this->redirectToRoute('campagne_index');
        }

        return $this->render('registrereception/new.html.twig', array(
            'registreReception' => $registreReception,
            'form' => $form1->createView(),
        ));
    }

    /**
     * Finds and displays a registreReception entity.
     *
     * @Route("/{ordreArrive}", name="registrereception_show")
     * @Method("GET")
     */
    public function showAction(RegistreReception $registreReception)
    {
        $deleteForm = $this->createDeleteForm($registreReception);

        return $this->render('registrereception/show.html.twig', array(
            'registreReception' => $registreReception,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing registreReception entity.
     *
     * @Route("/{ordreArrive}/edit", name="registrereception_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, RegistreReception $registreReception)
    {
        $deleteForm = $this->createDeleteForm($registreReception);
        $editForm = $this->createForm('NosFormulairesBundle\Form\RegistreReceptionType', $registreReception);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('registrereception_edit', array('ordreArrive' => $registreReception->getOrdrearrive()));
        }

        return $this->render('registrereception/edit.html.twig', array(
            'registreReception' => $registreReception,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a registreReception entity.
     *
     * @Route("/{ordreArrive}", name="registrereception_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, RegistreReception $registreReception)
    {
        $form = $this->createDeleteForm($registreReception);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($registreReception);
            $em->flush();
        }

        return $this->redirectToRoute('registrereception_index');
    }

    /**
     * Creates a form to delete a registreReception entity.
     *
     * @param RegistreReception $registreReception The registreReception entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RegistreReception $registreReception)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('registrereception_delete', array('ordreArrive' => $registreReception->getOrdrearrive())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
