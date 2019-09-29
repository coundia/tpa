<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande", indexes={@ORM\Index(name="producteur_id", columns={"producteur_id"})})
 * @ORM\Entity
 */
class Demande
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
     * @ORM\Column(name="typeDemande", type="string", length=100, nullable=true)
     */
    private $typedemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepot", type="datetime", nullable=true)
     */
    private $datedepot;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer", nullable=false)
     */
    private $statut = '0';

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
     * Set typedemande
     *
     * @param string $typedemande
     *
     * @return Demande
     */
    public function setTypedemande($typedemande)
    {
        $this->typedemande = $typedemande;

        return $this;
    }

    /**
     * Get typedemande
     *
     * @return string
     */
    public function getTypedemande()
    {
        return $this->typedemande;
    }

    /**
     * Set datedepot
     *
     * @param \DateTime $datedepot
     *
     * @return Demande
     */
    public function setDatedepot($datedepot)
    {
        $this->datedepot = $datedepot;

        return $this;
    }

    /**
     * Get datedepot
     *
     * @return \DateTime
     */
    public function getDatedepot()
    {
        return $this->datedepot;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     *
     * @return Demande
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set producteur
     *
     * @param \TpaBundle\Entity\Producteur $producteur
     *
     * @return Demande
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
