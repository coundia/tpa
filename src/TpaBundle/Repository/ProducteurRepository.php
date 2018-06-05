<?php

// src/AppBundle/Repository/ProducteurRepository.php
namespace TpaBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProducteurRepository extends EntityRepository
{
    public function getproducteur()
    {
        $query=$this->createQueryBuilder('p')
            ->select('p.nom as nom','p.prenom as prenom')
            ->OrderBy('p.nom','asc')
            ;
        return $query->getQuery()->getResult();

    }
}
