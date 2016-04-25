<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_681a704cebadbd09f0ce1826599e226e738f7463cfe9061633c07b9c66234ef4 extends Twig_Template
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
        $__internal_a94c0311dabc2aae3f7d20f53df6d3f98f1ebba705ed5059bdd35a24efc23c35 = $this->env->getExtension("native_profiler");
        $__internal_a94c0311dabc2aae3f7d20f53df6d3f98f1ebba705ed5059bdd35a24efc23c35->enter($__internal_a94c0311dabc2aae3f7d20f53df6d3f98f1ebba705ed5059bdd35a24efc23c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a94c0311dabc2aae3f7d20f53df6d3f98f1ebba705ed5059bdd35a24efc23c35->leave($__internal_a94c0311dabc2aae3f7d20f53df6d3f98f1ebba705ed5059bdd35a24efc23c35_prof);

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
