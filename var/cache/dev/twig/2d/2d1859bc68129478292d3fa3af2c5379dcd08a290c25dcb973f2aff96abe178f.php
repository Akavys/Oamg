<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_06a85d77a86286e93f608a4330765dad495fdc79737bb63d0a781a4479863fa7 extends Twig_Template
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
        $__internal_dc4534be26e27c9a70fae4f9d95afedcccaea03ec46db644f377fb8f3d8c193d = $this->env->getExtension("native_profiler");
        $__internal_dc4534be26e27c9a70fae4f9d95afedcccaea03ec46db644f377fb8f3d8c193d->enter($__internal_dc4534be26e27c9a70fae4f9d95afedcccaea03ec46db644f377fb8f3d8c193d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc4534be26e27c9a70fae4f9d95afedcccaea03ec46db644f377fb8f3d8c193d->leave($__internal_dc4534be26e27c9a70fae4f9d95afedcccaea03ec46db644f377fb8f3d8c193d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39735d739796d4e67758385664fc4479685bd92551b9046b4309969abe125c8c = $this->env->getExtension("native_profiler");
        $__internal_39735d739796d4e67758385664fc4479685bd92551b9046b4309969abe125c8c->enter($__internal_39735d739796d4e67758385664fc4479685bd92551b9046b4309969abe125c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39735d739796d4e67758385664fc4479685bd92551b9046b4309969abe125c8c->leave($__internal_39735d739796d4e67758385664fc4479685bd92551b9046b4309969abe125c8c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02a3160afe9b9cc1f500d3664b80237da110df7dfb80f0ddeb71b528640f90df = $this->env->getExtension("native_profiler");
        $__internal_02a3160afe9b9cc1f500d3664b80237da110df7dfb80f0ddeb71b528640f90df->enter($__internal_02a3160afe9b9cc1f500d3664b80237da110df7dfb80f0ddeb71b528640f90df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02a3160afe9b9cc1f500d3664b80237da110df7dfb80f0ddeb71b528640f90df->leave($__internal_02a3160afe9b9cc1f500d3664b80237da110df7dfb80f0ddeb71b528640f90df_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05ddf83e72c36d93a0f59141ce18eb71cc96e30e030d6f9e46b53768d58d555e = $this->env->getExtension("native_profiler");
        $__internal_05ddf83e72c36d93a0f59141ce18eb71cc96e30e030d6f9e46b53768d58d555e->enter($__internal_05ddf83e72c36d93a0f59141ce18eb71cc96e30e030d6f9e46b53768d58d555e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_05ddf83e72c36d93a0f59141ce18eb71cc96e30e030d6f9e46b53768d58d555e->leave($__internal_05ddf83e72c36d93a0f59141ce18eb71cc96e30e030d6f9e46b53768d58d555e_prof);

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
