<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_782b48c48784d064b6954980b5395eaf18077490daa3efb6c7db623c12112b4e extends Twig_Template
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
        $__internal_326bcb9f83b5588d1cdaf66d818370e09ec4de8f90c739790c27ada3bb8d0e6a = $this->env->getExtension("native_profiler");
        $__internal_326bcb9f83b5588d1cdaf66d818370e09ec4de8f90c739790c27ada3bb8d0e6a->enter($__internal_326bcb9f83b5588d1cdaf66d818370e09ec4de8f90c739790c27ada3bb8d0e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_326bcb9f83b5588d1cdaf66d818370e09ec4de8f90c739790c27ada3bb8d0e6a->leave($__internal_326bcb9f83b5588d1cdaf66d818370e09ec4de8f90c739790c27ada3bb8d0e6a_prof);

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
