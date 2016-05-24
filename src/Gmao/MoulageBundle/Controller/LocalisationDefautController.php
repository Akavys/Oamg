<?php

namespace Gmao\MoulageBundle\Controller;

use Gmao\MoulageBundle\Entity\LocalisationDefaut;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Gmao\MoulageBundle\Form\LocalisationDefautType;

class LocalisationDefautController extends Controller {

  public function ajouterLocalisationDefautAction(Request $request) {

    $locDefaut = new LocalisationDefaut();
    $form = $this->createForm(LocalisationDefautType::class, $locDefaut);

    if ($request->getMethod()=='POST') {

      $form->handleRequest($request);

      if ($form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($locDefaut);
        $em->flush();

        return $this->redirect($this->generateUrl('gmao_moulage_liste_loc_defaut'));
      }
    }

    return $this->render('GmaoMoulageBundle:LocalisationDefaut:ajouter.html.twig',
      array(
        'form' => $form->createView(),
      ));
    }

    public function modifierlocalisationDefautAction(Request $request, $id) {

      $em = $this->getDoctrine()->getEntityManager();

      $locDefaut = $em->getRepository('GmaoMoulageBundle:LocalisationDefaut')->find($id);

      if($locDefaut === null) {
        throw $this->createNotFoundException('LocalisationDefaut[id='.$id.'] inexistant.');
      }

      $form = $this->createForm(LocalisationDefautType::class, $locDefaut);

      if ($request->getMethod()=='POST') {

        $form->handleRequest($request);

        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($locDefaut);
          $em->flush();
          return $this->redirect($this->generateUrl('gmao_moulage_liste_loc_defaut'));
        }
      }


      return $this->render('GmaoMoulageBundle:LocalisationDefaut:modifier.html.twig',
        array(
          'form' => $form->createView(),
          'locDefaut' => $locDefaut
        ));
    }

    public function supprimerlocalisationDefautAction(Request $request, $id) {

    $em = $this->getDoctrine()->getEntityManager();

    $locDefaut = $em->getRepository('GmaoMoulageBundle:LocalisationDefaut')->find($id);

    if($locDefaut === null) {
      throw $this->createNotFoundException('LocalisationDefaut[id='.$id.'] inexistant.');
    }

    $session = $request->getSession();

    if ($request->getMethod() == 'POST') {
      $em = $this->getDoctrine()->getManager();
      $em->remove($locDefaut);
      $em->flush();

      $session->getFlashBag()->add('info', 'La localisation du défaut a bien été supprimée!');

      return $this->redirect( $this->generateUrl('gmao_moulage_liste_loc_defaut'));
    }

    return $this->render('GmaoMoulageBundle:LocalisationDefaut:supprimer.html.twig',
      array('locDefaut' => $locDefaut));

    }

    public function allLocalisationDefautAction(Request $request, $page) {

    if ($request->getMethod()=='POST') {
      $page =  $request->request->get('pag');
    }

    if ($page < 1) {
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    $locDefauts = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('GmaoMoulageBundle:LocalisationDefaut')
                    ->getLocalisationDefauts(10, $page);

    return $this->render('GmaoMoulageBundle:LocalisationDefaut:liste.html.twig',
      array('locDefauts' => $locDefauts,
            'page' => $page,
            'nombrePage' => ceil(count($locDefauts)/10)));
    }

  }

?>
