<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4d80ca498b571495e294e83a17c4fbe29df075a68f8b02ca5765d3b2845edfa8 extends Twig_Template
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
        $__internal_3bcf9050c5d2367667cb4d8fc0e6cc0c0f99fd678bbc375457b3b9f7747766fe = $this->env->getExtension("native_profiler");
        $__internal_3bcf9050c5d2367667cb4d8fc0e6cc0c0f99fd678bbc375457b3b9f7747766fe->enter($__internal_3bcf9050c5d2367667cb4d8fc0e6cc0c0f99fd678bbc375457b3b9f7747766fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3bcf9050c5d2367667cb4d8fc0e6cc0c0f99fd678bbc375457b3b9f7747766fe->leave($__internal_3bcf9050c5d2367667cb4d8fc0e6cc0c0f99fd678bbc375457b3b9f7747766fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
