<?php

/* GmaoMoulageBundle:Reference:ajouter.html.twig */
class __TwigTemplate_3be38a2093d3274188e93f44de3c8ee6ad58c6a15446691cb0fe903176573b03 extends Twig_Template
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
        $__internal_bfba197729d3d0400e18c88526d7bd7106461ac7660d479fa83c9d6a1740672a = $this->env->getExtension("native_profiler");
        $__internal_bfba197729d3d0400e18c88526d7bd7106461ac7660d479fa83c9d6a1740672a->enter($__internal_bfba197729d3d0400e18c88526d7bd7106461ac7660d479fa83c9d6a1740672a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfba197729d3d0400e18c88526d7bd7106461ac7660d479fa83c9d6a1740672a->leave($__internal_bfba197729d3d0400e18c88526d7bd7106461ac7660d479fa83c9d6a1740672a_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_7989de8b57eb1a31c51e689ad552eb6ef7a342abbecd0b0e74f38d35bbfdff81 = $this->env->getExtension("native_profiler");
        $__internal_7989de8b57eb1a31c51e689ad552eb6ef7a342abbecd0b0e74f38d35bbfdff81->enter($__internal_7989de8b57eb1a31c51e689ad552eb6ef7a342abbecd0b0e74f38d35bbfdff81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_7989de8b57eb1a31c51e689ad552eb6ef7a342abbecd0b0e74f38d35bbfdff81->leave($__internal_7989de8b57eb1a31c51e689ad552eb6ef7a342abbecd0b0e74f38d35bbfdff81_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a4f1936400fb9a2d641567e7ed736b845a8e70bfa497442dc6b0b6fe23a0b39 = $this->env->getExtension("native_profiler");
        $__internal_8a4f1936400fb9a2d641567e7ed736b845a8e70bfa497442dc6b0b6fe23a0b39->enter($__internal_8a4f1936400fb9a2d641567e7ed736b845a8e70bfa497442dc6b0b6fe23a0b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une référence </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Reference:formulaire.html.twig", "GmaoMoulageBundle:Reference:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_8a4f1936400fb9a2d641567e7ed736b845a8e70bfa497442dc6b0b6fe23a0b39->leave($__internal_8a4f1936400fb9a2d641567e7ed736b845a8e70bfa497442dc6b0b6fe23a0b39_prof);

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
/*   <h2 class="ui dividing header" > Ajouter une référence </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Reference:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
