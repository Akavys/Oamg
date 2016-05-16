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

            if (0 === strpos($pathinfo, '/gmao/reference')) {
                // gmao_moulage_ajouter_reference
                if ($pathinfo === '/gmao/reference/ajouter') {
                    return array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::ajouterReferenceAction',  '_route' => 'gmao_moulage_ajouter_reference',);
                }

                // gmao_moulage_liste_reference
                if (0 === strpos($pathinfo, '/gmao/reference/liste') && preg_match('#^/gmao/reference/liste(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_liste_reference')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::allReferenceAction',  'page' => 1,));
                }

                // gmao_moulage_modifier_reference
                if (0 === strpos($pathinfo, '/gmao/reference/modifier') && preg_match('#^/gmao/reference/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_modifier_reference')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::modifierReferenceAction',));
                }

                // gmao_moulage_supprimer_reference
                if (0 === strpos($pathinfo, '/gmao/reference/supprimer') && preg_match('#^/gmao/reference/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_supprimer_reference')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::supprimerReferenceAction',));
                }

            }

            if (0 === strpos($pathinfo, '/gmao/moule')) {
                // gmao_moulage_ajouter_moule
                if ($pathinfo === '/gmao/moule/ajouter') {
                    return array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\MouleController::ajouterMouleAction',  '_route' => 'gmao_moulage_ajouter_moule',);
                }

                // gmao_moulage_liste_moule
                if (0 === strpos($pathinfo, '/gmao/moule/liste') && preg_match('#^/gmao/moule/liste(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_liste_moule')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\MouleController::allMouleAction',  'page' => 1,));
                }

                // gmao_moulage_modifier_moule
                if (0 === strpos($pathinfo, '/gmao/moule/modifier') && preg_match('#^/gmao/moule/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_modifier_moule')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\MouleController::modifierMouleAction',));
                }

                // gmao_moulage_supprimer_moule
                if (0 === strpos($pathinfo, '/gmao/moule/supprimer') && preg_match('#^/gmao/moule/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_supprimer_moule')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\MouleController::supprimerMouleAction',));
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
