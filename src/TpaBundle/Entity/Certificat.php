<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 18/05/2018
 * Time: 11:06
 */

namespace TpaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Certificat
 *
 * @ORM\Table(name="certificat")
 * @ORM\Entity(repositoryClass="TpaBundle\Repository\CertificatRepository")
 */

class Certificat
{
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "certificat/pdf" })
     */
    private $brochure;

    public function getBrochure()
    {
        return $this->brochure;
    }

    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }

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
     * @var integer
     *
     * @ORM\Column(name="numero_cert", type="integer", length=50, nullable=true)
     */
    private $numero_cert;
    /**
     * @var date
     *
     * @ORM\Column(name="date_cert", type="date", length=50, nullable=true)
     */
    private $date_cert;
    /**
     * @var date
     *
     * @ORM\Column(name="date_exp", type="date", length=100, nullable=true)
     */
    private $date_exp;

    /**
     * @var string
     *
     * @ORM\Column(name="certificat", type="string")
     */
    private $certificat;


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
        $this->numero_cert = $numeroCert;

        return $this;
    }

    /**
     * Get numeroCert
     *
     * @return integer
     */
    public function getNumeroCert()
    {
        return $this->numero_cert;
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
        $this->date_cert = $dateCert;

        return $this;
    }

    /**
     * Get dateCert
     *
     * @return \DateTime
     */
    public function getDateCert()
    {
        return $this->date_cert;
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
        $this->date_exp = $dateExp;

        return $this;
    }

    /**
     * Get dateExp
     *
     * @return \DateTime
     */
    public function getDateExp()
    {
        return $this->date_exp;
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
