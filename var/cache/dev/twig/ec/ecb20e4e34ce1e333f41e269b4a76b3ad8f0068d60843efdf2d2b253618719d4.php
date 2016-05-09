<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_81408a7d092aaee22f579f11efde6384b239c9117ac0a564dc1065a82ddf13d7 extends Twig_Template
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
        $__internal_8524cee430061e2f7fa2f1f33ca8024ea43e9d7a2d522e83cd14667c250d1537 = $this->env->getExtension("native_profiler");
        $__internal_8524cee430061e2f7fa2f1f33ca8024ea43e9d7a2d522e83cd14667c250d1537->enter($__internal_8524cee430061e2f7fa2f1f33ca8024ea43e9d7a2d522e83cd14667c250d1537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8524cee430061e2f7fa2f1f33ca8024ea43e9d7a2d522e83cd14667c250d1537->leave($__internal_8524cee430061e2f7fa2f1f33ca8024ea43e9d7a2d522e83cd14667c250d1537_prof);

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
