<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9d87c0a62d6a1fa6744f792225bc217e4339d86f41ff822ee29494e68d5bedc6 extends Twig_Template
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
        $__internal_1435eb61b8f67ddabe7e0ef59998c2fd8c476f2d479f455b947c7151cf313144 = $this->env->getExtension("native_profiler");
        $__internal_1435eb61b8f67ddabe7e0ef59998c2fd8c476f2d479f455b947c7151cf313144->enter($__internal_1435eb61b8f67ddabe7e0ef59998c2fd8c476f2d479f455b947c7151cf313144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1435eb61b8f67ddabe7e0ef59998c2fd8c476f2d479f455b947c7151cf313144->leave($__internal_1435eb61b8f67ddabe7e0ef59998c2fd8c476f2d479f455b947c7151cf313144_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b9298d0697834cf65a767c7025a1f2547575b35c92b6facb6336e7465783ed9b = $this->env->getExtension("native_profiler");
        $__internal_b9298d0697834cf65a767c7025a1f2547575b35c92b6facb6336e7465783ed9b->enter($__internal_b9298d0697834cf65a767c7025a1f2547575b35c92b6facb6336e7465783ed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b9298d0697834cf65a767c7025a1f2547575b35c92b6facb6336e7465783ed9b->leave($__internal_b9298d0697834cf65a767c7025a1f2547575b35c92b6facb6336e7465783ed9b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4af131dd1b386556932c60044f49c8bc31984d49bdc08440f9407c24c74f506b = $this->env->getExtension("native_profiler");
        $__internal_4af131dd1b386556932c60044f49c8bc31984d49bdc08440f9407c24c74f506b->enter($__internal_4af131dd1b386556932c60044f49c8bc31984d49bdc08440f9407c24c74f506b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4af131dd1b386556932c60044f49c8bc31984d49bdc08440f9407c24c74f506b->leave($__internal_4af131dd1b386556932c60044f49c8bc31984d49bdc08440f9407c24c74f506b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1ca54f3238d6b993c441ae4df304bf3dabca4ccabbff7b3669b398b7889f02bb = $this->env->getExtension("native_profiler");
        $__internal_1ca54f3238d6b993c441ae4df304bf3dabca4ccabbff7b3669b398b7889f02bb->enter($__internal_1ca54f3238d6b993c441ae4df304bf3dabca4ccabbff7b3669b398b7889f02bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ca54f3238d6b993c441ae4df304bf3dabca4ccabbff7b3669b398b7889f02bb->leave($__internal_1ca54f3238d6b993c441ae4df304bf3dabca4ccabbff7b3669b398b7889f02bb_prof);

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
