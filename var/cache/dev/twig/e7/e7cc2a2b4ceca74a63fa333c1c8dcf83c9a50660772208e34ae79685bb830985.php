<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_24e5b995a9b3d9997b00d0b042f5b49397f4b55786744835586fd60f9372bb76 extends Twig_Template
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
        $__internal_7926af896dd337e821c47a7eb302769e00d8cb551cd0b9ca68ba15e0b7a23aaa = $this->env->getExtension("native_profiler");
        $__internal_7926af896dd337e821c47a7eb302769e00d8cb551cd0b9ca68ba15e0b7a23aaa->enter($__internal_7926af896dd337e821c47a7eb302769e00d8cb551cd0b9ca68ba15e0b7a23aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7926af896dd337e821c47a7eb302769e00d8cb551cd0b9ca68ba15e0b7a23aaa->leave($__internal_7926af896dd337e821c47a7eb302769e00d8cb551cd0b9ca68ba15e0b7a23aaa_prof);

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
