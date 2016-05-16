<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_658254e2f1dbc89f537ebdfeb4d94c541c3475dc1d75849190f5141c18d7f626 extends Twig_Template
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
        $__internal_f62f9536c77906048ecdde793ce41b9f1b7d149f5f37c0d1643d5e1f94236ca3 = $this->env->getExtension("native_profiler");
        $__internal_f62f9536c77906048ecdde793ce41b9f1b7d149f5f37c0d1643d5e1f94236ca3->enter($__internal_f62f9536c77906048ecdde793ce41b9f1b7d149f5f37c0d1643d5e1f94236ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f62f9536c77906048ecdde793ce41b9f1b7d149f5f37c0d1643d5e1f94236ca3->leave($__internal_f62f9536c77906048ecdde793ce41b9f1b7d149f5f37c0d1643d5e1f94236ca3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
