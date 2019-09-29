<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistreReception
 *
 * @ORM\Table(name="registre_reception", indexes={@ORM\Index(name="FK5qbslk1ioudummgell60ha69j", columns={"id_campagne"})})
 * @ORM\Entity
 */
class RegistreReception
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ordre_arrive", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ordreArrive;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_campagne", type="integer", nullable=true)
     */
    private $idCampagne;

    /**
     * @var string
     *
     * @ORM\Column(name="parcelle_origine", type="string", length=250, nullable=false)
     */
    private $parcelleOrigine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_recolte", type="date", nullable=false)
     */
    private $dateRecolte;

    /**
     * @var string
     *
     * @ORM\Column(name="variete", type="string", length=100, nullable=false)
     */
    private $variete;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_cageots", type="integer", nullable=false)
     */
    private $nombreCageots;

    /**
     * @var integer
     *
     * @ORM\Column(name="poids_brut", type="integer", nullable=false)
     */
    private $poidsBrut;

    /**
     * @var integer
     *
     * @ORM\Column(name="poids_net", type="integer", nullable=false)
     */
    private $poidsNet;

    /**
     * @var string
     *
     * @ORM\Column(name="code_attribue", type="string", length=50, nullable=false)
     */
    private $codeAttribue;



    /**
     * Get ordreArrive
     *
     * @return integer
     */
    public function getOrdreArrive()
    {
        return $this->ordreArrive;
    }

    /**
     * Set idCampagne
     *
     * @param integer $idCampagne
     *
     * @return RegistreReception
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
     * Set parcelleOrigine
     *
     * @param string $parcelleOrigine
     *
     * @return RegistreReception
     */
    public function setParcelleOrigine($parcelleOrigine)
    {
        $this->parcelleOrigine = $parcelleOrigine;

        return $this;
    }

    /**
     * Get parcelleOrigine
     *
     * @return string
     */
    public function getParcelleOrigine()
    {
        return $this->parcelleOrigine;
    }

    /**
     * Set dateRecolte
     *
     * @param \DateTime $dateRecolte
     *
     * @return RegistreReception
     */
    public function setDateRecolte($dateRecolte)
    {
        $this->dateRecolte = $dateRecolte;

        return $this;
    }

    /**
     * Get dateRecolte
     *
     * @return \DateTime
     */
    public function getDateRecolte()
    {
        return $this->dateRecolte;
    }

    /**
     * Set variete
     *
     * @param string $variete
     *
     * @return RegistreReception
     */
    public function setVariete($variete)
    {
        $this->variete = $variete;

        return $this;
    }

    /**
     * Get variete
     *
     * @return string
     */
    public function getVariete()
    {
        return $this->variete;
    }

    /**
     * Set nombreCageots
     *
     * @param integer $nombreCageots
     *
     * @return RegistreReception
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
     * @param integer $poidsBrut
     *
     * @return RegistreReception
     */
    public function setPoidsBrut($poidsBrut)
    {
        $this->poidsBrut = $poidsBrut;

        return $this;
    }

    /**
     * Get poidsBrut
     *
     * @return integer
     */
    public function getPoidsBrut()
    {
        return $this->poidsBrut;
    }

    /**
     * Set poidsNet
     *
     * @param integer $poidsNet
     *
     * @return RegistreReception
     */
    public function setPoidsNet($poidsNet)
    {
        $this->poidsNet = $poidsNet;

        return $this;
    }

    /**
     * Get poidsNet
     *
     * @return integer
     */
    public function getPoidsNet()
    {
        return $this->poidsNet;
    }

    /**
     * Set codeAttribue
     *
     * @param string $codeAttribue
     *
     * @return RegistreReception
     */
    public function setCodeAttribue($codeAttribue)
    {
        $this->codeAttribue = $codeAttribue;

        return $this;
    }

    /**
     * Get codeAttribue
     *
     * @return string
     */
    public function getCodeAttribue()
    {
        return $this->codeAttribue;
    }
}
