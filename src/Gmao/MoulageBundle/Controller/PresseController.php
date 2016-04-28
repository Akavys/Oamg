<?php

namespace Gmao\MoulageBundle\Controller;

use Gmao\MoulageBundle\Entity\Presse;
use Gmao\MoulageBundle\Form\PresseType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresseController extends Controller {

  public function ajouterpresseAction(Request $request) {

    $presse = new Presse();
    $form = $this->createForm(PresseType::class, $presse);

    if ($request->getMethod()=='POST') {

      $form->handleRequest($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($presse);
        $em->flush();

        return $this->redirect($this->generateUrl('gmao_moulage_liste_presse'));
      }
    }

    return $this->render('GmaoMoulageBundle:Presse:ajouter.html.twig',
      array(
        'form' => $form->createView(),
      ));
    }

    public function modifierpresseAction(Request $request, $id) {

      $em = $this->getDoctrine()->getEntityManager();

      $presse = $em->getRepository('GmaoMoulageBundle:Presse')->find($id);

      if($presse === null) {
        throw $this->createNotFoundException('Presse[id='.$id.'] inexistant.');
      }

      $form = $this->createForm(PresseType::class, $presse);

      if ($request->getMethod()=='POST') {

        $form->handleRequest($request);

        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($presse);
          $em->flush();
          return $this->redirect($this->generateUrl('gmao_moulage_liste_presse'));
        }
      }


      return $this->render('GmaoMoulageBundle:Presse:modifier.html.twig',
        array(
          'form' => $form->createView(),
          'presse' => $presse
        ));
  }

  public function supprimerpresseAction(Request $request, $id) {

    $em = $this->getDoctrine()->getEntityManager();

    $presse = $em->getRepository('GmaoMoulageBundle:Presse')->find($id);

    if($presse === null) {
      throw $this->createNotFoundException('Presse[id='.$id.'] inexistant.');
    }

    $session = $request->getSession();

    if ($request->getMethod() == 'POST') {
      $em = $this->getDoctrine()->getManager();
      $em->remove($presse);
      $em->flush();

      $session->getFlashBag()->add('info', 'La presse a bien été supprimée!');

      return $this->redirect( $this->generateUrl('gmao_moulage_liste_presse'));
    }

    return $this->render('GmaoMoulageBundle:Presse:supprimer.html.twig',
      array('presse' => $presse));

  }

  public function allPresseAction(Request $request, $page) {

    if ($request->getMethod()=='POST') {
      $page =  $request->request->get('pag');
    }

    if ($page < 1) {
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    $presses = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('GmaoMoulageBundle:Presse')
                    ->getPresses(10, $page);

    return $this->render('GmaoMoulageBundle:Presse:liste.html.twig',
      array('presses' => $presses,
            'page' => $page,
            'nombrePage' => ceil(count($presses)/10)));
  }

}

?>
