<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_adb3ae721b1333d7fdfd731ac615611cb900c6a763f99acd048a0655ccfcbc0a extends Twig_Template
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
        $__internal_85f98711e755acf268ed42722930adc0ab1a58f0ca9c84a355cab9fbfad5c803 = $this->env->getExtension("native_profiler");
        $__internal_85f98711e755acf268ed42722930adc0ab1a58f0ca9c84a355cab9fbfad5c803->enter($__internal_85f98711e755acf268ed42722930adc0ab1a58f0ca9c84a355cab9fbfad5c803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_85f98711e755acf268ed42722930adc0ab1a58f0ca9c84a355cab9fbfad5c803->leave($__internal_85f98711e755acf268ed42722930adc0ab1a58f0ca9c84a355cab9fbfad5c803_prof);

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
