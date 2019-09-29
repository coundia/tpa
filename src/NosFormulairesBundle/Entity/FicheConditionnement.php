<?php

namespace NosFormulairesBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;


class FicheConditionnement
{

    private $campagne;

    private $lot;

    private $detailslot;

    public function __construct()
    {
        $this->detailslot = new ArrayCollection();
        $this->lot = new ArrayCollection();
    }
    
    public function getCampagne()
    {
        return $this->campagne;
    }

    public function setCampagne($campagne)
    {
        $this->campagne = $campagne;
    }

    public function getLot()
    {
        return $this->lot;
    }

   

    public function getDetailslot()
    {
        return $this->detailslot;
    }
}
