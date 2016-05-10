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
        $__internal_93fdd905e132dc3dc012faeb28094556c175d9d65f3171b4348e68e83025a48b = $this->env->getExtension("native_profiler");
        $__internal_93fdd905e132dc3dc012faeb28094556c175d9d65f3171b4348e68e83025a48b->enter($__internal_93fdd905e132dc3dc012faeb28094556c175d9d65f3171b4348e68e83025a48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93fdd905e132dc3dc012faeb28094556c175d9d65f3171b4348e68e83025a48b->leave($__internal_93fdd905e132dc3dc012faeb28094556c175d9d65f3171b4348e68e83025a48b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25ef715d275e0097147c466e872c3fb10f38984f16e567235778d2848642fc4d = $this->env->getExtension("native_profiler");
        $__internal_25ef715d275e0097147c466e872c3fb10f38984f16e567235778d2848642fc4d->enter($__internal_25ef715d275e0097147c466e872c3fb10f38984f16e567235778d2848642fc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_25ef715d275e0097147c466e872c3fb10f38984f16e567235778d2848642fc4d->leave($__internal_25ef715d275e0097147c466e872c3fb10f38984f16e567235778d2848642fc4d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b27596121a41ce3389446e0c811fcd9a78a554a2b895c02d8e0bf72e5acdd7b3 = $this->env->getExtension("native_profiler");
        $__internal_b27596121a41ce3389446e0c811fcd9a78a554a2b895c02d8e0bf72e5acdd7b3->enter($__internal_b27596121a41ce3389446e0c811fcd9a78a554a2b895c02d8e0bf72e5acdd7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b27596121a41ce3389446e0c811fcd9a78a554a2b895c02d8e0bf72e5acdd7b3->leave($__internal_b27596121a41ce3389446e0c811fcd9a78a554a2b895c02d8e0bf72e5acdd7b3_prof);

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
