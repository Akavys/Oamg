<?php

namespace Gmao\MoulageBundle\Controller;

use Gmao\MoulageBundle\Entity\Equipe;
use Gmao\MoulageBundle\Form\EquipeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EquipeController extends Controller {

  public function ajouterEquipeAction(Request $request) {

    $equipe = new Equipe();
    $form = $this->createForm(EquipeType::class, $equipe);

    if ($request->getMethod()=='POST') {

      $form->handleRequest($request);

      if ($form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($equipe);
        $em->flush();

        return $this->redirect($this->generateUrl('gmao_moulage_liste_equipe'));
      }
    }

    return $this->render('GmaoMoulageBundle:Equipe:ajouter.html.twig',
      array(
        'form' => $form->createView(),
      ));
    }

    public function modifierEquipeAction(Request $request, $id) {

      $em = $this->getDoctrine()->getEntityManager();

      $equipe = $em->getRepository('GmaoMoulageBundle:Equipe')->find($id);

      if($equipe === null) {
        throw $this->createNotFoundException('Équipe[id='.$id.'] inexistant.');
      }

      $form = $this->createForm(EquipeType::class, $equipe);

      if ($request->getMethod()=='POST') {

        $form->handleRequest($request);

        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($equipe);
          $em->flush();
          return $this->redirect($this->generateUrl('gmao_moulage_liste_equipe'));
        }
      }


      return $this->render('GmaoMoulageBundle:Equipe:modifier.html.twig',
        array(
          'form' => $form->createView(),
          'equipe' => $equipe
        ));
    }

    public function supprimerEquipeAction(Request $request, $id) {

    $em = $this->getDoctrine()->getEntityManager();

    $equipe = $em->getRepository('GmaoMoulageBundle:Equipe')->find($id);

    if($equipe === null) {
      throw $this->createNotFoundException('Équipe[id='.$id.'] inexistant.');
    }

    $session = $request->getSession();

    if ($request->getMethod() == 'POST') {
      $em = $this->getDoctrine()->getManager();
      $em->remove($equipe);
      $em->flush();

      $session->getFlashBag()->add('info', 'L\'équipe a bien été supprimée!');

      return $this->redirect( $this->generateUrl('gmao_moulage_liste_equipe'));
    }

    return $this->render('GmaoMoulageBundle:Equipe:supprimer.html.twig',
      array('equipe' => $equipe));

    }

    public function allEquipeAction(Request $request, $page) {

    if ($request->getMethod()=='POST') {
      $page =  $request->request->get('pag');
    }

    if ($page < 1) {
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    $equipes = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('GmaoMoulageBundle:Equipe')
                    ->getEquipes(10, $page);

    return $this->render('GmaoMoulageBundle:Equipe:liste.html.twig',
      array('equipes' => $equipes,
            'page' => $page,
            'nombrePage' => ceil(count($equipes)/10)));
    }

  }

?>
