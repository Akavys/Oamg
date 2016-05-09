<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3c08e7787e8efebbce6bbe7f8911eff126a494b83a629fa50902e6273fd6181d extends Twig_Template
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
        $__internal_5fe9805fe88dcefe3e1183f5c190bd4686d6cf90b425cc35030ad1528b0deae7 = $this->env->getExtension("native_profiler");
        $__internal_5fe9805fe88dcefe3e1183f5c190bd4686d6cf90b425cc35030ad1528b0deae7->enter($__internal_5fe9805fe88dcefe3e1183f5c190bd4686d6cf90b425cc35030ad1528b0deae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5fe9805fe88dcefe3e1183f5c190bd4686d6cf90b425cc35030ad1528b0deae7->leave($__internal_5fe9805fe88dcefe3e1183f5c190bd4686d6cf90b425cc35030ad1528b0deae7_prof);

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
