<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_5cb813396a5ebab64bf17b30e44ec797c1a4fd35290d6dbacdb641253e3e6a91 extends Twig_Template
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
        $__internal_1b8b590821efa8bf31d85a0c0abce3a0ac4ada4f4c955bdcccaa83f2ebab0887 = $this->env->getExtension("native_profiler");
        $__internal_1b8b590821efa8bf31d85a0c0abce3a0ac4ada4f4c955bdcccaa83f2ebab0887->enter($__internal_1b8b590821efa8bf31d85a0c0abce3a0ac4ada4f4c955bdcccaa83f2ebab0887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1b8b590821efa8bf31d85a0c0abce3a0ac4ada4f4c955bdcccaa83f2ebab0887->leave($__internal_1b8b590821efa8bf31d85a0c0abce3a0ac4ada4f4c955bdcccaa83f2ebab0887_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
