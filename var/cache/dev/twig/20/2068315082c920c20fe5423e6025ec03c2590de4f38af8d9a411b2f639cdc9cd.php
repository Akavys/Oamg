<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_1916c674a2497cf0e84105d15ad4dbcb0dd3eb3f030fb63380a9bf0b3ad826a3 extends Twig_Template
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
        $__internal_032ec9005792ec03e0e9dbaefbb1961a2b6ad75ee5a9b44c07988e4ec4a27fc4 = $this->env->getExtension("native_profiler");
        $__internal_032ec9005792ec03e0e9dbaefbb1961a2b6ad75ee5a9b44c07988e4ec4a27fc4->enter($__internal_032ec9005792ec03e0e9dbaefbb1961a2b6ad75ee5a9b44c07988e4ec4a27fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_032ec9005792ec03e0e9dbaefbb1961a2b6ad75ee5a9b44c07988e4ec4a27fc4->leave($__internal_032ec9005792ec03e0e9dbaefbb1961a2b6ad75ee5a9b44c07988e4ec4a27fc4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
