<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producteur
 *
 * @ORM\Table(name="demande_inspection")
 * @ORM\Entity
 */
class DemandeInspection
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
     * @ORM\Column(name="nom_prenom_demandeur", type="string", length=35, nullable=true)
     */
    private $nom_prenom_demandeur;






    /**
     * @var integer
     *
     * @ORM\Column(name="statuts", type="integer", nullable=false)
     */
    private $statuts = '0';





    /**
     * @var string
     *
     * @ORM\Column(name="nom_entreprise", type="string", length=20, nullable=true)
     */
    private $nom_entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_telephone_demandeur", type="string", length=15, nullable=true)
     */
    private $numero_telephone_demandeur;

    /**
     * @var string
     *
     * @ORM\Column(name="date_appel", type="string", length=15, nullable=true)
     */
    private $date_appel;

    /**
     * @var string
     *
     * @ORM\Column(name="zone_provenance", type="string", length=20, nullable=true)
     */
    private $zone_provenance;

    /**
     * @var string
     *
     * @ORM\Column(name="proprietaire_verger", type="string", length=15, nullable=true)
     */
    private $proprietaire_verger;

    /**
     * @var string
     *
     * @ORM\Column(name="proprietaire_verger1", type="string", length=15, nullable=true)
     */
    private $proprietaire_verger1;
    /**
     * @var string
     *
     * @ORM\Column(name="proprietaire_verger2", type="string", length=15, nullable=true)
     */
    private $proprietaire_verger2;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_conditionnement", type="string", length=15, nullable=true)
     */
    private $lieu_conditionnement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_conditionnement", type="string", length=15, nullable=true)
     */
    private $date_conditionnement;





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
     * Set nom_prenom_demandeur
     *
     * @param string $nom_prenom_demandeur
     *
     * @return Demande_inspection
     */
    public function setNomPrenomDemandeur($nom_prenom_demandeur)
    {
        $this->nom_prenom_demandeur = $nom_prenom_demandeur;

        return $this;
    }

    /**
     * Get nom_prenom_demandeur
     *
     * @return string
     */
    public function getNomPrenomDemandeur()
    {
        return $this->nom_prenom_demandeur;
    }

    /**
     * Set 	nom_entreprise
     *
     * @param string $nom_entreprise
     *
     * @return Demande_inspection
     */
    public function setNomEntreprise($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;

        return $this;
    }

    /**
     * Get 	nom_entreprise
     *
     * @return string
     */
    public function getNomEntreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * Set numero_telephone_demandeur
     *
     * @param string $numero_telephone_demandeur
     *
     * @return Demande_inspection
     */
    public function setNumTelDemandeur($numero_telephone_demandeur)
    {
        $this->numero_telephone_demandeur = $numero_telephone_demandeur;

        return $this;
    }

    /**
     * Get numero_telephone_demandeur
     *
     * @return string
     */
    public function getNumTelDemandeur()
    {
        return $this->numero_telephone_demandeur;
    }

    /**
     * Set date_appel
     *
     * @param string $date_appel
     *
     * @return demande_inspection
     */
    public function setDateAppel($date_appel)
    {
        $this->date_appel = $date_appel;

        return $this;
    }

    /**
     * Get date_appel
     *
     * @return string
     */
    public function getDateAppel()
    {
        return $this->date_appel;
    }

    /**
     * Set zone_provenance
     *
     * @param string $zone_provenance
     *
     * @return demande_inspection
     */
    public function setZoneProvenance($zone_provenance)
    {
        $this->zone_provenance = $zone_provenance;

        return $this;
    }

    /**
     * Get zone_provenance
     *
     * @return string
     */
    public function getZoneProvenance()
    {
        return $this->zone_provenance;
    }

    /**
     * Set proprietaire_verger
     *
     * @param string $proprietaire_verger
     *
     * @return demande_inspection
     */
    public function setProprietaire($proprietaire_verger)
    {
        $this->proprietaire_verger = $proprietaire_verger;

        return $this;
    }

    /**
     * Get proprietaire_verger
     *
     * @return string
     */
    public function getProprietaire()
    {
        return $this->proprietaire_verger;
    }






    /**
     * Set proprietaire_verger11
     *
     * @return demande_inspection1
     */
    public function setProprietaire1($proprietaire_verger1)
    {
        $this->proprietaire_verger1 = $proprietaire_verger1;

        return $this;
    }

    /**
     * Get proprietaire_verger1
     *
     * @return string
     */
    public function getProprietaire1()
    {
        return $this->proprietaire_verger1;
    }




    /**
     * Set proprietaire_verger2
     *
     * @param string $proprietaire_verger2
     *
     * @return demande_inspection
     */
    public function setProprietaire2($proprietaire_verger2)
    {
        $this->proprietaire_verger2 = $proprietaire_verger2;

        return $this;
    }

    /**
     * Get proprietaire_verger
     *
     * @return string
     */
    public function getProprietaire2()
    {
        return $this->proprietaire_verger2;
    }


    /**
     * Set lieu_conditionnement
     *
     * @param string $lieu_conditionnement
     *
     * @return demande_inspection
     */
    public function setLieuCond($lieu_conditionnement)
    {
        $this->lieu_conditionnement = $lieu_conditionnement;

        return $this;
    }

    /**
     * Get lieu_conditionnement
     *
     * @return string
     */
    public function getLieuCond()
    {
        return $this->lieu_conditionnement;
    }



    /**
     * Set statuts
     *
     * @param integer $statut
     *
     * @return DemandeInspection
     */
    public function setStatuts($statuts)
    {
        $this->statuts = $statuts;

        return $this;
    }

    /**
     * Get statuts
     *
     * @return integer
     */
    public function getStatuts()
    {
        return $this->statuts;
    }




  /**
     * Set date_conditionnement
     *
     * @param string $date_conditionnement
     *
     * @return demande_inspection
     */
    public function setDateCond($date_conditionnement)
    {
        $this->date_conditionnement = $date_conditionnement;

        return $this;
    }

    /**
     * Get date_conditionnement
     *
     * @return string
     */
    public function getDateCond()
    {
        return $this->date_conditionnement;
    }





}
