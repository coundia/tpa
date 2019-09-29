<?php

namespace TpaBundle\Controller;

use TpaBundle\Entity\FicheExportation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\DateType; 
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;

/**
 * Ficheexportation controller.
 *
 * @Route("ficheexportation")
 */
class FicheExportationController extends Controller
{
    /**
     * Lists all ficheExportation entities.
     *
     * @Route("/", name="ficheexportation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ficheExportations = $em->getRepository('TpaBundle:FicheExportation')->findBy(array('statut'=>0));

        return $this->render('ficheexportation/index.html.twig', array(
            'ficheExportations' => $ficheExportations,
        ));
    }

    /**
     * Lists all ficheExportation entities.
     *
     * @Route("/{numero}/listerejet", name="liste_rejet")
     * @Method("GET")
     */
    public function rejetAction($numero)
    {
        $em = $this->getDoctrine()->getManager();

        $ficheExportations = $em->getRepository('TpaBundle:FicheExportation')->findBy(array('statut'=>$numero));

        return $this->render('ficheexportation/rejet.html.twig', array(
            'ficheExportations' => $ficheExportations, 'statut'=>$numero
        ));
    }

    /**
     * Creates a new ficheExportation entity.
     *
     * @Route("/new", name="ficheexportation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ficheExportation = new Ficheexportation();
        $form = $this->createForm('TpaBundle\Form\FicheExportationType', $ficheExportation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ficheExportation->setDateExportation(new \DateTime());
            $ficheExportation->setIdProducteur($ficheExportation->getIdPalettisation()->getIdCampagne()->getZoneProduction()->getProducteur());
            $ficheExportation->setIdCampage($ficheExportation->getIdPalettisation()->getIdCampagne());
            $em = $this->getDoctrine()->getManager();
            $em->persist($ficheExportation);
            $em->flush();
            $ficheExportation->getIdPalettisation()->setStatut(1);
            $em->flush();

            return $this->redirectToRoute('ficheexportation_index');
        }

        return $this->render('ficheexportation/new.html.twig', array(
            'ficheExportation' => $ficheExportation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new ficheExportation entity.
     *
     * @Route("/{id}/accuserreception", name="accuserreception_new")
     * @Method({"GET", "POST"})
     */
    public function accuserreception(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $ficheExportation = $em->getRepository('TpaBundle:FicheExportation')->find($id);
        $form= $this->createFormBuilder($ficheExportation)
            ->add("nomRecepteur", TextType::class,array("label"=>"Nom récepteur"))
            ->add("statut", ChoiceType::class,array(
                'choices'=>array(
                    'Selectionner'=>0,
                    'Confirmer'=>1,
                    'Rejeter' => 2,
                ),
                "label"=>"Actions"))
            ->add("commentaire", TextType::class,array("label"=>"Commentaires"))
            ->add("dateReception", DateType::class,array("label"=>"Date Réception",'widget' => 'single_text',))
            ->add('photo', FileType::class, array('label' => 'Piéce jointe'))
            ->add("modifier", SubmitType::class,array("label"=>"Modifier"))
            ->getForm();
        $form->handleRequest($request);
       // $donnee=$form->getData();$staut = $form['statut']->getData();
//var_dump($staut);exit();
        if ($form->isSubmitted() && $form->isValid()) {
            $staut = $form['statut']->getData();
            if ($staut==2){

                return $this->redirectToRoute('essai');
            }
            //upload photo
            $file = $ficheExportation->getPhoto();
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('brochures_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                
            }
            $ficheExportation->setPhoto($fileName);

           // $ficheExportation->setStatut(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($ficheExportation);

            $em->flush();
            return $this->redirectToRoute('ficheexportation_index');
        }

        return $this->render('ficheexportation/accuserreception.html.twig', array(
            'ficheExportation' => $ficheExportation,
            'form' => $form ->createView(),

        ));
    }

    /**
     * Finds and displays a ficheExportation entity.
     *
     * @Route("/{id}", name="ficheexportation_show")
     * @Method("GET")
     */
    public function showAction(FicheExportation $ficheExportation)
    {
        $deleteForm = $this->createDeleteForm($ficheExportation);
        $speculation=$this->getDoctrine()->getManager()->getRepository('TpaBundle:SiteConditionnement')->findOneBy(array('producteur'=>$ficheExportation->getIdProducteur() ));
        return $this->render('ficheexportation/show.html.twig', array(
            'ficheExportation' => $ficheExportation,
            'delete_form' => $deleteForm->createView(),
            'speculation'=>$speculation->getSpeculation(),
        ));
    }

    /**
     * Displays a form to edit an existing ficheExportation entity.
     *
     * @Route("/{id}/edit", name="ficheexportation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FicheExportation $ficheExportation)
    {
        $deleteForm = $this->createDeleteForm($ficheExportation);
        $editForm = $this->createForm('TpaBundle\Form\FicheExportationType', $ficheExportation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ficheexportation_edit', array('id' => $ficheExportation->getId()));
        }

        return $this->render('ficheexportation/edit.html.twig', array(
            'ficheExportation' => $ficheExportation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ficheExportation entity.
     *
     * @Route("/{id}", name="ficheexportation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FicheExportation $ficheExportation)
    {
        $form = $this->createDeleteForm($ficheExportation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ficheExportation);
            $em->flush();
        }

        return $this->redirectToRoute('ficheexportation_index');
    }

    /**
     * Creates a form to delete a ficheExportation entity.
     *
     * @param FicheExportation $ficheExportation The ficheExportation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FicheExportation $ficheExportation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ficheexportation_delete', array('id' => $ficheExportation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}
