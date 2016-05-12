<?php

/* GmaoMoulageBundle:Reference:ajouter.html.twig */
class __TwigTemplate_f47d7596594b544b756f367576b68feeea40e793fa87837417d3cbf4d11a85c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Reference:ajouter.html.twig", 1);
        $this->blocks = array(
            'tittle' => array($this, 'block_tittle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une référence </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Reference:formulaire.html.twig", "GmaoMoulageBundle:Reference:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Reference:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block tittle %}*/
/*   Ajouter - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header" > Ajouter une référence </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Reference:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
