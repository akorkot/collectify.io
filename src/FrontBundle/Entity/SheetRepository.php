<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SheetRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SheetRepository extends EntityRepository
{

    public function getByType($type) {

        $qb = $this->createQueryBuilder("s");

        $query = $qb;
        //    ->where("s.type LIKE :type")
        //  ->setParameter("type", $type);

        $result = $query->getQuery()->getResult();

        return $result;
    }
}
