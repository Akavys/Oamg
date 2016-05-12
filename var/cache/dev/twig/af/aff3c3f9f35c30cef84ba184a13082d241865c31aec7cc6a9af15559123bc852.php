<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3b1a24d79a105f39a9945b43587b100bac972c125dd4836dc9713f14cf8d0cae extends Twig_Template
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
        $__internal_e2821482ec6951aae9b193ee0561628a73adc8fb61527ab300d1999ca9de345f = $this->env->getExtension("native_profiler");
        $__internal_e2821482ec6951aae9b193ee0561628a73adc8fb61527ab300d1999ca9de345f->enter($__internal_e2821482ec6951aae9b193ee0561628a73adc8fb61527ab300d1999ca9de345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e2821482ec6951aae9b193ee0561628a73adc8fb61527ab300d1999ca9de345f->leave($__internal_e2821482ec6951aae9b193ee0561628a73adc8fb61527ab300d1999ca9de345f_prof);

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
