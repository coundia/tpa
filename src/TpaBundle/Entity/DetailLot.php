<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailLot
 *
 * @ORM\Table(name="detail_lot", indexes={@ORM\Index(name="FK5qbslk1ioudummg", columns={"id_campagne"}), @ORM\Index(name="FK5qbslk1ioudummgell60ha644478", columns={"id_lot"})})
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
     * @var integer
     *
     * @ORM\Column(name="id_lot", type="integer", nullable=true)
     */
    private $idLot;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_campagne", type="integer", nullable=true)
     */
    private $idCampagne;

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
     * Get identifiant
     *
     * @return integer
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set idLot
     *
     * @param integer $idLot
     *
     * @return DetailLot
     */
    public function setIdLot($idLot)
    {
        $this->idLot = $idLot;

        return $this;
    }

    /**
     * Get idLot
     *
     * @return integer
     */
    public function getIdLot()
    {
        return $this->idLot;
    }

    /**
     * Set idCampagne
     *
     * @param integer $idCampagne
     *
     * @return DetailLot
     */
    public function setIdCampagne($idCampagne)
    {
        $this->idCampagne = $idCampagne;

        return $this;
    }

    /**
     * Get idCampagne
     *
     * @return integer
     */
    public function getIdCampagne()
    {
        return $this->idCampagne;
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
}
