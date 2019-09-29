<?php

namespace NosFormulairesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;


class Palettisation
{

    private $campagne;

    private $registrepalettisation;

    public function __construct()
    {
        $this->registrepalettisation = new ArrayCollection();
    }
    
    public function getCampagne()
    {
        return $this->campagne;
    }

    public function setCampagne($campagne)
    {
        $this->campagne = $campagne;
    }

    public function getRegistrepalettisation()
    {
        return $this->registrepalettisation;
    }
}
