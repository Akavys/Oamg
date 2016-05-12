<?php

/* GmaoMoulageBundle:Presse:modifier.html.twig */
class __TwigTemplate_137d6f43d70fa0243d8dea76e3ebc6e3e8a7de23caf2d191f45fcdbad43e44aa extends Twig_Template
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
        $__internal_98c11fce637f0f1f24109bd13a86fad6273aa53f912b086008934a68fb2d2664 = $this->env->getExtension("native_profiler");
        $__internal_98c11fce637f0f1f24109bd13a86fad6273aa53f912b086008934a68fb2d2664->enter($__internal_98c11fce637f0f1f24109bd13a86fad6273aa53f912b086008934a68fb2d2664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98c11fce637f0f1f24109bd13a86fad6273aa53f912b086008934a68fb2d2664->leave($__internal_98c11fce637f0f1f24109bd13a86fad6273aa53f912b086008934a68fb2d2664_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0762c9b1da159b2dd95e5a8345de228f6ab2af5c8d5910a22390468c9a28f552 = $this->env->getExtension("native_profiler");
        $__internal_0762c9b1da159b2dd95e5a8345de228f6ab2af5c8d5910a22390468c9a28f552->enter($__internal_0762c9b1da159b2dd95e5a8345de228f6ab2af5c8d5910a22390468c9a28f552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0762c9b1da159b2dd95e5a8345de228f6ab2af5c8d5910a22390468c9a28f552->leave($__internal_0762c9b1da159b2dd95e5a8345de228f6ab2af5c8d5910a22390468c9a28f552_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5336ade1ddfa7575c86413113ac383e62de9c3a4427088038c39aee2f6b893fb = $this->env->getExtension("native_profiler");
        $__internal_5336ade1ddfa7575c86413113ac383e62de9c3a4427088038c39aee2f6b893fb->enter($__internal_5336ade1ddfa7575c86413113ac383e62de9c3a4427088038c39aee2f6b893fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5336ade1ddfa7575c86413113ac383e62de9c3a4427088038c39aee2f6b893fb->leave($__internal_5336ade1ddfa7575c86413113ac383e62de9c3a4427088038c39aee2f6b893fb_prof);

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
