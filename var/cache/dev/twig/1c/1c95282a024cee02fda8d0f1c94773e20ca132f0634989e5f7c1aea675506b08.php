<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_7c9f951536bc7714f433d90b3b5a02402e6fb46fd7a126437cb64a0074d8f45b extends Twig_Template
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
        $__internal_1f9acfeabd8a34f7ab6db33119ddb8d5cb264e72bf5f3da4bf3a876607dcde84 = $this->env->getExtension("native_profiler");
        $__internal_1f9acfeabd8a34f7ab6db33119ddb8d5cb264e72bf5f3da4bf3a876607dcde84->enter($__internal_1f9acfeabd8a34f7ab6db33119ddb8d5cb264e72bf5f3da4bf3a876607dcde84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1f9acfeabd8a34f7ab6db33119ddb8d5cb264e72bf5f3da4bf3a876607dcde84->leave($__internal_1f9acfeabd8a34f7ab6db33119ddb8d5cb264e72bf5f3da4bf3a876607dcde84_prof);

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
