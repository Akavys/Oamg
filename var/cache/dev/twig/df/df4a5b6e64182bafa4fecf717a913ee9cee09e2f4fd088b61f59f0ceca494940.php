<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_2cc1d553780864228f9506aa82eb32141b5e71eb9888a54a433f0ce83d068fd5 extends Twig_Template
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
        $__internal_e203ae50e19a1503ef6cdee27e5719544d6348258b8e82b54bf2c48daa6ffa40 = $this->env->getExtension("native_profiler");
        $__internal_e203ae50e19a1503ef6cdee27e5719544d6348258b8e82b54bf2c48daa6ffa40->enter($__internal_e203ae50e19a1503ef6cdee27e5719544d6348258b8e82b54bf2c48daa6ffa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e203ae50e19a1503ef6cdee27e5719544d6348258b8e82b54bf2c48daa6ffa40->leave($__internal_e203ae50e19a1503ef6cdee27e5719544d6348258b8e82b54bf2c48daa6ffa40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
