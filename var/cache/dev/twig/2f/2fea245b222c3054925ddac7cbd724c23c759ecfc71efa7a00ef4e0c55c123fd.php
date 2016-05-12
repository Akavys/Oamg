<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e163f73090b9f604989fb073e70e07afecec493c7cb866502474a3996879f748 extends Twig_Template
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
        $__internal_fc9b692c19ce4dcb0f9dec27cb857e7011c91fa6bf3a6e8da8b3a3af80a6985e = $this->env->getExtension("native_profiler");
        $__internal_fc9b692c19ce4dcb0f9dec27cb857e7011c91fa6bf3a6e8da8b3a3af80a6985e->enter($__internal_fc9b692c19ce4dcb0f9dec27cb857e7011c91fa6bf3a6e8da8b3a3af80a6985e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fc9b692c19ce4dcb0f9dec27cb857e7011c91fa6bf3a6e8da8b3a3af80a6985e->leave($__internal_fc9b692c19ce4dcb0f9dec27cb857e7011c91fa6bf3a6e8da8b3a3af80a6985e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
