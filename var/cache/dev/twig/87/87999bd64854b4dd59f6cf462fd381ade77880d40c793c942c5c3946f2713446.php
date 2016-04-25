<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6e43c3088da900de21a601f2ac33d2a7558ea8fdea3a77130d56070d696978ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_fa6c6e295067caa5cec2558731445785bf0e38fd8604ca3b61d22cc4fc9d409c = $this->env->getExtension("native_profiler");
        $__internal_fa6c6e295067caa5cec2558731445785bf0e38fd8604ca3b61d22cc4fc9d409c->enter($__internal_fa6c6e295067caa5cec2558731445785bf0e38fd8604ca3b61d22cc4fc9d409c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6c6e295067caa5cec2558731445785bf0e38fd8604ca3b61d22cc4fc9d409c->leave($__internal_fa6c6e295067caa5cec2558731445785bf0e38fd8604ca3b61d22cc4fc9d409c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_663add24cc08e9c4bf2b02a6d70022e590443b54fe67fdd7c82334fa98d11b7d = $this->env->getExtension("native_profiler");
        $__internal_663add24cc08e9c4bf2b02a6d70022e590443b54fe67fdd7c82334fa98d11b7d->enter($__internal_663add24cc08e9c4bf2b02a6d70022e590443b54fe67fdd7c82334fa98d11b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_663add24cc08e9c4bf2b02a6d70022e590443b54fe67fdd7c82334fa98d11b7d->leave($__internal_663add24cc08e9c4bf2b02a6d70022e590443b54fe67fdd7c82334fa98d11b7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b74b382e8c5938e1e06ffebf9cf292c8cf6fd4b1249048ffd8b5871c1dade938 = $this->env->getExtension("native_profiler");
        $__internal_b74b382e8c5938e1e06ffebf9cf292c8cf6fd4b1249048ffd8b5871c1dade938->enter($__internal_b74b382e8c5938e1e06ffebf9cf292c8cf6fd4b1249048ffd8b5871c1dade938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b74b382e8c5938e1e06ffebf9cf292c8cf6fd4b1249048ffd8b5871c1dade938->leave($__internal_b74b382e8c5938e1e06ffebf9cf292c8cf6fd4b1249048ffd8b5871c1dade938_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
