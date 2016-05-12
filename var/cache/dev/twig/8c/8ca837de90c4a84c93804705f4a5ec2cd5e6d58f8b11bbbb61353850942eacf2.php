<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_139aaed9000f3eca5d6c1a62ef4a1d6aacb09253b620be27be482d795894d0fa extends Twig_Template
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
        $__internal_a4c250b22835e4f79b8c8f772e40a8d2e2a75e01c2c18377529c948e5e98d29c = $this->env->getExtension("native_profiler");
        $__internal_a4c250b22835e4f79b8c8f772e40a8d2e2a75e01c2c18377529c948e5e98d29c->enter($__internal_a4c250b22835e4f79b8c8f772e40a8d2e2a75e01c2c18377529c948e5e98d29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4c250b22835e4f79b8c8f772e40a8d2e2a75e01c2c18377529c948e5e98d29c->leave($__internal_a4c250b22835e4f79b8c8f772e40a8d2e2a75e01c2c18377529c948e5e98d29c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f344db40aeeb4b1dcd774883e8f14e3bcf7a7c79848e282a3bf4ca00dcf0ac4 = $this->env->getExtension("native_profiler");
        $__internal_2f344db40aeeb4b1dcd774883e8f14e3bcf7a7c79848e282a3bf4ca00dcf0ac4->enter($__internal_2f344db40aeeb4b1dcd774883e8f14e3bcf7a7c79848e282a3bf4ca00dcf0ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2f344db40aeeb4b1dcd774883e8f14e3bcf7a7c79848e282a3bf4ca00dcf0ac4->leave($__internal_2f344db40aeeb4b1dcd774883e8f14e3bcf7a7c79848e282a3bf4ca00dcf0ac4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b269f5997c7a24252cd75f858f503e7d20108c065f364fab18232dd1088b35a = $this->env->getExtension("native_profiler");
        $__internal_9b269f5997c7a24252cd75f858f503e7d20108c065f364fab18232dd1088b35a->enter($__internal_9b269f5997c7a24252cd75f858f503e7d20108c065f364fab18232dd1088b35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9b269f5997c7a24252cd75f858f503e7d20108c065f364fab18232dd1088b35a->leave($__internal_9b269f5997c7a24252cd75f858f503e7d20108c065f364fab18232dd1088b35a_prof);

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
