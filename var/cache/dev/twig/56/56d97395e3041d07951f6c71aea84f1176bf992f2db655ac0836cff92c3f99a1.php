<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_086e7528f62c2105d0ac45b2e5730779dca0aceaef125329e143fe718b17a04c extends Twig_Template
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
        $__internal_b7b7e99f23cee5f265f14bffc2d53812d4cb7f3f519312d6371fa0c62927175d = $this->env->getExtension("native_profiler");
        $__internal_b7b7e99f23cee5f265f14bffc2d53812d4cb7f3f519312d6371fa0c62927175d->enter($__internal_b7b7e99f23cee5f265f14bffc2d53812d4cb7f3f519312d6371fa0c62927175d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_b7b7e99f23cee5f265f14bffc2d53812d4cb7f3f519312d6371fa0c62927175d->leave($__internal_b7b7e99f23cee5f265f14bffc2d53812d4cb7f3f519312d6371fa0c62927175d_prof);

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
