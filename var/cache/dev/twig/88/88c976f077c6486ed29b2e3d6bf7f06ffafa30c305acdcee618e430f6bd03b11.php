<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_be82ca7a60ae8a0dca409af90fc7f10b8c8cdbbc226e88496d424878f9c2ba95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_6e9932ee6ae83a87b37bd3955879d495adec70f62656f231379490a1ba8652c9 = $this->env->getExtension("native_profiler");
        $__internal_6e9932ee6ae83a87b37bd3955879d495adec70f62656f231379490a1ba8652c9->enter($__internal_6e9932ee6ae83a87b37bd3955879d495adec70f62656f231379490a1ba8652c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e9932ee6ae83a87b37bd3955879d495adec70f62656f231379490a1ba8652c9->leave($__internal_6e9932ee6ae83a87b37bd3955879d495adec70f62656f231379490a1ba8652c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff76ae2a51a88ad1ad1491663ef70741cfce55d4af344a7ad9367473ab238372 = $this->env->getExtension("native_profiler");
        $__internal_ff76ae2a51a88ad1ad1491663ef70741cfce55d4af344a7ad9367473ab238372->enter($__internal_ff76ae2a51a88ad1ad1491663ef70741cfce55d4af344a7ad9367473ab238372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff76ae2a51a88ad1ad1491663ef70741cfce55d4af344a7ad9367473ab238372->leave($__internal_ff76ae2a51a88ad1ad1491663ef70741cfce55d4af344a7ad9367473ab238372_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8af69a7e4cb777a311fa3519677821f6d734900a59e7bfd91cacaff833929a8 = $this->env->getExtension("native_profiler");
        $__internal_a8af69a7e4cb777a311fa3519677821f6d734900a59e7bfd91cacaff833929a8->enter($__internal_a8af69a7e4cb777a311fa3519677821f6d734900a59e7bfd91cacaff833929a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a8af69a7e4cb777a311fa3519677821f6d734900a59e7bfd91cacaff833929a8->leave($__internal_a8af69a7e4cb777a311fa3519677821f6d734900a59e7bfd91cacaff833929a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a77d3bc30129226d86faecf8235b9f17486b8d76e2d07c317b7934bb1a052a1 = $this->env->getExtension("native_profiler");
        $__internal_2a77d3bc30129226d86faecf8235b9f17486b8d76e2d07c317b7934bb1a052a1->enter($__internal_2a77d3bc30129226d86faecf8235b9f17486b8d76e2d07c317b7934bb1a052a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a77d3bc30129226d86faecf8235b9f17486b8d76e2d07c317b7934bb1a052a1->leave($__internal_2a77d3bc30129226d86faecf8235b9f17486b8d76e2d07c317b7934bb1a052a1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
