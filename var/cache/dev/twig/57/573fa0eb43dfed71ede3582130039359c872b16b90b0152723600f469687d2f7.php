<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_de344d7135c583965ac1b53a5992a1c543b3490981f161e832b17585cd27afba extends Twig_Template
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
        $__internal_f82e469356159a2b1075369e62a8a8d15dea3fe55355b63f36f24f1f3b6f9700 = $this->env->getExtension("native_profiler");
        $__internal_f82e469356159a2b1075369e62a8a8d15dea3fe55355b63f36f24f1f3b6f9700->enter($__internal_f82e469356159a2b1075369e62a8a8d15dea3fe55355b63f36f24f1f3b6f9700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82e469356159a2b1075369e62a8a8d15dea3fe55355b63f36f24f1f3b6f9700->leave($__internal_f82e469356159a2b1075369e62a8a8d15dea3fe55355b63f36f24f1f3b6f9700_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1eccf2b65e885890c60dee8ead4e7f7d69c3ad355992cb5c097160c1615b6253 = $this->env->getExtension("native_profiler");
        $__internal_1eccf2b65e885890c60dee8ead4e7f7d69c3ad355992cb5c097160c1615b6253->enter($__internal_1eccf2b65e885890c60dee8ead4e7f7d69c3ad355992cb5c097160c1615b6253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1eccf2b65e885890c60dee8ead4e7f7d69c3ad355992cb5c097160c1615b6253->leave($__internal_1eccf2b65e885890c60dee8ead4e7f7d69c3ad355992cb5c097160c1615b6253_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ec966a06141006efda8e56710a72549bf993eac67907709f8d2762b85eaf320 = $this->env->getExtension("native_profiler");
        $__internal_6ec966a06141006efda8e56710a72549bf993eac67907709f8d2762b85eaf320->enter($__internal_6ec966a06141006efda8e56710a72549bf993eac67907709f8d2762b85eaf320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ec966a06141006efda8e56710a72549bf993eac67907709f8d2762b85eaf320->leave($__internal_6ec966a06141006efda8e56710a72549bf993eac67907709f8d2762b85eaf320_prof);

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
