<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1429a58510fdfd0c85d9fe93e77a8e51409e58172b75466278e12dbe2c3e1ea7 extends Twig_Template
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
        $__internal_371015eb0f6f3c02ce4ddd3ffd632311d32e983e1b2e3c475b436e312b5d14fd = $this->env->getExtension("native_profiler");
        $__internal_371015eb0f6f3c02ce4ddd3ffd632311d32e983e1b2e3c475b436e312b5d14fd->enter($__internal_371015eb0f6f3c02ce4ddd3ffd632311d32e983e1b2e3c475b436e312b5d14fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_371015eb0f6f3c02ce4ddd3ffd632311d32e983e1b2e3c475b436e312b5d14fd->leave($__internal_371015eb0f6f3c02ce4ddd3ffd632311d32e983e1b2e3c475b436e312b5d14fd_prof);

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
