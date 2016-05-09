<?php

namespace Gmao\MoulageBundle\Controller;

use Gmao\MoulageBundle\Entity\Reference;
use Gmao\MoulageBundle\Form\ReferenceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReferenceController extends Controller {

  public function ajouterReferenceAction(Request $request) {

    $reference = new Reference();
    $form = $this->createForm(ReferenceType::class, $reference);

    if ($request->getMethod()=='POST') {

      $form->handleRequest($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($reference);
        $em->flush();

        return $this->redirect($this->generateUrl('gmao_moulage_liste_reference'));
      }
    }

    return $this->render('GmaoMoulageBundle:Reference:ajouter.html.twig',
      array(
        'form' => $form->createView(),
      ));
    }

    public function modifierreferenceAction(Request $request, $id) {

      $em = $this->getDoctrine()->getEntityManager();

      $reference = $em->getRepository('GmaoMoulageBundle:Reference')->find($id);

      if($reference === null) {
        throw $this->createNotFoundException('Reference[id='.$id.'] inexistant.');
      }

      $form = $this->createForm(ReferenceType::class, $reference);

      if ($request->getMethod()=='POST') {

        $form->handleRequest($request);

        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($reference);
          $em->flush();
          return $this->redirect($this->generateUrl('gmao_moulage_liste_reference'));
        }
      }


      return $this->render('GmaoMoulageBundle:Reference:modifier.html.twig',
        array(
          'form' => $form->createView(),
          'reference' => $reference
        ));
  }

  public function supprimerreferenceAction(Request $request, $id) {

    $em = $this->getDoctrine()->getEntityManager();

    $reference = $em->getRepository('GmaoMoulageBundle:Reference')->find($id);

    if($reference === null) {
      throw $this->createNotFoundException('Reference[id='.$id.'] inexistant.');
    }

    $session = $request->getSession();

    if ($request->getMethod() == 'POST') {
      $em = $this->getDoctrine()->getManager();
      $em->remove($reference);
      $em->flush();

      $session->getFlashBag()->add('info', 'La reference a bien été supprimée!');

      return $this->redirect( $this->generateUrl('gmao_moulage_liste_reference'));
    }

    return $this->render('GmaoMoulageBundle:Reference:supprimer.html.twig',
      array('reference' => $reference));

  }

  public function allReferenceAction(Request $request, $page) {

    if ($request->getMethod()=='POST') {
      $page =  $request->request->get('pag');
    }

    if ($page < 1) {
      throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
    }

    $references = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('GmaoMoulageBundle:Reference')
                    ->getReferences(10, $page);

    return $this->render('GmaoMoulageBundle:Reference:liste.html.twig',
      array('references' => $references,
            'page' => $page,
            'nombrePage' => ceil(count($references)/10)));
  }

}

?>
