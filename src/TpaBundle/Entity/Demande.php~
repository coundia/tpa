<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="TpaBundle\Repository\DemandeRepository")
 */
class Demande
{
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
     * @ORM\Column(name="typeDemande", type="string", length=100)
     */
    private $typeDemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepot", type="datetime")
     */
    private $dateDepot;
    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="TpaBundle\Entity\Producteur")
     * @ORM\JoinTable(name="deposerDemande",
     *      joinColumns={@ORM\JoinColumn(name="demande_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="producteur_id", referencedColumnName="id")}
     *      )
     */
    private $producteur;


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
     * Set typeDemande
     *
     * @param string $typeDemande
     *
     * @return Demande
     */
    public function setTypeDemande($typeDemande)
    {
        $this->typeDemande = $typeDemande;

        return $this;
    }

    /**
     * Get typeDemande
     *
     * @return string
     */
    public function getTypeDemande()
    {
        return $this->typeDemande;
    }

    /**
     * Set dateDepot
     *
     * @param \DateTime $dateDepot
     *
     * @return Demande
     */
    public function setDateDepot($dateDepot)
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Get dateDepot
     *
     * @return \DateTime
     */
    public function getDateDepot()
    {
        return $this->dateDepot;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->producteur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add producteur
     *
     * @param \TpaBundle\Entity\Producteur $producteur
     *
     * @return Demande
     */
    public function addProducteur(\TpaBundle\Entity\Producteur $producteur)
    {
        $this->producteur[] = $producteur;

        return $this;
    }

    /**
     * Remove producteur
     *
     * @param \TpaBundle\Entity\Producteur $producteur
     */
    public function removeProducteur(\TpaBundle\Entity\Producteur $producteur)
    {
        $this->producteur->removeElement($producteur);
    }

    /**
     * Get producteur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducteur()
    {
        return $this->producteur;
    }
}
