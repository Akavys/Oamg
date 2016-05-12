<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_dc8b93e3f2dbe5d9dab20d10bb6412e3b57f019413fee76151f155fed3996c4b extends Twig_Template
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
        $__internal_c1924ec630198212c615a1ce77a52a0d5d43bbcf1de128a54fccb897297688f1 = $this->env->getExtension("native_profiler");
        $__internal_c1924ec630198212c615a1ce77a52a0d5d43bbcf1de128a54fccb897297688f1->enter($__internal_c1924ec630198212c615a1ce77a52a0d5d43bbcf1de128a54fccb897297688f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c1924ec630198212c615a1ce77a52a0d5d43bbcf1de128a54fccb897297688f1->leave($__internal_c1924ec630198212c615a1ce77a52a0d5d43bbcf1de128a54fccb897297688f1_prof);

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
