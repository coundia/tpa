<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteProduction
 *
 * @ORM\Table(name="site_production")
 * @ORM\Entity(repositoryClass="TpaBundle\Repository\SiteProductionRepository")
 */
class SiteProduction
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
     * @ORM\Column(name="perimetre", type="string", length=50)
     */
    private $perimetre;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie", type="string", length=50)
     */
    private $superficie;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=100)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="speculation", type="string", length=100)
     */
    private $speculation;

    /**
     * @var string
     *
     * @ORM\Column(name="regie", type="string", length=100)
     */
    private $regie;
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
     * Set perimetre
     *
     * @param string $perimetre
     *
     * @return SiteProduction
     */
    public function setPerimetre($perimetre)
    {
        $this->perimetre = $perimetre;

        return $this;
    }

    /**
     * Get perimetre
     *
     * @return string
     */
    public function getPerimetre()
    {
        return $this->perimetre;
    }

    /**
     * Set superficie
     *
     * @param string $superficie
     *
     * @return SiteProduction
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return string
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     *
     * @return SiteProduction
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set speculation
     *
     * @param string $speculation
     *
     * @return SiteProduction
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
     * Set regie
     *
     * @param string $regie
     *
     * @return SiteProduction
     */
    public function setregie($regie)
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



}
