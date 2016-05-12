<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_6cf13a2fe4106fa6e2f90a78b1669fac2b90ff670a0974513208c8c1ae0bf4d2 extends Twig_Template
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
        $__internal_fb6b4861107148714560eec9c38ae1162e8b710ff870d44fbe181fadc8b516e4 = $this->env->getExtension("native_profiler");
        $__internal_fb6b4861107148714560eec9c38ae1162e8b710ff870d44fbe181fadc8b516e4->enter($__internal_fb6b4861107148714560eec9c38ae1162e8b710ff870d44fbe181fadc8b516e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fb6b4861107148714560eec9c38ae1162e8b710ff870d44fbe181fadc8b516e4->leave($__internal_fb6b4861107148714560eec9c38ae1162e8b710ff870d44fbe181fadc8b516e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
