<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_65938e46a78fe20552d266b545d7f5cd3a378f1edf1946b769a36087e9438363 extends Twig_Template
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
        $__internal_e76bb6757be705ac5ec64210f415cdf07bf33390b9a0e74d6da2b12fae40185e = $this->env->getExtension("native_profiler");
        $__internal_e76bb6757be705ac5ec64210f415cdf07bf33390b9a0e74d6da2b12fae40185e->enter($__internal_e76bb6757be705ac5ec64210f415cdf07bf33390b9a0e74d6da2b12fae40185e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e76bb6757be705ac5ec64210f415cdf07bf33390b9a0e74d6da2b12fae40185e->leave($__internal_e76bb6757be705ac5ec64210f415cdf07bf33390b9a0e74d6da2b12fae40185e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
