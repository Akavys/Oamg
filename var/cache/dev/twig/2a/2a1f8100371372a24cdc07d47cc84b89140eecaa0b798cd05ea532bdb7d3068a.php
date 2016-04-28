<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7df374dc1d0f29aed822b0c8acfb9f45809242ea43cd140b0bd15f817a043127 extends Twig_Template
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
        $__internal_3bc6b78b3c853a3935bfd58f1a4b56605c9731342f5ea5b587806020a3a65415 = $this->env->getExtension("native_profiler");
        $__internal_3bc6b78b3c853a3935bfd58f1a4b56605c9731342f5ea5b587806020a3a65415->enter($__internal_3bc6b78b3c853a3935bfd58f1a4b56605c9731342f5ea5b587806020a3a65415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3bc6b78b3c853a3935bfd58f1a4b56605c9731342f5ea5b587806020a3a65415->leave($__internal_3bc6b78b3c853a3935bfd58f1a4b56605c9731342f5ea5b587806020a3a65415_prof);

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
