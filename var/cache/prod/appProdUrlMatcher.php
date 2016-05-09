<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/gmao')) {
            // gmao_moulage_homepage
            if (rtrim($pathinfo, '/') === '/gmao') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gmao_moulage_homepage');
                }

                return array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gmao_moulage_homepage',);
            }

            if (0 === strpos($pathinfo, '/gmao/presse')) {
                // gmao_moulage_ajouter_presse
                if ($pathinfo === '/gmao/presse/ajouter') {
                    return array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::ajouterPresseAction',  '_route' => 'gmao_moulage_ajouter_presse',);
                }

                if (0 === strpos($pathinfo, '/gmao/presse/liste')) {
                    // gmao_moulage_liste_presse
                    if (preg_match('#^/gmao/presse/liste(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_liste_presse')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::allPresseAction',  'page' => 1,));
                    }

                    // gmao_moulage_liste_all_presse
                    if ($pathinfo === '/gmao/presse/liste/all') {
                        return array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::lsAllPresseAction',  '_route' => 'gmao_moulage_liste_all_presse',);
                    }

                }

                // gmao_moulage_modifier_presse
                if (0 === strpos($pathinfo, '/gmao/presse/modifier') && preg_match('#^/gmao/presse/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_modifier_presse')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::modifierPresseAction',));
                }

                // gmao_moulage_supprimer_presse
                if (0 === strpos($pathinfo, '/gmao/presse/supprimer') && preg_match('#^/gmao/presse/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_supprimer_presse')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::supprimerPresseAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
