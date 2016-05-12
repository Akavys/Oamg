<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_39d330e1c7816b5ad397c0210e71f26ae470b0ceb838749e30245a15f07e7bc6 extends Twig_Template
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
        $__internal_53178cf9ce8ecef32861341596e0c2d9abc78476821d9fe685e4bebf25b92ab1 = $this->env->getExtension("native_profiler");
        $__internal_53178cf9ce8ecef32861341596e0c2d9abc78476821d9fe685e4bebf25b92ab1->enter($__internal_53178cf9ce8ecef32861341596e0c2d9abc78476821d9fe685e4bebf25b92ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_53178cf9ce8ecef32861341596e0c2d9abc78476821d9fe685e4bebf25b92ab1->leave($__internal_53178cf9ce8ecef32861341596e0c2d9abc78476821d9fe685e4bebf25b92ab1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
