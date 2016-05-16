<?php

/* GmaoMoulageBundle:Presse:ajouter.html.twig */
class __TwigTemplate_5f95f2064447d9b97937f3a555fabead1143582d1406295830af36d93ffff0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 1);
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
        $__internal_f675612e830649983760cab9f9147bc36ee6e3ba06700889c52798c8bd2790b4 = $this->env->getExtension("native_profiler");
        $__internal_f675612e830649983760cab9f9147bc36ee6e3ba06700889c52798c8bd2790b4->enter($__internal_f675612e830649983760cab9f9147bc36ee6e3ba06700889c52798c8bd2790b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f675612e830649983760cab9f9147bc36ee6e3ba06700889c52798c8bd2790b4->leave($__internal_f675612e830649983760cab9f9147bc36ee6e3ba06700889c52798c8bd2790b4_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_be5470b339294f46df296a498a19f973e7dde86a6abf2399ddae6ff2c0d0887e = $this->env->getExtension("native_profiler");
        $__internal_be5470b339294f46df296a498a19f973e7dde86a6abf2399ddae6ff2c0d0887e->enter($__internal_be5470b339294f46df296a498a19f973e7dde86a6abf2399ddae6ff2c0d0887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_be5470b339294f46df296a498a19f973e7dde86a6abf2399ddae6ff2c0d0887e->leave($__internal_be5470b339294f46df296a498a19f973e7dde86a6abf2399ddae6ff2c0d0887e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8c84fb3960a7168c79c8e8a4e4ae004cef59e5ed25dd9ed0d39e42b67c5d7c3 = $this->env->getExtension("native_profiler");
        $__internal_b8c84fb3960a7168c79c8e8a4e4ae004cef59e5ed25dd9ed0d39e42b67c5d7c3->enter($__internal_b8c84fb3960a7168c79c8e8a4e4ae004cef59e5ed25dd9ed0d39e42b67c5d7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une presse </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_b8c84fb3960a7168c79c8e8a4e4ae004cef59e5ed25dd9ed0d39e42b67c5d7c3->leave($__internal_b8c84fb3960a7168c79c8e8a4e4ae004cef59e5ed25dd9ed0d39e42b67c5d7c3_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Presse:ajouter.html.twig";
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
/*   Liste - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header" > Ajouter une presse </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
