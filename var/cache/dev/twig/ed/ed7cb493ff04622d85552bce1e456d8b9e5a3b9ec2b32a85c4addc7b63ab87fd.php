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
        $__internal_af44f80b4ad396e9e1442063cd9005660dc649142388e6e6267f735d29a3a37e = $this->env->getExtension("native_profiler");
        $__internal_af44f80b4ad396e9e1442063cd9005660dc649142388e6e6267f735d29a3a37e->enter($__internal_af44f80b4ad396e9e1442063cd9005660dc649142388e6e6267f735d29a3a37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_af44f80b4ad396e9e1442063cd9005660dc649142388e6e6267f735d29a3a37e->leave($__internal_af44f80b4ad396e9e1442063cd9005660dc649142388e6e6267f735d29a3a37e_prof);

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
