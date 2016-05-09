<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_e11309784ebef32539749456c967f05bf826571c5434f136a472b132f617ed84 extends Twig_Template
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
        $__internal_ee4e3455222bf776105a5d3a688cadb02b09ec8ff77ca73480c768fd51a67fef = $this->env->getExtension("native_profiler");
        $__internal_ee4e3455222bf776105a5d3a688cadb02b09ec8ff77ca73480c768fd51a67fef->enter($__internal_ee4e3455222bf776105a5d3a688cadb02b09ec8ff77ca73480c768fd51a67fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ee4e3455222bf776105a5d3a688cadb02b09ec8ff77ca73480c768fd51a67fef->leave($__internal_ee4e3455222bf776105a5d3a688cadb02b09ec8ff77ca73480c768fd51a67fef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
