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
        $__internal_c85ab0297713e57b05383cc8a0001e94bc6cdb048607499dd5ae20038c30069d = $this->env->getExtension("native_profiler");
        $__internal_c85ab0297713e57b05383cc8a0001e94bc6cdb048607499dd5ae20038c30069d->enter($__internal_c85ab0297713e57b05383cc8a0001e94bc6cdb048607499dd5ae20038c30069d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c85ab0297713e57b05383cc8a0001e94bc6cdb048607499dd5ae20038c30069d->leave($__internal_c85ab0297713e57b05383cc8a0001e94bc6cdb048607499dd5ae20038c30069d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1a967be777a7a23adb2401175ac0b5edb861e8b836f6e31450efcc98b929112 = $this->env->getExtension("native_profiler");
        $__internal_b1a967be777a7a23adb2401175ac0b5edb861e8b836f6e31450efcc98b929112->enter($__internal_b1a967be777a7a23adb2401175ac0b5edb861e8b836f6e31450efcc98b929112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b1a967be777a7a23adb2401175ac0b5edb861e8b836f6e31450efcc98b929112->leave($__internal_b1a967be777a7a23adb2401175ac0b5edb861e8b836f6e31450efcc98b929112_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4206826186d047c34dcf2cab13f616a51c2974eca57127f66dc2c2ce48808b12 = $this->env->getExtension("native_profiler");
        $__internal_4206826186d047c34dcf2cab13f616a51c2974eca57127f66dc2c2ce48808b12->enter($__internal_4206826186d047c34dcf2cab13f616a51c2974eca57127f66dc2c2ce48808b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4206826186d047c34dcf2cab13f616a51c2974eca57127f66dc2c2ce48808b12->leave($__internal_4206826186d047c34dcf2cab13f616a51c2974eca57127f66dc2c2ce48808b12_prof);

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
