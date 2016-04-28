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
        $__internal_9c164922efeee9117df52b6f5e0a96ded786f871ee63595084d84c535578f2df = $this->env->getExtension("native_profiler");
        $__internal_9c164922efeee9117df52b6f5e0a96ded786f871ee63595084d84c535578f2df->enter($__internal_9c164922efeee9117df52b6f5e0a96ded786f871ee63595084d84c535578f2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c164922efeee9117df52b6f5e0a96ded786f871ee63595084d84c535578f2df->leave($__internal_9c164922efeee9117df52b6f5e0a96ded786f871ee63595084d84c535578f2df_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ceb24634eb949f747f56bd51d3e06be6d16dc178daaa3b4895dfa19e0ce11af3 = $this->env->getExtension("native_profiler");
        $__internal_ceb24634eb949f747f56bd51d3e06be6d16dc178daaa3b4895dfa19e0ce11af3->enter($__internal_ceb24634eb949f747f56bd51d3e06be6d16dc178daaa3b4895dfa19e0ce11af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ceb24634eb949f747f56bd51d3e06be6d16dc178daaa3b4895dfa19e0ce11af3->leave($__internal_ceb24634eb949f747f56bd51d3e06be6d16dc178daaa3b4895dfa19e0ce11af3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc0eea46fd4c9d30b9709075f86ec1d7e93519083a90eff89b841a08103eb56a = $this->env->getExtension("native_profiler");
        $__internal_cc0eea46fd4c9d30b9709075f86ec1d7e93519083a90eff89b841a08103eb56a->enter($__internal_cc0eea46fd4c9d30b9709075f86ec1d7e93519083a90eff89b841a08103eb56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc0eea46fd4c9d30b9709075f86ec1d7e93519083a90eff89b841a08103eb56a->leave($__internal_cc0eea46fd4c9d30b9709075f86ec1d7e93519083a90eff89b841a08103eb56a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ace1be0df66ff4dcbddf426e1ae462ea8aba3be0465fc6b8347819334c85c40 = $this->env->getExtension("native_profiler");
        $__internal_6ace1be0df66ff4dcbddf426e1ae462ea8aba3be0465fc6b8347819334c85c40->enter($__internal_6ace1be0df66ff4dcbddf426e1ae462ea8aba3be0465fc6b8347819334c85c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ace1be0df66ff4dcbddf426e1ae462ea8aba3be0465fc6b8347819334c85c40->leave($__internal_6ace1be0df66ff4dcbddf426e1ae462ea8aba3be0465fc6b8347819334c85c40_prof);

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
