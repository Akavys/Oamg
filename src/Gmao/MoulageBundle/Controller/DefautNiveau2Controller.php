<?php

namespace Gmao\MoulageBundle\Controller;

use Gmao\MoulageBundle\Entity\DefautNiveau2;
use Gmao\MoulageBundle\Form\DefautNiveau2Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefautNiveau2Controller extends Controller {

  public function ajouterDefautNiveau2Action(Request $request) {

    $def_niv2 = new DefautNiveau2();
    $form = $this->createForm(DefautNiveau2Type::class, $def_niv2);

    if ($request->getMethod()=='POST') {

      $form->handleRequest($request);

      if ($form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($def_niv2);
        $em->flush();

        return $this->redirect($this->generateUrl('gmao_moulage_liste_defaut_niveau2'));
      }
    }

    return $this->render('GmaoMoulageBundle:DefautNiveau2:ajouter.html.twig',
      array(
        'form' => $form->createView(),
      ));
    }

    public function modifierDefautNiveau2Action(Request $request, $id) {

      $em = $this->getDoctrine()->getEntityManager();

      $def_niv2 = $em->getRepository('GmaoMoulageBundle:DefautNiveau2')->find($id);

      if($def_niv2 === null) {
        throw $this->createNotFoundException('Type défaut [id='.$id.'] inexistant.');
      }

      $form = $this->createForm(DefautNiveau2Type::class, $def_niv2);

      if ($request->getMethod()=='POST') {

        $form->handleRequest($request);

        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($def_niv2);
          $em->flush();
          return $this->redirect($this->generateUrl('gmao_moulage_liste_defaut_niveau2'));
        }
      }


      return $this->render('GmaoMoulageBundle:DefautNiveau2:modifier.html.twig',
        array(
          'form' => $form->createView(),
          'def_niv2' => $def_niv2
        ));
    }

    public function supprimerDefautNiveau2Action(Request $request, $id) {

    $em = $this->getDoctrine()->getEntityManager();

    $def_niv2 = $em->getRepository('GmaoMoulageBundle:DefautNiveau2')->find($id);

    if($def_niv2 === null) {
      throw $this->createNotFoundException('Nature de défaut [id='.$id.'] inexistant.');
    }

    $session = $request->getSession();

    if ($request->getMethod() == 'POST') {
      $em = $this->getDoctrine()->getManager();
      $em->remove($def_niv2);
      $em->flush();

      $session->getFlashBag()->add('info', 'La nature de défaut a bien été supprimée!');

      return $this->redirect( $this->generateUrl('gmao_moulage_liste_defaut_niveau2'));
    }

    return $this->render('GmaoMoulageBundle:DefautNiveau2:supprimer.html.twig',
      array('def_niv2' => $def_niv2));

    }

    public function allDefautNiveau2Action(Request $request, $page) {

    if ($request->getMethod()=='POST') {
      $page =  $request->request->get('pag');
    }

    if ($page < 1) {
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    $defs_niv2 = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('GmaoMoulageBundle:DefautNiveau2')
                    ->getDefautsNiveau2(10, $page);

    return $this->render('GmaoMoulageBundle:DefautNiveau2:liste.html.twig',
      array('defs_niv2' => $defs_niv2,
            'page' => $page,
            'nombrePage' => ceil(count($defs_niv2)/10)));
    }

  }

?>
