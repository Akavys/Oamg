<?php

namespace Gmao\MoulageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Gmao\MoulageBundle\Entity\Fnc;
use Gmao\MoulageBundle\Form\FncType;

class FncController extends Controller {

  public function ajouterFncAction(Request $request) {

    $fnc = new Fnc();
    
    $fnc->setDateCreation(new \DateTime());
    
    $form = $this->createForm(FncType::class, $fnc);

    if ($request->getMethod()=='POST') {

      $form->handleRequest($request);

      if ($form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($fnc); 
        $em->flush();

        return $this->redirect($this->generateUrl('gmao_moulage_liste_fnc'));
      }
    }

    return $this->render('GmaoMoulageBundle:Fnc:ajouter.html.twig',
      array(
        'form' => $form->createView(),
      ));
    }

    public function modifierFncAction(Request $request, $id) {

      $em = $this->getDoctrine()->getEntityManager();

      $fnc = $em->getRepository('GmaoMoulageBundle:Fnc')->find($id);

      if($fnc === null) {
        throw $this->createNotFoundException('Équipe[id='.$id.'] inexistant.');
      }

      $form = $this->createForm(FncType::class, $fnc);

      if ($request->getMethod()=='POST') {

        $form->handleRequest($request);

        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($fnc);
          $em->flush();
          return $this->redirect($this->generateUrl('gmao_moulage_liste_fnc'));
        }
      }


      return $this->render('GmaoMoulageBundle:Fnc:modifier.html.twig',
        array(
          'form' => $form->createView(),
          'fnc' => $fnc
        ));
    }

    public function supprimerFncAction(Request $request, $id) {

    $em = $this->getDoctrine()->getEntityManager();

    $fnc = $em->getRepository('GmaoMoulageBundle:Fnc')->find($id);

    if($fnc === null) {
      throw $this->createNotFoundException('Fnc[id='.$id.'] inexistant.');
    }

    $session = $request->getSession();

    if ($request->getMethod() == 'POST') {
      $em = $this->getDoctrine()->getManager();
      $em->remove($fnc);
      $em->flush();

      $session->getFlashBag()->add('info', 'La fiche de non conformité a bien été supprimée!');

      return $this->redirect( $this->generateUrl('gmao_moulage_liste_fnc'));
    }

    return $this->render('GmaoMoulageBundle:Fnc:supprimer.html.twig',
      array('fnc' => $fnc));

    }

    public function allFncAction(Request $request, $page) {

    if ($request->getMethod()=='POST') {
      $page =  $request->request->get('pag');
    }

    if ($page < 1) {
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    $fncs = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('GmaoMoulageBundle:Fnc')
                    ->getFncs(10, $page);

    return $this->render('GmaoMoulageBundle:Fnc:liste.html.twig',
      array('fncs' => $fncs,
            'page' => $page,
            'nombrePage' => ceil(count($fncs)/10)));
    }

  }

?>
