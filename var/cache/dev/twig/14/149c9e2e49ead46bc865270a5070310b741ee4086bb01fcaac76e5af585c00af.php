<?php

/* GmaoMoulageBundle:Reference:modifier.html.twig */
class __TwigTemplate_f084fa8cf200d18103bc71563be3cab93ca7a618f9e34770dd0c4901552203c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Reference:modifier.html.twig", 1);
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
        $__internal_4e7d226502f2787b65681ad4163160121a5622c09a96bad37f3d92b0e622ede4 = $this->env->getExtension("native_profiler");
        $__internal_4e7d226502f2787b65681ad4163160121a5622c09a96bad37f3d92b0e622ede4->enter($__internal_4e7d226502f2787b65681ad4163160121a5622c09a96bad37f3d92b0e622ede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e7d226502f2787b65681ad4163160121a5622c09a96bad37f3d92b0e622ede4->leave($__internal_4e7d226502f2787b65681ad4163160121a5622c09a96bad37f3d92b0e622ede4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f18cb2f20d00fa7ae0500ea80e3c0279edc38a27515eb1c562e56b47f8c0e178 = $this->env->getExtension("native_profiler");
        $__internal_f18cb2f20d00fa7ae0500ea80e3c0279edc38a27515eb1c562e56b47f8c0e178->enter($__internal_f18cb2f20d00fa7ae0500ea80e3c0279edc38a27515eb1c562e56b47f8c0e178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une référence - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f18cb2f20d00fa7ae0500ea80e3c0279edc38a27515eb1c562e56b47f8c0e178->leave($__internal_f18cb2f20d00fa7ae0500ea80e3c0279edc38a27515eb1c562e56b47f8c0e178_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9730fb3266ab0a163dd297d1293cfc0d310c382ca2a1702be1fcedd1cafc8f6 = $this->env->getExtension("native_profiler");
        $__internal_e9730fb3266ab0a163dd297d1293cfc0d310c382ca2a1702be1fcedd1cafc8f6->enter($__internal_e9730fb3266ab0a163dd297d1293cfc0d310c382ca2a1702be1fcedd1cafc8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\">Modifier une référence</h2>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Reference:formulaire.html.twig", "GmaoMoulageBundle:Reference:modifier.html.twig", 11)->display($context);
        // line 12
        echo "
  <p>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_reference");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste référence
    </a>
  </p>


";
        
        $__internal_e9730fb3266ab0a163dd297d1293cfc0d310c382ca2a1702be1fcedd1cafc8f6->leave($__internal_e9730fb3266ab0a163dd297d1293cfc0d310c382ca2a1702be1fcedd1cafc8f6_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Reference:modifier.html.twig";
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
/*   Modifier une référence - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header">Modifier une référence</h2>*/
/* */
/*   {% include "GmaoMoulageBundle:Reference:formulaire.html.twig" %}*/
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
