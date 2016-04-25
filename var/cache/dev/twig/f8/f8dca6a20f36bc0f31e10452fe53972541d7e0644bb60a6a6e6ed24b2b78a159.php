<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d99f53ae57d5a699d0baab4451de3a0087529da07acf74c49f5ef85233456c1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_1fb488205c8474600fe28c8585e6516648bfc2713be9ea66b4c2842e32658ff2 = $this->env->getExtension("native_profiler");
        $__internal_1fb488205c8474600fe28c8585e6516648bfc2713be9ea66b4c2842e32658ff2->enter($__internal_1fb488205c8474600fe28c8585e6516648bfc2713be9ea66b4c2842e32658ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fb488205c8474600fe28c8585e6516648bfc2713be9ea66b4c2842e32658ff2->leave($__internal_1fb488205c8474600fe28c8585e6516648bfc2713be9ea66b4c2842e32658ff2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c8558b0f7cdad0aa6b7c3c6f0e523ac47fa516a44492a054cc778846231964e = $this->env->getExtension("native_profiler");
        $__internal_4c8558b0f7cdad0aa6b7c3c6f0e523ac47fa516a44492a054cc778846231964e->enter($__internal_4c8558b0f7cdad0aa6b7c3c6f0e523ac47fa516a44492a054cc778846231964e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4c8558b0f7cdad0aa6b7c3c6f0e523ac47fa516a44492a054cc778846231964e->leave($__internal_4c8558b0f7cdad0aa6b7c3c6f0e523ac47fa516a44492a054cc778846231964e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31cae0d4b15309dc52d6114823abdff6549878240acc6b38eae8165f06c74726 = $this->env->getExtension("native_profiler");
        $__internal_31cae0d4b15309dc52d6114823abdff6549878240acc6b38eae8165f06c74726->enter($__internal_31cae0d4b15309dc52d6114823abdff6549878240acc6b38eae8165f06c74726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_31cae0d4b15309dc52d6114823abdff6549878240acc6b38eae8165f06c74726->leave($__internal_31cae0d4b15309dc52d6114823abdff6549878240acc6b38eae8165f06c74726_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65895388600e06d3df3b4c6f97a4dce2945aa79b8720fbe340d14f1903b21891 = $this->env->getExtension("native_profiler");
        $__internal_65895388600e06d3df3b4c6f97a4dce2945aa79b8720fbe340d14f1903b21891->enter($__internal_65895388600e06d3df3b4c6f97a4dce2945aa79b8720fbe340d14f1903b21891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_65895388600e06d3df3b4c6f97a4dce2945aa79b8720fbe340d14f1903b21891->leave($__internal_65895388600e06d3df3b4c6f97a4dce2945aa79b8720fbe340d14f1903b21891_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
