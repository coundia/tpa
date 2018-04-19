<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalendrierProduction
 *
 * @ORM\Table(name="calendrier_production")
 * @ORM\Entity(repositoryClass="TpaBundle\Repository\CalendrierProductionRepository")
 */
class CalendrierProduction
{
    /**
     * @ORM\ManyToOne(targetEntity="Producteur")
     * @ORM\JoinColumn(name="producteur_id", referencedColumnName="id")
     */
    private $producteur;

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
     * @ORM\Column(name="speculation", type="string", length=50)
     */
    private $speculation;
    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=50)
     */
    private $destination;
    /**
     * @var string
     *
     * @ORM\Column(name="surfaceCultive", type="string", length=100)
     */
    private $surfaceCultive;

    /**
     * @var date
     *
     * @ORM\Column(name="date_debut", type="string")
     */
    private $date_debut;
    /**
     * @var date
     *
     * @ORM\Column(name="date_fin", type="string")
     */
    private $date_fin;

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
     * Set surfaceCultive
     *
     * @param string $surfaceCultive
     *
     * @return CalendrierProduction
     */
    public function setSurfaceCultive($surfaceCultive)
    {
        $this->surfaceCultive = $surfaceCultive;

        return $this;
    }

    /**
     * Get surfaceCultive
     *
     * @return string
     */
    public function getSurfaceCultive()
    {
        return $this->surfaceCultive;
    }

    /**
     * Set date_debut
     *
     * @param string $date_debut
     *
     * @return CalendrierProduction
     */
    public function setDateDebut($date_debut)
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    /**
     * Get date_debut
     *
     * @return string
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set date_fin
     *
     * @param string $date_fin
     *
     * @return CalendrierProduction
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    /**
     * Get date_fin
     *
     * @return string
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set producteur
     *
     * @param string $producteur
     *
     * @return SiteProduction
     */
    public function setProducteur($producteur)
    {
        $this->producteur = $producteur;

        return $this;
    }

    /**
     * Get $producteur
     *
     * @return string
     */
    public function getProducteur()
    {
        return $this->producteur;
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
}
