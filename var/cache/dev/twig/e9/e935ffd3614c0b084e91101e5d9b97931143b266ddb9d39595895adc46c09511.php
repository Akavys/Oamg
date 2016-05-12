<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9a07914fefc36be143e00d31f75a3c71f2df6c3345a19b51e117b9aab504f546 extends Twig_Template
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
        $__internal_f157dc035c485e55f7e51b1095e2208780486a5baed4cf0cc53c734119b61980 = $this->env->getExtension("native_profiler");
        $__internal_f157dc035c485e55f7e51b1095e2208780486a5baed4cf0cc53c734119b61980->enter($__internal_f157dc035c485e55f7e51b1095e2208780486a5baed4cf0cc53c734119b61980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f157dc035c485e55f7e51b1095e2208780486a5baed4cf0cc53c734119b61980->leave($__internal_f157dc035c485e55f7e51b1095e2208780486a5baed4cf0cc53c734119b61980_prof);

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
