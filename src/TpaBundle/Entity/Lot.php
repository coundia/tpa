<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lot
 *
 * @ORM\Table(name="lot", indexes={@ORM\Index(name="FK5qbslk1ioudummgell60ha65585587", columns={"id_campagne"})})
 * @ORM\Entity
 */
class Lot
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
     * @ORM\Column(name="code_lot", type="string", length=50, nullable=false)
     */
    private $codeLot;

    /**
     * @var string
     *
     * @ORM\Column(name="n_lot_recolte", type="string", length=50, nullable=false)
     */
    private $nLotRecolte;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_cageots", type="integer", nullable=false)
     */
    private $nombreCageots;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_brut", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidsBrut;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_net", type="float", precision=10, scale=0, nullable=false)
     */
    private $poidsNet;

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
     * Get identifiant
     *
     * @return integer
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set codeLot
     *
     * @param string $codeLot
     *
     * @return Lot
     */
    public function setCodeLot($codeLot)
    {
        $this->codeLot = $codeLot;

        return $this;
    }

    /**
     * Get codeLot
     *
     * @return string
     */
    public function getCodeLot()
    {
        return $this->codeLot;
    }

    /**
     * Set nLotRecolte
     *
     * @param string $nLotRecolte
     *
     * @return Lot
     */
    public function setNLotRecolte($nLotRecolte)
    {
        $this->nLotRecolte = $nLotRecolte;

        return $this;
    }

    /**
     * Get nLotRecolte
     *
     * @return string
     */
    public function getNLotRecolte()
    {
        return $this->nLotRecolte;
    }

    /**
     * Set nombreCageots
     *
     * @param integer $nombreCageots
     *
     * @return Lot
     */
    public function setNombreCageots($nombreCageots)
    {
        $this->nombreCageots = $nombreCageots;

        return $this;
    }

    /**
     * Get nombreCageots
     *
     * @return integer
     */
    public function getNombreCageots()
    {
        return $this->nombreCageots;
    }

    /**
     * Set poidsBrut
     *
     * @param float $poidsBrut
     *
     * @return Lot
     */
    public function setPoidsBrut($poidsBrut)
    {
        $this->poidsBrut = $poidsBrut;

        return $this;
    }

    /**
     * Get poidsBrut
     *
     * @return float
     */
    public function getPoidsBrut()
    {
        return $this->poidsBrut;
    }

    /**
     * Set poidsNet
     *
     * @param float $poidsNet
     *
     * @return Lot
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
     * Set idCampagne
     *
     * @param \TpaBundle\Entity\Campagne $idCampagne
     *
     * @return Lot
     */
    public function setIdCampagne(\TpaBundle\Entity\Campagne $idCampagne = null)
    {
        $this->idCampagne = $idCampagne;

        return $this;
    }

    /**
     * Get idCampagne
     *
     * @return \TpaBundle\Entity\Campagne
     */
    public function getIdCampagne()
    {
        return $this->idCampagne;
    }
}
