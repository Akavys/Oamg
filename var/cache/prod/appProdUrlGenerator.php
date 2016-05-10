<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'gmao_moulage_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_ajouter_presse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::ajouterPresseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/presse/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_liste_presse' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::allPresseAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/presse/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_liste_all_presse' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::lsAllPresseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/presse/liste/all',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_modifier_presse' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::modifierPresseAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/presse/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_supprimer_presse' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\PresseController::supprimerPresseAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/presse/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_ajouter_reference' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::ajouterReferenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gmao/reference/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_liste_reference' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::allReferenceAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d*',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/reference/liste',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_modifier_reference' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::modifierReferenceAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/reference/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gmao_moulage_supprimer_reference' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gmao\\MoulageBundle\\Controller\\ReferenceController::supprimerReferenceAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/gmao/reference/supprimer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}