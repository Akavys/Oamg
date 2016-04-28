<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2b6c1d4b8c83062e474607a528a70357da9b8a530945f9fd8a069818af4c1e33 extends Twig_Template
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
        $__internal_745b707850b3d806b0bf3abd817e6a0fb88c5cca8ae969b8ac204cda84479d04 = $this->env->getExtension("native_profiler");
        $__internal_745b707850b3d806b0bf3abd817e6a0fb88c5cca8ae969b8ac204cda84479d04->enter($__internal_745b707850b3d806b0bf3abd817e6a0fb88c5cca8ae969b8ac204cda84479d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_745b707850b3d806b0bf3abd817e6a0fb88c5cca8ae969b8ac204cda84479d04->leave($__internal_745b707850b3d806b0bf3abd817e6a0fb88c5cca8ae969b8ac204cda84479d04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15826cef233cb392194ee66521501ec7e1c87f7ef5a9dcb77b3eec428feccf73 = $this->env->getExtension("native_profiler");
        $__internal_15826cef233cb392194ee66521501ec7e1c87f7ef5a9dcb77b3eec428feccf73->enter($__internal_15826cef233cb392194ee66521501ec7e1c87f7ef5a9dcb77b3eec428feccf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_15826cef233cb392194ee66521501ec7e1c87f7ef5a9dcb77b3eec428feccf73->leave($__internal_15826cef233cb392194ee66521501ec7e1c87f7ef5a9dcb77b3eec428feccf73_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_637a2101f5ddbb19cb66657ca392cb9500887a3b47375690bbd04e8c433b7a2e = $this->env->getExtension("native_profiler");
        $__internal_637a2101f5ddbb19cb66657ca392cb9500887a3b47375690bbd04e8c433b7a2e->enter($__internal_637a2101f5ddbb19cb66657ca392cb9500887a3b47375690bbd04e8c433b7a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_637a2101f5ddbb19cb66657ca392cb9500887a3b47375690bbd04e8c433b7a2e->leave($__internal_637a2101f5ddbb19cb66657ca392cb9500887a3b47375690bbd04e8c433b7a2e_prof);

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
