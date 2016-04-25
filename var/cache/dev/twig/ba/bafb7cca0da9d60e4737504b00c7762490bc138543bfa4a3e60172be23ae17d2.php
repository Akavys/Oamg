<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7cc1cf464acb0bac996b702248764764808c8ea304addbefa5a79bc6aa1e7d0d extends Twig_Template
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
        $__internal_08cfb8351aaea5afd2586c3f7fb62419a5b40095ff37a9ac1f1a8d78722de21e = $this->env->getExtension("native_profiler");
        $__internal_08cfb8351aaea5afd2586c3f7fb62419a5b40095ff37a9ac1f1a8d78722de21e->enter($__internal_08cfb8351aaea5afd2586c3f7fb62419a5b40095ff37a9ac1f1a8d78722de21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_08cfb8351aaea5afd2586c3f7fb62419a5b40095ff37a9ac1f1a8d78722de21e->leave($__internal_08cfb8351aaea5afd2586c3f7fb62419a5b40095ff37a9ac1f1a8d78722de21e_prof);

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
