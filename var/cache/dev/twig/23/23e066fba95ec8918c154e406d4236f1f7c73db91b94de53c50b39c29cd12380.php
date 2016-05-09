<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6eb8d1e7ea2dec00e2027240a6ad2b9848393b3627ea36bd3aae3072f33e39bc extends Twig_Template
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
        $__internal_5e7e0f1e1442966b5b5c27c42b7f4de886788877fcccbc38a14e1f008570aabf = $this->env->getExtension("native_profiler");
        $__internal_5e7e0f1e1442966b5b5c27c42b7f4de886788877fcccbc38a14e1f008570aabf->enter($__internal_5e7e0f1e1442966b5b5c27c42b7f4de886788877fcccbc38a14e1f008570aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5e7e0f1e1442966b5b5c27c42b7f4de886788877fcccbc38a14e1f008570aabf->leave($__internal_5e7e0f1e1442966b5b5c27c42b7f4de886788877fcccbc38a14e1f008570aabf_prof);

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
