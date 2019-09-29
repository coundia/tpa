<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certificat
 *
 * @ORM\Table(name="certificat", indexes={@ORM\Index(name="IDX_27448F77AB9BB300", columns={"producteur_id"})})
 * @ORM\Entity
 */
class Certificat
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
     * @var integer
     *
     * @ORM\Column(name="numero_cert", type="integer", nullable=true)
     */
    private $numeroCert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_cert", type="date", nullable=true)
     */
    private $dateCert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_exp", type="date", nullable=true)
     */
    private $dateExp;

    /**
     * @var string
     *
     * @ORM\Column(name="certificat", type="string", length=255, nullable=true)
     */
    private $certificat;

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
     * Set numeroCert
     *
     * @param integer $numeroCert
     *
     * @return Certificat
     */
    public function setNumeroCert($numeroCert)
    {
        $this->numeroCert = $numeroCert;

        return $this;
    }

    /**
     * Get numeroCert
     *
     * @return integer
     */
    public function getNumeroCert()
    {
        return $this->numeroCert;
    }

    /**
     * Set dateCert
     *
     * @param \DateTime $dateCert
     *
     * @return Certificat
     */
    public function setDateCert($dateCert)
    {
        $this->dateCert = $dateCert;

        return $this;
    }

    /**
     * Get dateCert
     *
     * @return \DateTime
     */
    public function getDateCert()
    {
        return $this->dateCert;
    }

    /**
     * Set dateExp
     *
     * @param \DateTime $dateExp
     *
     * @return Certificat
     */
    public function setDateExp($dateExp)
    {
        $this->dateExp = $dateExp;

        return $this;
    }

    /**
     * Get dateExp
     *
     * @return \DateTime
     */
    public function getDateExp()
    {
        return $this->dateExp;
    }

    /**
     * Set certificat
     *
     * @param string $certificat
     *
     * @return Certificat
     */
    public function setCertificat($certificat)
    {
        $this->certificat = $certificat;

        return $this;
    }

    /**
     * Get certificat
     *
     * @return string
     */
    public function getCertificat()
    {
        return $this->certificat;
    }

    /**
     * Set producteur
     *
     * @param \TpaBundle\Entity\Producteur $producteur
     *
     * @return Certificat
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
