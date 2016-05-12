<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_825a3aedee62809e0e3db390633c7429abc339c7dcb6b47956f0b227f940052c extends Twig_Template
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
        $__internal_5d0358700496472fa711cfe98ba70be2b069509f7e3efb908afa299c6bd0b607 = $this->env->getExtension("native_profiler");
        $__internal_5d0358700496472fa711cfe98ba70be2b069509f7e3efb908afa299c6bd0b607->enter($__internal_5d0358700496472fa711cfe98ba70be2b069509f7e3efb908afa299c6bd0b607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5d0358700496472fa711cfe98ba70be2b069509f7e3efb908afa299c6bd0b607->leave($__internal_5d0358700496472fa711cfe98ba70be2b069509f7e3efb908afa299c6bd0b607_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
