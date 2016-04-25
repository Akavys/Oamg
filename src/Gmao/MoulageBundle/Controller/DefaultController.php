<?php

namespace Gmao\MoulageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GmaoMoulageBundle:Default:index.html.twig');
    }
}
