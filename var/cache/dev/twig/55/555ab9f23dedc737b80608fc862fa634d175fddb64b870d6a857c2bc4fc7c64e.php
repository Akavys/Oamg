<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6c985d3df7df668419d12df3b93ebf1fc4af8f5a1505309f93e6b86811278cc7 extends Twig_Template
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
        $__internal_6215db325c7932370053e48d4c9612a4cc23fb42a5a0c2cab344d5da4e37028f = $this->env->getExtension("native_profiler");
        $__internal_6215db325c7932370053e48d4c9612a4cc23fb42a5a0c2cab344d5da4e37028f->enter($__internal_6215db325c7932370053e48d4c9612a4cc23fb42a5a0c2cab344d5da4e37028f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6215db325c7932370053e48d4c9612a4cc23fb42a5a0c2cab344d5da4e37028f->leave($__internal_6215db325c7932370053e48d4c9612a4cc23fb42a5a0c2cab344d5da4e37028f_prof);

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