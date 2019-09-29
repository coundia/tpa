<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteProduction
 *
 * @ORM\Table(name="site_production", indexes={@ORM\Index(name="FK_F3E43E25AB9BB3002558", columns={"producteur_id"})})
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
     * @ORM\Column(name="prod_associe", type="string", length=5, nullable=true)
     */
    private $prod_associe;
    /**
     * @var string
     *
     * @ORM\Column(name="piste_associe", type="string", length=5, nullable=true)
     */
    private $piste_associe;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=50, nullable=true)
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
     * @ORM\Column(name="nb_spec", type="string", length=255, nullable=true)
     */
    private $nb_spec;
    /**
     * @var string
     *
     * @ORM\Column(name="regie", type="string", length=100, nullable=true)
     */
    private $regie;

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
     * Set prod_associe
     *
     * @param string $prod_associe
     *
     * @return SiteProduction
     */
    public function setProd_associe($prod_associe)
    {
        $this->prod_associe = $prod_associe;

        return $this;
    }

    /**
     * Get prod_associe
     *
     * @return string
     */
    public function getProd_associe()
    {
        return $this->prod_associe;
    }



    /**
     * Set piste_associe
     *
     * @param string $piste_associe
     *
     * @return SiteProduction
     */
    public function setPiste_associe($piste_associe)
    {
        $this->piste_associe = $piste_associe;

        return $this;
    }

    /**
     * Get prod_associe
     *
     * @return string
     */
    public function getPiste_associe()
    {
        return $this->piste_associe;
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
     * Set nb_spec
     *
     * @param string $nb_spec
     *
     * @return Producteur
     */
    public function setnb_spec($nb_spec)
    {
        $this->nb_spec = $nb_spec;

        return $this;
    }
    /**
     * Get nb_spec
     *
     * @return string
     */
    public function getnb_spec()
    {
        return $this->nb_spec;
    }

    /**
     * Set producteur
     *
     * @param \TpaBundle\Entity\Producteur $producteur
     *
     * @return SiteProduction
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
