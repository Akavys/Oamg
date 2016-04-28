<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f7e7c89c41a202952559d52116b31e6e40edda5ec409ffa823597be96eb40b20 extends Twig_Template
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
        $__internal_06c597bff6d60c844f4f51cd32619d2e7fd3413e75b3faf53d9785efc659edbc = $this->env->getExtension("native_profiler");
        $__internal_06c597bff6d60c844f4f51cd32619d2e7fd3413e75b3faf53d9785efc659edbc->enter($__internal_06c597bff6d60c844f4f51cd32619d2e7fd3413e75b3faf53d9785efc659edbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_06c597bff6d60c844f4f51cd32619d2e7fd3413e75b3faf53d9785efc659edbc->leave($__internal_06c597bff6d60c844f4f51cd32619d2e7fd3413e75b3faf53d9785efc659edbc_prof);

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
