<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteConditionnement
 *
 * @ORM\Table(name="site_conditionnement")
 * @ORM\Entity(repositoryClass="TpaBundle\Repository\SiteConditionnementRepository")
 */
class SiteConditionnement
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
     * @ORM\Column(name="siteCond", type="string", length=255)
     */
    private $siteCond;

    /**
     * @var string
     *
     * @ORM\Column(name="lacalisation", type="string", length=50)
     */
    private $lacalisation;


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
     * Set siteCond
     *
     * @param string $siteCond
     *
     * @return SiteConditionnement
     */
    public function setSiteCond($siteCond)
    {
        $this->siteCond = $siteCond;

        return $this;
    }

    /**
     * Get siteCond
     *
     * @return string
     */
    public function getSiteCond()
    {
        return $this->siteCond;
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
