<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_846337332a6fb6ac97bb75c13b531c1ecf09132de8d7c0dc06a0638cb37d4bba extends Twig_Template
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
        $__internal_ad8ca84bf7da0a854392f11aadeb76a052c697a2f35eab07b52853ae5dfb404b = $this->env->getExtension("native_profiler");
        $__internal_ad8ca84bf7da0a854392f11aadeb76a052c697a2f35eab07b52853ae5dfb404b->enter($__internal_ad8ca84bf7da0a854392f11aadeb76a052c697a2f35eab07b52853ae5dfb404b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ad8ca84bf7da0a854392f11aadeb76a052c697a2f35eab07b52853ae5dfb404b->leave($__internal_ad8ca84bf7da0a854392f11aadeb76a052c697a2f35eab07b52853ae5dfb404b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
