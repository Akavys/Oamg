<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_1457d9330d228944cf1d18e51a0ab782da76fc0394f621873ae278275f5a3a8e extends Twig_Template
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
        $__internal_63ba9042e20dbcb605cd4879a667fd6318f460650d80c03ea9a7747d7f79acca = $this->env->getExtension("native_profiler");
        $__internal_63ba9042e20dbcb605cd4879a667fd6318f460650d80c03ea9a7747d7f79acca->enter($__internal_63ba9042e20dbcb605cd4879a667fd6318f460650d80c03ea9a7747d7f79acca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_63ba9042e20dbcb605cd4879a667fd6318f460650d80c03ea9a7747d7f79acca->leave($__internal_63ba9042e20dbcb605cd4879a667fd6318f460650d80c03ea9a7747d7f79acca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
