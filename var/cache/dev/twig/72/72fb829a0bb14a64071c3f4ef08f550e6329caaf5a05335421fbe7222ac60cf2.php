<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_fea18464ce29337c567242b051a8f75b212ec0f38c75d278ff64d60c97c05ace extends Twig_Template
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
        $__internal_109ab23bb07ef61cd1e17a106bf7e8358345eb50990914b9c13f7af0efb59920 = $this->env->getExtension("native_profiler");
        $__internal_109ab23bb07ef61cd1e17a106bf7e8358345eb50990914b9c13f7af0efb59920->enter($__internal_109ab23bb07ef61cd1e17a106bf7e8358345eb50990914b9c13f7af0efb59920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_109ab23bb07ef61cd1e17a106bf7e8358345eb50990914b9c13f7af0efb59920->leave($__internal_109ab23bb07ef61cd1e17a106bf7e8358345eb50990914b9c13f7af0efb59920_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
