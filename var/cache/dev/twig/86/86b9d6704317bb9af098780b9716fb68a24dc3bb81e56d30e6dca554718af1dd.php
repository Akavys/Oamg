<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f4022bfd8b26dd035f48abb59d983ead4b77634ce95228f1539df8bcaf9ae6f9 extends Twig_Template
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
        $__internal_9825fd46c478b8b437054cb5f8d055e308a4b5ce93b0e2f404e3c5c88ffcdc93 = $this->env->getExtension("native_profiler");
        $__internal_9825fd46c478b8b437054cb5f8d055e308a4b5ce93b0e2f404e3c5c88ffcdc93->enter($__internal_9825fd46c478b8b437054cb5f8d055e308a4b5ce93b0e2f404e3c5c88ffcdc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9825fd46c478b8b437054cb5f8d055e308a4b5ce93b0e2f404e3c5c88ffcdc93->leave($__internal_9825fd46c478b8b437054cb5f8d055e308a4b5ce93b0e2f404e3c5c88ffcdc93_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
