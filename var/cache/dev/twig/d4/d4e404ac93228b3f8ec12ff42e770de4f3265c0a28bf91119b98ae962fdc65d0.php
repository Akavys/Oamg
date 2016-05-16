<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0b5cc05a73f7f7d3721a8a5fe6e5856d147c1aab78d598f8b172b1ceaa4e6e7e extends Twig_Template
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
        $__internal_ea49bf7dffc828b76eda32cc8cfcf089cb6dad22324a2922adf5a8848cbd03d2 = $this->env->getExtension("native_profiler");
        $__internal_ea49bf7dffc828b76eda32cc8cfcf089cb6dad22324a2922adf5a8848cbd03d2->enter($__internal_ea49bf7dffc828b76eda32cc8cfcf089cb6dad22324a2922adf5a8848cbd03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ea49bf7dffc828b76eda32cc8cfcf089cb6dad22324a2922adf5a8848cbd03d2->leave($__internal_ea49bf7dffc828b76eda32cc8cfcf089cb6dad22324a2922adf5a8848cbd03d2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
