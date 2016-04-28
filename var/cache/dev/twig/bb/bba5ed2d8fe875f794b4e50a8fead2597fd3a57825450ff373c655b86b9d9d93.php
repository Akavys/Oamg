<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ccede55183c2c4a8a03a91849cb45b6b6eef73c759010dd295bca7cdbb41253b extends Twig_Template
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
        $__internal_8b358c784b067c96b8afc03cc997710fe5a2a7bd86daa589da4fbcef7fca6048 = $this->env->getExtension("native_profiler");
        $__internal_8b358c784b067c96b8afc03cc997710fe5a2a7bd86daa589da4fbcef7fca6048->enter($__internal_8b358c784b067c96b8afc03cc997710fe5a2a7bd86daa589da4fbcef7fca6048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_8b358c784b067c96b8afc03cc997710fe5a2a7bd86daa589da4fbcef7fca6048->leave($__internal_8b358c784b067c96b8afc03cc997710fe5a2a7bd86daa589da4fbcef7fca6048_prof);

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
