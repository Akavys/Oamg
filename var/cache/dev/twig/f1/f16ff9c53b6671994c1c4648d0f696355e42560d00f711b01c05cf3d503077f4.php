<?php

/* GmaoMoulageBundle:Moule:modifier.html.twig */
class __TwigTemplate_3193283654943f519e4b5c03bdbdc74c031e579251432a668ac38a0b718092e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Moule:modifier.html.twig", 1);
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
        $__internal_092f14d14251707a812c1cda897462bc85ca119797c9398e20c1ae9590569bf4 = $this->env->getExtension("native_profiler");
        $__internal_092f14d14251707a812c1cda897462bc85ca119797c9398e20c1ae9590569bf4->enter($__internal_092f14d14251707a812c1cda897462bc85ca119797c9398e20c1ae9590569bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Moule:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_092f14d14251707a812c1cda897462bc85ca119797c9398e20c1ae9590569bf4->leave($__internal_092f14d14251707a812c1cda897462bc85ca119797c9398e20c1ae9590569bf4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5893f239c5b595c90aa58ace46a719f87814cb86c4bb4bc76199da2648c8b663 = $this->env->getExtension("native_profiler");
        $__internal_5893f239c5b595c90aa58ace46a719f87814cb86c4bb4bc76199da2648c8b663->enter($__internal_5893f239c5b595c90aa58ace46a719f87814cb86c4bb4bc76199da2648c8b663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier un moule - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5893f239c5b595c90aa58ace46a719f87814cb86c4bb4bc76199da2648c8b663->leave($__internal_5893f239c5b595c90aa58ace46a719f87814cb86c4bb4bc76199da2648c8b663_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7aed591f02e4a4c70d1691d9eb313c4f4d8f86afc8f934e055136201a97c5cb = $this->env->getExtension("native_profiler");
        $__internal_f7aed591f02e4a4c70d1691d9eb313c4f4d8f86afc8f934e055136201a97c5cb->enter($__internal_f7aed591f02e4a4c70d1691d9eb313c4f4d8f86afc8f934e055136201a97c5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\">Modifier un moule</h2>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Moule:formulaire.html.twig", "GmaoMoulageBundle:Moule:modifier.html.twig", 11)->display($context);
        // line 12
        echo "
  <p>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_moule");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste moule
    </a>
  </p>


";
        
        $__internal_f7aed591f02e4a4c70d1691d9eb313c4f4d8f86afc8f934e055136201a97c5cb->leave($__internal_f7aed591f02e4a4c70d1691d9eb313c4f4d8f86afc8f934e055136201a97c5cb_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Moule:modifier.html.twig";
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
/*   Modifier un moule - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header">Modifier un moule</h2>*/
/* */
/*   {% include "GmaoMoulageBundle:Moule:formulaire.html.twig" %}*/
/* */
/*   <p>*/
/*     <a href="{{ path('gmao_moulage_liste_moule') }}" class="ui orange button">*/
/*       <i class="glyphicon glyphicon-arrow-left"></i>*/
/*       Retour vers la page liste moule*/
/*     </a>*/
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
