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
        $__internal_73efc0c373f890f195c4b5a79d7f775ce8e16dc4538aee5b6794f727ce1ef3a3 = $this->env->getExtension("native_profiler");
        $__internal_73efc0c373f890f195c4b5a79d7f775ce8e16dc4538aee5b6794f727ce1ef3a3->enter($__internal_73efc0c373f890f195c4b5a79d7f775ce8e16dc4538aee5b6794f727ce1ef3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_73efc0c373f890f195c4b5a79d7f775ce8e16dc4538aee5b6794f727ce1ef3a3->leave($__internal_73efc0c373f890f195c4b5a79d7f775ce8e16dc4538aee5b6794f727ce1ef3a3_prof);

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
