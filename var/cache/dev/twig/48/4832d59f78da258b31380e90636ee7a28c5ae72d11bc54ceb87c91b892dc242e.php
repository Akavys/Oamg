<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_ac397ceb31974290cc16f0390bfb927946ee46d5ed37a1d9325d0825a4f269f3 extends Twig_Template
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
        $__internal_c2744cbfe3e5adbb7edb0f959e987c50a776f6f2cf81fd97a74f0b759389007f = $this->env->getExtension("native_profiler");
        $__internal_c2744cbfe3e5adbb7edb0f959e987c50a776f6f2cf81fd97a74f0b759389007f->enter($__internal_c2744cbfe3e5adbb7edb0f959e987c50a776f6f2cf81fd97a74f0b759389007f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c2744cbfe3e5adbb7edb0f959e987c50a776f6f2cf81fd97a74f0b759389007f->leave($__internal_c2744cbfe3e5adbb7edb0f959e987c50a776f6f2cf81fd97a74f0b759389007f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
