<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c84f734468421b78ae1f1a8c32cc0ee401f821ad17ae70b6538e47f9423cd978 extends Twig_Template
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
        $__internal_3ab97cde6196f65a4be1099f6605d8b1bcffe8db164aadbfc1744b52d9077e26 = $this->env->getExtension("native_profiler");
        $__internal_3ab97cde6196f65a4be1099f6605d8b1bcffe8db164aadbfc1744b52d9077e26->enter($__internal_3ab97cde6196f65a4be1099f6605d8b1bcffe8db164aadbfc1744b52d9077e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_3ab97cde6196f65a4be1099f6605d8b1bcffe8db164aadbfc1744b52d9077e26->leave($__internal_3ab97cde6196f65a4be1099f6605d8b1bcffe8db164aadbfc1744b52d9077e26_prof);

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
