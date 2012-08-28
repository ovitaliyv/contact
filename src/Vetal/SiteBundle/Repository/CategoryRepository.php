<?php

namespace Vetal\SiteBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository {

  public function findAllOrderedByName() {
    return $this->createQueryBuilder('c') //->getEntityManager()
    ->orderBy('c.name', 'DESC')
    ->getQuery() //->createQuery('SELECT c FROM VetalSiteBundle:Category c ORDER BY c.name ASC')
    ->getResult();
  }
}