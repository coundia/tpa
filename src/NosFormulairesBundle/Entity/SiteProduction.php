<?php

namespace NosFormulairesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteProduction
 *
 * @ORM\Table(name="site_production")
 * @ORM\Entity
 */
class SiteProduction
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
     * @ORM\Column(name="perimetre", type="string", length=50, nullable=true)
     */
    private $perimetre;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=100, nullable=true)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie", type="string", length=50, nullable=true)
     */
    private $superficie;

    /**
     * @var string
     *
     * @ORM\Column(name="speculation", type="string", length=100, nullable=true)
     */
    private $speculation;

    /**
     * @var string
     *
     * @ORM\Column(name="regie", type="string", length=100, nullable=true)
     */
    private $regie;

    /**
     * @var integer
     *
     * @ORM\Column(name="producteur_id", type="integer", nullable=true)
     */
    private $producteurId;



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
     * Set regie
     *
     * @param string $regie
     *
     * @return SiteProduction
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
     * Set producteurId
     *
     * @param integer $producteurId
     *
     * @return SiteProduction
     */
    public function setProducteurId($producteurId)
    {
        $this->producteurId = $producteurId;

        return $this;
    }

    /**
     * Get producteurId
     *
     * @return integer
     */
    public function getProducteurId()
    {
        return $this->producteurId;
    }
}
