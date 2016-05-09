<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_daa1d3a06bed31e75bac9f4a4b2525084ae970c5bfb47e4bd276648059bcf487 extends Twig_Template
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
        $__internal_6954d5e6bc2aad27b932c4dc50a0e0994f93b615b137eb48c621eb3f42953896 = $this->env->getExtension("native_profiler");
        $__internal_6954d5e6bc2aad27b932c4dc50a0e0994f93b615b137eb48c621eb3f42953896->enter($__internal_6954d5e6bc2aad27b932c4dc50a0e0994f93b615b137eb48c621eb3f42953896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_6954d5e6bc2aad27b932c4dc50a0e0994f93b615b137eb48c621eb3f42953896->leave($__internal_6954d5e6bc2aad27b932c4dc50a0e0994f93b615b137eb48c621eb3f42953896_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
