<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_12ef8023de43b2c6c48abbf7c0af3f19909958ecc9407f4ec0591e76576ce14b extends Twig_Template
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
        $__internal_a0ac828f3a920a85769a847d89c2c364ff1ac277d2ad3b904f1042a05920bdd7 = $this->env->getExtension("native_profiler");
        $__internal_a0ac828f3a920a85769a847d89c2c364ff1ac277d2ad3b904f1042a05920bdd7->enter($__internal_a0ac828f3a920a85769a847d89c2c364ff1ac277d2ad3b904f1042a05920bdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a0ac828f3a920a85769a847d89c2c364ff1ac277d2ad3b904f1042a05920bdd7->leave($__internal_a0ac828f3a920a85769a847d89c2c364ff1ac277d2ad3b904f1042a05920bdd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
