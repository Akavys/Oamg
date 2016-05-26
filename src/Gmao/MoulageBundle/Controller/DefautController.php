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
}

?>
