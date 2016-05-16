<?php

/* GmaoMoulageBundle:Presse:modifier.html.twig */
class __TwigTemplate_5d7830e59cd0bd70601802e0ae2c020ba7fd3287d124d26aab2dca0e3e56a1b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Presse:modifier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4bd819a8d2a240daa64d8c77c848054237b84674c3af4c8ec9e9875c37bb2cb = $this->env->getExtension("native_profiler");
        $__internal_f4bd819a8d2a240daa64d8c77c848054237b84674c3af4c8ec9e9875c37bb2cb->enter($__internal_f4bd819a8d2a240daa64d8c77c848054237b84674c3af4c8ec9e9875c37bb2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4bd819a8d2a240daa64d8c77c848054237b84674c3af4c8ec9e9875c37bb2cb->leave($__internal_f4bd819a8d2a240daa64d8c77c848054237b84674c3af4c8ec9e9875c37bb2cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e13ca6e0ad02ff13d0ad581aa1aa33921e27d0a5c945f0a9212266c833887eda = $this->env->getExtension("native_profiler");
        $__internal_e13ca6e0ad02ff13d0ad581aa1aa33921e27d0a5c945f0a9212266c833887eda->enter($__internal_e13ca6e0ad02ff13d0ad581aa1aa33921e27d0a5c945f0a9212266c833887eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e13ca6e0ad02ff13d0ad581aa1aa33921e27d0a5c945f0a9212266c833887eda->leave($__internal_e13ca6e0ad02ff13d0ad581aa1aa33921e27d0a5c945f0a9212266c833887eda_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddc5b2d84092ab8b677cf3bece3c30ce90f42e3d7166e90146f7dbdda4b64cda = $this->env->getExtension("native_profiler");
        $__internal_ddc5b2d84092ab8b677cf3bece3c30ce90f42e3d7166e90146f7dbdda4b64cda->enter($__internal_ddc5b2d84092ab8b677cf3bece3c30ce90f42e3d7166e90146f7dbdda4b64cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\">Modifier une presse</h2>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "GmaoMoulageBundle:Presse:modifier.html.twig", 11)->display($context);
        // line 12
        echo "
  <p>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste presse
    </a>
  </p>


";
        
        $__internal_ddc5b2d84092ab8b677cf3bece3c30ce90f42e3d7166e90146f7dbdda4b64cda->leave($__internal_ddc5b2d84092ab8b677cf3bece3c30ce90f42e3d7166e90146f7dbdda4b64cda_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Presse:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une presse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header">Modifier une presse</h2>*/
/* */
/*   {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
/* */
/*   <p>*/
/*     <a href="{{ path('gmao_moulage_liste_presse') }}" class="ui orange button">*/
/*       <i class="glyphicon glyphicon-arrow-left"></i>*/
/*       Retour vers la page liste presse*/
/*     </a>*/
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
