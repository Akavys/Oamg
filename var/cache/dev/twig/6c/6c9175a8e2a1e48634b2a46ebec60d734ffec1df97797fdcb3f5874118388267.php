<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_125cad5921b61bc71653f0749d8093a6512c2f45c4390edd422e69d5d68871e8 extends Twig_Template
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
        $__internal_c27038e2fce5b6420e2763d89d37a8f24d50148280e41b9e336858405f277b7f = $this->env->getExtension("native_profiler");
        $__internal_c27038e2fce5b6420e2763d89d37a8f24d50148280e41b9e336858405f277b7f->enter($__internal_c27038e2fce5b6420e2763d89d37a8f24d50148280e41b9e336858405f277b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c27038e2fce5b6420e2763d89d37a8f24d50148280e41b9e336858405f277b7f->leave($__internal_c27038e2fce5b6420e2763d89d37a8f24d50148280e41b9e336858405f277b7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05c3861043ee3ce9863c6ca637fe3e799dd6c55b4b68621b67a5c9cb02f01b5e = $this->env->getExtension("native_profiler");
        $__internal_05c3861043ee3ce9863c6ca637fe3e799dd6c55b4b68621b67a5c9cb02f01b5e->enter($__internal_05c3861043ee3ce9863c6ca637fe3e799dd6c55b4b68621b67a5c9cb02f01b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_05c3861043ee3ce9863c6ca637fe3e799dd6c55b4b68621b67a5c9cb02f01b5e->leave($__internal_05c3861043ee3ce9863c6ca637fe3e799dd6c55b4b68621b67a5c9cb02f01b5e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c660c524638361338ec098050d7d256de2a1561ddc723426cfca2769b4d89c48 = $this->env->getExtension("native_profiler");
        $__internal_c660c524638361338ec098050d7d256de2a1561ddc723426cfca2769b4d89c48->enter($__internal_c660c524638361338ec098050d7d256de2a1561ddc723426cfca2769b4d89c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c660c524638361338ec098050d7d256de2a1561ddc723426cfca2769b4d89c48->leave($__internal_c660c524638361338ec098050d7d256de2a1561ddc723426cfca2769b4d89c48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_41e642c6eb3c6435e34d741d3d044468e44a7d9727a42b572c62f1a39ede9258 = $this->env->getExtension("native_profiler");
        $__internal_41e642c6eb3c6435e34d741d3d044468e44a7d9727a42b572c62f1a39ede9258->enter($__internal_41e642c6eb3c6435e34d741d3d044468e44a7d9727a42b572c62f1a39ede9258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_41e642c6eb3c6435e34d741d3d044468e44a7d9727a42b572c62f1a39ede9258->leave($__internal_41e642c6eb3c6435e34d741d3d044468e44a7d9727a42b572c62f1a39ede9258_prof);

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
