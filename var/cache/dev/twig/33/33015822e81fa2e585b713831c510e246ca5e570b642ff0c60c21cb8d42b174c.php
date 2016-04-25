<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f641dc3fd68b42a994342193ccbf9bece54a784edd585c230cffb5f5482265b9 extends Twig_Template
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
        $__internal_1f8ce6f87da97627464ce67cfffb553b37ac7dbd82672988890de505077f4dc5 = $this->env->getExtension("native_profiler");
        $__internal_1f8ce6f87da97627464ce67cfffb553b37ac7dbd82672988890de505077f4dc5->enter($__internal_1f8ce6f87da97627464ce67cfffb553b37ac7dbd82672988890de505077f4dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8ce6f87da97627464ce67cfffb553b37ac7dbd82672988890de505077f4dc5->leave($__internal_1f8ce6f87da97627464ce67cfffb553b37ac7dbd82672988890de505077f4dc5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69604b2df37be660bca30b8c4b65c5b39c664e6f4e9fd0f4ccff3a7305151efd = $this->env->getExtension("native_profiler");
        $__internal_69604b2df37be660bca30b8c4b65c5b39c664e6f4e9fd0f4ccff3a7305151efd->enter($__internal_69604b2df37be660bca30b8c4b65c5b39c664e6f4e9fd0f4ccff3a7305151efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69604b2df37be660bca30b8c4b65c5b39c664e6f4e9fd0f4ccff3a7305151efd->leave($__internal_69604b2df37be660bca30b8c4b65c5b39c664e6f4e9fd0f4ccff3a7305151efd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8f1d84b77be468f372168c2d61d8948c9447165cc4cb9777fe81a94419021b2 = $this->env->getExtension("native_profiler");
        $__internal_f8f1d84b77be468f372168c2d61d8948c9447165cc4cb9777fe81a94419021b2->enter($__internal_f8f1d84b77be468f372168c2d61d8948c9447165cc4cb9777fe81a94419021b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8f1d84b77be468f372168c2d61d8948c9447165cc4cb9777fe81a94419021b2->leave($__internal_f8f1d84b77be468f372168c2d61d8948c9447165cc4cb9777fe81a94419021b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4eba23e20c4732bdb6ebb8b2e5abbc08ebb3bae8514aa06afa521c9c8623b445 = $this->env->getExtension("native_profiler");
        $__internal_4eba23e20c4732bdb6ebb8b2e5abbc08ebb3bae8514aa06afa521c9c8623b445->enter($__internal_4eba23e20c4732bdb6ebb8b2e5abbc08ebb3bae8514aa06afa521c9c8623b445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4eba23e20c4732bdb6ebb8b2e5abbc08ebb3bae8514aa06afa521c9c8623b445->leave($__internal_4eba23e20c4732bdb6ebb8b2e5abbc08ebb3bae8514aa06afa521c9c8623b445_prof);

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
