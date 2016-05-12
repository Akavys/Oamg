<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_eee255b8339d509e6c7901f7596a34c39988eecbf58aca6bea6e0250f43f42db extends Twig_Template
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
        $__internal_1f731f535100459246f415598ba2753719da9b5057fee4dcf63ce0ad8c43c05d = $this->env->getExtension("native_profiler");
        $__internal_1f731f535100459246f415598ba2753719da9b5057fee4dcf63ce0ad8c43c05d->enter($__internal_1f731f535100459246f415598ba2753719da9b5057fee4dcf63ce0ad8c43c05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1f731f535100459246f415598ba2753719da9b5057fee4dcf63ce0ad8c43c05d->leave($__internal_1f731f535100459246f415598ba2753719da9b5057fee4dcf63ce0ad8c43c05d_prof);

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
