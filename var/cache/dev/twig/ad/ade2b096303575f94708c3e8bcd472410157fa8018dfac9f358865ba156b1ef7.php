<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d283b2fa27c607566f6981268ca48cc979b5eddb1b39d5feed93156289569f1f extends Twig_Template
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
        $__internal_227b23b61ba1a9901c4b0f2d3dd986cd522de05c9d0e48c00ea5133ef34e114d = $this->env->getExtension("native_profiler");
        $__internal_227b23b61ba1a9901c4b0f2d3dd986cd522de05c9d0e48c00ea5133ef34e114d->enter($__internal_227b23b61ba1a9901c4b0f2d3dd986cd522de05c9d0e48c00ea5133ef34e114d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_227b23b61ba1a9901c4b0f2d3dd986cd522de05c9d0e48c00ea5133ef34e114d->leave($__internal_227b23b61ba1a9901c4b0f2d3dd986cd522de05c9d0e48c00ea5133ef34e114d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
