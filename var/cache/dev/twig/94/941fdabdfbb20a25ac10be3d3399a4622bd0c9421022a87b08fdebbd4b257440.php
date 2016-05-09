<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_001a02a913e3c5d76e226a4ec85c465900105ed3449ebc2bca35ed1b90acf2e4 extends Twig_Template
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
        $__internal_2c361cbe70032fe1c4c63895bdd6fdbb39ec8f4e9f349fb0764d3f1dee638afa = $this->env->getExtension("native_profiler");
        $__internal_2c361cbe70032fe1c4c63895bdd6fdbb39ec8f4e9f349fb0764d3f1dee638afa->enter($__internal_2c361cbe70032fe1c4c63895bdd6fdbb39ec8f4e9f349fb0764d3f1dee638afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c361cbe70032fe1c4c63895bdd6fdbb39ec8f4e9f349fb0764d3f1dee638afa->leave($__internal_2c361cbe70032fe1c4c63895bdd6fdbb39ec8f4e9f349fb0764d3f1dee638afa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_998519a7bda34de63a8fc66f3a7777956598c73033ed8d28f41e8e78f1a96010 = $this->env->getExtension("native_profiler");
        $__internal_998519a7bda34de63a8fc66f3a7777956598c73033ed8d28f41e8e78f1a96010->enter($__internal_998519a7bda34de63a8fc66f3a7777956598c73033ed8d28f41e8e78f1a96010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_998519a7bda34de63a8fc66f3a7777956598c73033ed8d28f41e8e78f1a96010->leave($__internal_998519a7bda34de63a8fc66f3a7777956598c73033ed8d28f41e8e78f1a96010_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8755f6fd53f2d4ce1132ea4e7d3dcce63554bfd1a4682a270da73ee2e37af4a = $this->env->getExtension("native_profiler");
        $__internal_e8755f6fd53f2d4ce1132ea4e7d3dcce63554bfd1a4682a270da73ee2e37af4a->enter($__internal_e8755f6fd53f2d4ce1132ea4e7d3dcce63554bfd1a4682a270da73ee2e37af4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e8755f6fd53f2d4ce1132ea4e7d3dcce63554bfd1a4682a270da73ee2e37af4a->leave($__internal_e8755f6fd53f2d4ce1132ea4e7d3dcce63554bfd1a4682a270da73ee2e37af4a_prof);

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
