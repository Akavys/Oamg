<?php

/* @GmaoMoulage/Reference/modifier.html.twig */
class __TwigTemplate_f4f6d8db205ca3cb2ec4ea0ab1bf3c6c779bf123975396a067cb0b0e742a8756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Reference/modifier.html.twig", 1);
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
        $__internal_26eb0099bd71396d18e2e87608765942652c69a098ea735d32da67b53c2ab4ac = $this->env->getExtension("native_profiler");
        $__internal_26eb0099bd71396d18e2e87608765942652c69a098ea735d32da67b53c2ab4ac->enter($__internal_26eb0099bd71396d18e2e87608765942652c69a098ea735d32da67b53c2ab4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Reference/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26eb0099bd71396d18e2e87608765942652c69a098ea735d32da67b53c2ab4ac->leave($__internal_26eb0099bd71396d18e2e87608765942652c69a098ea735d32da67b53c2ab4ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f082763f2402bba6c0c954d7c4205ffa98230687601e81d1b6f62db0b61074c = $this->env->getExtension("native_profiler");
        $__internal_7f082763f2402bba6c0c954d7c4205ffa98230687601e81d1b6f62db0b61074c->enter($__internal_7f082763f2402bba6c0c954d7c4205ffa98230687601e81d1b6f62db0b61074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une référence - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7f082763f2402bba6c0c954d7c4205ffa98230687601e81d1b6f62db0b61074c->leave($__internal_7f082763f2402bba6c0c954d7c4205ffa98230687601e81d1b6f62db0b61074c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c41e4f13e3c3ae1f54edb72b185220074919fa10600048775566b740c6fea42e = $this->env->getExtension("native_profiler");
        $__internal_c41e4f13e3c3ae1f54edb72b185220074919fa10600048775566b740c6fea42e->enter($__internal_c41e4f13e3c3ae1f54edb72b185220074919fa10600048775566b740c6fea42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\">Modifier une référence</h2>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Reference:formulaire.html.twig", "@GmaoMoulage/Reference/modifier.html.twig", 11)->display($context);
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
        
        $__internal_c41e4f13e3c3ae1f54edb72b185220074919fa10600048775566b740c6fea42e->leave($__internal_c41e4f13e3c3ae1f54edb72b185220074919fa10600048775566b740c6fea42e_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Reference/modifier.html.twig";
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
