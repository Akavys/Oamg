<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7df374dc1d0f29aed822b0c8acfb9f45809242ea43cd140b0bd15f817a043127 extends Twig_Template
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
        $__internal_cf57fd3bab1cafde59c1c3315f7d56bffd5af10b4553c03025d4a4b73253394d = $this->env->getExtension("native_profiler");
        $__internal_cf57fd3bab1cafde59c1c3315f7d56bffd5af10b4553c03025d4a4b73253394d->enter($__internal_cf57fd3bab1cafde59c1c3315f7d56bffd5af10b4553c03025d4a4b73253394d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cf57fd3bab1cafde59c1c3315f7d56bffd5af10b4553c03025d4a4b73253394d->leave($__internal_cf57fd3bab1cafde59c1c3315f7d56bffd5af10b4553c03025d4a4b73253394d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
