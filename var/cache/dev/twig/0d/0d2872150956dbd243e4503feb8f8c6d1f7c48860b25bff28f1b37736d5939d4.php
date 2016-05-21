<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1c798b1de5166aaf70c419e98506a616299d4dba7c5a4992f920387ae64b0d79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b58a311d5b9b170570f15109de30dec2eaa1e16bc39c9522aebb06fadfbb4501 = $this->env->getExtension("native_profiler");
        $__internal_b58a311d5b9b170570f15109de30dec2eaa1e16bc39c9522aebb06fadfbb4501->enter($__internal_b58a311d5b9b170570f15109de30dec2eaa1e16bc39c9522aebb06fadfbb4501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b58a311d5b9b170570f15109de30dec2eaa1e16bc39c9522aebb06fadfbb4501->leave($__internal_b58a311d5b9b170570f15109de30dec2eaa1e16bc39c9522aebb06fadfbb4501_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_991cb5a63c49b4cb886c36347381a26941c91fbd4ee1b48e2731ba546461b737 = $this->env->getExtension("native_profiler");
        $__internal_991cb5a63c49b4cb886c36347381a26941c91fbd4ee1b48e2731ba546461b737->enter($__internal_991cb5a63c49b4cb886c36347381a26941c91fbd4ee1b48e2731ba546461b737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_991cb5a63c49b4cb886c36347381a26941c91fbd4ee1b48e2731ba546461b737->leave($__internal_991cb5a63c49b4cb886c36347381a26941c91fbd4ee1b48e2731ba546461b737_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9984dd5b18fb8d4cda6dfcf434533c266b51497e19b775f339ed6ee828c417c = $this->env->getExtension("native_profiler");
        $__internal_d9984dd5b18fb8d4cda6dfcf434533c266b51497e19b775f339ed6ee828c417c->enter($__internal_d9984dd5b18fb8d4cda6dfcf434533c266b51497e19b775f339ed6ee828c417c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9984dd5b18fb8d4cda6dfcf434533c266b51497e19b775f339ed6ee828c417c->leave($__internal_d9984dd5b18fb8d4cda6dfcf434533c266b51497e19b775f339ed6ee828c417c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce045857f3635e4ca5736d126997f39c8d31b0d3d2e17903f80c6cd1ccb87ba9 = $this->env->getExtension("native_profiler");
        $__internal_ce045857f3635e4ca5736d126997f39c8d31b0d3d2e17903f80c6cd1ccb87ba9->enter($__internal_ce045857f3635e4ca5736d126997f39c8d31b0d3d2e17903f80c6cd1ccb87ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ce045857f3635e4ca5736d126997f39c8d31b0d3d2e17903f80c6cd1ccb87ba9->leave($__internal_ce045857f3635e4ca5736d126997f39c8d31b0d3d2e17903f80c6cd1ccb87ba9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
