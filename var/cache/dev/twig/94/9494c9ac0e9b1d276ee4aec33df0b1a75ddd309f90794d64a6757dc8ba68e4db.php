<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c05bfdfdbc1c846198847bd8b655e5f4376e964b6a02f440d2dfb8de5c76d5f8 extends Twig_Template
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
        $__internal_19d4f5e2c53fddfdf16412f230f4cfad1765e4f618254632b5d2f02a1ca1ffbc = $this->env->getExtension("native_profiler");
        $__internal_19d4f5e2c53fddfdf16412f230f4cfad1765e4f618254632b5d2f02a1ca1ffbc->enter($__internal_19d4f5e2c53fddfdf16412f230f4cfad1765e4f618254632b5d2f02a1ca1ffbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_19d4f5e2c53fddfdf16412f230f4cfad1765e4f618254632b5d2f02a1ca1ffbc->leave($__internal_19d4f5e2c53fddfdf16412f230f4cfad1765e4f618254632b5d2f02a1ca1ffbc_prof);

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
