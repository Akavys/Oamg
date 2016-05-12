<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_d8e1239cf7a0962d5914ee462ee6b8c0f0e9281c0fe8932ee7b929b627b74e2c extends Twig_Template
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
        $__internal_3320586f2ece8f927bee3ce9ad28db6ee4c713e2f644797e6cb7b3cf7a20981b = $this->env->getExtension("native_profiler");
        $__internal_3320586f2ece8f927bee3ce9ad28db6ee4c713e2f644797e6cb7b3cf7a20981b->enter($__internal_3320586f2ece8f927bee3ce9ad28db6ee4c713e2f644797e6cb7b3cf7a20981b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3320586f2ece8f927bee3ce9ad28db6ee4c713e2f644797e6cb7b3cf7a20981b->leave($__internal_3320586f2ece8f927bee3ce9ad28db6ee4c713e2f644797e6cb7b3cf7a20981b_prof);

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
