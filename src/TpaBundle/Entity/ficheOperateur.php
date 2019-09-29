<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ficheOperateur
 *
 * @ORM\Table(name="fiche_operateur")
 * @ORM\Entity(repositoryClass="TpaBundle\Repository\ficheOperateurRepository")
 */

class ficheOperateur
{

    /**
     * @ORM\ManyToOne(targetEntity="SiteConditionnement")
     * @ORM\JoinColumn(name="conditionnement_id", referencedColumnName="id")
     */
    private $conditionnement;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tableTravail", type="string", nullable=true)
     */
    private $tableTravail;

    /**
     * @var string
     *
     * @ORM\Column(name="chambreFroide", type="string", nullable=true)
     */
    private $chambreFroide;

    /**
     * @var string
     *
     * @ORM\Column(name="temperature", type="string", nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="conformite", type="string", nullable=true)
     */
    private $conformite;
    /**
     * @var string
     *
     * @ORM\Column(name="emballage", type="string", nullable=true)
     */
    private $emballage;
    /**
     * @var string
     *
     * @ORM\Column(name="sanitaire", type="string", nullable=true)
     */
    private $sanitaire;
    /**
     * @var string
     *
     * @ORM\Column(name="securite", type="string", nullable=true)
     */
    private $securite;
    /**
     * @var string
     *
     * @ORM\Column(name="pharmacie", type="string", nullable=true)
     */
    private $pharmacie;
    /**
     * @var string
     *
     * @ORM\Column(name="lavage", type="string", nullable=true)
     */
    private $lavage;
    /**
     * @var string
     *
     * @ORM\Column(name="installation", type="string", nullable=true)
     */
    private $installation;
    /**
     * @var string
     *
     * @ORM\Column(name="marcheEnAvant", type="string", nullable=true)
     */
    private $marcheEnAvant;
    /**
     * @var string
     *
     * @ORM\Column(name="qualiteCond", type="string", nullable=true)
     */
    private $qualiteCond;
    /**
     * @var string
     *
     * @ORM\Column(name="docArchive", type="string", nullable=true)
     */
    private $docArchive;
    /**
     * @var string
     *
     * @ORM\Column(name="MaterielAutoControle", type="string", nullable=true)
     */
    private $MaterielAutoControle;
    /**
     * @var string
     *
     * @ORM\Column(name="responsableQualite", type="string", nullable=true)
     */
    private $responsableQualite;
    /**
     * @var string
     *
     * @ORM\Column(name="niveauResponsable", type="string", nullable=true)
     */
    private $niveauResponsable;
    /**
     * @var string
     *
     * @ORM\Column(name="marquageEmballage", type="string", nullable=true)
     */
    private $marquageEmballage;
//    Partie du representant legal

    /**
     * @var string
     *
     * @ORM\Column(name="uniteTraitementNTMP", type="string", nullable=true)
     */
    private $uniteTraitementNTMP;

    /**
     * @var string
     *
     * @ORM\Column(name="paletteEmbTraite", type="string", nullable=true)
     */
    private $paletteEmbTraite;

    /**
     * @var string
     *
     * @ORM\Column(name="paletteEmbRecup", type="string", nullable=true)
     */
    private $paletteEmbRecup;

    /**
     * @var string
     *
     * @ORM\Column(name="supportEnreg", type="string", nullable=true)
     */
    private $supportEnreg;

    /**
     * @var string
     *
     * @ORM\Column(name="supportAJour", type="string", nullable=true)
     */
    private $supportAJour;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", nullable=true)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="noteChambre", type="string", nullable=true)
     */
    private $noteChambre;


    /**
     * @var string
     *
     * @ORM\Column(name="noteSysteme", type="string", nullable=true)
     */
    private $noteSysteme;
    /**
     * @var string
     *
     * @ORM\Column(name="noteConformiteTemp", type="string", nullable=true)
     */
    private $noteConformiteTemp;
    /**
     * @var string
     *
     * @ORM\Column(name="noteUniteTrait", type="string", nullable=true)
     */
    private $noteUniteTrait;
    /**
     * @var string
     *
     * @ORM\Column(name="noteSanitaire", type="string", nullable=true)
     */
    private $noteSanitaire;
    /**
     * @var string
     *
     * @ORM\Column(name="afficheSecurite", type="string", nullable=true)
     */
    private $afficheSecurite;
    /**
     * @var string
     *
     * @ORM\Column(name="notePharmacie", type="string", nullable=true)
     */
    private $notePharmacie;
    /**
     * @var string
     *
     * @ORM\Column(name="notelavageMain", type="string", nullable=true)
     */
    private $notelavageMain;
    /**
     * @var string
     *
     * @ORM\Column(name="noteConformiteInstallation", type="string", nullable=true)
     */
    private $noteConformiteInstallation;
    /**
     * @var string
     *
     * @ORM\Column(name="noteMarcheAvant", type="string", nullable=true)
     */
    private $noteMarcheAvant; /**
     * @var string
     *
     * @ORM\Column(name="noteQualiteCond", type="string", nullable=true)
     */
    private $noteQualiteCond;
    /**
     * @var string
     *
     * @ORM\Column(name="noteDocArchivage", type="string", nullable=true)
     */
    private $noteDocArchivage;
    /**
     * @var string
     *
     * @ORM\Column(name="noteMaterielAutoControle", type="string", nullable=true)
     */
    private $noteMaterielAutoControle;
    /**
     * @var string
     *
     * @ORM\Column(name="noteResponsableQualite", type="string", nullable=true)
     */
    private $noteResponsableQualite;

    /**
     * @var string
     *
     * @ORM\Column(name="noteNiveauResponsable", type="string", nullable=true)
     */
    private $noteNiveauResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="typeCertificat", type="string", nullable=true)
     */
    private $typeCertificat;

    /**
     * @var string
     *
     * @ORM\Column(name="noteCertificat", type="string", nullable=true)
     */
    private $noteCertificat;


    /**
     * @var string
     *
     * @ORM\Column(name="tesco", type="string", nullable=true)
     */
    private $tesco;


    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="string", nullable=true)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="globalGap", type="string", nullable=true)
     */
    private $globalGap;







    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tableTravail
     *
     * @param string $tableTravail
     *
     * @return ficheOperateur
     */
    public function setTableTravail($tableTravail)
    {
        $this->tableTravail = $tableTravail;

        return $this;
    }

    /**
     * Get tableTravail
     *
     * @return string
     */
    public function getTableTravail()
    {
        return $this->tableTravail;
    }

    /**
     * Set chambreFroide
     *
     * @param string $chambreFroide
     *
     * @return ficheOperateur
     */
    public function setChambreFroide($chambreFroide)
    {
        $this->chambreFroide = $chambreFroide;

        return $this;
    }

    /**
     * Get chambreFroide
     *
     * @return string
     */
    public function getChambreFroide()
    {
        return $this->chambreFroide;
    }

    /**
     * Set temperature
     *
     * @param string $temperature
     *
     * @return ficheOperateur
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return string
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set conformite
     *
     * @param string $conformite
     *
     * @return ficheOperateur
     */
    public function setConformite($conformite)
    {
        $this->conformite = $conformite;

        return $this;
    }

    /**
     * Get conformite
     *
     * @return string
     */
    public function getConformite()
    {
        return $this->conformite;
    }

    /**
     * Set emballage
     *
     * @param string $emballage
     *
     * @return ficheOperateur
     */
    public function setEmballage($emballage)
    {
        $this->emballage = $emballage;

        return $this;
    }

    /**
     * Get emballage
     *
     * @return string
     */
    public function getEmballage()
    {
        return $this->emballage;
    }

    /**
     * Set sanitaire
     *
     * @param string $sanitaire
     *
     * @return ficheOperateur
     */
    public function setSanitaire($sanitaire)
    {
        $this->sanitaire = $sanitaire;

        return $this;
    }

    /**
     * Get sanitaire
     *
     * @return string
     */
    public function getSanitaire()
    {
        return $this->sanitaire;
    }

    /**
     * Set securite
     *
     * @param string $securite
     *
     * @return ficheOperateur
     */
    public function setSecurite($securite)
    {
        $this->securite = $securite;

        return $this;
    }

    /**
     * Get securite
     *
     * @return string
     */
    public function getSecurite()
    {
        return $this->securite;
    }

    /**
     * Set pharmacie
     *
     * @param string $pharmacie
     *
     * @return ficheOperateur
     */
    public function setPharmacie($pharmacie)
    {
        $this->pharmacie = $pharmacie;

        return $this;
    }

    /**
     * Get pharmacie
     *
     * @return string
     */
    public function getPharmacie()
    {
        return $this->pharmacie;
    }

    /**
     * Set lavage
     *
     * @param string $lavage
     *
     * @return ficheOperateur
     */
    public function setLavage($lavage)
    {
        $this->lavage = $lavage;

        return $this;
    }

    /**
     * Get lavage
     *
     * @return string
     */
    public function getLavage()
    {
        return $this->lavage;
    }

    /**
     * Set installation
     *
     * @param string $installation
     *
     * @return ficheOperateur
     */
    public function setInstallation($installation)
    {
        $this->installation = $installation;

        return $this;
    }

    /**
     * Get installation
     *
     * @return string
     */
    public function getInstallation()
    {
        return $this->installation;
    }

    /**
     * Set marcheEnAvant
     *
     * @param string $marcheEnAvant
     *
     * @return ficheOperateur
     */
    public function setMarcheEnAvant($marcheEnAvant)
    {
        $this->marcheEnAvant = $marcheEnAvant;

        return $this;
    }

    /**
     * Get marcheEnAvant
     *
     * @return string
     */
    public function getMarcheEnAvant()
    {
        return $this->marcheEnAvant;
    }

    /**
     * Set qualiteCond
     *
     * @param string $qualiteCond
     *
     * @return ficheOperateur
     */
    public function setQualiteCond($qualiteCond)
    {
        $this->qualiteCond = $qualiteCond;

        return $this;
    }

    /**
     * Get qualiteCond
     *
     * @return string
     */
    public function getQualiteCond()
    {
        return $this->qualiteCond;
    }

    /**
     * Set docArchive
     *
     * @param string $docArchive
     *
     * @return ficheOperateur
     */
    public function setDocArchive($docArchive)
    {
        $this->docArchive = $docArchive;

        return $this;
    }

    /**
     * Get docArchive
     *
     * @return string
     */
    public function getDocArchive()
    {
        return $this->docArchive;
    }

    /**
     * Set materielAutoControle
     *
     * @param string $materielAutoControle
     *
     * @return ficheOperateur
     */
    public function setMaterielAutoControle($materielAutoControle)
    {
        $this->MaterielAutoControle = $materielAutoControle;

        return $this;
    }

    /**
     * Get materielAutoControle
     *
     * @return string
     */
    public function getMaterielAutoControle()
    {
        return $this->MaterielAutoControle;
    }

    /**
     * Set responsableQualite
     *
     * @param string $responsableQualite
     *
     * @return ficheOperateur
     */
    public function setResponsableQualite($responsableQualite)
    {
        $this->responsableQualite = $responsableQualite;

        return $this;
    }

    /**
     * Get responsableQualite
     *
     * @return string
     */
    public function getResponsableQualite()
    {
        return $this->responsableQualite;
    }

    /**
     * Set niveauResponsable
     *
     * @param string $niveauResponsable
     *
     * @return ficheOperateur
     */
    public function setNiveauResponsable($niveauResponsable)
    {
        $this->niveauResponsable = $niveauResponsable;

        return $this;
    }

    /**
     * Get niveauResponsable
     *
     * @return string
     */
    public function getNiveauResponsable()
    {
        return $this->niveauResponsable;
    }

    /**
     * Set marquageEmballage
     *
     * @param string $marquageEmballage
     *
     * @return ficheOperateur
     */
    public function setMarquageEmballage($marquageEmballage)
    {
        $this->marquageEmballage = $marquageEmballage;

        return $this;
    }

    /**
     * Get marquageEmballage
     *
     * @return string
     */
    public function getMarquageEmballage()
    {
        return $this->marquageEmballage;
    }

    /**
     * Set uniteTraitementNTMP
     *
     * @param string $uniteTraitementNTMP
     *
     * @return ficheOperateur
     */
    public function setUniteTraitementNTMP($uniteTraitementNTMP)
    {
        $this->uniteTraitementNTMP = $uniteTraitementNTMP;

        return $this;
    }

    /**
     * Get uniteTraitementNTMP
     *
     * @return string
     */
    public function getUniteTraitementNTMP()
    {
        return $this->uniteTraitementNTMP;
    }

    /**
     * Set paletteEmbTraite
     *
     * @param string $paletteEmbTraite
     *
     * @return ficheOperateur
     */
    public function setPaletteEmbTraite($paletteEmbTraite)
    {
        $this->paletteEmbTraite = $paletteEmbTraite;

        return $this;
    }

    /**
     * Get paletteEmbTraite
     *
     * @return string
     */
    public function getPaletteEmbTraite()
    {
        return $this->paletteEmbTraite;
    }


    /**
     * Set paletteEmbRecup
     *
     * @param string $paletteEmbRecup
     *
     * @return ficheOperateur
     */
    public function setPaletteEmbRecup($paletteEmbRecup)
    {
        $this->paletteEmbRecup = $paletteEmbRecup;

        return $this;
    }

    /**
     * Get paletteEmbRecup
     *
     * @return string
     */
    public function getPaletteEmbRecup()
    {
        return $this->paletteEmbRecup;
    }

    /**
     * Set supportEnreg
     *
     * @param string $supportEnreg
     *
     * @return ficheOperateur
     */
    public function setSupportEnreg($supportEnreg)
    {
        $this->supportEnreg = $supportEnreg;

        return $this;
    }

    /**
     * Get supportEnreg
     *
     * @return string
     */
    public function getSupportEnreg()
    {
        return $this->supportEnreg;
    }

    /**
     * Set supportAJour
     *
     * @param string $supportAJour
     *
     * @return ficheOperateur
     */
    public function setSupportAJour($supportAJour)
    {
        $this->supportAJour = $supportAJour;

        return $this;
    }

    /**
     * Get supportAJour
     *
     * @return string
     */
    public function getSupportAJour()
    {
        return $this->supportAJour;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return ficheOperateur
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set noteChambre
     *
     * @param string $noteChambre
     *
     * @return ficheOperateur
     */
    public function setNoteChambre($noteChambre)
    {
        $this->noteChambre = $noteChambre;

        return $this;
    }

    /**
     * Get noteChambre
     *
     * @return string
     */
    public function getNoteChambre()
    {
        return $this->noteChambre;
    }

    /**
     * Set noteSysteme
     *
     * @param string $noteSysteme
     *
     * @return ficheOperateur
     */
    public function setNoteSysteme($noteSysteme)
    {
        $this->noteSysteme = $noteSysteme;

        return $this;
    }

    /**
     * Get noteSysteme
     *
     * @return string
     */
    public function getNoteSysteme()
    {
        return $this->noteSysteme;
    }

    /**
     * Set noteConformiteTemp
     *
     * @param string $noteConformiteTemp
     *
     * @return ficheOperateur
     */
    public function setNoteConformiteTemp($noteConformiteTemp)
    {
        $this->noteConformiteTemp = $noteConformiteTemp;

        return $this;
    }

    /**
     * Get noteConformiteTemp
     *
     * @return string
     */
    public function getNoteConformiteTemp()
    {
        return $this->noteConformiteTemp;
    }

    /**
     * Set noteUniteTrait
     *
     * @param string $noteUniteTrait
     *
     * @return ficheOperateur
     */
    public function setNoteUniteTrait($noteUniteTrait)
    {
        $this->noteUniteTrait = $noteUniteTrait;

        return $this;
    }

    /**
     * Get noteUniteTrait
     *
     * @return string
     */
    public function getNoteUniteTrait()
    {
        return $this->noteUniteTrait;
    }

    /**
     * Set noteSanitaire
     *
     * @param string $noteSanitaire
     *
     * @return ficheOperateur
     */
    public function setNoteSanitaire($noteSanitaire)
    {
        $this->noteSanitaire = $noteSanitaire;

        return $this;
    }

    /**
     * Get noteSanitaire
     *
     * @return string
     */
    public function getNoteSanitaire()
    {
        return $this->noteSanitaire;
    }

    /**
     * Set afficheSecurite
     *
     * @param string $afficheSecurite
     *
     * @return ficheOperateur
     */
    public function setAfficheSecurite($afficheSecurite)
    {
        $this->afficheSecurite = $afficheSecurite;

        return $this;
    }

    /**
     * Get afficheSecurite
     *
     * @return string
     */
    public function getAfficheSecurite()
    {
        return $this->afficheSecurite;
    }

    /**
     * Set notePharmacie
     *
     * @param string $notePharmacie
     *
     * @return ficheOperateur
     */
    public function setNotePharmacie($notePharmacie)
    {
        $this->notePharmacie = $notePharmacie;

        return $this;
    }

    /**
     * Get notePharmacie
     *
     * @return string
     */
    public function getNotePharmacie()
    {
        return $this->notePharmacie;
    }

    /**
     * Set notelavageMain
     *
     * @param string $notelavageMain
     *
     * @return ficheOperateur
     */
    public function setNotelavageMain($notelavageMain)
    {
        $this->notelavageMain = $notelavageMain;

        return $this;
    }

    /**
     * Get notelavageMain
     *
     * @return string
     */
    public function getNotelavageMain()
    {
        return $this->notelavageMain;
    }

    /**
     * Set noteConformiteInstallation
     *
     * @param string $noteConformiteInstallation
     *
     * @return ficheOperateur
     */
    public function setNoteConformiteInstallation($noteConformiteInstallation)
    {
        $this->noteConformiteInstallation = $noteConformiteInstallation;

        return $this;
    }

    /**
     * Get noteConformiteInstallation
     *
     * @return string
     */
    public function getNoteConformiteInstallation()
    {
        return $this->noteConformiteInstallation;
    }

    /**
     * Set noteMarcheAvant
     *
     * @param string $noteMarcheAvant
     *
     * @return ficheOperateur
     */
    public function setNoteMarcheAvant($noteMarcheAvant)
    {
        $this->noteMarcheAvant = $noteMarcheAvant;

        return $this;
    }

    /**
     * Get noteMarcheAvant
     *
     * @return string
     */
    public function getNoteMarcheAvant()
    {
        return $this->noteMarcheAvant;
    }

    /**
     * Set noteQualiteCond
     *
     * @param string $noteQualiteCond
     *
     * @return ficheOperateur
     */
    public function setNoteQualiteCond($noteQualiteCond)
    {
        $this->noteQualiteCond = $noteQualiteCond;

        return $this;
    }

    /**
     * Get noteQualiteCond
     *
     * @return string
     */
    public function getNoteQualiteCond()
    {
        return $this->noteQualiteCond;
    }

    /**
     * Set noteDocArchivage
     *
     * @param string $noteDocArchivage
     *
     * @return ficheOperateur
     */
    public function setNoteDocArchivage($noteDocArchivage)
    {
        $this->noteDocArchivage = $noteDocArchivage;

        return $this;
    }

    /**
     * Get noteDocArchivage
     *
     * @return string
     */
    public function getNoteDocArchivage()
    {
        return $this->noteDocArchivage;
    }

    /**
     * Set noteMaterielAutoControle
     *
     * @param string $noteMaterielAutoControle
     *
     * @return ficheOperateur
     */
    public function setNoteMaterielAutoControle($noteMaterielAutoControle)
    {
        $this->noteMaterielAutoControle = $noteMaterielAutoControle;

        return $this;
    }

    /**
     * Get noteMaterielAutoControle
     *
     * @return string
     */
    public function getNoteMaterielAutoControle()
    {
        return $this->noteMaterielAutoControle;
    }

    /**
     * Set noteResponsableQualite
     *
     * @param string $noteResponsableQualite
     *
     * @return ficheOperateur
     */
    public function setNoteResponsableQualite($noteResponsableQualite)
    {
        $this->noteResponsableQualite = $noteResponsableQualite;

        return $this;
    }

    /**
     * Get noteResponsableQualite
     *
     * @return string
     */
    public function getNoteResponsableQualite()
    {
        return $this->noteResponsableQualite;
    }

    /**
     * Set noteNiveauResponsable
     *
     * @param string $noteNiveauResponsable
     *
     * @return ficheOperateur
     */
    public function setNoteNiveauResponsable($noteNiveauResponsable)
    {
        $this->noteNiveauResponsable = $noteNiveauResponsable;

        return $this;
    }

    /**
     * Get noteNiveauResponsable
     *
     * @return string
     */
    public function getNoteNiveauResponsable()
    {
        return $this->noteNiveauResponsable;
    }

    /**
     * Set typeCertificat
     *
     * @param string $typeCertificat
     *
     * @return ficheOperateur
     */
    public function setTypeCertificat($typeCertificat)
    {
        $this->typeCertificat = $typeCertificat;

        return $this;
    }

    /**
     * Get typeCertificat
     *
     * @return string
     */
    public function getTypeCertificat()
    {
        return $this->typeCertificat;
    }

    /**
     * Set produitCertifie
     *
     * @param string $produitCertifie
     *
     * @return ficheOperateur
     */
    public function setProduitCertifie($produitCertifie)
    {
        $this->produitCertifie = $produitCertifie;

        return $this;
    }

    /**
     * Get produitCertifie
     *
     * @return string
     */
    public function getProduitCertifie()
    {
        return $this->produitCertifie;
    }

    /**
     * Set noteCertificat
     *
     * @param string $noteCertificat
     *
     * @return ficheOperateur
     */
    public function setNoteCertificat($noteCertificat)
    {
        $this->noteCertificat = $noteCertificat;

        return $this;
    }

    /**
     * Get noteCertificat
     *
     * @return string
     */
    public function getNoteCertificat()
    {
        return $this->noteCertificat;
    }

    /**
     * Set tesco
     *
     * @param string $tesco
     *
     * @return ficheOperateur
     */
    public function setTesco($tesco)
    {
        $this->tesco = $tesco;

        return $this;
    }

    /**
     * Get tesco
     *
     * @return string
     */
    public function getTesco()
    {
        return $this->tesco;
    }

    /**
     * Set bio
     *
     * @param string $bio
     *
     * @return ficheOperateur
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Set globalGap
     *
     * @param string $globalGap
     *
     * @return ficheOperateur
     */
    public function setGlobalGap($globalGap)
    {
        $this->globalGap = $globalGap;

        return $this;
    }

    /**
     * Get globalGap
     *
     * @return string
     */
    public function getGlobalGap()
    {
        return $this->globalGap;
    }

    /**
     * Set conditionnement
     *
     * @param \TpaBundle\Entity\SiteConditionnement $conditionnement
     *
     * @return ficheOperateur
     */
    public function setConditionnement(\TpaBundle\Entity\SiteConditionnement $conditionnement = null)
    {
        $this->conditionnement = $conditionnement;

        return $this;
    }

    /**
     * Get conditionnement
     *
     * @return \TpaBundle\Entity\SiteConditionnement
     */
    public function getConditionnement()
    {
        return $this->conditionnement;
    }
}
