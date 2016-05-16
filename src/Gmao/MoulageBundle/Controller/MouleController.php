<?php

namespace Gmao\MoulageBundle\Controller;

use Gmao\MoulageBundle\Entity\Moule;
use Gmao\MoulageBundle\Entity\Empreinte;
use Gmao\MoulageBundle\Form\MouleType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MouleController extends Controller {

  public function ajouterMouleAction(Request $request) {

    $moule = new Moule();
    $form = $this->createForm(MouleType::class, $moule);

    if ($request->getMethod()=='POST') {

      $form->handleRequest($request);

      if ($form->isValid()) {

        foreach (($moule->getEmpreintes())
              as $numObject =>$object) {
          $moule->addEmpreinte($object);
        }

        foreach (($moule->getAlveoles())
              as $numObject =>$object) {
          $moule->addAlveole($object);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($moule);
        $em->flush();

        return $this->redirect($this->generateUrl('gmao_moulage_liste_moule'));
      }
    }

    return $this->render('GmaoMoulageBundle:Moule:ajouter.html.twig',
      array(
        'form' => $form->createView(),
      ));
    }

    public function modifiermouleAction(Request $request, $id) {

      $em = $this->getDoctrine()->getEntityManager();

      $moule = $em->getRepository('GmaoMoulageBundle:Moule')->find($id);

      if($moule === null) {
        throw $this->createNotFoundException('Moule[id='.$id.'] inexistant.');
      }

      $form = $this->createForm(MouleType::class, $moule);

      if ($request->getMethod()=='POST') {

        $form->handleRequest($request);

        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($moule);
          $em->flush();
          return $this->redirect($this->generateUrl('gmao_moulage_liste_moule'));
        }
      }


      return $this->render('GmaoMoulageBundle:Moule:modifier.html.twig',
        array(
          'form' => $form->createView(),
          'moule' => $moule
        ));
    }

    public function supprimermouleAction(Request $request, $id) {

    $em = $this->getDoctrine()->getEntityManager();

    $moule = $em->getRepository('GmaoMoulageBundle:Moule')->find($id);

    if($moule === null) {
      throw $this->createNotFoundException('Moule[id='.$id.'] inexistant.');
    }

    $session = $request->getSession();

    if ($request->getMethod() == 'POST') {
      $em = $this->getDoctrine()->getManager();
      $em->remove($moule);
      $em->flush();

      $session->getFlashBag()->add('info', 'Le moule a bien été supprimé!');

      return $this->redirect( $this->generateUrl('gmao_moulage_liste_moule'));
    }

    return $this->render('GmaoMoulageBundle:Moule:supprimer.html.twig',
      array('moule' => $moule));

    }

    public function allMouleAction(Request $request, $page) {

    if ($request->getMethod()=='POST') {
      $page =  $request->request->get('pag');
    }

    if ($page < 1) {
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    $moules = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('GmaoMoulageBundle:Moule')
                    ->getMoules(10, $page);

    return $this->render('GmaoMoulageBundle:Moule:liste.html.twig',
      array('moules' => $moules,
            'page' => $page,
            'nombrePage' => ceil(count($moules)/10)));
    }

  }

?>
