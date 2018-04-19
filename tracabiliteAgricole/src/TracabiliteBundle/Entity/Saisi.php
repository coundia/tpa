<?php

namespace TracabiliteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saisi
 *
 * @ORM\Table(name="saisi")
 * @ORM\Entity(repositoryClass="TracabiliteBundle\Repository\SaisiRepository")
 */
class Saisi
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
     * @ORM\Column(name="champ1 ", type="string", length=255)
     */
    private $champ1;

    /**
     * @var string
     *
     * @ORM\Column(name="champ2 ", type="string", length=255)
     */
    private $champ2;


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
     * Set code
     *
     * @param integer $code
     *
     * @return Saisi
     */


    /**
     * Get code
     *
     * @return int
     */


    /**
     * Set champ1
     *
     * @param string $champ1
     *
     * @return Saisi
     */
    public function setChamp1($champ1)
    {
        $this->champ1 = $champ1;

        return $this;
    }

    /**
     * Get champ1
     *
     * @return string
     */
    public function getChamp1()
    {
        return $this->champ1;
    }

    /**
     * Set champ2
     *
     * @param string $champ2
     *
     * @return Saisi
     */
    public function setChamp2($champ2)
    {
        $this->champ2 = $champ2;

        return $this;
    }

    /**
     * Get champ2
     *
     * @return string
     */
    public function getChamp2()
    {
        return $this->champ2;
    }
}

