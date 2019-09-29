<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Campagne
 *
 * @ORM\Table(name="campagne", indexes={@ORM\Index(name="FK_F3E43E25AB9BB300", columns={"zone_production"})})
 * @ORM\Entity
 */
class Campagne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="identifiant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="campagne", type="string", length=250, nullable=false)
     */
    private $campagne;

    /**
     * @var string
     *
     * @ORM\Column(name="variete", type="string", length=100, nullable=false)
     */
    private $variete;

    /**
     * @var string
     *
     * @ORM\Column(name="n_ordre", type="string", length=50, nullable=false)
     */
    private $nOrdre;

    /**
     * @var string
     *
     * @ORM\Column(name="code_parcelle", type="string", length=100, nullable=false)
     */
    private $codeParcelle;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_brut", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidsBrut;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_chauffeur", type="string", length=50, nullable=false)
     */
    private $nomChauffeur;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_depart", type="string", length=10, nullable=false)
     */
    private $heureDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_arrivee", type="string", length=10, nullable=false)
     */
    private $heureArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="immatriculation_camion", type="string", length=25, nullable=false)
     */
    private $immatriculationCamion;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_responsable_parcelle", type="string", length=50, nullable=false)
     */
    private $nomResponsableParcelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_cageots", type="integer", nullable=false)
     */
    private $nombreCageots;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_net", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidsNet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reception", type="date", nullable=false)
     */
    private $dateReception;

    /**
     * @var \SiteProduction
     *
     * @ORM\ManyToOne(targetEntity="SiteProduction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="zone_production", referencedColumnName="id")
     * })
     */
    private $zoneProduction;



    /**
     * Get identifiant
     *
     * @return integer
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set campagne
     *
     * @param string $campagne
     *
     * @return Campagne
     */
    public function setCampagne($campagne)
    {
        $this->campagne = $campagne;

        return $this;
    }

    /**
     * Get campagne
     *
     * @return string
     */
    public function getCampagne()
    {
        return $this->campagne;
    }

    /**
     * Set variete
     *
     * @param string $variete
     *
     * @return Campagne
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
     * Set nOrdre
     *
     * @param string $nOrdre
     *
     * @return Campagne
     */
    public function setNOrdre($nOrdre)
    {
        $this->nOrdre = $nOrdre;

        return $this;
    }

    /**
     * Get nOrdre
     *
     * @return string
     */
    public function getNOrdre()
    {
        return $this->nOrdre;
    }

    /**
     * Set codeParcelle
     *
     * @param string $codeParcelle
     *
     * @return Campagne
     */
    public function setCodeParcelle($codeParcelle)
    {
        $this->codeParcelle = $codeParcelle;

        return $this;
    }

    /**
     * Get codeParcelle
     *
     * @return string
     */
    public function getCodeParcelle()
    {
        return $this->codeParcelle;
    }

    /**
     * Set poidsBrut
     *
     * @param float $poidsBrut
     *
     * @return Campagne
     */
    public function setPoidsBrut($poidsBrut)
    {
        $this->poidsBrut = $poidsBrut;

        return $this;
    }

    /**
     * Get poidsBrut
     *
     * @return float
     */
    public function getPoidsBrut()
    {
        return $this->poidsBrut;
    }

    /**
     * Set nomChauffeur
     *
     * @param string $nomChauffeur
     *
     * @return Campagne
     */
    public function setNomChauffeur($nomChauffeur)
    {
        $this->nomChauffeur = $nomChauffeur;

        return $this;
    }

    /**
     * Get nomChauffeur
     *
     * @return string
     */
    public function getNomChauffeur()
    {
        return $this->nomChauffeur;
    }

    /**
     * Set heureDepart
     *
     * @param string $heureDepart
     *
     * @return Campagne
     */
    public function setHeureDepart($heureDepart)
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    /**
     * Get heureDepart
     *
     * @return string
     */
    public function getHeureDepart()
    {
        return $this->heureDepart;
    }

    /**
     * Set heureArrivee
     *
     * @param string $heureArrivee
     *
     * @return Campagne
     */
    public function setHeureArrivee($heureArrivee)
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    /**
     * Get heureArrivee
     *
     * @return string
     */
    public function getHeureArrivee()
    {
        return $this->heureArrivee;
    }

    /**
     * Set immatriculationCamion
     *
     * @param string $immatriculationCamion
     *
     * @return Campagne
     */
    public function setImmatriculationCamion($immatriculationCamion)
    {
        $this->immatriculationCamion = $immatriculationCamion;

        return $this;
    }

    /**
     * Get immatriculationCamion
     *
     * @return string
     */
    public function getImmatriculationCamion()
    {
        return $this->immatriculationCamion;
    }

    /**
     * Set nomResponsableParcelle
     *
     * @param string $nomResponsableParcelle
     *
     * @return Campagne
     */
    public function setNomResponsableParcelle($nomResponsableParcelle)
    {
        $this->nomResponsableParcelle = $nomResponsableParcelle;

        return $this;
    }

    /**
     * Get nomResponsableParcelle
     *
     * @return string
     */
    public function getNomResponsableParcelle()
    {
        return $this->nomResponsableParcelle;
    }

    /**
     * Set nombreCageots
     *
     * @param integer $nombreCageots
     *
     * @return Campagne
     */
    public function setNombreCageots($nombreCageots)
    {
        $this->nombreCageots = $nombreCageots;

        return $this;
    }

    /**
     * Get nombreCageots
     *
     * @return integer
     */
    public function getNombreCageots()
    {
        return $this->nombreCageots;
    }

    /**
     * Set poidsNet
     *
     * @param float $poidsNet
     *
     * @return Campagne
     */
    public function setPoidsNet($poidsNet)
    {
        $this->poidsNet = $poidsNet;

        return $this;
    }

    /**
     * Get poidsNet
     *
     * @return float
     */
    public function getPoidsNet()
    {
        return $this->poidsNet;
    }

    /**
     * Set dateReception
     *
     * @param \DateTime $dateReception
     *
     * @return Campagne
     */
    public function setDateReception($dateReception)
    {
        $this->dateReception = $dateReception;

        return $this;
    }

    /**
     * Get dateReception
     *
     * @return \DateTime
     */
    public function getDateReception()
    {
        return $this->dateReception;
    }

    /**
     * Set zoneProduction
     *
     * @param \TpaBundle\Entity\SiteProduction $zoneProduction
     *
     * @return Campagne
     */
    public function setZoneProduction(\TpaBundle\Entity\SiteProduction $zoneProduction = null)
    {
        $this->zoneProduction = $zoneProduction;

        return $this;
    }

    /**
     * Get zoneProduction
     *
     * @return \TpaBundle\Entity\SiteProduction
     */
    public function getZoneProduction()
    {
        return $this->zoneProduction;
    }
}
