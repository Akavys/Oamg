<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4c703dbd6f4317c937faec4d0d10bbe151f2cf369cfdc4b5983817631465e688 extends Twig_Template
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
        $__internal_d3b04e8f120c44af29110c319ae930857a91e03a793c5a8e5506bc29fd834ba1 = $this->env->getExtension("native_profiler");
        $__internal_d3b04e8f120c44af29110c319ae930857a91e03a793c5a8e5506bc29fd834ba1->enter($__internal_d3b04e8f120c44af29110c319ae930857a91e03a793c5a8e5506bc29fd834ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d3b04e8f120c44af29110c319ae930857a91e03a793c5a8e5506bc29fd834ba1->leave($__internal_d3b04e8f120c44af29110c319ae930857a91e03a793c5a8e5506bc29fd834ba1_prof);

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
