<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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

            if (0 === strpos($pathinfo, '/gmao/loc_defaut')) {
                // gmao_moulage_ajouter_loc_defaut
                if ($pathinfo === '/gmao/loc_defaut/ajouter') {
                    return array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\LocalisationDefautController::ajouterLocalisationDefautAction',  '_route' => 'gmao_moulage_ajouter_loc_defaut',);
                }

                // gmao_moulage_liste_loc_defaut
                if (0 === strpos($pathinfo, '/gmao/loc_defaut/liste') && preg_match('#^/gmao/loc_defaut/liste(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_liste_loc_defaut')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\LocalisationDefautController::allLocalisationDefautAction',  'page' => 1,));
                }

                // gmao_moulage_modifier_loc_defaut
                if (0 === strpos($pathinfo, '/gmao/loc_defaut/modifier') && preg_match('#^/gmao/loc_defaut/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_modifier_loc_defaut')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\LocalisationDefautController::modifierLocalisationDefautAction',));
                }

                // gmao_moulage_supprimer_loc_defaut
                if (0 === strpos($pathinfo, '/gmao/loc_defaut/supprimer') && preg_match('#^/gmao/loc_defaut/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_supprimer_loc_defaut')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\LocalisationDefautController::supprimerLocalisationDefautAction',));
                }

            }

            if (0 === strpos($pathinfo, '/gmao/equipe')) {
                // gmao_moulage_ajouter_equipe
                if ($pathinfo === '/gmao/equipe/ajouter') {
                    return array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\EquipeController::ajouterEquipeAction',  '_route' => 'gmao_moulage_ajouter_equipe',);
                }

                // gmao_moulage_liste_equipe
                if (0 === strpos($pathinfo, '/gmao/equipe/liste') && preg_match('#^/gmao/equipe/liste(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_liste_equipe')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\EquipeController::allEquipeAction',  'page' => 1,));
                }

                // gmao_moulage_modifier_equipe
                if (0 === strpos($pathinfo, '/gmao/equipe/modifier') && preg_match('#^/gmao/equipe/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_modifier_equipe')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\EquipeController::modifierEquipeAction',));
                }

                // gmao_moulage_supprimer_equipe
                if (0 === strpos($pathinfo, '/gmao/equipe/supprimer') && preg_match('#^/gmao/equipe/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_supprimer_equipe')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\EquipeController::supprimerEquipeAction',));
                }

            }

            if (0 === strpos($pathinfo, '/gmao/defaut_niveau1')) {
                // gmao_moulage_ajouter_defaut_niveau1
                if ($pathinfo === '/gmao/defaut_niveau1/ajouter') {
                    return array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\DefautNiveau1Controller::ajouterDefautNiveau1Action',  '_route' => 'gmao_moulage_ajouter_defaut_niveau1',);
                }

                // gmao_moulage_liste_defaut_niveau1
                if (0 === strpos($pathinfo, '/gmao/defaut_niveau1/liste') && preg_match('#^/gmao/defaut_niveau1/liste(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_liste_defaut_niveau1')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\DefautNiveau1Controller::allDefautNiveau1Action',  'page' => 1,));
                }

                // gmao_moulage_modifier_defaut_niveau1
                if (0 === strpos($pathinfo, '/gmao/defaut_niveau1/modifier') && preg_match('#^/gmao/defaut_niveau1/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_modifier_defaut_niveau1')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\DefautNiveau1Controller::modifierDefautNiveau1Action',));
                }

                // gmao_moulage_supprimer_defaut_niveau1
                if (0 === strpos($pathinfo, '/gmao/defaut_niveau1/supprimer') && preg_match('#^/gmao/defaut_niveau1/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gmao_moulage_supprimer_defaut_niveau1')), array (  '_controller' => 'Gmao\\MoulageBundle\\Controller\\DefautNiveau1Controller::supprimerDefautNiveau1Action',));
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
