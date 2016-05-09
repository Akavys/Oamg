<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_0cc2f96ebe7e432d62e3ceccd0b82f0e2cb3172f77fd9b360c4eb2506100b364 extends Twig_Template
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
        $__internal_9bb5d474f09e611a937ac1085de9d5d8da92e6dd8d5562391e72fdd3339d844a = $this->env->getExtension("native_profiler");
        $__internal_9bb5d474f09e611a937ac1085de9d5d8da92e6dd8d5562391e72fdd3339d844a->enter($__internal_9bb5d474f09e611a937ac1085de9d5d8da92e6dd8d5562391e72fdd3339d844a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9bb5d474f09e611a937ac1085de9d5d8da92e6dd8d5562391e72fdd3339d844a->leave($__internal_9bb5d474f09e611a937ac1085de9d5d8da92e6dd8d5562391e72fdd3339d844a_prof);

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
