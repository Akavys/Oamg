<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d53308b8f596c7c767e0574ea6cbd7b201d9ff852034a40d6a6845c660d17417 extends Twig_Template
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
        $__internal_d4bd8b5e7a666ce582e5a46a1effb69d87d7508774b4ba8d818b7af44ce7ac18 = $this->env->getExtension("native_profiler");
        $__internal_d4bd8b5e7a666ce582e5a46a1effb69d87d7508774b4ba8d818b7af44ce7ac18->enter($__internal_d4bd8b5e7a666ce582e5a46a1effb69d87d7508774b4ba8d818b7af44ce7ac18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d4bd8b5e7a666ce582e5a46a1effb69d87d7508774b4ba8d818b7af44ce7ac18->leave($__internal_d4bd8b5e7a666ce582e5a46a1effb69d87d7508774b4ba8d818b7af44ce7ac18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
