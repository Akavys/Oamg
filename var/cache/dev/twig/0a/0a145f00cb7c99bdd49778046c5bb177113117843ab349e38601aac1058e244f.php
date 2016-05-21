<?php

/* GmaoMoulageBundle:Presse:ajouter.html.twig */
class __TwigTemplate_5f95f2064447d9b97937f3a555fabead1143582d1406295830af36d93ffff0fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 1);
        $this->blocks = array(
            'tittle' => array($this, 'block_tittle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f90066595e9c0649e3709ecdad7f9b2a04bb235f95e97b812b84f55d38d433c = $this->env->getExtension("native_profiler");
        $__internal_5f90066595e9c0649e3709ecdad7f9b2a04bb235f95e97b812b84f55d38d433c->enter($__internal_5f90066595e9c0649e3709ecdad7f9b2a04bb235f95e97b812b84f55d38d433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f90066595e9c0649e3709ecdad7f9b2a04bb235f95e97b812b84f55d38d433c->leave($__internal_5f90066595e9c0649e3709ecdad7f9b2a04bb235f95e97b812b84f55d38d433c_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_7cf3470fd4fd607214d682810d987c6847ce7f05f2d1758ed3f34528d3cf6363 = $this->env->getExtension("native_profiler");
        $__internal_7cf3470fd4fd607214d682810d987c6847ce7f05f2d1758ed3f34528d3cf6363->enter($__internal_7cf3470fd4fd607214d682810d987c6847ce7f05f2d1758ed3f34528d3cf6363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_7cf3470fd4fd607214d682810d987c6847ce7f05f2d1758ed3f34528d3cf6363->leave($__internal_7cf3470fd4fd607214d682810d987c6847ce7f05f2d1758ed3f34528d3cf6363_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_34c27143650b8f8106e5aeb39bdefbcc53d9ff4092a60407d5dc798b841aed64 = $this->env->getExtension("native_profiler");
        $__internal_34c27143650b8f8106e5aeb39bdefbcc53d9ff4092a60407d5dc798b841aed64->enter($__internal_34c27143650b8f8106e5aeb39bdefbcc53d9ff4092a60407d5dc798b841aed64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une presse </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_34c27143650b8f8106e5aeb39bdefbcc53d9ff4092a60407d5dc798b841aed64->leave($__internal_34c27143650b8f8106e5aeb39bdefbcc53d9ff4092a60407d5dc798b841aed64_prof);

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
        return array (  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block tittle %}*/
/*   Liste - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header" > Ajouter une presse </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
