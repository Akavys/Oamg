<?php

/* GmaoMoulageBundle:Presse:ajouter.html.twig */
class __TwigTemplate_7abfda0d68ae3b5b6a2d74c3494e24dcec0dfa408b9cdefff576bef8c2d8e298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57fd42116a49523ab5ea88a3439046befb9512ce4d74c61aa5385fcc12c07c14 = $this->env->getExtension("native_profiler");
        $__internal_57fd42116a49523ab5ea88a3439046befb9512ce4d74c61aa5385fcc12c07c14->enter($__internal_57fd42116a49523ab5ea88a3439046befb9512ce4d74c61aa5385fcc12c07c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57fd42116a49523ab5ea88a3439046befb9512ce4d74c61aa5385fcc12c07c14->leave($__internal_57fd42116a49523ab5ea88a3439046befb9512ce4d74c61aa5385fcc12c07c14_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_efb0dcc7da987190797e6f0b10a0a18ffe4f22f56d050cecce0e3329c3c0242e = $this->env->getExtension("native_profiler");
        $__internal_efb0dcc7da987190797e6f0b10a0a18ffe4f22f56d050cecce0e3329c3c0242e->enter($__internal_efb0dcc7da987190797e6f0b10a0a18ffe4f22f56d050cecce0e3329c3c0242e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h1> Ajouter une presse </h1>

  ";
        // line 7
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 7)->display($context);
        // line 8
        echo "
";
        
        $__internal_efb0dcc7da987190797e6f0b10a0a18ffe4f22f56d050cecce0e3329c3c0242e->leave($__internal_efb0dcc7da987190797e6f0b10a0a18ffe4f22f56d050cecce0e3329c3c0242e_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Presse:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h1> Ajouter une presse </h1>*/
/* */
/*   {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
