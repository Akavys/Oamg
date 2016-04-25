<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_11b2beb2633c514e632b0aca1e794658b34395c45959058532fe3e0dff52c617 extends Twig_Template
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
        $__internal_8cace5023d9492fee9fc967c06b17bfeedaa1a0c34940a99c51e7789e3ef93f8 = $this->env->getExtension("native_profiler");
        $__internal_8cace5023d9492fee9fc967c06b17bfeedaa1a0c34940a99c51e7789e3ef93f8->enter($__internal_8cace5023d9492fee9fc967c06b17bfeedaa1a0c34940a99c51e7789e3ef93f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8cace5023d9492fee9fc967c06b17bfeedaa1a0c34940a99c51e7789e3ef93f8->leave($__internal_8cace5023d9492fee9fc967c06b17bfeedaa1a0c34940a99c51e7789e3ef93f8_prof);

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
