<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e38357f2010a054bfe4e06f8bb2f0d0550ebbb39ceb637e4eaed82162071b2da extends Twig_Template
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
        $__internal_aac9d0d106920d4850dd3864d12fd8fa73337cbf0588a4ba3b29bf6ebb4ce25a = $this->env->getExtension("native_profiler");
        $__internal_aac9d0d106920d4850dd3864d12fd8fa73337cbf0588a4ba3b29bf6ebb4ce25a->enter($__internal_aac9d0d106920d4850dd3864d12fd8fa73337cbf0588a4ba3b29bf6ebb4ce25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_aac9d0d106920d4850dd3864d12fd8fa73337cbf0588a4ba3b29bf6ebb4ce25a->leave($__internal_aac9d0d106920d4850dd3864d12fd8fa73337cbf0588a4ba3b29bf6ebb4ce25a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
