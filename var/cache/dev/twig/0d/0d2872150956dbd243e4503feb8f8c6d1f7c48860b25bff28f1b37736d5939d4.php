<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1c798b1de5166aaf70c419e98506a616299d4dba7c5a4992f920387ae64b0d79 extends Twig_Template
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
        $__internal_38b2ea543130c9bda215dfd3b436cf734c5466ffed312ae8aea955ed765d506c = $this->env->getExtension("native_profiler");
        $__internal_38b2ea543130c9bda215dfd3b436cf734c5466ffed312ae8aea955ed765d506c->enter($__internal_38b2ea543130c9bda215dfd3b436cf734c5466ffed312ae8aea955ed765d506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b2ea543130c9bda215dfd3b436cf734c5466ffed312ae8aea955ed765d506c->leave($__internal_38b2ea543130c9bda215dfd3b436cf734c5466ffed312ae8aea955ed765d506c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2b9af0ddb952fabf36530e717ce5dacdadae7e8dce2ff1d73e9b8d075cc4b988 = $this->env->getExtension("native_profiler");
        $__internal_2b9af0ddb952fabf36530e717ce5dacdadae7e8dce2ff1d73e9b8d075cc4b988->enter($__internal_2b9af0ddb952fabf36530e717ce5dacdadae7e8dce2ff1d73e9b8d075cc4b988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b9af0ddb952fabf36530e717ce5dacdadae7e8dce2ff1d73e9b8d075cc4b988->leave($__internal_2b9af0ddb952fabf36530e717ce5dacdadae7e8dce2ff1d73e9b8d075cc4b988_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5cdcca21879461af91202f2538d0bd78e9ac3f0d808b04c8ee6cdb916fa0c446 = $this->env->getExtension("native_profiler");
        $__internal_5cdcca21879461af91202f2538d0bd78e9ac3f0d808b04c8ee6cdb916fa0c446->enter($__internal_5cdcca21879461af91202f2538d0bd78e9ac3f0d808b04c8ee6cdb916fa0c446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5cdcca21879461af91202f2538d0bd78e9ac3f0d808b04c8ee6cdb916fa0c446->leave($__internal_5cdcca21879461af91202f2538d0bd78e9ac3f0d808b04c8ee6cdb916fa0c446_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e752b94fa9c80b40ea81077a2d29d923dc4eac4da1e7d02a88aab09be9ac5ede = $this->env->getExtension("native_profiler");
        $__internal_e752b94fa9c80b40ea81077a2d29d923dc4eac4da1e7d02a88aab09be9ac5ede->enter($__internal_e752b94fa9c80b40ea81077a2d29d923dc4eac4da1e7d02a88aab09be9ac5ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e752b94fa9c80b40ea81077a2d29d923dc4eac4da1e7d02a88aab09be9ac5ede->leave($__internal_e752b94fa9c80b40ea81077a2d29d923dc4eac4da1e7d02a88aab09be9ac5ede_prof);

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
