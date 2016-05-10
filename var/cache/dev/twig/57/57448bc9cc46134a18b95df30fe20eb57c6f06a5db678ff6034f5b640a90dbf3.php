<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e07e1b889d73e755bac35dc95d5efe89f6e8a28f9cf54dc879af8c2cab7e532e extends Twig_Template
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
        $__internal_1b35b3e99425a5e070f3eeeb912e495997c197a967479b69e8a5fdda93d4d9ae = $this->env->getExtension("native_profiler");
        $__internal_1b35b3e99425a5e070f3eeeb912e495997c197a967479b69e8a5fdda93d4d9ae->enter($__internal_1b35b3e99425a5e070f3eeeb912e495997c197a967479b69e8a5fdda93d4d9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b35b3e99425a5e070f3eeeb912e495997c197a967479b69e8a5fdda93d4d9ae->leave($__internal_1b35b3e99425a5e070f3eeeb912e495997c197a967479b69e8a5fdda93d4d9ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d9b3ccac7339c357ee1efcf90a0229c511f877fda21afeb7691f9dea58bcbf2 = $this->env->getExtension("native_profiler");
        $__internal_6d9b3ccac7339c357ee1efcf90a0229c511f877fda21afeb7691f9dea58bcbf2->enter($__internal_6d9b3ccac7339c357ee1efcf90a0229c511f877fda21afeb7691f9dea58bcbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6d9b3ccac7339c357ee1efcf90a0229c511f877fda21afeb7691f9dea58bcbf2->leave($__internal_6d9b3ccac7339c357ee1efcf90a0229c511f877fda21afeb7691f9dea58bcbf2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f822b8437ab7f3507ce0ec569809900ed533fa5cb8fc992232682a403649e40a = $this->env->getExtension("native_profiler");
        $__internal_f822b8437ab7f3507ce0ec569809900ed533fa5cb8fc992232682a403649e40a->enter($__internal_f822b8437ab7f3507ce0ec569809900ed533fa5cb8fc992232682a403649e40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f822b8437ab7f3507ce0ec569809900ed533fa5cb8fc992232682a403649e40a->leave($__internal_f822b8437ab7f3507ce0ec569809900ed533fa5cb8fc992232682a403649e40a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_342792a5768cffc57318250e7c23629a67d2f28ea5163246f5753b372f29a5bf = $this->env->getExtension("native_profiler");
        $__internal_342792a5768cffc57318250e7c23629a67d2f28ea5163246f5753b372f29a5bf->enter($__internal_342792a5768cffc57318250e7c23629a67d2f28ea5163246f5753b372f29a5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_342792a5768cffc57318250e7c23629a67d2f28ea5163246f5753b372f29a5bf->leave($__internal_342792a5768cffc57318250e7c23629a67d2f28ea5163246f5753b372f29a5bf_prof);

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