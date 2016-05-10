<?php

namespace Gmao\MoulageBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * PresseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PresseRepository extends \Doctrine\ORM\EntityRepository
{



  public function getPresses($nombreParPage, $page) {

    if($page < 1) {
      throw new \InvalidArgumentException('L\'argument $page ne peut être inférieur à 1 (valeur : "'.$page.'").');
    }

    $query = $this->createQueryBuilder('p')
                  ->getQuery();

                  $query->setFirstResult(($page-1) * $nombreParPage)
                          ->setMaxResults($nombreParPage);

    return new Paginator($query);
  }

  public function getLsAllPresses() {


  return $this->createQueryBuilder('p')->getQuery()->getResult();
}
}