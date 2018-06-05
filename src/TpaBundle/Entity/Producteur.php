<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producteur
 *
 * @ORM\Table(name="producteur")
 * @ORM\Entity(repositoryClass="TpaBundle\Repository\ProducteurRepository")
 */
class Producteur
{
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
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;
    /**
     * @var string
     *
     * @ORM\Column(name="date", type="datetime", length=100, nullable=true)
     */
    private $date;
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="statutLegal", type="string", length=255, nullable=true)
     */
    private $statutLegal;
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
    private $siegeSocial;
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
    private $numTel;
    /**
     * @var string
     *
     * @ORM\Column(name="numFixe", type="string", length=255, nullable=true)
     */
    private $numFixe;
    /**
     * @var string
     *
     * @ORM\Column(name="fex", type="string", length=255, nullable=true)
     */
    private $fax;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="addresse", type="string", length=255, nullable=true)
     */
    private $addresse;
//    Partie du representant legal

    /**
     * @var string
     *
     * @ORM\Column(name="prenomRep", type="string", length=255, nullable=true)
     */
    private $prenomRep;

    /**
     * @var string
     *
     * @ORM\Column(name="nomRep", type="string", length=255, nullable=true)
     */
    private $nomRep;

    /**
     * @var string
     *
     * @ORM\Column(name="addresseRep", type="string", length=255, nullable=true)
     */
    private $addresseRep;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionRep", type="string", length=255, nullable=true)
     */
    private $fonctionRep;

    /**
     * @var string
     *
     * @ORM\Column(name="mobileRep", type="string", length=255, nullable=true)
     */
    private $mobileRep_;

    /**
     * @var string
     *
     * @ORM\Column(name="fixeRep", type="string", length=255, nullable=true)
     */
    private $fixeRep;

    /**
     * @var string
     *
     * @ORM\Column(name="faxeRep", type="string", length=255, nullable=true)
     */
    private $faxeRep;

    /**
     * @var string
     *
     * @ORM\Column(name="emailRep", type="string", length=255, nullable=true)
     */
    private $emailRep;
//    Partie responsable manager

    /**
     * @var string
     *
     * @ORM\Column(name="nomManager", type="string", length=255, nullable=true)
     */
    private $nomManager;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomManager", type="string", length=255, nullable=true)
     */
    private $prenomManager;

    /**
     * @var string
     *
     * @ORM\Column(name="titreManager", type="string", length=255, nullable=true)
     */
    private $titreManager;

    /**
     * @var string
     *
     * @ORM\Column(name="telManager", type="string", length=255, nullable=true)
     */
    private $telManager;

    /**
     * @var string
     *
     * @ORM\Column(name="emailManager", type="string", length=255, nullable=true)
     */
    private $emailManager;
    //Activités

    /**
     * @var string
     *
     * @ORM\Column(name="noteProduction", type="string", length=255, nullable=true)
     */
    private $notePproduction;
    /**
     * @var string
     *
     * @ORM\Column(name="noteExportation", type="string", length=255, nullable=true)
     */
    private $noteExportation;
    /**
     * @var string
     *
     * @ORM\Column(name="noteCond", type="string", length=255, nullable=true)
     */
    private $noteCond;
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
     * @ORM\Column(name="notePrestation", type="string", length=255, nullable=true)
     */
    private $notePprestation;

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
    private $bordChamp;

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
    private $enStation;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=255, nullable=true)
     */
    private $autresr;
    //gestion de la qualité
 
    /**
     * @var string
     *
     * @ORM\Column(name="gestionInterne", type="string", length=255, nullable=true)
     */
    private $gestionInterne;
    /**
     * @var string
     *
     * @ORM\Column(name="consultant", type="string", length=255, nullable=true)
     */
    private $consultant;

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
     * Set statutLegal
     *
     * @param string $statutLegal
     *
     * @return Producteur
     */
    public function setStatutLegal($statutLegal)
    {
        $this->statutLegal = $statutLegal;

        return $this;
    }

    /**
     * Get statutLegal
     *
     * @return string
     */
    public function getStatutLegal()
    {
        return $this->statutLegal;
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
     * Set siegeSocial
     *
     * @param string $siegeSocial
     *
     * @return Producteur
     */
    public function setSiegeSocial($siegeSocial)
    {
        $this->siegeSocial = $siegeSocial;

        return $this;
    }

    /**
     * Get siegeSocial
     *
     * @return string
     */
    public function getSiegeSocial()
    {
        return $this->siegeSocial;
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
     * Set numTel
     *
     * @param string $numTel
     *
     * @return Producteur
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return string
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set numFixe
     *
     * @param string $numFixe
     *
     * @return Producteur
     */
    public function setNumFixe($numFixe)
    {
        $this->numFixe = $numFixe;

        return $this;
    }

    /**
     * Get numFixe
     *
     * @return string
     */
    public function getNumFixe()
    {
        return $this->numFixe;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Producteur
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
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
     * Set prenomRep
     *
     * @param string $prenomRep
     *
     * @return Producteur
     */
    public function setPrenomRep($prenomRep)
    {
        $this->prenomRep = $prenomRep;

        return $this;
    }

    /**
     * Get prenomRep
     *
     * @return string
     */
    public function getPrenomRep()
    {
        return $this->prenomRep;
    }

    /**
     * Set nomRep
     *
     * @param string $nomRep
     *
     * @return Producteur
     */
    public function setNomRep($nomRep)
    {
        $this->nomRep = $nomRep;

        return $this;
    }

    /**
     * Get nomRep
     *
     * @return string
     */
    public function getNomRep()
    {
        return $this->nomRep;
    }

    /**
     * Set addresseRep
     *
     * @param string $addresseRep
     *
     * @return Producteur
     */
    public function setAddresseRep($addresseRep)
    {
        $this->addresseRep = $addresseRep;

        return $this;
    }

    /**
     * Get addresseRep
     *
     * @return string
     */
    public function getAddresseRep()
    {
        return $this->addresseRep;
    }

    /**
     * Set fonctionRep
     *
     * @param string $fonctionRep
     *
     * @return Producteur
     */
    public function setFonctionRep($fonctionRep)
    {
        $this->fonctionRep = $fonctionRep;

        return $this;
    }

    /**
     * Get fonctionRep
     *
     * @return string
     */
    public function getFonctionRep()
    {
        return $this->fonctionRep;
    }

    /**
     * Set mobileRep
     *
     * @param string $mobileRep
     *
     * @return Producteur
     */
    public function setMobileRep($mobileRep)
    {
        $this->mobileRep_ = $mobileRep;

        return $this;
    }

    /**
     * Get mobileRep
     *
     * @return string
     */
    public function getMobileRep()
    {
        return $this->mobileRep_;
    }

    /**
     * Set fixeRep
     *
     * @param string $fixeRep
     *
     * @return Producteur
     */
    public function setFixeRep($fixeRep)
    {
        $this->fixeRep = $fixeRep;

        return $this;
    }

    /**
     * Get fixeRep
     *
     * @return string
     */
    public function getFixeRep()
    {
        return $this->fixeRep;
    }

    /**
     * Set faxeRep
     *
     * @param string $faxeRep
     *
     * @return Producteur
     */
    public function setFaxeRep($faxeRep)
    {
        $this->faxeRep = $faxeRep;

        return $this;
    }

    /**
     * Get faxeRep
     *
     * @return string
     */
    public function getFaxeRep()
    {
        return $this->faxeRep;
    }

    /**
     * Set emailRep
     *
     * @param string $emailRep
     *
     * @return Producteur
     */
    public function setEmailRep($emailRep)
    {
        $this->emailRep = $emailRep;

        return $this;
    }

    /**
     * Get emailRep
     *
     * @return string
     */
    public function getEmailRep()
    {
        return $this->emailRep;
    }

    /**
     * Set nomManager
     *
     * @param string $nomManager
     *
     * @return Producteur
     */
    public function setNomManager($nomManager)
    {
        $this->nomManager = $nomManager;

        return $this;
    }

    /**
     * Get nomManager
     *
     * @return string
     */
    public function getNomManager()
    {
        return $this->nomManager;
    }

    /**
     * Set prenomManager
     *
     * @param string $prenomManager
     *
     * @return Producteur
     */
    public function setPrenomManager($prenomManager)
    {
        $this->prenomManager = $prenomManager;

        return $this;
    }

    /**
     * Get prenomManager
     *
     * @return string
     */
    public function getPrenomManager()
    {
        return $this->prenomManager;
    }

    /**
     * Set titreManager
     *
     * @param string $titreManager
     *
     * @return Producteur
     */
    public function setTitreManager($titreManager)
    {
        $this->titreManager = $titreManager;

        return $this;
    }

    /**
     * Get titreManager
     *
     * @return string
     */
    public function getTitreManager()
    {
        return $this->titreManager;
    }

    /**
     * Set telManager
     *
     * @param string $telManager
     *
     * @return Producteur
     */
    public function setTelManager($telManager)
    {
        $this->telManager = $telManager;

        return $this;
    }

    /**
     * Get telManager
     *
     * @return string
     */
    public function getTelManager()
    {
        return $this->telManager;
    }

    /**
     * Set emailManager
     *
     * @param string $emailManager
     *
     * @return Producteur
     */
    public function setEmailManager($emailManager)
    {
        $this->emailManager = $emailManager;

        return $this;
    }

    /**
     * Get emailManager
     *
     * @return string
     */
    public function getEmailManager()
    {
        return $this->emailManager;
    }

    /**
     * Set noteProduction
     *
     * @param string $noteProduction
     *
     * @return Producteur
     */
    public function setProduction($noteProduction)
    {
        $this->production = $noteProduction;

        return $this;
    }

    /**
     * Get noteProduction
     *
     * @return string
     */
    public function getProduction()
    {
        return $this->noteProduction;
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
     * Set prestation
     *
     * @param string $prestation
     *
     * @return Producteur
     */
    public function setPrestation($prestation)
    {
        $this->prestation = $prestation;

        return $this;
    }

    /**
     * Get prestation
     *
     * @return string
     */
    public function getPrestation()
    {
        return $this->prestation;
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
     * Set bordChamp
     *
     * @param string $bordChamp
     *
     * @return Producteur
     */
    public function setBordChamp($bordChamp)
    {
        $this->bordChamp = $bordChamp;

        return $this;
    }

    /**
     * Get bordChamp
     *
     * @return string
     */
    public function getBordChamp()
    {
        return $this->bordChamp;
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
     * Set enStation
     *
     * @param string $enStation
     *
     * @return Producteur
     */
    public function setEnStation($enStation)
    {
        $this->enStation = $enStation;

        return $this;
    }

    /**
     * Get enStation
     *
     * @return string
     */
    public function getEnStation()
    {
        return $this->enStation;
    }

    /**
     * Set autresr
     *
     * @param string $autresr
     *
     * @return Producteur
     */
    public function setAutresr($autresr)
    {
        $this->autresr = $autresr;

        return $this;
    }

    /**
     * Get autresr
     *
     * @return string
     */
    public function getAutresr()
    {
        return $this->autresr;
    }





    /**
     * Set gestionInterne
     *
     * @param string $gestionInterne
     *
     * @return Producteur
     */
    public function setGestionInterne($gestionInterne)
    {
        $this->gestionInterne = $gestionInterne;

        return $this;
    }

    /**
     * Get gestionInterne
     *
     * @return string
     */
    public function getGestionInterne()
    {
        return $this->gestionInterne;
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
     * @param datetime $date
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
     * @return date
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Set notePproduction
     *
     * @param string $notePproduction
     *
     * @return Producteur
     */
    public function setNotePproduction($notePproduction)
    {
        $this->notePproduction = $notePproduction;

        return $this;
    }

    /**
     * Get notePproduction
     *
     * @return string
     */
    public function getNotePproduction()
    {
        return $this->notePproduction;
    }

    /**
     * Set noteExportation
     *
     * @param string $noteExportation
     *
     * @return Producteur
     */
    public function setNoteExportation($noteExportation)
    {
        $this->noteExportation = $noteExportation;

        return $this;
    }

    /**
     * Get noteExportation
     *
     * @return string
     */
    public function getNoteExportation()
    {
        return $this->noteExportation;
    }

    /**
     * Set noteCond
     *
     * @param string $noteCond
     *
     * @return Producteur
     */
    public function setNoteCond($noteCond)
    {
        $this->noteCond = $noteCond;

        return $this;
    }

    /**
     * Get noteCond
     *
     * @return string
     */
    public function getNoteCond()
    {
        return $this->noteCond;
    }

    /**
     * Set notePprestation
     *
     * @param string $notePprestation
     *
     * @return Producteur
     */
    public function setNotePprestation($notePprestation)
    {
        $this->notePprestation = $notePprestation;

        return $this;
    }

    /**
     * Get notePprestation
     *
     * @return string
     */
    public function getNotePprestation()
    {
        return $this->notePprestation;
    }
}
