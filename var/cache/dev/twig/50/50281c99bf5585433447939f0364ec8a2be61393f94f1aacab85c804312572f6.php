<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_ee763802b16d051267236acdaa843834faf2be3dbbd58e1f90d7831ea922420d extends Twig_Template
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
        $__internal_62092d1bbeeee266bf1f06916eef256efc43792c8d17e8544152b9f4e435becd = $this->env->getExtension("native_profiler");
        $__internal_62092d1bbeeee266bf1f06916eef256efc43792c8d17e8544152b9f4e435becd->enter($__internal_62092d1bbeeee266bf1f06916eef256efc43792c8d17e8544152b9f4e435becd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_62092d1bbeeee266bf1f06916eef256efc43792c8d17e8544152b9f4e435becd->leave($__internal_62092d1bbeeee266bf1f06916eef256efc43792c8d17e8544152b9f4e435becd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
