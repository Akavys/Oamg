<?php

namespace Gmao\MoulageBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * DefautNiveau2Repository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DefautNiveau2Repository extends \Doctrine\ORM\EntityRepository
{
	
	public function getDefautsNiveau2($nombreParPage, $page) {
		if ($page < 1) {
			throw new \InvalidArgumentException ( 'L\'argument $page ne peut être inférieur à 1 (valeur : "' . $page . '").' );
		}
	
		$query = $this->createQueryBuilder ( 'dn2' )->getQuery ();
	
		$query->setFirstResult ( ($page - 1) * $nombreParPage )->setMaxResults ( $nombreParPage );
	
		return new Paginator ( $query );
	}
	
	public function getLsTrueDefautNiveau2($idDefautNiveau1) {
		$qb = $this->createQueryBuilder ( 'dn2' )
		->join('dn2.defautsNiveau1', 'dn1')
		->where ( 'dn2.etatDefautNiveau2 = 1' )
		->andWhere('dn1.id = :idDefautNiveau1')
		->setParameter('idDefautNiveau1', $idDefautNiveau1);
		return $qb;
	}
	
}
