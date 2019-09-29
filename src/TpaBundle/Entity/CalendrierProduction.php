<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendrierProduction
 *
 * @ORM\Table(name="calendrier_production", indexes={@ORM\Index(name="IDX_C8483468AB9BB300", columns={"producteur_id"})})
 * @ORM\Entity
 */
class CalendrierProduction
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
     * @ORM\Column(name="surfaceCultive", type="string", length=100, nullable=true)
     */
    private $surfacecultive;

    /**
     * @var string
     *
     * @ORM\Column(name="date_debut", type="string", length=255, nullable=true)
     */
    private $dateDebut;

    /**
     * @var string
     *
     * @ORM\Column(name="date_fin", type="string", length=255, nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=50, nullable=true)
     */
    private $destination;

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
     * @return CalendrierProduction
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
     * Set surfacecultive
     *
     * @param string $surfacecultive
     *
     * @return CalendrierProduction
     */
    public function setSurfacecultive($surfacecultive)
    {
        $this->surfacecultive = $surfacecultive;

        return $this;
    }

    /**
     * Get surfacecultive
     *
     * @return string
     */
    public function getSurfacecultive()
    {
        return $this->surfacecultive;
    }

    /**
     * Set dateDebut
     *
     * @param string $dateDebut
     *
     * @return CalendrierProduction
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param string $dateFin
     *
     * @return CalendrierProduction
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return CalendrierProduction
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set producteur
     *
     * @param \TpaBundle\Entity\Producteur $producteur
     *
     * @return CalendrierProduction
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
