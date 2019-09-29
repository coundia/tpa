<?php

namespace NosFormulairesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;


class MyClasse
{

    private $campagne;

    private $registrereception;

    public function __construct()
    {
        $this->registrereception = new ArrayCollection();
    }

   

    public function getCampagne()
    {
        return $this->campagne;
    }

    public function setCampagne($campagne)
    {
        $this->campagne = $campagne;
    }

    public function getRegistrereception()
    {
        return $this->registrereception;
    }
}
