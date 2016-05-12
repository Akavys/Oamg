<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3da9f475fdfbabb5839488d999b185673de8ae44fdbbf78d34a29a7f1adefba5 extends Twig_Template
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
        $__internal_d7b30b6919d3229e634271bdb599f2d9ee97bb91b1dd55889205819dd87b3eea = $this->env->getExtension("native_profiler");
        $__internal_d7b30b6919d3229e634271bdb599f2d9ee97bb91b1dd55889205819dd87b3eea->enter($__internal_d7b30b6919d3229e634271bdb599f2d9ee97bb91b1dd55889205819dd87b3eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7b30b6919d3229e634271bdb599f2d9ee97bb91b1dd55889205819dd87b3eea->leave($__internal_d7b30b6919d3229e634271bdb599f2d9ee97bb91b1dd55889205819dd87b3eea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f3bfe1037f25556cd840186b7025f0a121ae95dd030e785fb8bd5e044e14cd1 = $this->env->getExtension("native_profiler");
        $__internal_6f3bfe1037f25556cd840186b7025f0a121ae95dd030e785fb8bd5e044e14cd1->enter($__internal_6f3bfe1037f25556cd840186b7025f0a121ae95dd030e785fb8bd5e044e14cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6f3bfe1037f25556cd840186b7025f0a121ae95dd030e785fb8bd5e044e14cd1->leave($__internal_6f3bfe1037f25556cd840186b7025f0a121ae95dd030e785fb8bd5e044e14cd1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_74f788dc20c563b61eb9b720f9753f9ffd87f8edfbb71fd3bd3a273f01c9b073 = $this->env->getExtension("native_profiler");
        $__internal_74f788dc20c563b61eb9b720f9753f9ffd87f8edfbb71fd3bd3a273f01c9b073->enter($__internal_74f788dc20c563b61eb9b720f9753f9ffd87f8edfbb71fd3bd3a273f01c9b073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74f788dc20c563b61eb9b720f9753f9ffd87f8edfbb71fd3bd3a273f01c9b073->leave($__internal_74f788dc20c563b61eb9b720f9753f9ffd87f8edfbb71fd3bd3a273f01c9b073_prof);

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
