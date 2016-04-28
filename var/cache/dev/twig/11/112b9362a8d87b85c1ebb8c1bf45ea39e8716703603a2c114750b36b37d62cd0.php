<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c704652e8f9b270b826fd08c933e70334f57b4f84c0334473564fbc7f633339d extends Twig_Template
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
        $__internal_a48af936db66254675f9aa32d18b43997f6aea3a638ee30e932ce63501d144df = $this->env->getExtension("native_profiler");
        $__internal_a48af936db66254675f9aa32d18b43997f6aea3a638ee30e932ce63501d144df->enter($__internal_a48af936db66254675f9aa32d18b43997f6aea3a638ee30e932ce63501d144df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a48af936db66254675f9aa32d18b43997f6aea3a638ee30e932ce63501d144df->leave($__internal_a48af936db66254675f9aa32d18b43997f6aea3a638ee30e932ce63501d144df_prof);

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
