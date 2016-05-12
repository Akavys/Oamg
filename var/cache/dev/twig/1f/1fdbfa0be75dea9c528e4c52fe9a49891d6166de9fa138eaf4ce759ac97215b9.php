<?php

/* @GmaoMoulage/Reference/supprimer.html.twig */
class __TwigTemplate_0dcf9f9dd183e50f724d4d06cd16bde9884c6c5e3e0a0ab3ac63c8201c269f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Reference/supprimer.html.twig", 1);
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
        $__internal_6b28534d1ccafe763b8317839e3fbe2c15973efd9eefb79fbde03625236acf70 = $this->env->getExtension("native_profiler");
        $__internal_6b28534d1ccafe763b8317839e3fbe2c15973efd9eefb79fbde03625236acf70->enter($__internal_6b28534d1ccafe763b8317839e3fbe2c15973efd9eefb79fbde03625236acf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Reference/supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b28534d1ccafe763b8317839e3fbe2c15973efd9eefb79fbde03625236acf70->leave($__internal_6b28534d1ccafe763b8317839e3fbe2c15973efd9eefb79fbde03625236acf70_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_906a7418fbebe45211482920b8ba5b85e3959ce834ca94274b54462c5338e3fe = $this->env->getExtension("native_profiler");
        $__internal_906a7418fbebe45211482920b8ba5b85e3959ce834ca94274b54462c5338e3fe->enter($__internal_906a7418fbebe45211482920b8ba5b85e3959ce834ca94274b54462c5338e3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une référence - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_906a7418fbebe45211482920b8ba5b85e3959ce834ca94274b54462c5338e3fe->leave($__internal_906a7418fbebe45211482920b8ba5b85e3959ce834ca94274b54462c5338e3fe_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f5cc590972dde58daed2f0c8ae3ba2fed043355e4f66de033455359c9028eb0 = $this->env->getExtension("native_profiler");
        $__internal_7f5cc590972dde58daed2f0c8ae3ba2fed043355e4f66de033455359c9028eb0->enter($__internal_7f5cc590972dde58daed2f0c8ae3ba2fed043355e4f66de033455359c9028eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\"> Supprimer une référence</h2>

  <div class=\"well\">
    <form method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_supprimer_reference", array("id" => $this->getAttribute((isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "id", array()))), "html", null, true);
        echo "\"  >
      Êtes-vous sûr de vouloir supprimer définitivement cette référence?
      <button type=\"submit\" class=\"negative ui button\" >Valider</button>
    </form>
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_reference");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste référence
    </a>
  </p>


";
        
        $__internal_7f5cc590972dde58daed2f0c8ae3ba2fed043355e4f66de033455359c9028eb0->leave($__internal_7f5cc590972dde58daed2f0c8ae3ba2fed043355e4f66de033455359c9028eb0_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Reference/supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une référence - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header"> Supprimer une référence</h2>*/
/* */
/*   <div class="well">*/
/*     <form method="post" action="{{ path('gmao_moulage_supprimer_reference', {'id': reference.id}) }}"  >*/
/*       Êtes-vous sûr de vouloir supprimer définitivement cette référence?*/
/*       <button type="submit" class="negative ui button" >Valider</button>*/
/*     </form>*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('gmao_moulage_liste_reference') }}" class="ui orange button">*/
/*       <i class="glyphicon glyphicon-arrow-left"></i>*/
/*       Retour vers la page liste référence*/
/*     </a>*/
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
