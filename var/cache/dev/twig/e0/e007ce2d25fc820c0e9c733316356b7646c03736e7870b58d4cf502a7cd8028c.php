<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_03890fc81b3c4f2114af5b4f8c3d3a2210b475ab202c5352b31328111b726d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_138a498d6e2c8b5900eac84f40bca774b7ccb0e295d0698770fa157b52e67511 = $this->env->getExtension("native_profiler");
        $__internal_138a498d6e2c8b5900eac84f40bca774b7ccb0e295d0698770fa157b52e67511->enter($__internal_138a498d6e2c8b5900eac84f40bca774b7ccb0e295d0698770fa157b52e67511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_138a498d6e2c8b5900eac84f40bca774b7ccb0e295d0698770fa157b52e67511->leave($__internal_138a498d6e2c8b5900eac84f40bca774b7ccb0e295d0698770fa157b52e67511_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59f60a6fb328835dd16ac859d2bbdf08a5fc1dfea30d3fb021a8b5ba77b81473 = $this->env->getExtension("native_profiler");
        $__internal_59f60a6fb328835dd16ac859d2bbdf08a5fc1dfea30d3fb021a8b5ba77b81473->enter($__internal_59f60a6fb328835dd16ac859d2bbdf08a5fc1dfea30d3fb021a8b5ba77b81473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_59f60a6fb328835dd16ac859d2bbdf08a5fc1dfea30d3fb021a8b5ba77b81473->leave($__internal_59f60a6fb328835dd16ac859d2bbdf08a5fc1dfea30d3fb021a8b5ba77b81473_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06e2ced6d1328a7dc607a96378cf61e661824b3cf841a4b74cf3fed69eaf8fc1 = $this->env->getExtension("native_profiler");
        $__internal_06e2ced6d1328a7dc607a96378cf61e661824b3cf841a4b74cf3fed69eaf8fc1->enter($__internal_06e2ced6d1328a7dc607a96378cf61e661824b3cf841a4b74cf3fed69eaf8fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_06e2ced6d1328a7dc607a96378cf61e661824b3cf841a4b74cf3fed69eaf8fc1->leave($__internal_06e2ced6d1328a7dc607a96378cf61e661824b3cf841a4b74cf3fed69eaf8fc1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06d8a8d89f3c523ddd73ea79656f2eba7c8bf3e23ddb0705d532906059b39c79 = $this->env->getExtension("native_profiler");
        $__internal_06d8a8d89f3c523ddd73ea79656f2eba7c8bf3e23ddb0705d532906059b39c79->enter($__internal_06d8a8d89f3c523ddd73ea79656f2eba7c8bf3e23ddb0705d532906059b39c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_06d8a8d89f3c523ddd73ea79656f2eba7c8bf3e23ddb0705d532906059b39c79->leave($__internal_06d8a8d89f3c523ddd73ea79656f2eba7c8bf3e23ddb0705d532906059b39c79_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
