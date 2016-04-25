<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_542902054ffa4ee097acae186538712d5ecd710c4eaa0726122c06bc222982dd extends Twig_Template
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
        $__internal_f63c944bf2404c8efee6597a31a2bc78f4e5aaf04c2c6a9aaea6902a3a2b5475 = $this->env->getExtension("native_profiler");
        $__internal_f63c944bf2404c8efee6597a31a2bc78f4e5aaf04c2c6a9aaea6902a3a2b5475->enter($__internal_f63c944bf2404c8efee6597a31a2bc78f4e5aaf04c2c6a9aaea6902a3a2b5475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f63c944bf2404c8efee6597a31a2bc78f4e5aaf04c2c6a9aaea6902a3a2b5475->leave($__internal_f63c944bf2404c8efee6597a31a2bc78f4e5aaf04c2c6a9aaea6902a3a2b5475_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
