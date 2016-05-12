<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_539311a1b78fed7883234732f124f2d1b533fbaae48a5aa63728215568992298 extends Twig_Template
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
        $__internal_be7f4f1b4c55890f79f4ccf37713d8201d9514489a0d803329fe22c31c04e4a0 = $this->env->getExtension("native_profiler");
        $__internal_be7f4f1b4c55890f79f4ccf37713d8201d9514489a0d803329fe22c31c04e4a0->enter($__internal_be7f4f1b4c55890f79f4ccf37713d8201d9514489a0d803329fe22c31c04e4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_be7f4f1b4c55890f79f4ccf37713d8201d9514489a0d803329fe22c31c04e4a0->leave($__internal_be7f4f1b4c55890f79f4ccf37713d8201d9514489a0d803329fe22c31c04e4a0_prof);

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
