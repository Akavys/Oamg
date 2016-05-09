<?php

/* GmaoMoulageBundle:Presse:modifier.html.twig */
class __TwigTemplate_4fc0b8286941130c80bae9e6326958153320c09f37693458c5d587c0420d0abc extends Twig_Template
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
        $__internal_79764022d3198ded2bd739e724d48381c512edf5e1b0b20518024acf107338c6 = $this->env->getExtension("native_profiler");
        $__internal_79764022d3198ded2bd739e724d48381c512edf5e1b0b20518024acf107338c6->enter($__internal_79764022d3198ded2bd739e724d48381c512edf5e1b0b20518024acf107338c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79764022d3198ded2bd739e724d48381c512edf5e1b0b20518024acf107338c6->leave($__internal_79764022d3198ded2bd739e724d48381c512edf5e1b0b20518024acf107338c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9f9858b9b4bda06dc06bf0a26d5c13da34465880dc426e0589422187e04461b = $this->env->getExtension("native_profiler");
        $__internal_b9f9858b9b4bda06dc06bf0a26d5c13da34465880dc426e0589422187e04461b->enter($__internal_b9f9858b9b4bda06dc06bf0a26d5c13da34465880dc426e0589422187e04461b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b9f9858b9b4bda06dc06bf0a26d5c13da34465880dc426e0589422187e04461b->leave($__internal_b9f9858b9b4bda06dc06bf0a26d5c13da34465880dc426e0589422187e04461b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_32b9b1e2b144d80e030af6c181aec43889a742726b0f1dbaa6f189248ed16170 = $this->env->getExtension("native_profiler");
        $__internal_32b9b1e2b144d80e030af6c181aec43889a742726b0f1dbaa6f189248ed16170->enter($__internal_32b9b1e2b144d80e030af6c181aec43889a742726b0f1dbaa6f189248ed16170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_32b9b1e2b144d80e030af6c181aec43889a742726b0f1dbaa6f189248ed16170->leave($__internal_32b9b1e2b144d80e030af6c181aec43889a742726b0f1dbaa6f189248ed16170_prof);

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
