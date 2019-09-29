<?php

namespace TpaBundle\Controller;
use Symfony\Component\Validator\Constraints\DateTime;
use TpaBundle\Entity\CalendrierProduction;
use TpaBundle\Entity\Certificat;
use TpaBundle\Entity\Exportation;
use TpaBundle\Entity\FicheOperateur;
use TpaBundle\Entity\gestionQualite;
use TpaBundle\Entity\InspectionMangue;
use TpaBundle\Entity\Producteur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TpaBundle\Entity\SiteConditionnement;
use TpaBundle\Entity\SiteProduction;
use Symfony\Component\Intl\DateFormatter\DateFormat;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Dpv controller.
 *
 * @Route("dpv")
 */
class DpvController extends Controller
{
    /**
     *
     * @Route("/ficheOperateur", name="fiche_operateur")
     * @Method("GET")
     */
    public function ficheOperateurAction(Request $request)
    {
        return $this->render('dpv/ficheOperateur.html.twig'
        );
    }
    /**
     *
     * @Route("/ficheExportationMangue", name="inspection_exportation_mangue")
     * @Method({"GET", "POST"})
     */
    public function enregistrerficheExportationMangueAction(Request $request)
    {
        $ficheExportation=new Exportation();
        $ficheExportation->setDenomEntreprise($request->request->get('denomEntreprise'));
        $ficheExportation->setPrenoNomInspecteur($request->request->get('prenomNomInspecteur'));
        $ficheExportation->setDateInspection($request->request->get('dateInspection'));
        $ficheExportation->setLieuInspection($request->request->get('lieuInspection'));
        $ficheExportation->setPersonneRencontre($request->request->get('personneRencontre'));
        $ficheExportation->setFonctionpersonneRencontre($request->request->get('fonctionPersonneRencotre'));
        $ficheExportation->setVariete($request->request->get('variete'));
        $ficheExportation->setCategorie($request->request->get('categorie'));
        $ficheExportation->setQteDeclare($request->request->get('qteDeclare'));
        $ficheExportation->setNbColis($request->request->get('nbColis'));
        $ficheExportation->setTypeTransport($request->request->get('typeTransport'));
        $ficheExportation->setTailleEchantillon($request->request->get('tailleEchantillon'));
        $ficheExportation->setNbColiControle($request->request->get('nbColisControle'));
        $ficheExportation->setNbMangueControle($request->request->get('nbMangueControle'));
        $ficheExportation->setRegistreReceptionMangue($request->request->get('registreReceptionMangue'));
        $ficheExportation->setDeclarationSupp($request->request->get('declarationSupplementaire'));
        $ficheExportation->setMarqueColis($request->request->get('marqueColis'));
        $ficheExportation->setConformiteColis($request->request->get('conformiteMarqueColis'));
        $ficheExportation->setNumeroLot($request->request->get('numeroLot'));
        $ficheExportation->setConformiteLot($request->request->get('conformiteNumLot'));
        $ficheExportation->setNumeropalette($request->request->get('numPalette'));
        $ficheExportation->setConformitePalette($request->request->get('conformiteNumPalette'));
        $ficheExportation->setMaturite($request->request->get('maturite'));
        $ficheExportation->setPiqureMoucheFruit($request->request->get('piqureMoucheFruit'));
        $ficheExportation->setPourriturePendonculaire($request->request->get('pourriturePedonculaire'));
        $ficheExportation->setCharanconNoyaux($request->request->get('charanconNoyaux'));
        $ficheExportation->setTraceArthrocnose($request->request->get('traceArthrocnose'));
        $ficheExportation->setMarquageNIMP15($request->request->get('marquageNIMP15'));
        $ficheExportation->setEtatSanitaireGeneral($request->request->get('etatSanitaireGeneral'));
                $ficheExportation->setValide(0);
        $ficheExportation->setCommentaire($request->request->get('commentaire'));
        //var_dump($request->request->get('maturite'));die();
        $em = $this->getDoctrine()->getManager();
        $em->persist($ficheExportation);
        $em->flush();
        return $this->render('dpv/ficheExportateur.html.twig', array(
            'ficheExportateur' => $ficheExportation,

        ));
    }

    /**
     *
     * @Route("/ficheInspectionOperateur", name="fiche_inspection_operateur")
     * @Method({"GET", "POST"})
     */
    public function enregistrerficheOperateurAction(Request $request)
    {
        $ficheOP=new FicheOperateur();
var_dump($request->get('produit_1'));exit();
            //$test= array($request->get('type_1'));
            $ficheOP->setTesco($request->get('type_1'));
            $ficheOP->setBio($request->get('type_2'));
            $ficheOP->setGlobalGap($request->get('type_3'));
            $ficheOP->setNoteCertificat($request->get('note_cert'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($ficheOP);
            $em->flush();

/*echo "<script>;
//alert('test');
$('#note_1').keyup(function () {
    alert(document.getElementById('note_1').textContent);



}).change(function () {
    alert(document.getElementById('note_1').textContent);

});
</script>";*/

        //var_dump($test);die();
       //var_dump($request->get('notetd_6'));exit();
      // var_dump($_POST['produit_1']);exit();
        for ($i=1;$i<=4;$i++){
            $ficheOP->setTypeCertificat($request->get('produit_'.$i));

        }

        //for ($i=1;$i<=11;$i++){
            $tableTravail=$request->request->get('tableTravailOui');
            $tableTravailN=$request->request->get('tableTravailNon');
            if ($tableTravail=="on"){
                $ficheOP->setTableTravail('OUI');
            }
          else if($tableTravailN=="on"){
                $ficheOP->setTableTravail('NON');
            }

            $chambre=$request->request->get('chambreOui');
            $chambreN=$request->request->get('chambreNon');
            if ($chambre=="on"){
                $ficheOP->setChambreFroide('OUI');
            }
            else if($chambreN=="on"){
                $ficheOP->setChambreFroide('NON');
            }

            $temperature=$request->request->get('temperatureOui');
            $temperatureN=$request->request->get('temperatureNon');
            if ($temperature=="on"){
                $ficheOP->setTemperature('OUI');
            }
            else if($temperatureN=="on"){
                $ficheOP->setTemperature('NON');
            }
            $conformite=$request->request->get('conformiteOui');
            $conformiteN=$request->request->get('conformiteNon');
            if ($conformite=="on"){
                $ficheOP->setConformite('OUI');
            }
            else if($conformiteN=="on"){
                $ficheOP->setConformite('NON');
            }
            $emballage=$request->request->get('emballageOui');
            $emballageN=$request->request->get('emballageNon');
            if ($emballage=="on"){
                $ficheOP->setEmballage('OUI');
            }
            else if($emballageN=="on"){
                $ficheOP->setEmballage('NON');
            }

            $sanitaire=$request->request->get('sanitaireOui');
            $sanitaireN=$request->request->get('sanitaireNon');
            if ($sanitaire=="on"){
                $ficheOP->setSanitaire('OUI');
            }
            else if($sanitaireN=="on"){
                $ficheOP->setSanitaire('NON');
            }
            $securite=$request->request->get('securiteOui');
            $securiteN=$request->request->get('securiteNon');
            if ($securite=="on"){
                $ficheOP->setSecurite('OUI');
            }
            else if($securiteN=="on"){
                $ficheOP->setSecurite('NON');
            }

            $pharmacie=$request->request->get('pharmacieOui');
            $pharmacieN=$request->request->get('pharmacieNon');
            if ($pharmacie=="on"){
                $ficheOP->setPharmacie('OUI');
            }
            else if($pharmacieN=="on"){
                $ficheOP->setPharmacie('NON');
            }
            $lavage=$request->request->get('lavageOui');
            $lavageN=$request->request->get('lavageNon');
            if ($lavage=="on"){
                $ficheOP->setLavage('OUI');
            }
            else if($lavageN=="on"){
                $ficheOP->setLavage('NON');
            }
            $installation=$request->request->get('installationOui');
            $installationN=$request->request->get('installationNon');
            if ($installation=="on"){
                $ficheOP->setInstallation('OUI');
            }
            else if($installationN=="on"){
                $ficheOP->setInstallation('NON');
            }
            $marcheEnAvant=$request->request->get('marcheEnAvantOui');
            $marcheEnAvantN=$request->request->get('marcheEnAvantNon');

            if ($marcheEnAvant=="on"){
                $ficheOP->setMarcheEnAvant('OUI');
            }
            else if($marcheEnAvantN=="on"){
                $ficheOP->setMarcheEnAvant('NON');
            }
            $marcheEnAvant=$request->request->get('marcheEnAvantOui');
            $marcheEnAvantN=$request->request->get('marcheEnAvantNon');
            if ($marcheEnAvant=="on"){
                $ficheOP->setMarcheEnAvant('OUI');
            }
            else if($marcheEnAvantN=="on"){
                $ficheOP->setMarcheEnAvant('NON');
            }
            $qualitecond=$request->request->get('qualiteCondOui');
            $qualitecondN=$request->request->get('qualiteCondNon');
            //var_dump($qualitecond);exit();
            if ($qualitecond=="on"){
                $ficheOP->setQualiteCond('OUI');
            }
            else if($qualitecondN=="on"){
                $ficheOP->setQualiteCond('NON');
            }

            $docArchiavage=$request->request->get('docArchiveOui');
            $docArchiavageN=$request->request->get('docArchiveNon');
            if ($docArchiavage=="on"){
                $ficheOP->setDocArchive('OUI');
            }
            else if($docArchiavageN=="on"){
                $ficheOP->setDocArchive('NON');
            }


            $materielauto=$request->request->get('MaterielAutoControleOui');
            $materielautoN=$request->request->get('MaterielAutoControleNon');
            if ($materielauto=="on"){
                $ficheOP->setMaterielAutoControle('OUI');
            }
            else if($materielautoN=="on"){
                $ficheOP->setMaterielAutoControle('NON');
            }


            $respqualite=$request->request->get('responsableQualiteOui');
            $respqualiteN=$request->request->get('responsableQualiteNon');
            if ($respqualite=="on"){
                $ficheOP->setResponsableQualite('OUI');
            }
            else if($respqualiteN=="on"){
                $ficheOP->setResponsableQualite('NON');
            }

            $niveauResp=$request->request->get('NiveauRespOui');
            $niveauRespN=$request->request->get('NiveauRespNon');
            if ($niveauResp=="on"){
                $ficheOP->setNiveauResponsable('OUI');
            }
            else if($niveauRespN=="on"){
                $ficheOP->setNiveauResponsable('NON');
            }

            $supportEnr=$request->request->get('supportEnregOui');
            $supportEnrN=$request->request->get('supportEnregNon');
            if ($supportEnr=="on"){
                $ficheOP->setSupportEnreg('OUI');
            }
            else if($supportEnrN=="on"){
                $ficheOP->setSupportEnreg('NON');
            }

            $suppjour=$request->request->get('supportAjourOui');
            $suppjourN=$request->request->get('supportAjourNon');
            if ($suppjour=="on"){
                $ficheOP->setSupportAJour('OUI');
            }
            else if($suppjourN=="on"){
                $ficheOP->setSupportAJour('NON');
            }

            $marquageEmb=$request->request->get('marquageEmbOui');
            $marquageEmbN=$request->request->get('marquageEmbNon');
            if ($marquageEmb=="on"){
                $ficheOP->setMarquageEmballage('OUI');
            }
            else if($marquageEmbN=="on"){
                $ficheOP->setMarquageEmballage('NON');
            }

            $uniteTrait=$request->request->get('uniteTraitementNTMPOui');
            $uniteTraitN=$request->request->get('uniteTraitementNTMPNon');
            if ($uniteTrait=="on"){
                $ficheOP->setUniteTraitementNTMP('OUI');
            }
            else if($uniteTraitN=="on"){
                $ficheOP->setUniteTraitementNTMP('NON');
            }

            $paletteEmb=$request->request->get('paletteEmbTraiteOui');
            $paletteEmbN=$request->request->get('paletteEmbTraiteNon');
            if ($paletteEmb=="on"){
                $ficheOP->setPaletteEmbTraite('OUI');
            }
            else if($paletteEmbN=="on"){
                $ficheOP->setPaletteEmbTraite('NON');
            }

            $paletteRecup=$request->request->get('paletteEmbRecupOui');
            $paletteRecupN=$request->request->get('paletteEmbRecupNon');
            if ($paletteRecup=="on"){
                $ficheOP->setPaletteEmbRecup('OUI');
            }
            else if($paletteRecupN=="on"){
                $ficheOP->setPaletteEmbRecup('NON');
            }
            $qualiteCond=$request->request->get('qualiteCondOui');
            $qualiteCondN=$request->request->get('qualiteCondNon');
            if ($paletteRecup=="on"){
                $ficheOP->setQualiteCond('OUI');
            }
            else if($qualiteCondN=="on"){
                $ficheOP->setQualiteCond('NON');
            }

            $docarchiv=$request->request->get('docArchiveOui');
            $docarchivN=$request->request->get('docArchiveNon');
            if ($docarchiv=="on"){
                $ficheOP->setDocArchive('OUI');
            }
            else if($docarchivN=="on"){
                $ficheOP->setDocArchive('NON');
            }
            $materiel=$request->request->get('MaterielAutoControleOui');
            $materielN=$request->request->get('MaterielAutoControleNon');
            if ($materiel=="on"){
                $ficheOP->setMaterielAutoControle('OUI');
            }
            else if($materielN=="on"){
                $ficheOP->setMaterielAutoControle('NON');
            }
            $respqualite=$request->request->get('responsableQualiteOui');
            $respqualiteN=$request->request->get('responsableQualiteNon');
            if ($respqualite=="on"){
                $ficheOP->setResponsableQualite('OUI');
            }
            else if($respqualiteN=="on"){
                $ficheOP->setResponsableQualite('NON');
            }
            $niveauResp=$request->request->get('NiveauRespOui');
            $niveauRespN=$request->request->get('NiveauRespNon');
            if ($niveauResp=="on"){
                $ficheOP->setNiveauResponsable('OUI');
            }
            else if($niveauRespN=="on"){
                $ficheOP->setNiveauResponsable('NON');
            }

            $ficheOP->setNote($request->request->get('notetd_1'));
            $ficheOP->setNoteChambre($request->request->get('notetd_2'));
            $ficheOP->setNoteSysteme($request->request->get('notetd_3'));
            $ficheOP->setNoteConformiteTemp($request->request->get('notetd_4'));
            $ficheOP->setNoteUniteTrait($request->request->get('notetd_5'));
            $ficheOP->setNoteSanitaire($request->request->get('notetd_6'));
            $ficheOP->setAfficheSecurite($request->request->get('notetd_7'));
            $ficheOP->setNotePharmacie($request->request->get('notetd_8'));
            $ficheOP->setNotelavageMain($request->request->get('notetd_9'));
            $ficheOP->setNoteConformiteInstallation($request->request->get('notetd_10'));
            $ficheOP->setNoteMarcheAvant($request->request->get('notetd_11'));

            $ficheOP->setNoteQualiteCond($request->request->get('notestd_1'));
            $ficheOP->setNoteDocArchivage($request->request->get('notestd_2'));
            $ficheOP->setNoteMaterielAutoControle($request->request->get('notestd_3'));


            $ficheOP->setNoteResponsableQualite($request->request->get('notesstd_2'));
            $ficheOP->setNoteNiveauResponsable($request->request->get('notesstd_2'));
//            $ficheOP->setConditionnement($request->request->get('conditionnement'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($ficheOP);
            $em->flush();

        //}

        return $this->render('dpv/ficheOperateur.html.twig', array(
            'ficheOperateur' => $ficheOP,

        ));
    }

    /**
     *
     * @Route("/inspectionOperateurMangue", name="inspection_operateur_mangue")
     * @Method({"GET", "POST"})
     */
    public function enregistrerficheInspectionMangueAction(Request $request)
    {
        $inspectionMangue=new InspectionMangue();


        $inspectionMangue->setTesco($request->get('type_1'));
        $inspectionMangue->setBio($request->get('type_2'));
        $inspectionMangue->setGlobalGap($request->get('type_3'));
        $inspectionMangue->setNoteCertificat($request->get('notes_1'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($inspectionMangue);
        $em->flush();


        //var_dump('test');die();
        for ($i=1;$i<=15;$i++){
            $inspectionMangue->setTypeCertificat($request->get('produit_'.$i));

        }

      

        return $this->render('dpv/ficheOperateur.html.twig', array(
            'ficheOperateur' => $inspectionMangue,

        ));
    }





    /**
     *
     * @Route("/suiviNotificationMangue", name="suivi_notification_mangue")
     * @Method("GET")
     */

    public function suiviNotificationAction()
    {
        return $this->render('dpv/suiviNotificationMangue.html.twig');
    }
    /**
     *
     * @Route("/ficheExportateur", name="fiche_exportateur")
     * @Method("GET")
     */
    public function ficheExportateurAction()
    {
        return $this->render('dpv/ficheExportateur.html.twig');
    }
    
    /**
     *
     * @Route("/ficheEvaluationExportateur", name="fiche_evaluation_exportateur")
     * @Method("GET")
     */
    public function ficheEvaluationExportateurAction()
    {
        return $this->render('dpv/ficheEvaluationMangue.html.twig');
    }




    /**
     * @Route("/detailOperateur", name="detailop")
     */



    public function showFicheOperateurAction(FicheOperateur $ficheOper)
    {
        $deleteForm = $this->createDeleteForm($ficheOper);
        $em = $this->getDoctrine()->getManager();

        $fiche = $em->getRepository('TpaBundle:ficheOperateur')->findBy(array('fiche_operateur'=>$ficheOper->getId()));
        $producteur = $em->getRepository('TpaBundle:Producteur')->findBy(array('producteur'=>$ficheOper->getProducteur()));
        return $this->render('demande/show.html.twig', array(
            'fiche' => $ficheOper,
            'delete_form' => $deleteForm->createView(),
            'producteur'=>$producteur
        ));
    }

    /**
     * @Route("/wordFichier", name="word")
     */
    public function wordAction(Request $request)
    {
        // Create a new Word document
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        /* Note: any element you append to a document must reside inside of a Section. */

        // Adding an empty Section to the document...
        $section = $phpWord->addSection();
        // Adding Text element to the Section having font styled by default...
        $section->addText(
            '"Learn from yesterday, live for today, hope for tomorrow. '
            . 'The important thing is not to stop questioning." '
            . '(Albert Einstein)'
        );

        // Saving the document as OOXML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

        // Create a temporal file in the system
        $fileName = 'hello_world_download_file.docx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Write in the temporal filepath
        $objWriter->save($temp_file);

        // Send the temporal file as response (as an attachment)
        $response = new \Symfony\Component\HttpFoundation\BinaryFileResponse($temp_file);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $fileName
        );

        return $response;
    }

}
