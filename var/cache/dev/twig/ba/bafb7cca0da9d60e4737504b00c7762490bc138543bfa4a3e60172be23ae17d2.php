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
        $__internal_857c55f5f677b25490e828677d9372d881eb87b5129824919f62caf8762d4da4 = $this->env->getExtension("native_profiler");
        $__internal_857c55f5f677b25490e828677d9372d881eb87b5129824919f62caf8762d4da4->enter($__internal_857c55f5f677b25490e828677d9372d881eb87b5129824919f62caf8762d4da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_857c55f5f677b25490e828677d9372d881eb87b5129824919f62caf8762d4da4->leave($__internal_857c55f5f677b25490e828677d9372d881eb87b5129824919f62caf8762d4da4_prof);

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
