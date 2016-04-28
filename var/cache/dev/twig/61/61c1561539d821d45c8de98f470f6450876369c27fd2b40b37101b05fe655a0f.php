<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3701a761b8320ef58cff90c788d6739e45d0777422adcad546f3ac72745abc26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87b46f0d47e77e8154934e350fcb58511ec962db69448a609f692d63f264976b = $this->env->getExtension("native_profiler");
        $__internal_87b46f0d47e77e8154934e350fcb58511ec962db69448a609f692d63f264976b->enter($__internal_87b46f0d47e77e8154934e350fcb58511ec962db69448a609f692d63f264976b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87b46f0d47e77e8154934e350fcb58511ec962db69448a609f692d63f264976b->leave($__internal_87b46f0d47e77e8154934e350fcb58511ec962db69448a609f692d63f264976b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_caaa69bb47d97fd3351b86d8cbbb0dcead7c4c114513ce9b76669ee9521726b4 = $this->env->getExtension("native_profiler");
        $__internal_caaa69bb47d97fd3351b86d8cbbb0dcead7c4c114513ce9b76669ee9521726b4->enter($__internal_caaa69bb47d97fd3351b86d8cbbb0dcead7c4c114513ce9b76669ee9521726b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_caaa69bb47d97fd3351b86d8cbbb0dcead7c4c114513ce9b76669ee9521726b4->leave($__internal_caaa69bb47d97fd3351b86d8cbbb0dcead7c4c114513ce9b76669ee9521726b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2539f9530bbcb86d7fcd85f70cb17db1f0df46e347af4ef801d2ce98b4687690 = $this->env->getExtension("native_profiler");
        $__internal_2539f9530bbcb86d7fcd85f70cb17db1f0df46e347af4ef801d2ce98b4687690->enter($__internal_2539f9530bbcb86d7fcd85f70cb17db1f0df46e347af4ef801d2ce98b4687690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2539f9530bbcb86d7fcd85f70cb17db1f0df46e347af4ef801d2ce98b4687690->leave($__internal_2539f9530bbcb86d7fcd85f70cb17db1f0df46e347af4ef801d2ce98b4687690_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a59d0c4fa235fb889cbb52ce2bc27ba4e4b2f749b240e772a579efe30360f532 = $this->env->getExtension("native_profiler");
        $__internal_a59d0c4fa235fb889cbb52ce2bc27ba4e4b2f749b240e772a579efe30360f532->enter($__internal_a59d0c4fa235fb889cbb52ce2bc27ba4e4b2f749b240e772a579efe30360f532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a59d0c4fa235fb889cbb52ce2bc27ba4e4b2f749b240e772a579efe30360f532->leave($__internal_a59d0c4fa235fb889cbb52ce2bc27ba4e4b2f749b240e772a579efe30360f532_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
