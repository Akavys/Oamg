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
        $__internal_08c23566852831d1af826be68390bc4d4d626789deb9a555be587d2e28332238 = $this->env->getExtension("native_profiler");
        $__internal_08c23566852831d1af826be68390bc4d4d626789deb9a555be587d2e28332238->enter($__internal_08c23566852831d1af826be68390bc4d4d626789deb9a555be587d2e28332238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c23566852831d1af826be68390bc4d4d626789deb9a555be587d2e28332238->leave($__internal_08c23566852831d1af826be68390bc4d4d626789deb9a555be587d2e28332238_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e02709bdfeeef0081a97b4ce03228191304d0a555412a2e305508adeaa069b7 = $this->env->getExtension("native_profiler");
        $__internal_0e02709bdfeeef0081a97b4ce03228191304d0a555412a2e305508adeaa069b7->enter($__internal_0e02709bdfeeef0081a97b4ce03228191304d0a555412a2e305508adeaa069b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h1> Ajouter une presse </h1>

  ";
        // line 7
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 7)->display($context);
        // line 8
        echo "
";
        
        $__internal_0e02709bdfeeef0081a97b4ce03228191304d0a555412a2e305508adeaa069b7->leave($__internal_0e02709bdfeeef0081a97b4ce03228191304d0a555412a2e305508adeaa069b7_prof);

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
