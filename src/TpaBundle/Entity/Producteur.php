<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producteur
 *
 * @ORM\Table(name="producteur")
 * @ORM\Entity
 */
class Producteur
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="string", length=255, nullable=true)
     */
    private $addresse;

    /**
     * @var string
     *
     * @ORM\Column(name="statutLegal", type="string", length=255, nullable=true)
     */
    private $statutlegal;

    /**
     * @var string
     *
     * @ORM\Column(name="ninea", type="string", length=255, nullable=true)
     */
    private $ninea;

    /**
     * @var string
     *
     * @ORM\Column(name="siegeSocial", type="string", length=255, nullable=true)
     */
    private $siegesocial;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=255, nullable=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;


    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=255, nullable=true)
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255, nullable=true)
     */
    private $commune;

    /**
     * @var string
     *
     * @ORM\Column(name="arrondissement", type="string", length=255, nullable=true)
     */
    private $arrondissement;

    /**
     * @var string
     *
     * @ORM\Column(name="village", type="string", length=255, nullable=true)
     */
    private $village;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel", type="string", length=255, nullable=true)
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="numFixe", type="string", length=255, nullable=true)
     */
    private $numfixe;

    /**
     * @var string
     *
     * @ORM\Column(name="fex", type="string", length=255, nullable=true)
     */
    private $fex;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomRep", type="string", length=255, nullable=true)
     */
    private $prenomrep;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRep", type="string", length=255, nullable=true)
     */
    private $nomrep;

    /**
     * @var string
     *
     * @ORM\Column(name="addresseRep", type="string", length=255, nullable=true)
     */
    private $addresserep;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionRep", type="string", length=255, nullable=true)
     */
    private $fonctionrep;

    /**
     * @var string
     *
     * @ORM\Column(name="mobileRep", type="string", length=255, nullable=true)
     */
    private $mobilerep;

    /**
     * @var string
     *
     * @ORM\Column(name="fixeRep", type="string", length=255, nullable=true)
     */
    private $fixerep;

    /**
     * @var string
     *
     * @ORM\Column(name="faxeRep", type="string", length=255, nullable=true)
     */
    private $faxerep;

    /**
     * @var string
     *
     * @ORM\Column(name="emailRep", type="string", length=255, nullable=true)
     */
    private $emailrep;

    /**
     * @var string
     *
     * @ORM\Column(name="nomManager", type="string", length=255, nullable=true)
     */
    private $nommanager;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomManager", type="string", length=255, nullable=true)
     */
    private $prenommanager;

    /**
     * @var string
     *
     * @ORM\Column(name="titreManager", type="string", length=255, nullable=true)
     */
    private $titremanager;

    /**
     * @var string
     *
     * @ORM\Column(name="telManager", type="string", length=255, nullable=true)
     */
    private $telmanager;

    /**
     * @var string
     *
     * @ORM\Column(name="emailManager", type="string", length=255, nullable=true)
     */
    private $emailmanager;

    /**
     * @var string
     *
     * @ORM\Column(name="conditionnement", type="string", length=255, nullable=true)
     */
    private $conditionnement;

    /**
     * @var string
     *
     * @ORM\Column(name="exportation", type="string", length=255, nullable=true)
     */
    private $exportation;

    /**
     * @var string
     *
     * @ORM\Column(name="vulgarisation", type="string", length=255, nullable=true)
     */
    private $vulgarisation;

    /**
     * @var string
     *
     * @ORM\Column(name="bordChamp", type="string", length=255, nullable=true)
     */
    private $bordchamp;

    /**
     * @var string
     *
     * @ORM\Column(name="europe", type="string", length=255, nullable=true)
     */
    private $europe;

    /**
     * @var string
     *
     * @ORM\Column(name="regie", type="string", length=255, nullable=true)
     */
    private $regie;

    /**
     * @var string
     *
     * @ORM\Column(name="enStation", type="string", length=255, nullable=true)
     */
    private $enstation;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=255, nullable=true)
     */
    private $autre;

    /**
     * @var string
     *
     * @ORM\Column(name="gestionInterne", type="string", length=255, nullable=true)
     */
    private $gestioninterne;

    /**
     * @var string
     *
     * @ORM\Column(name="consultant", type="string", length=255, nullable=true)
     */
    private $consultant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="noteProduction", type="string", length=255, nullable=true)
     */
    private $noteproduction;

    /**
     * @var string
     *
     * @ORM\Column(name="noteExportation", type="string", length=255, nullable=true)
     */
    private $noteexportation;

    /**
     * @var string
     *
     * @ORM\Column(name="noteCond", type="string", length=255, nullable=true)
     */
    private $notecond;

    /**
     * @var string
     *
     * @ORM\Column(name="notePrestation", type="string", length=255, nullable=true)
     */
    private $noteprestation;



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
     * Set nom
     *
     * @param string $nom
     *
     * @return Producteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Producteur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set addresse
     *
     * @param string $addresse
     *
     * @return Producteur
     */
    public function setAddresse($addresse)
    {
        $this->addresse = $addresse;

        return $this;
    }

    /**
     * Get addresse
     *
     * @return string
     */
    public function getAddresse()
    {
        return $this->addresse;
    }

    /**
     * Set statutlegal
     *
     * @param string $statutlegal
     *
     * @return Producteur
     */
    public function setStatutlegal($statutlegal)
    {
        $this->statutlegal = $statutlegal;

        return $this;
    }

    /**
     * Get statutlegal
     *
     * @return string
     */
    public function getStatutlegal()
    {
        return $this->statutlegal;
    }

    /**
     * Set ninea
     *
     * @param string $ninea
     *
     * @return Producteur
     */
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;

        return $this;
    }

    /**
     * Get ninea
     *
     * @return string
     */
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * Set siegesocial
     *
     * @param string $siegesocial
     *
     * @return Producteur
     */
    public function setSiegesocial($siegesocial)
    {
        $this->siegesocial = $siegesocial;

        return $this;
    }

    /**
     * Get siegesocial
     *
     * @return string
     */
    public function getSiegesocial()
    {
        return $this->siegesocial;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Producteur
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Producteur
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set departement
     *
     * @param string $departement
     *
     * @return Producteur
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return Producteur
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set arrondissement
     *
     * @param string $arrondissement
     *
     * @return Producteur
     */
    public function setArrondissement($arrondissement)
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    /**
     * Get arrondissement
     *
     * @return string
     */
    public function getArrondissement()
    {
        return $this->arrondissement;
    }

    /**
     * Set village
     *
     * @param string $village
     *
     * @return Producteur
     */
    public function setVillage($village)
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Get village
     *
     * @return string
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Set numtel
     *
     * @param string $numtel
     *
     * @return Producteur
     */
    public function setNumtel($numtel)
    {
        $this->numtel = $numtel;

        return $this;
    }

    /**
     * Get numtel
     *
     * @return string
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set numfixe
     *
     * @param string $numfixe
     *
     * @return Producteur
     */
    public function setNumfixe($numfixe)
    {
        $this->numfixe = $numfixe;

        return $this;
    }

    /**
     * Get numfixe
     *
     * @return string
     */
    public function getNumfixe()
    {
        return $this->numfixe;
    }

    /**
     * Set fex
     *
     * @param string $fex
     *
     * @return Producteur
     */
    public function setFex($fex)
    {
        $this->fex = $fex;

        return $this;
    }

    /**
     * Get fex
     *
     * @return string
     */
    public function getFex()
    {
        return $this->fex;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Producteur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set prenomrep
     *
     * @param string $prenomrep
     *
     * @return Producteur
     */
    public function setPrenomrep($prenomrep)
    {
        $this->prenomrep = $prenomrep;

        return $this;
    }

    /**
     * Get prenomrep
     *
     * @return string
     */
    public function getPrenomrep()
    {
        return $this->prenomrep;
    }

    /**
     * Set nomrep
     *
     * @param string $nomrep
     *
     * @return Producteur
     */
    public function setNomrep($nomrep)
    {
        $this->nomrep = $nomrep;

        return $this;
    }

    /**
     * Get nomrep
     *
     * @return string
     */
    public function getNomrep()
    {
        return $this->nomrep;
    }

    /**
     * Set addresserep
     *
     * @param string $addresserep
     *
     * @return Producteur
     */
    public function setAddresserep($addresserep)
    {
        $this->addresserep = $addresserep;

        return $this;
    }

    /**
     * Get addresserep
     *
     * @return string
     */
    public function getAddresserep()
    {
        return $this->addresserep;
    }

    /**
     * Set fonctionrep
     *
     * @param string $fonctionrep
     *
     * @return Producteur
     */
    public function setFonctionrep($fonctionrep)
    {
        $this->fonctionrep = $fonctionrep;

        return $this;
    }

    /**
     * Get fonctionrep
     *
     * @return string
     */
    public function getFonctionrep()
    {
        return $this->fonctionrep;
    }

    /**
     * Set mobilerep
     *
     * @param string $mobilerep
     *
     * @return Producteur
     */
    public function setMobilerep($mobilerep)
    {
        $this->mobilerep = $mobilerep;

        return $this;
    }

    /**
     * Get mobilerep
     *
     * @return string
     */
    public function getMobilerep()
    {
        return $this->mobilerep;
    }

    /**
     * Set fixerep
     *
     * @param string $fixerep
     *
     * @return Producteur
     */
    public function setFixerep($fixerep)
    {
        $this->fixerep = $fixerep;

        return $this;
    }

    /**
     * Get fixerep
     *
     * @return string
     */
    public function getFixerep()
    {
        return $this->fixerep;
    }

    /**
     * Set faxerep
     *
     * @param string $faxerep
     *
     * @return Producteur
     */
    public function setFaxerep($faxerep)
    {
        $this->faxerep = $faxerep;

        return $this;
    }

    /**
     * Get faxerep
     *
     * @return string
     */
    public function getFaxerep()
    {
        return $this->faxerep;
    }

    /**
     * Set emailrep
     *
     * @param string $emailrep
     *
     * @return Producteur
     */
    public function setEmailrep($emailrep)
    {
        $this->emailrep = $emailrep;

        return $this;
    }

    /**
     * Get emailrep
     *
     * @return string
     */
    public function getEmailrep()
    {
        return $this->emailrep;
    }

    /**
     * Set nommanager
     *
     * @param string $nommanager
     *
     * @return Producteur
     */
    public function setNommanager($nommanager)
    {
        $this->nommanager = $nommanager;

        return $this;
    }

    /**
     * Get nommanager
     *
     * @return string
     */
    public function getNommanager()
    {
        return $this->nommanager;
    }

    /**
     * Set prenommanager
     *
     * @param string $prenommanager
     *
     * @return Producteur
     */
    public function setPrenommanager($prenommanager)
    {
        $this->prenommanager = $prenommanager;

        return $this;
    }

    /**
     * Get prenommanager
     *
     * @return string
     */
    public function getPrenommanager()
    {
        return $this->prenommanager;
    }

    /**
     * Set titremanager
     *
     * @param string $titremanager
     *
     * @return Producteur
     */
    public function setTitremanager($titremanager)
    {
        $this->titremanager = $titremanager;

        return $this;
    }

    /**
     * Get titremanager
     *
     * @return string
     */
    public function getTitremanager()
    {
        return $this->titremanager;
    }

    /**
     * Set telmanager
     *
     * @param string $telmanager
     *
     * @return Producteur
     */
    public function setTelmanager($telmanager)
    {
        $this->telmanager = $telmanager;

        return $this;
    }

    /**
     * Get telmanager
     *
     * @return string
     */
    public function getTelmanager()
    {
        return $this->telmanager;
    }

    /**
     * Set emailmanager
     *
     * @param string $emailmanager
     *
     * @return Producteur
     */
    public function setEmailmanager($emailmanager)
    {
        $this->emailmanager = $emailmanager;

        return $this;
    }

    /**
     * Get emailmanager
     *
     * @return string
     */
    public function getEmailmanager()
    {
        return $this->emailmanager;
    }

    /**
     * Set conditionnement
     *
     * @param string $conditionnement
     *
     * @return Producteur
     */
    public function setConditionnement($conditionnement)
    {
        $this->conditionnement = $conditionnement;

        return $this;
    }

    /**
     * Get conditionnement
     *
     * @return string
     */
    public function getConditionnement()
    {
        return $this->conditionnement;
    }

    /**
     * Set exportation
     *
     * @param string $exportation
     *
     * @return Producteur
     */
    public function setExportation($exportation)
    {
        $this->exportation = $exportation;

        return $this;
    }

    /**
     * Get exportation
     *
     * @return string
     */
    public function getExportation()
    {
        return $this->exportation;
    }

    /**
     * Set vulgarisation
     *
     * @param string $vulgarisation
     *
     * @return Producteur
     */
    public function setVulgarisation($vulgarisation)
    {
        $this->vulgarisation = $vulgarisation;

        return $this;
    }

    /**
     * Get vulgarisation
     *
     * @return string
     */
    public function getVulgarisation()
    {
        return $this->vulgarisation;
    }

    /**
     * Set bordchamp
     *
     * @param string $bordchamp
     *
     * @return Producteur
     */
    public function setBordchamp($bordchamp)
    {
        $this->bordchamp = $bordchamp;

        return $this;
    }

    /**
     * Get bordchamp
     *
     * @return string
     */
    public function getBordchamp()
    {
        return $this->bordchamp;
    }

    /**
     * Set europe
     *
     * @param string $europe
     *
     * @return Producteur
     */
    public function setEurope($europe)
    {
        $this->europe = $europe;

        return $this;
    }

    /**
     * Get europe
     *
     * @return string
     */
    public function getEurope()
    {
        return $this->europe;
    }

    /**
     * Set regie
     *
     * @param string $regie
     *
     * @return Producteur
     */
    public function setRegie($regie)
    {
        $this->regie = $regie;

        return $this;
    }

    /**
     * Get regie
     *
     * @return string
     */
    public function getRegie()
    {
        return $this->regie;
    }

    /**
     * Set enstation
     *
     * @param string $enstation
     *
     * @return Producteur
     */
    public function setEnstation($enstation)
    {
        $this->enstation = $enstation;

        return $this;
    }

    /**
     * Get enstation
     *
     * @return string
     */
    public function getEnstation()
    {
        return $this->enstation;
    }

    /**
     * Set autre
     *
     * @param string $autre
     *
     * @return Producteur
     */
    public function setAutre($autre)
    {
        $this->autre = $autre;

        return $this;
    }

    /**
     * Get autre
     *
     * @return string
     */
    public function getAutre()
    {
        return $this->autre;
    }

    /**
     * Set gestioninterne
     *
     * @param string $gestioninterne
     *
     * @return Producteur
     */
    public function setGestioninterne($gestioninterne)
    {
        $this->gestioninterne = $gestioninterne;

        return $this;
    }

    /**
     * Get gestioninterne
     *
     * @return string
     */
    public function getGestioninterne()
    {
        return $this->gestioninterne;
    }

    /**
     * Set consultant
     *
     * @param string $consultant
     *
     * @return Producteur
     */
    public function setConsultant($consultant)
    {
        $this->consultant = $consultant;

        return $this;
    }

    /**
     * Get consultant
     *
     * @return string
     */
    public function getConsultant()
    {
        return $this->consultant;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Producteur
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set noteproduction
     *
     * @param string $noteproduction
     *
     * @return Producteur
     */
    public function setNoteproduction($noteproduction)
    {
        $this->noteproduction = $noteproduction;

        return $this;
    }

    /**
     * Get noteproduction
     *
     * @return string
     */
    public function getNoteproduction()
    {
        return $this->noteproduction;
    }

    /**
     * Set noteexportation
     *
     * @param string $noteexportation
     *
     * @return Producteur
     */
    public function setNoteexportation($noteexportation)
    {
        $this->noteexportation = $noteexportation;

        return $this;
    }

    /**
     * Get noteexportation
     *
     * @return string
     */
    public function getNoteexportation()
    {
        return $this->noteexportation;
    }

    /**
     * Set notecond
     *
     * @param string $notecond
     *
     * @return Producteur
     */
    public function setNotecond($notecond)
    {
        $this->notecond = $notecond;

        return $this;
    }

    /**
     * Get notecond
     *
     * @return string
     */
    public function getNotecond()
    {
        return $this->notecond;
    }

    /**
     * Set noteprestation
     *
     * @param string $noteprestation
     *
     * @return Producteur
     */
    public function setNoteprestation($noteprestation)
    {
        $this->noteprestation = $noteprestation;

        return $this;
    }

    /**
     * Get noteprestation
     *
     * @return string
     */
    public function getNoteprestation()
    {
        return $this->noteprestation;
    }
}
