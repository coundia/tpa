<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deposerdemande
 *
 * @ORM\Table(name="deposerdemande", indexes={@ORM\Index(name="IDX_21CAAE6880E95E18", columns={"demande_id"}), @ORM\Index(name="IDX_21CAAE68AB9BB300", columns={"producteur_id"})})
 * @ORM\Entity
 */
class Deposerdemande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="demande_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $demandeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="producteur_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $producteurId;



    /**
     * Set demandeId
     *
     * @param integer $demandeId
     *
     * @return Deposerdemande
     */
    public function setDemandeId($demandeId)
    {
        $this->demandeId = $demandeId;

        return $this;
    }

    /**
     * Get demandeId
     *
     * @return integer
     */
    public function getDemandeId()
    {
        return $this->demandeId;
    }

    /**
     * Set producteurId
     *
     * @param integer $producteurId
     *
     * @return Deposerdemande
     */
    public function setProducteurId($producteurId)
    {
        $this->producteurId = $producteurId;

        return $this;
    }

    /**
     * Get producteurId
     *
     * @return integer
     */
    public function getProducteurId()
    {
        return $this->producteurId;
    }
}
