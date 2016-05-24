<?php

namespace Gmao\MoulageBundle\Controller;

use Gmao\MoulageBundle\Entity\Equipe;
use Gmao\MoulageBundle\Form\EquipeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Gmao\MoulageBundle\Entity\DefautNiveau1;
use Gmao\MoulageBundle\Form\DefautNiveau1Type;

class DefautNiveau1Controller extends Controller {

  public function ajouterDefautNiveau1Action(Request $request) {

    $def_niv1 = new DefautNiveau1();
    $form = $this->createForm(DefautNiveau1Type::class, $def_niv1);

    if ($request->getMethod()=='POST') {

      $form->handleRequest($request);

      if ($form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($def_niv1);
        $em->flush();

        return $this->redirect($this->generateUrl('gmao_moulage_liste_defaut_niveau1'));
      }
    }

    return $this->render('GmaoMoulageBundle:DefautNiveau1:ajouter.html.twig',
      array(
        'form' => $form->createView(),
      ));
    }

    public function modifierDefautNiveau1Action(Request $request, $id) {

      $em = $this->getDoctrine()->getEntityManager();

      $def_niv1 = $em->getRepository('GmaoMoulageBundle:DefautNiveau1')->find($id);

      if($def_niv1 === null) {
        throw $this->createNotFoundException('Type défaut [id='.$id.'] inexistant.');
      }

      $form = $this->createForm(DefautNiveau1Type::class, $def_niv1);

      if ($request->getMethod()=='POST') {

        $form->handleRequest($request);

        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($def_niv1);
          $em->flush();
          return $this->redirect($this->generateUrl('gmao_moulage_liste_defaut_niveau1'));
        }
      }


      return $this->render('GmaoMoulageBundle:DefautNiveau1:modifier.html.twig',
        array(
          'form' => $form->createView(),
          'def_niv1' => $def_niv1
        ));
    }

    public function supprimerDefautNiveau1Action(Request $request, $id) {

    $em = $this->getDoctrine()->getEntityManager();

    $def_niv1 = $em->getRepository('GmaoMoulageBundle:DefautNiveau1')->find($id);

    if($def_niv1 === null) {
      throw $this->createNotFoundException('Type de défaut [id='.$id.'] inexistant.');
    }

    $session = $request->getSession();

    if ($request->getMethod() == 'POST') {
      $em = $this->getDoctrine()->getManager();
      $em->remove($def_niv1);
      $em->flush();

      $session->getFlashBag()->add('info', 'Le type de défaut a bien été supprimée!');

      return $this->redirect( $this->generateUrl('gmao_moulage_liste_defaut_niveau1'));
    }

    return $this->render('GmaoMoulageBundle:DefautNiveau1:supprimer.html.twig',
      array('def_niv1' => $def_niv1));

    }

    public function allDefautNiveau1Action(Request $request, $page) {

    if ($request->getMethod()=='POST') {
      $page =  $request->request->get('pag');
    }

    if ($page < 1) {
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    $defs_niv1 = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('GmaoMoulageBundle:DefautNiveau1')
                    ->getDefautsNiveau1(10, $page);

    return $this->render('GmaoMoulageBundle:DefautNiveau1:liste.html.twig',
      array('defs_niv1' => $defs_niv1,
            'page' => $page,
            'nombrePage' => ceil(count($defs_niv1)/10)));
    }

  }

?>
