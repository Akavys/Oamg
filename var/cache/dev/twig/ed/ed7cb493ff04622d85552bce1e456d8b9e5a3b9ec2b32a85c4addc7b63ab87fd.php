<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d154e623b15f49731e000aca682a311b5eb1a25274024e920e43db22d898b5f8 extends Twig_Template
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
        $__internal_d5030f7bee183b1cb11b1f4b9420fa79cb814dd8d62e47cbf34fdd82c064ebec = $this->env->getExtension("native_profiler");
        $__internal_d5030f7bee183b1cb11b1f4b9420fa79cb814dd8d62e47cbf34fdd82c064ebec->enter($__internal_d5030f7bee183b1cb11b1f4b9420fa79cb814dd8d62e47cbf34fdd82c064ebec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d5030f7bee183b1cb11b1f4b9420fa79cb814dd8d62e47cbf34fdd82c064ebec->leave($__internal_d5030f7bee183b1cb11b1f4b9420fa79cb814dd8d62e47cbf34fdd82c064ebec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
