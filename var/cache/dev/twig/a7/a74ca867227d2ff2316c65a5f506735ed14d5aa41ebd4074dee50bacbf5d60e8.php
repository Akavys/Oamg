<?php

/* GmaoMoulageBundle:Moule:ajouter.html.twig */
class __TwigTemplate_9a370b496c2e90c7d57077385efb6540d8ae6a7012b5f62e1aad99374ec7cf0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Moule:ajouter.html.twig", 1);
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
        $__internal_b6cc9a69d4fd90d54fb24bff28b7948189446abb671e73e2137328031b3a5cc3 = $this->env->getExtension("native_profiler");
        $__internal_b6cc9a69d4fd90d54fb24bff28b7948189446abb671e73e2137328031b3a5cc3->enter($__internal_b6cc9a69d4fd90d54fb24bff28b7948189446abb671e73e2137328031b3a5cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Moule:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6cc9a69d4fd90d54fb24bff28b7948189446abb671e73e2137328031b3a5cc3->leave($__internal_b6cc9a69d4fd90d54fb24bff28b7948189446abb671e73e2137328031b3a5cc3_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_034740de14b8716dc65c59471638a0d6df1fc662d6e2b9dfc16f2bf2e6ec6be9 = $this->env->getExtension("native_profiler");
        $__internal_034740de14b8716dc65c59471638a0d6df1fc662d6e2b9dfc16f2bf2e6ec6be9->enter($__internal_034740de14b8716dc65c59471638a0d6df1fc662d6e2b9dfc16f2bf2e6ec6be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_034740de14b8716dc65c59471638a0d6df1fc662d6e2b9dfc16f2bf2e6ec6be9->leave($__internal_034740de14b8716dc65c59471638a0d6df1fc662d6e2b9dfc16f2bf2e6ec6be9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a78021b23ab5a11f925ac519c205472c92d40b87ce04bd27ac672167b6291129 = $this->env->getExtension("native_profiler");
        $__internal_a78021b23ab5a11f925ac519c205472c92d40b87ce04bd27ac672167b6291129->enter($__internal_a78021b23ab5a11f925ac519c205472c92d40b87ce04bd27ac672167b6291129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter un moule </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Moule:formulaire.html.twig", "GmaoMoulageBundle:Moule:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_a78021b23ab5a11f925ac519c205472c92d40b87ce04bd27ac672167b6291129->leave($__internal_a78021b23ab5a11f925ac519c205472c92d40b87ce04bd27ac672167b6291129_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Moule:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*   <h2 class="ui dividing header" > Ajouter un moule </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Moule:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
