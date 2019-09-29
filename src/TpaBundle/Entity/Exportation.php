<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exportation
 *
 * @ORM\Table(name="exportation")
 * @ORM\Entity
 */
class Exportation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="denomEntreprise", type="string", length=255, nullable=true)
     */
    private $denomentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="prenoNomInspecteur", type="string", length=255, nullable=true)
     */
    private $prenonominspecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="dateInspection", type="string", length=255, nullable=true)
     */
    private $dateinspection;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuInspection", type="string", length=255, nullable=true)
     */
    private $lieuinspection;

    /**
     * @var string
     *
     * @ORM\Column(name="personneRencontre", type="string", length=255, nullable=true)
     */
    private $personnerencontre;
    
    
    
    
     /**
     * @var string
     *
     * @ORM\Column(name="valide", type="integer", length=1, nullable=false)
     */
    private $valide;
    
    
    

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionpersonneRencontre", type="string", length=255, nullable=true)
     */
    private $fonctionpersonnerencontre;

    /**
     * @var string
     *
     * @ORM\Column(name="variete", type="string", length=255, nullable=true)
     */
    private $variete;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="qteDeclare", type="string", length=255, nullable=true)
     */
    private $qtedeclare;

    /**
     * @var string
     *
     * @ORM\Column(name="nbColis", type="string", length=255, nullable=true)
     */
    private $nbcolis;

    /**
     * @var string
     *
     * @ORM\Column(name="typeTransport", type="string", length=255, nullable=true)
     */
    private $typetransport;

    /**
     * @var string
     *
     * @ORM\Column(name="tailleEchantillon", type="string", length=255, nullable=true)
     */
    private $tailleechantillon;

    /**
     * @var string
     *
     * @ORM\Column(name="nbColiControle", type="string", length=255, nullable=true)
     */
    private $nbcolicontrole;

    /**
     * @var string
     *
     * @ORM\Column(name="nbMangueControle", type="string", length=255, nullable=true)
     */
    private $nbmanguecontrole;

    /**
     * @var string
     *
     * @ORM\Column(name="registreReceptionMangue", type="string", length=255, nullable=true)
     */
    private $registrereceptionmangue;

    /**
     * @var string
     *
     * @ORM\Column(name="declarationSupp", type="string", length=255, nullable=true)
     */
    private $declarationsupp;

    /**
     * @var string
     *
     * @ORM\Column(name="marqueColis", type="string", length=255, nullable=true)
     */
    private $marquecolis;

    /**
     * @var string
     *
     * @ORM\Column(name="conformiteColis", type="string", length=255, nullable=true)
     */
    private $conformitecolis;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroLot", type="string", length=255, nullable=true)
     */
    private $numerolot;

    /**
     * @var string
     *
     * @ORM\Column(name="conformiteLot", type="string", length=255, nullable=true)
     */
    private $conformitelot;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroPalette", type="string", length=255, nullable=true)
     */
    private $numeropalette;

    /**
     * @var string
     *
     * @ORM\Column(name="conformitePalette", type="string", length=255, nullable=true)
     */
    private $conformitepalette;

    /**
     * @var string
     *
     * @ORM\Column(name="maturite", type="string", length=255, nullable=true)
     */
    private $maturite;

    /**
     * @var string
     *
     * @ORM\Column(name="piqureMoucheFruit", type="string", length=255, nullable=true)
     */
    private $piquremouchefruit;

    /**
     * @var string
     *
     * @ORM\Column(name="pourriturePendonculaire", type="string", length=255, nullable=true)
     */
    private $pourriturependonculaire;

    /**
     * @var string
     *
     * @ORM\Column(name="charanconNoyaux", type="string", length=255, nullable=true)
     */
    private $charanconnoyaux;

    /**
     * @var string
     *
     * @ORM\Column(name="traceArthrocnose", type="string", length=255, nullable=true)
     */
    private $tracearthrocnose;

    /**
     * @var string
     *
     * @ORM\Column(name="marquageNIMP15", type="string", length=255, nullable=true)
     */
    private $marquagenimp15;

    /**
     * @var string
     *
     * @ORM\Column(name="etatSanitaireGeneral", type="string", length=255, nullable=true)
     */
    private $etatsanitairegeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255, nullable=true)
     */
    private $commentaire;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set denomentreprise
     *
     * @param string $denomentreprise
     *
     * @return Exportation
     */
    public function setDenomentreprise($denomentreprise)
    {
        $this->denomentreprise = $denomentreprise;

        return $this;
    }

    /**
     * Get denomentreprise
     *
     * @return string
     */
    public function getDenomentreprise()
    {
        return $this->denomentreprise;
    }

    /**
     * Set prenonominspecteur
     *
     * @param string $prenonominspecteur
     *
     * @return Exportation
     */
    public function setPrenonominspecteur($prenonominspecteur)
    {
        $this->prenonominspecteur = $prenonominspecteur;

        return $this;
    }

    /**
     * Get prenonominspecteur
     *
     * @return string
     */
    public function getPrenonominspecteur()
    {
        return $this->prenonominspecteur;
    }

    /**
     * Set dateinspection
     *
     * @param string $dateinspection
     *
     * @return Exportation
     */
    public function setDateinspection($dateinspection)
    {
        $this->dateinspection = $dateinspection;

        return $this;
    }

    /**
     * Get dateinspection
     *
     * @return string
     */
    public function getDateinspection()
    {
        return $this->dateinspection;
    }

    /**
     * Set lieuinspection
     *
     * @param string $lieuinspection
     *
     * @return Exportation
     */
    public function setLieuinspection($lieuinspection)
    {
        $this->lieuinspection = $lieuinspection;

        return $this;
    }

    /**
     * Get lieuinspection
     *
     * @return string
     */
    public function getLieuinspection()
    {
        return $this->lieuinspection;
    }

    /**
     * Set personnerencontre
     *
     * @param string $personnerencontre
     *
     * @return Exportation
     */
    public function setPersonnerencontre($personnerencontre)
    {
        $this->personnerencontre = $personnerencontre;

        return $this;
    }

    /**
     * Get personnerencontre
     *
     * @return string
     */
    public function getPersonnerencontre()
    {
        return $this->personnerencontre;
    }

    /**
     * Set fonctionpersonnerencontre
     *
     * @param string $fonctionpersonnerencontre
     *
     * @return Exportation
     */
    public function setFonctionpersonnerencontre($fonctionpersonnerencontre)
    {
        $this->fonctionpersonnerencontre = $fonctionpersonnerencontre;

        return $this;
    }

    /**
     * Get fonctionpersonnerencontre
     *
     * @return string
     */
    public function getFonctionpersonnerencontre()
    {
        return $this->fonctionpersonnerencontre;
    }

    /**
     * Set variete
     *
     * @param string $variete
     *
     * @return Exportation
     */
    public function setVariete($variete)
    {
        $this->variete = $variete;

        return $this;
    }

    /**
     * Get variete
     *
     * @return string
     */
    public function getVariete()
    {
        return $this->variete;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Exportation
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set qtedeclare
     *
     * @param string $qtedeclare
     *
     * @return Exportation
     */
    public function setQtedeclare($qtedeclare)
    {
        $this->qtedeclare = $qtedeclare;

        return $this;
    }

    /**
     * Get qtedeclare
     *
     * @return string
     */
    public function getQtedeclare()
    {
        return $this->qtedeclare;
    }

    /**
     * Set nbcolis
     *
     * @param string $nbcolis
     *
     * @return Exportation
     */
    public function setNbcolis($nbcolis)
    {
        $this->nbcolis = $nbcolis;

        return $this;
    }

    /**
     * Get nbcolis
     *
     * @return string
     */
    public function getNbcolis()
    {
        return $this->nbcolis;
    }

    /**
     * Set typetransport
     *
     * @param string $typetransport
     *
     * @return Exportation
     */
    public function setTypetransport($typetransport)
    {
        $this->typetransport = $typetransport;

        return $this;
    }

    /**
     * Get typetransport
     *
     * @return string
     */
    public function getTypetransport()
    {
        return $this->typetransport;
    }

    /**
     * Set tailleechantillon
     *
     * @param string $tailleechantillon
     *
     * @return Exportation
     */
    public function setTailleechantillon($tailleechantillon)
    {
        $this->tailleechantillon = $tailleechantillon;

        return $this;
    }

    /**
     * Get tailleechantillon
     *
     * @return string
     */
    public function getTailleechantillon()
    {
        return $this->tailleechantillon;
    }

    /**
     * Set nbcolicontrole
     *
     * @param string $nbcolicontrole
     *
     * @return Exportation
     */
    public function setNbcolicontrole($nbcolicontrole)
    {
        $this->nbcolicontrole = $nbcolicontrole;

        return $this;
    }

    /**
     * Get nbcolicontrole
     *
     * @return string
     */
    public function getNbcolicontrole()
    {
        return $this->nbcolicontrole;
    }

    /**
     * Set nbmanguecontrole
     *
     * @param string $nbmanguecontrole
     *
     * @return Exportation
     */
    public function setNbmanguecontrole($nbmanguecontrole)
    {
        $this->nbmanguecontrole = $nbmanguecontrole;

        return $this;
    }

    /**
     * Get nbmanguecontrole
     *
     * @return string
     */
    public function getNbmanguecontrole()
    {
        return $this->nbmanguecontrole;
    }

    /**
     * Set registrereceptionmangue
     *
     * @param string $registrereceptionmangue
     *
     * @return Exportation
     */
    public function setRegistrereceptionmangue($registrereceptionmangue)
    {
        $this->registrereceptionmangue = $registrereceptionmangue;

        return $this;
    }

    /**
     * Get registrereceptionmangue
     *
     * @return string
     */
    public function getRegistrereceptionmangue()
    {
        return $this->registrereceptionmangue;
    }

    /**
     * Set declarationsupp
     *
     * @param string $declarationsupp
     *
     * @return Exportation
     */
    public function setDeclarationsupp($declarationsupp)
    {
        $this->declarationsupp = $declarationsupp;

        return $this;
    }

    /**
     * Get declarationsupp
     *
     * @return string
     */
    public function getDeclarationsupp()
    {
        return $this->declarationsupp;
    }

    /**
     * Set marquecolis
     *
     * @param string $marquecolis
     *
     * @return Exportation
     */
    public function setMarquecolis($marquecolis)
    {
        $this->marquecolis = $marquecolis;

        return $this;
    }

    /**
     * Get marquecolis
     *
     * @return string
     */
    public function getMarquecolis()
    {
        return $this->marquecolis;
    }

    /**
     * Set conformitecolis
     *
     * @param string $conformitecolis
     *
     * @return Exportation
     */
    public function setConformitecolis($conformitecolis)
    {
        $this->conformitecolis = $conformitecolis;

        return $this;
    }

    /**
     * Get conformitecolis
     *
     * @return string
     */
    public function getConformitecolis()
    {
        return $this->conformitecolis;
    }

    /**
     * Set numerolot
     *
     * @param string $numerolot
     *
     * @return Exportation
     */
    public function setNumerolot($numerolot)
    {
        $this->numerolot = $numerolot;

        return $this;
    }

    /**
     * Get numerolot
     *
     * @return string
     */
    public function getNumerolot()
    {
        return $this->numerolot;
    }

    /**
     * Set conformitelot
     *
     * @param string $conformitelot
     *
     * @return Exportation
     */
    public function setConformitelot($conformitelot)
    {
        $this->conformitelot = $conformitelot;

        return $this;
    }

    /**
     * Get conformitelot
     *
     * @return string
     */
    public function getConformitelot()
    {
        return $this->conformitelot;
    }

    /**
     * Set numeropalette
     *
     * @param string $numeropalette
     *
     * @return Exportation
     */
    public function setNumeropalette($numeropalette)
    {
        $this->numeropalette = $numeropalette;

        return $this;
    }

    /**
     * Get numeropalette
     *
     * @return string
     */
    public function getNumeropalette()
    {
        return $this->numeropalette;
    }

    /**
     * Set conformitepalette
     *
     * @param string $conformitepalette
     *
     * @return Exportation
     */
    public function setConformitepalette($conformitepalette)
    {
        $this->conformitepalette = $conformitepalette;

        return $this;
    }

    /**
     * Get conformitepalette
     *
     * @return string
     */
    public function getConformitepalette()
    {
        return $this->conformitepalette;
    }

    /**
     * Set maturite
     *
     * @param string $maturite
     *
     * @return Exportation
     */
    public function setMaturite($maturite)
    {
        $this->maturite = $maturite;

        return $this;
    }

    /**
     * Get maturite
     *
     * @return string
     */
    public function getMaturite()
    {
        return $this->maturite;
    }

    /**
     * Set piquremouchefruit
     *
     * @param string $piquremouchefruit
     *
     * @return Exportation
     */
    public function setPiquremouchefruit($piquremouchefruit)
    {
        $this->piquremouchefruit = $piquremouchefruit;

        return $this;
    }

    /**
     * Get piquremouchefruit
     *
     * @return string
     */
    public function getPiquremouchefruit()
    {
        return $this->piquremouchefruit;
    }

    /**
     * Set pourriturependonculaire
     *
     * @param string $pourriturependonculaire
     *
     * @return Exportation
     */
    public function setPourriturependonculaire($pourriturependonculaire)
    {
        $this->pourriturependonculaire = $pourriturependonculaire;

        return $this;
    }

    /**
     * Get pourriturependonculaire
     *
     * @return string
     */
    public function getPourriturependonculaire()
    {
        return $this->pourriturependonculaire;
    }

    /**
     * Set charanconnoyaux
     *
     * @param string $charanconnoyaux
     *
     * @return Exportation
     */
    public function setCharanconnoyaux($charanconnoyaux)
    {
        $this->charanconnoyaux = $charanconnoyaux;

        return $this;
    }

    /**
     * Get charanconnoyaux
     *
     * @return string
     */
    public function getCharanconnoyaux()
    {
        return $this->charanconnoyaux;
    }

    /**
     * Set tracearthrocnose
     *
     * @param string $tracearthrocnose
     *
     * @return Exportation
     */
    public function setTracearthrocnose($tracearthrocnose)
    {
        $this->tracearthrocnose = $tracearthrocnose;

        return $this;
    }

    /**
     * Get tracearthrocnose
     *
     * @return string
     */
    public function getTracearthrocnose()
    {
        return $this->tracearthrocnose;
    }













 /**
     * Set valide
     *
     * @param string $valide
     *
     * @return Exportation
     */
    public function setValide($valide)
    {
        $this->valide = $valide;

        return $this;
    }

    /**
     * Get valide
     *
     * @return string
     */
    public function getValide()
    {
        return $this->valide;
    }















    /**
     * Set marquagenimp15
     *
     * @param string $marquagenimp15
     *
     * @return Exportation
     */
    public function setMarquagenimp15($marquagenimp15)
    {
        $this->marquagenimp15 = $marquagenimp15;

        return $this;
    }

    /**
     * Get marquagenimp15
     *
     * @return string
     */
    public function getMarquagenimp15()
    {
        return $this->marquagenimp15;
    }

    /**
     * Set etatsanitairegeneral
     *
     * @param string $etatsanitairegeneral
     *
     * @return Exportation
     */
    public function setEtatsanitairegeneral($etatsanitairegeneral)
    {
        $this->etatsanitairegeneral = $etatsanitairegeneral;

        return $this;
    }

    /**
     * Get etatsanitairegeneral
     *
     * @return string
     */
    public function getEtatsanitairegeneral()
    {
        return $this->etatsanitairegeneral;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Exportation
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
