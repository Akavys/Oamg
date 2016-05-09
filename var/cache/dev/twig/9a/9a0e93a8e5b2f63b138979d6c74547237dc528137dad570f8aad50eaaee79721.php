<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_44204b0a78635eaca2e62981bafa7d85f3adc3caf2e0e0620578bfebd6677991 extends Twig_Template
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
        $__internal_27de9c265ea54773b123810c781dd15aa90116471796135a78dc488e7c0bab5b = $this->env->getExtension("native_profiler");
        $__internal_27de9c265ea54773b123810c781dd15aa90116471796135a78dc488e7c0bab5b->enter($__internal_27de9c265ea54773b123810c781dd15aa90116471796135a78dc488e7c0bab5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_27de9c265ea54773b123810c781dd15aa90116471796135a78dc488e7c0bab5b->leave($__internal_27de9c265ea54773b123810c781dd15aa90116471796135a78dc488e7c0bab5b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
