<?php

/* @GmaoMoulage/Presse/modifier.html.twig */
class __TwigTemplate_f922a12d694f5a693c23ae0b83905d2caafa7d6b21dfe9054c49ff82c1bd675b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Presse/modifier.html.twig", 1);
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
        $__internal_e7d6ce816f2802a2f95bec82a51361ded5897f0820b34a08953f67ad0324a33a = $this->env->getExtension("native_profiler");
        $__internal_e7d6ce816f2802a2f95bec82a51361ded5897f0820b34a08953f67ad0324a33a->enter($__internal_e7d6ce816f2802a2f95bec82a51361ded5897f0820b34a08953f67ad0324a33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d6ce816f2802a2f95bec82a51361ded5897f0820b34a08953f67ad0324a33a->leave($__internal_e7d6ce816f2802a2f95bec82a51361ded5897f0820b34a08953f67ad0324a33a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bafe67c739524ca71066fb9add16e88571ff15731798c0b1f94a33499537e69 = $this->env->getExtension("native_profiler");
        $__internal_7bafe67c739524ca71066fb9add16e88571ff15731798c0b1f94a33499537e69->enter($__internal_7bafe67c739524ca71066fb9add16e88571ff15731798c0b1f94a33499537e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7bafe67c739524ca71066fb9add16e88571ff15731798c0b1f94a33499537e69->leave($__internal_7bafe67c739524ca71066fb9add16e88571ff15731798c0b1f94a33499537e69_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0668de62536a9eec6351084a74499a7eac057940b65456ba3b1271c643d0766a = $this->env->getExtension("native_profiler");
        $__internal_0668de62536a9eec6351084a74499a7eac057940b65456ba3b1271c643d0766a->enter($__internal_0668de62536a9eec6351084a74499a7eac057940b65456ba3b1271c643d0766a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\">Modifier une presse</h2>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "@GmaoMoulage/Presse/modifier.html.twig", 11)->display($context);
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
        
        $__internal_0668de62536a9eec6351084a74499a7eac057940b65456ba3b1271c643d0766a->leave($__internal_0668de62536a9eec6351084a74499a7eac057940b65456ba3b1271c643d0766a_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Presse/modifier.html.twig";
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
