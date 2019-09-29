<?php

namespace TpaBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;


class Inscription
{


    private $producteur;

    private $certificat;

    private $qualite;

    public function __construct()
    {
        $this->producteur = new ArrayCollection();
        $this->certificat = new ArrayCollection();
        $this->qualite = new ArrayCollection();
    }

    public function getQualite()
    {
        return $this->qualite;
    }

    public function getProducteur()
    {
        return $this->producteur;
    }
    

    public function getCertificat()
    {
        return $this->certificat;
    }
}