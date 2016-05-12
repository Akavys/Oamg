<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9c06978d08402ca1f9ecd3435d73f9c6ea261ac43309a9603303a2127740ff98 extends Twig_Template
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
        $__internal_2606620000dd48242dd7f0b5505a95a4338e45077f8db8e9fd9e51d8420a56ec = $this->env->getExtension("native_profiler");
        $__internal_2606620000dd48242dd7f0b5505a95a4338e45077f8db8e9fd9e51d8420a56ec->enter($__internal_2606620000dd48242dd7f0b5505a95a4338e45077f8db8e9fd9e51d8420a56ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_2606620000dd48242dd7f0b5505a95a4338e45077f8db8e9fd9e51d8420a56ec->leave($__internal_2606620000dd48242dd7f0b5505a95a4338e45077f8db8e9fd9e51d8420a56ec_prof);

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
