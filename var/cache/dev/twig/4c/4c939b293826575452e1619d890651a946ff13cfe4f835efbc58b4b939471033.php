<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4e2839fd8144d8053067585fc6ad3476c338d665e447d658fc3c9011d5a2f5a7 extends Twig_Template
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
        $__internal_4901315504446042d44fec2f2863af13a2e612e4f416482262550cd17237bf43 = $this->env->getExtension("native_profiler");
        $__internal_4901315504446042d44fec2f2863af13a2e612e4f416482262550cd17237bf43->enter($__internal_4901315504446042d44fec2f2863af13a2e612e4f416482262550cd17237bf43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4901315504446042d44fec2f2863af13a2e612e4f416482262550cd17237bf43->leave($__internal_4901315504446042d44fec2f2863af13a2e612e4f416482262550cd17237bf43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
