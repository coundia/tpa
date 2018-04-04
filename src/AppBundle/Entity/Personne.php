<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 */
class Personne
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $statut;

    /**
     * @var string
     */
    private $numTel;

    /**
     * @var string
     */
    private $numFixe;

    /**
     * @var string
     */
    private $numFax;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Personne
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set numTel
     *
     * @param string $numTel
     *
     * @return Personne
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return string
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set numFixe
     *
     * @param string $numFixe
     *
     * @return Personne
     */
    public function setNumFixe($numFixe)
    {
        $this->numFixe = $numFixe;

        return $this;
    }

    /**
     * Get numFixe
     *
     * @return string
     */
    public function getNumFixe()
    {
        return $this->numFixe;
    }

    /**
     * Set numFax
     *
     * @param string $numFax
     *
     * @return Personne
     */
    public function setNumFax($numFax)
    {
        $this->numFax = $numFax;

        return $this;
    }

    /**
     * Get numFax
     *
     * @return string
     */
    public function getNumFax()
    {
        return $this->numFax;
    }
}

