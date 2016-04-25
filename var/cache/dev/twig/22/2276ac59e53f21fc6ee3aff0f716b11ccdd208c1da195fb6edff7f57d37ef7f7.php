<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a886dc714be1d9c633d36fc6ec6071a2007336825d63085e54c28df3076124f4 extends Twig_Template
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
        $__internal_0cc08f033bdfd46884b90ca0bffc73ad6e0d67788dc89f6faca469f9d0f3d977 = $this->env->getExtension("native_profiler");
        $__internal_0cc08f033bdfd46884b90ca0bffc73ad6e0d67788dc89f6faca469f9d0f3d977->enter($__internal_0cc08f033bdfd46884b90ca0bffc73ad6e0d67788dc89f6faca469f9d0f3d977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_0cc08f033bdfd46884b90ca0bffc73ad6e0d67788dc89f6faca469f9d0f3d977->leave($__internal_0cc08f033bdfd46884b90ca0bffc73ad6e0d67788dc89f6faca469f9d0f3d977_prof);

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
