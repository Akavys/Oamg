<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_41e6dd47a8d3556d71be9ce4d65ad34da0250a0eb5d3dfa04bf90f01b2b444c7 extends Twig_Template
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
        $__internal_3e5237245092e0ff84f329fa60779404d52df16dccee9124575ef4a24dc07d7a = $this->env->getExtension("native_profiler");
        $__internal_3e5237245092e0ff84f329fa60779404d52df16dccee9124575ef4a24dc07d7a->enter($__internal_3e5237245092e0ff84f329fa60779404d52df16dccee9124575ef4a24dc07d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5237245092e0ff84f329fa60779404d52df16dccee9124575ef4a24dc07d7a->leave($__internal_3e5237245092e0ff84f329fa60779404d52df16dccee9124575ef4a24dc07d7a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac4686d2d36018c5ace18b5d40e3d4d95140daf2ac2840fe91f6d5d809fbfee5 = $this->env->getExtension("native_profiler");
        $__internal_ac4686d2d36018c5ace18b5d40e3d4d95140daf2ac2840fe91f6d5d809fbfee5->enter($__internal_ac4686d2d36018c5ace18b5d40e3d4d95140daf2ac2840fe91f6d5d809fbfee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ac4686d2d36018c5ace18b5d40e3d4d95140daf2ac2840fe91f6d5d809fbfee5->leave($__internal_ac4686d2d36018c5ace18b5d40e3d4d95140daf2ac2840fe91f6d5d809fbfee5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ebadacbcba08fdd771c83aff1a384775f51618f5446a2a612ecc2e63930d1df = $this->env->getExtension("native_profiler");
        $__internal_5ebadacbcba08fdd771c83aff1a384775f51618f5446a2a612ecc2e63930d1df->enter($__internal_5ebadacbcba08fdd771c83aff1a384775f51618f5446a2a612ecc2e63930d1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5ebadacbcba08fdd771c83aff1a384775f51618f5446a2a612ecc2e63930d1df->leave($__internal_5ebadacbcba08fdd771c83aff1a384775f51618f5446a2a612ecc2e63930d1df_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c40bfebb5d7ef518640c6a0f81c28e02fcb69e2bca0b4be981fcd47e311cee4d = $this->env->getExtension("native_profiler");
        $__internal_c40bfebb5d7ef518640c6a0f81c28e02fcb69e2bca0b4be981fcd47e311cee4d->enter($__internal_c40bfebb5d7ef518640c6a0f81c28e02fcb69e2bca0b4be981fcd47e311cee4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c40bfebb5d7ef518640c6a0f81c28e02fcb69e2bca0b4be981fcd47e311cee4d->leave($__internal_c40bfebb5d7ef518640c6a0f81c28e02fcb69e2bca0b4be981fcd47e311cee4d_prof);

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
