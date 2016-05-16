<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4d1fdcd92218ce81c3e08a5835454d6a1d2a059779fd4b8ff1bfc9d984ec81a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddc0a4f827f3cf7a21727512d3399f820a4e2149733e9c1f097d4b450fe3d85b = $this->env->getExtension("native_profiler");
        $__internal_ddc0a4f827f3cf7a21727512d3399f820a4e2149733e9c1f097d4b450fe3d85b->enter($__internal_ddc0a4f827f3cf7a21727512d3399f820a4e2149733e9c1f097d4b450fe3d85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddc0a4f827f3cf7a21727512d3399f820a4e2149733e9c1f097d4b450fe3d85b->leave($__internal_ddc0a4f827f3cf7a21727512d3399f820a4e2149733e9c1f097d4b450fe3d85b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9fa356cf4b3111e710c9f1dec6bf1b156be5d05e3934bfd0b4ffbe855a18f41 = $this->env->getExtension("native_profiler");
        $__internal_e9fa356cf4b3111e710c9f1dec6bf1b156be5d05e3934bfd0b4ffbe855a18f41->enter($__internal_e9fa356cf4b3111e710c9f1dec6bf1b156be5d05e3934bfd0b4ffbe855a18f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e9fa356cf4b3111e710c9f1dec6bf1b156be5d05e3934bfd0b4ffbe855a18f41->leave($__internal_e9fa356cf4b3111e710c9f1dec6bf1b156be5d05e3934bfd0b4ffbe855a18f41_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_86d8e71c25c96ec120de5457c7ecf5d6ab19ed7fca83b7a08b3c0b8cee8b6b62 = $this->env->getExtension("native_profiler");
        $__internal_86d8e71c25c96ec120de5457c7ecf5d6ab19ed7fca83b7a08b3c0b8cee8b6b62->enter($__internal_86d8e71c25c96ec120de5457c7ecf5d6ab19ed7fca83b7a08b3c0b8cee8b6b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_86d8e71c25c96ec120de5457c7ecf5d6ab19ed7fca83b7a08b3c0b8cee8b6b62->leave($__internal_86d8e71c25c96ec120de5457c7ecf5d6ab19ed7fca83b7a08b3c0b8cee8b6b62_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
