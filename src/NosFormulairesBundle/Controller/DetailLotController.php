<?php

namespace NosFormulairesBundle\Controller;

use NosFormulairesBundle\Entity\DetailLot;
use NosFormulairesBundle\Entity\Lot;
use NosFormulairesBundle\Entity\FicheConditionnement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Detaillot controller.
 *
 * @Route("detaillot")
 */
class DetailLotController extends Controller
{
    /**
     * Lists all detailLot entities.
     *
     * @Route("/", name="detaillot_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $detailLots = $em->getRepository('NosFormulairesBundle:DetailLot')->findAll();

        return $this->render('detaillot/index.html.twig', array(
            'detailLots' => $detailLots,
        ));
    }

    /**
     * Creates a new detailLot entity.
     *
     * @Route("/{id}/new", name="detaillot_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$id=0)
    {
        $em = $this->getDoctrine()->getManager();
        $fiche = new FicheConditionnement();
        $total=7;
        
       // $fiche->getLot()->add(new Lot());
        for ($i=0; $i<$total;$i++){
            $fiche->getDetailslot()->add(new DetailLot());
        }
        if($id!=0){
            $campagne=$em->getRepository('NosFormulairesBundle:Campagne')->find($id);
            $fiche->setCampagne($campagne);
            $lot=new Lot();
            $lot->setNLotRecolte($campagne->getNOrdre());
            $lot->setNombreCageots($campagne->getNombreCageots());
            $lot->setPoidsBrut($campagne->getPoidsBrut());
            $lot->setPoidsNet($campagne->getPoidsNet());
            $fiche->getLot()->add($lot);
        }else
             $fiche->getLot()->add(new Lot());
        $form = $this->createForm('NosFormulairesBundle\Form\FicheConditionnementType', $fiche);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $lot=new Lot();
            
            foreach($fiche->getlot() as $k){
                $lot=$k;
                $k->setIdCampagne($fiche->getCampagne());
                $em->persist($k);
                $em->flush();
            }
          //  var_dump('Bien');exit();
        //    var_dump($fiche->getLot().get(0));exit();
           
            foreach($fiche->getDetailslot() as $k){
                if(strcmp($k->getCalibre(), null) !== 0){
                    $k->setIdCampagne($fiche->getCampagne());
                    $k->setIdLot($lot);
                    $em->persist($k);
                    $em->flush();
                }
                else
                    break;
               
            }
           
            return $this->redirectToRoute('campagne_index');
        }

        return $this->render('detaillot/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a detailLot entity.
     *
     * @Route("/{identifiant}", name="detaillot_show")
     * @Method("GET")
     */
    public function showAction(DetailLot $detailLot)
    {
        $deleteForm = $this->createDeleteForm($detailLot);

        return $this->render('detaillot/show.html.twig', array(
            'detailLot' => $detailLot,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing detailLot entity.
     *
     * @Route("/{identifiant}/edit", name="detaillot_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DetailLot $detailLot)
    {
        $deleteForm = $this->createDeleteForm($detailLot);
        $editForm = $this->createForm('NosFormulairesBundle\Form\DetailLotType', $detailLot);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('detaillot_edit', array('identifiant' => $detailLot->getIdentifiant()));
        }

        return $this->render('detaillot/edit.html.twig', array(
            'detailLot' => $detailLot,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a detailLot entity.
     *
     * @Route("/{identifiant}", name="detaillot_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DetailLot $detailLot)
    {
        $form = $this->createDeleteForm($detailLot);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($detailLot);
            $em->flush();
        }

        return $this->redirectToRoute('detaillot_index');
    }

    /**
     * Creates a form to delete a detailLot entity.
     *
     * @param DetailLot $detailLot The detailLot entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DetailLot $detailLot)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('detaillot_delete', array('identifiant' => $detailLot->getIdentifiant())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
