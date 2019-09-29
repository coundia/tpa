<?php

namespace TpaBundle\Controller;

use TpaBundle\Entity\Demande;
use TpaBundle\Entity\Certificat;
use TpaBundle\Entity\DemandeInspection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TpaBundle\Entity\FosUser;
use UserBundle\Entity\User;
use TpaBundle\Entity\Exportation;


/**
 * Inspection controller.
 *
 * @Route("inspection")
 */
class InspectionController extends Controller
{


//PARTIE INSPECTION

    /**
     * demande inspection
     *
     * @Route("/inspection", name="demande_inspection")
     * @Method({"GET", "POST"})
     */
    public function InspectionAction(Request $request)
    {
        $inspection = new DemandeInspection();
        $demande=new Demande();
        $form = $this->createForm('TpaBundle\Form\DemandeInspectionType',$inspection);
        $form->handleRequest($request);
//var_dump($_POST['PrenomNOm']);exit();
        // if ($form->isSubmitted() && $form->isValid()) {
   
        $inspection->setNomPrenomDemandeur($_POST['PrenomNOm']);
        $inspection->setNomEntreprise($_POST['nomEntreprise']);

        $inspection->setNumTelDemandeur($_POST['NumTelephone']);

        $inspection->setDateAppel($_POST['DateAppel']);
        $inspection->setZoneProvenance($_POST['ZoneProvenance']);

            $inspection->setProprietaire($_POST['ProprieteVerger_']);
            $inspection->setProprietaire1($_POST['ProprieteVerger_1']);
            $inspection->setProprietaire2($_POST['ProprieteVerger_2']);
            $em = $this->getDoctrine()->getManager();



        $inspection->setLieuCond($_POST['LieuConditionnement']);
        $inspection->setDateCond($_POST['DateConditionnement']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($inspection);
        $em->flush();
        //}
        return $this->render('demande/inspection.html.twig');
    }







    /**
     * Finds and displays a demande inspection entity.
     *
     * @Route("/inspection/{id}", name="inspection_show")
     * @Method("GET")
     */
    public function showInspectionAction(DemandeInspection $demandeinspection)
    {
        $deleteForm = $this->createDeleteForm($demandeinspection);
        $em = $this->getDoctrine()->getManager();
        $demandeinspection = $em->getRepository('TpaBundle:DemandeInspection')->findBy(array('id'=>$demandeinspection->getId()));

        //var_dump($demande);exit();
        return $this->render('inspection/show.html.twig', array(
            'demandeinspection' => $demandeinspection,
        ));
    }







 /**
     * Finds and displays a demande inspection entity.
     *
     * @Route("/rapport-inspection/{id}", name="rapport_inspection_show")
     * @Method("GET")
     */
    public function showRapportInspectionAction(Exportation $exportation)
    {
         $id=$exportation->getId();
        $em = $this->getDoctrine()->getManager();
        $exportation = $em->getRepository('TpaBundle:Exportation')->findBy(array('id'=>$exportation->getId()));

        //var_dump($demande);exit();
        return $this->render('inspection/rapportShow.html.twig', array(
            'exportation' => $exportation,
            'id'=>$id
        ));
    }











    /**
     * Lists all demande inspection entities.
     *
     * @Route("/liste-inspection", name="inspection_index")
     * @Method("GET")
     */
    public function indexInspectionAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listes = $em->getRepository('TpaBundle:DemandeInspection')->findBy(array('statuts'=>0));

        return $this->render('inspection/index.html.twig', array(
            'listes' => $listes,
        ));
    }









 /**
     * Lists all demande inspection entities.
     *
     * @Route("/liste-inspection-validee", name="inspection_validee")
     * @Method("GET")
     */
    public function inspectionValideAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listes = $em->getRepository('TpaBundle:Exportation')->findBy(array('valide'=>1));

        return $this->render('inspection/rapportInspectionValidee.html.twig', array(
            'listes' => $listes,
        ));
    }


 /**
     * Lists all demande inspection entities.
     *
     * @Route("/liste-inspection-rejetee", name="inspection_rejetee")
     * @Method("GET")
     */
    public function inspectionRejeteeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listes = $em->getRepository('TpaBundle:Exportation')->findBy(array('valide'=>2));

        return $this->render('inspection/rapportInspectionRejetee.html.twig', array(
            'listes' => $listes,
        ));
    }




  /**
     * Lists all demande inspection entities.
     *
     * @Route("/liste-rapport-inspection", name="rapport_inspection_index")
     * @Method("GET")
     */
    public function indexRapportInspectionAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listes = $em->getRepository('TpaBundle:Exportation')->findBy(array('valide'=>0));

        return $this->render('inspection/rapportIndex.html.twig', array(
            'listes' => $listes,
        ));
    }
 /**
     * @Route("/valider/{id}", name="valider_inspection")
     */
 public function validerInspectionAction(Request $request, Exportation $exportation,$id)
    {
       
          $em = $this->getDoctrine()->getManager();
          
                  $exportation=$em->getRepository(Exportation::class)->find($id);
                    $exportation->setValide(1);
          
          
       /* $exportation = $em->getRepository('TpaBundle:Exportation')->findBy(array('id'=>$exportation->getId()));
            $exportation->setValide(1);*/
        //var_dump($user); exit();
            $em->flush();
        return $this->redirectToRoute('rapport_inspection_index');
    }





/**
     * @Route("/rejeter/{id}", name="rejeter_inspection")
     */
 public function rejeterInspectionAction(Request $request, Exportation $exportation,$id)
    {
       
          $em = $this->getDoctrine()->getManager();
          
                  $exportation=$em->getRepository(Exportation::class)->find($id);
                    $exportation->setValide(2);
          
          
       /* $exportation = $em->getRepository('TpaBundle:Exportation')->findBy(array('id'=>$exportation->getId()));
            $exportation->setValide(1);*/
        //var_dump($user); exit();
            $em->flush();
        return $this->redirectToRoute('rapport_inspection_index');
    }





    /**
     * demande inspection
     *
     * @Route("/fiche-inspection", name="fiche_inspection")
     * @Method({"GET", "POST"})
     */
    public function FicheInspectionAction()
    {


        //}
        return $this->render('demande/inspection.html.twig');
    }

















    /**
     * Deletes a demande inspection entity.
     *
     * @Route("/{id}", name="inspection_delete")
     * @Method("DELETE")
     */
    public function deleteInspectionAction(Request $request, DemandeInspection $demandeInspection)
    {
        $form = $this->createDeleteForm($demandeInspection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($demandeInspection);
            $em->flush();
        }

        return $this->redirectToRoute('inspection_index');
    }


    /**
     * Creates a form to delete a demande inspection entity.
     *
     * @param DemandeInspection $demandeInspection The demande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DemandeInspection $demandeInspection)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inspection_delete', array('id' => $demandeInspection->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
