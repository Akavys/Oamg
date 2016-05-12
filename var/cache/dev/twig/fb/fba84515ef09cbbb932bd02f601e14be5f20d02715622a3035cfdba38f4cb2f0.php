<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_d82b7f85b311aafc2e912caecc931946940cc17e0571ad6158f156a7f1af1ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_969f233361afcbb138ef1472a6413da567b8deaf0c704a5fac9f44396fb6bc40 = $this->env->getExtension("native_profiler");
        $__internal_969f233361afcbb138ef1472a6413da567b8deaf0c704a5fac9f44396fb6bc40->enter($__internal_969f233361afcbb138ef1472a6413da567b8deaf0c704a5fac9f44396fb6bc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_969f233361afcbb138ef1472a6413da567b8deaf0c704a5fac9f44396fb6bc40->leave($__internal_969f233361afcbb138ef1472a6413da567b8deaf0c704a5fac9f44396fb6bc40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
