<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8e8300de9ebb3ea8cb8495273d29ed2a1a5108d5aaf54fda89da9dd01eb6c493 extends Twig_Template
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
        $__internal_72d93a5b3a4aa2f5166e08f8154ff7a9338ebeed475e182e84222645b37c9930 = $this->env->getExtension("native_profiler");
        $__internal_72d93a5b3a4aa2f5166e08f8154ff7a9338ebeed475e182e84222645b37c9930->enter($__internal_72d93a5b3a4aa2f5166e08f8154ff7a9338ebeed475e182e84222645b37c9930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_72d93a5b3a4aa2f5166e08f8154ff7a9338ebeed475e182e84222645b37c9930->leave($__internal_72d93a5b3a4aa2f5166e08f8154ff7a9338ebeed475e182e84222645b37c9930_prof);

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
