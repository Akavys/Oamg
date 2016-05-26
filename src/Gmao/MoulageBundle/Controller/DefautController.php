<?php

namespace Gmao\MoulageBundle\Controller;

use Gmao\MoulageBundle\Entity\Defaut;
use Gmao\MoulageBundle\Entity\DefautNiveau2;
use Gmao\MoulageBundle\Form\DefautType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefautController extends Controller {
	public function ajouterDefautAction(Request $request) {
		$def = new Defaut ();
		$form = $this->createForm ( DefautType::class, $def );
		
		if ($request->getMethod () == 'POST') {
			
			$form->handleRequest ( $request );
			
			if ($form->isValid ()) {
				
				$em = $this->getDoctrine ()->getManager ();
				$em->persist ( $def );
				$em->flush ();
				
				return $this->redirect ( $this->generateUrl ( 'gmao_moulage_liste_defaut' ) );
			}
		}
		
		return $this->render ( 'GmaoMoulageBundle:Defaut:ajouter.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	public function modifierDefautAction(Request $request, $id) {
		$em = $this->getDoctrine ()->getEntityManager ();
		
		$def = $em->getRepository ( 'GmaoMoulageBundle:Defaut' )->find ( $id );
		
		if ($def === null) {
			throw $this->createNotFoundException ( 'Défaut [id=' . $id . '] inexistant.' );
		}
		
		$form = $this->createForm ( DefautType::class, $def );
		
		if ($request->getMethod () == 'POST') {
			
			$form->handleRequest ( $request );
			
			if ($form->isValid ()) {
				$em = $this->getDoctrine ()->getManager ();
				$em->persist ( $def );
				$em->flush ();
				return $this->redirect ( $this->generateUrl ( 'gmao_moulage_liste_defaut' ) );
			}
		}
		
		return $this->render ( 'GmaoMoulageBundle:DefautNiveau2:modifier.html.twig', array (
				'form' => $form->createView (),
				'def' => $def 
		) );
	}
	public function supprimerDefautAction(Request $request, $id) {
		$em = $this->getDoctrine ()->getEntityManager ();
		
		$def = $em->getRepository ( 'GmaoMoulageBundle:Defaut' )->find ( $id );
		
		if ($def === null) {
			throw $this->createNotFoundException ( 'Défaut [id=' . $id . '] inexistant.' );
		}
		
		$session = $request->getSession ();
		
		if ($request->getMethod () == 'POST') {
			$em = $this->getDoctrine ()->getManager ();
			$em->remove ( $def );
			$em->flush ();
			
			$session->getFlashBag ()->add ( 'info', 'Le défaut a bien été supprimée!' );
			
			return $this->redirect ( $this->generateUrl ( 'gmao_moulage_liste_defaut' ) );
		}
		
		return $this->render ( 'GmaoMoulageBundle:Defaut:supprimer.html.twig', array (
				'def' => $def 
		) );
	}
	public function allDefautAction(Request $request, $page) {
		if ($request->getMethod () == 'POST') {
			$page = $request->request->get ( 'pag' );
		}
		
		if ($page < 1) {
			throw $this->createNotFoundException ( 'Page inexistante (page = ' . $page . ')' );
		}
		
		$defs = $this->getDoctrine ()->getManager ()->getRepository ( 'GmaoMoulageBundle:Defaut' )->getDefauts ( 10, $page );
		
		return $this->render ( 'GmaoMoulageBundle:Defaut:liste.html.twig', array (
				'defs' => $defs,
				'page' => $page,
				'nombrePage' => ceil ( count ( $defs ) / 10 ) 
		) );
	}
	public function testAjaxAction(Request $request) {
		$defautNiveau1Id = $request->request->get ( 'idDefautNiveau1' );
		//$defautNiveau1Id = $request->request->get ( 'defautNiveau1_id' );
		
		$em = $this->getDoctrine ()->getManager ();
		
		$rsm = new ResultSetMapping ();
		$rsm->addScalarResult ( 'id', 'id' );
		$rsm->addScalarResult ( 'nomDefautNiveau2', 'nomDefautNiveau2' );
		
		$sql = "SELECT defaut_niveau2.* FROM defaut_niveau2 
				INNER JOIN defaut_niveau2_defaut_niveau1 
				ON defaut_niveau2.id = defaut_niveau2_defaut_niveau1.defaut_niveau2_id 
				INNER JOIN defaut_niveau1 ON defaut_niveau2_defaut_niveau1.defaut_niveau1_id = defaut_niveau1.id 
				WHERE 1 = 1 ";
		
		if ($defautNiveau1Id != '')
			$sql .= " AND defaut_niveau1.id = :defautNiveau1_id ";
		
		$query = $em->createNativeQuery ( $sql, $rsm );
		
		if ($defautNiveau1Id != '')
			$query->setParameter ( 'defautNiveau1_id', $defautNiveau1Id );
		
		$defautsNiveau2 = $query->getResult ();
		
		$defautsNiveau2List = array ();
		foreach ( $defautsNiveau2 as $def_niv2 ) {
			$p = array ();
			$p ['id'] = $def_niv2['id'];
			$p ['nomDefautNiveau2'] = $def_niv2['nomDefautNiveau2'];
			$defautsNiveau2List [] = $p;
		}
		
		return new JsonResponse ( $defautsNiveau2List );
	}
}

?>
