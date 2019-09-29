<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteConditionnement
 *
 * @ORM\Table(name="site_conditionnement", indexes={@ORM\Index(name="IDX_31D134D1AB9BB300", columns={"producteur_id"})})
 * @ORM\Entity
 */
class SiteConditionnement
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
     * @ORM\Column(name="speculation", type="string", length=50, nullable=true)
     */
    private $speculation;

    /**
     * @var string
     *
     * @ORM\Column(name="siteCond", type="string", length=255, nullable=true)
     */
    private $sitecond;


    /**
     * @var string
     *
     * @ORM\Column(name="zones", type="string", length=30, nullable=true)
     */
    private $zones;

    /**
     * @var string
     *
     * @ORM\Column(name="contrat_prestation", type="string", length=5, nullable=true)
     */
    private $contrat_prestation;
    /**
     * @var string
     *
     * @ORM\Column(name="contrat_location", type="string", length=5, nullable=true)
     */
    private $contrat_location;

    /**
     * @var string
     *
     * @ORM\Column(name="lacalisation", type="string", length=50, nullable=true)
     */
    private $lacalisation;

    /**
     * @var \Producteur
     *
     * @ORM\ManyToOne(targetEntity="Producteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="producteur_id", referencedColumnName="id")
     * })
     */
    private $producteur;



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
     * Set speculation
     *
     * @param string $speculation
     *
     * @return SiteConditionnement
     */
    public function setSpeculation($speculation)
    {
        $this->speculation = $speculation;

        return $this;
    }

    /**
     * Get speculation
     *
     * @return string
     */
    public function getSpeculation()
    {
        return $this->speculation;
    }



    /**
     * Set zone
     *
     * @param string $zones
     *
     * @return SiteConditionnement
     */
    public function setZones($zones)
    {
        $this->zones = $zones;

        return $this;
    }

    /**
     * Get zone
     *
     * @return string
     */
    public function getZones()
    {
        return $this->zones;
    }






    /**
     * Set sitecond
     *
     * @param string $sitecond
     *
     * @return SiteConditionnement
     */
    public function setSitecond($sitecond)
    {
        $this->sitecond = $sitecond;

        return $this;
    }

    /**
     * Get sitecond
     *
     * @return string
     */
    public function getSitecond()
    {
        return $this->sitecond;
    }


    /**
     * Set contrat_prestation
     *
     * @param string $contrat_prestation
     *
     * @return SiteConditionnement
     */
    public function setcontrat_prestation($contrat_prestation)
    {
        $this->contrat_prestation = $contrat_prestation;

        return $this;
    }

    /**
     * Get contrat_prestation
     *
     * @return string
     */
    public function getcontrat_prestation()
    {
        return $this->contrat_prestation;
    }
    /**
     * Set contrat_location
     *
     * @param string $contrat_location
     *
     * @return SiteConditionnement
     */
    public function setcontrat_location($contrat_location)
    {
        $this->contrat_location = $contrat_location;

        return $this;
    }

    /**
     * Get contrat_location
     *
     * @return string
     */
    public function getcontrat_location()
    {
        return $this->contrat_location;
    }

    /**
     * Set lacalisation
     *
     * @param string $lacalisation
     *
     * @return SiteConditionnement
     */
    public function setLacalisation($lacalisation)
    {
        $this->lacalisation = $lacalisation;

        return $this;
    }

    /**
     * Get lacalisation
     *
     * @return string
     */
    public function getLacalisation()
    {
        return $this->lacalisation;
    }

    /**
     * Set producteur
     *
     * @param \TpaBundle\Entity\Producteur $producteur
     *
     * @return SiteConditionnement
     */
    public function setProducteur(\TpaBundle\Entity\Producteur $producteur = null)
    {
        $this->producteur = $producteur;

        return $this;
    }









    /**
     * Get producteur
     *
     * @return \TpaBundle\Entity\Producteur
     */
    public function getProducteur()
    {
        return $this->producteur;
    }
}
