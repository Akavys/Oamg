<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_7ebef23666592e995d227b4d8fee285f99c1b849e38969d3aba90113ab86fe7b extends Twig_Template
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
        $__internal_6ca6bb864422a4bf1ce4652aeed726d79e27cf3ab3327d4ca4f14771084c9465 = $this->env->getExtension("native_profiler");
        $__internal_6ca6bb864422a4bf1ce4652aeed726d79e27cf3ab3327d4ca4f14771084c9465->enter($__internal_6ca6bb864422a4bf1ce4652aeed726d79e27cf3ab3327d4ca4f14771084c9465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6ca6bb864422a4bf1ce4652aeed726d79e27cf3ab3327d4ca4f14771084c9465->leave($__internal_6ca6bb864422a4bf1ce4652aeed726d79e27cf3ab3327d4ca4f14771084c9465_prof);

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
