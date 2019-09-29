<?php

namespace NosFormulairesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailLot
 *
 * @ORM\Table(name="detail_lot", indexes={@ORM\Index(name="FK5qbslk1ioudummgell60ha644478", columns={"id_lot"}), @ORM\Index(name="FK5qbslk1ioudummg", columns={"id_campagne"})})
 * @ORM\Entity
 */
class DetailLot
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
     * @ORM\Column(name="calibre", type="string", length=100, nullable=false)
     */
    private $calibre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_carton", type="integer", nullable=false)
     */
    private $nombreCarton;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_net", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidsNet;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_palette", type="integer", nullable=false)
     */
    private $nPalette;

    /**
     * @var \Campagne
     *
     * @ORM\ManyToOne(targetEntity="Campagne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_campagne", referencedColumnName="identifiant")
     * })
     */
    private $idCampagne;

    /**
     * @var \Lot
     *
     * @ORM\ManyToOne(targetEntity="Lot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_lot", referencedColumnName="identifiant")
     * })
     */
    private $idLot;



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
     * Set calibre
     *
     * @param string $calibre
     *
     * @return DetailLot
     */
    public function setCalibre($calibre)
    {
        $this->calibre = $calibre;

        return $this;
    }

    /**
     * Get calibre
     *
     * @return string
     */
    public function getCalibre()
    {
        return $this->calibre;
    }

    /**
     * Set nombreCarton
     *
     * @param integer $nombreCarton
     *
     * @return DetailLot
     */
    public function setNombreCarton($nombreCarton)
    {
        $this->nombreCarton = $nombreCarton;

        return $this;
    }

    /**
     * Get nombreCarton
     *
     * @return integer
     */
    public function getNombreCarton()
    {
        return $this->nombreCarton;
    }

    /**
     * Set poidsNet
     *
     * @param float $poidsNet
     *
     * @return DetailLot
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
     * Set nPalette
     *
     * @param integer $nPalette
     *
     * @return DetailLot
     */
    public function setNPalette($nPalette)
    {
        $this->nPalette = $nPalette;

        return $this;
    }

    /**
     * Get nPalette
     *
     * @return integer
     */
    public function getNPalette()
    {
        return $this->nPalette;
    }

    /**
     * Set idCampagne
     *
     * @param \NosFormulairesBundle\Entity\Campagne $idCampagne
     *
     * @return DetailLot
     */
    public function setIdCampagne(\NosFormulairesBundle\Entity\Campagne $idCampagne = null)
    {
        $this->idCampagne = $idCampagne;

        return $this;
    }

    /**
     * Get idCampagne
     *
     * @return \NosFormulairesBundle\Entity\Campagne
     */
    public function getIdCampagne()
    {
        return $this->idCampagne;
    }

    /**
     * Set idLot
     *
     * @param \NosFormulairesBundle\Entity\Lot $idLot
     *
     * @return DetailLot
     */
    public function setIdLot(\NosFormulairesBundle\Entity\Lot $idLot = null)
    {
        $this->idLot = $idLot;

        return $this;
    }

    /**
     * Get idLot
     *
     * @return \NosFormulairesBundle\Entity\Lot
     */
    public function getIdLot()
    {
        return $this->idLot;
    }
}
