<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_97fa431fcd41a9d46f568adca61176c7462d5c229a70757c932917b1552890cb extends Twig_Template
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
        $__internal_12b980e5624a7844cfca64d5c1d5c089d5d8f6f45d3cff645742532c5ba91e83 = $this->env->getExtension("native_profiler");
        $__internal_12b980e5624a7844cfca64d5c1d5c089d5d8f6f45d3cff645742532c5ba91e83->enter($__internal_12b980e5624a7844cfca64d5c1d5c089d5d8f6f45d3cff645742532c5ba91e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_12b980e5624a7844cfca64d5c1d5c089d5d8f6f45d3cff645742532c5ba91e83->leave($__internal_12b980e5624a7844cfca64d5c1d5c089d5d8f6f45d3cff645742532c5ba91e83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
