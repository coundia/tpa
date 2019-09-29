<?php

// src/AppBundle/Repository/ProducteurRepository.php
namespace TpaBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProducteurRepository extends EntityRepository
{
    public function getproducteur()
    {
        $query=$this->createQueryBuilder('p')
            ->select('p.nom as nom','p.prenom as prenom','p.id as id','p.numTel as numTel','p.email as email')
            ->OrderBy('p.nom','asc')
            ;
        return $query->getQuery()->getResult();

    }
}
