<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f3717df875f9a2a9ca6be8b96859fcddcab662c0bf9608ec0417122aec16b3a6 extends Twig_Template
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
        $__internal_b16e03c8f1e1e4d4e721379e0a75e1edf6b53f3a49260a331b63f5cc220d33cd = $this->env->getExtension("native_profiler");
        $__internal_b16e03c8f1e1e4d4e721379e0a75e1edf6b53f3a49260a331b63f5cc220d33cd->enter($__internal_b16e03c8f1e1e4d4e721379e0a75e1edf6b53f3a49260a331b63f5cc220d33cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b16e03c8f1e1e4d4e721379e0a75e1edf6b53f3a49260a331b63f5cc220d33cd->leave($__internal_b16e03c8f1e1e4d4e721379e0a75e1edf6b53f3a49260a331b63f5cc220d33cd_prof);

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
