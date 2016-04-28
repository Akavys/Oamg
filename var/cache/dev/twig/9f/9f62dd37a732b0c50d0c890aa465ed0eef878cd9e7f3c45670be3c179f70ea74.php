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
        $__internal_57660dc728300d1e7d3a0941ae35581678289b2fd17a9c6c6e426e92e9837dda = $this->env->getExtension("native_profiler");
        $__internal_57660dc728300d1e7d3a0941ae35581678289b2fd17a9c6c6e426e92e9837dda->enter($__internal_57660dc728300d1e7d3a0941ae35581678289b2fd17a9c6c6e426e92e9837dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_57660dc728300d1e7d3a0941ae35581678289b2fd17a9c6c6e426e92e9837dda->leave($__internal_57660dc728300d1e7d3a0941ae35581678289b2fd17a9c6c6e426e92e9837dda_prof);

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
