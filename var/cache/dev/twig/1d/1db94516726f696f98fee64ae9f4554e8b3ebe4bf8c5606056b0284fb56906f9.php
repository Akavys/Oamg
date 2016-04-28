<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a6ee9204de739c5785c076a3659e0a25206dfdfb120356e954e97cd334277a62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_034550c856a295bb0b306afd552cc95b73dd0d0f64b4e1223786bf612d3592b1 = $this->env->getExtension("native_profiler");
        $__internal_034550c856a295bb0b306afd552cc95b73dd0d0f64b4e1223786bf612d3592b1->enter($__internal_034550c856a295bb0b306afd552cc95b73dd0d0f64b4e1223786bf612d3592b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_034550c856a295bb0b306afd552cc95b73dd0d0f64b4e1223786bf612d3592b1->leave($__internal_034550c856a295bb0b306afd552cc95b73dd0d0f64b4e1223786bf612d3592b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34ddb7577539ff0337d7a5081d5e306d7f5c3a3a37ac7aef94134f64b4529981 = $this->env->getExtension("native_profiler");
        $__internal_34ddb7577539ff0337d7a5081d5e306d7f5c3a3a37ac7aef94134f64b4529981->enter($__internal_34ddb7577539ff0337d7a5081d5e306d7f5c3a3a37ac7aef94134f64b4529981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34ddb7577539ff0337d7a5081d5e306d7f5c3a3a37ac7aef94134f64b4529981->leave($__internal_34ddb7577539ff0337d7a5081d5e306d7f5c3a3a37ac7aef94134f64b4529981_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_988ba57c6a1eae201f5afbb12edaf99ab3e1215987a631fa90cecc9240771fa5 = $this->env->getExtension("native_profiler");
        $__internal_988ba57c6a1eae201f5afbb12edaf99ab3e1215987a631fa90cecc9240771fa5->enter($__internal_988ba57c6a1eae201f5afbb12edaf99ab3e1215987a631fa90cecc9240771fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_988ba57c6a1eae201f5afbb12edaf99ab3e1215987a631fa90cecc9240771fa5->leave($__internal_988ba57c6a1eae201f5afbb12edaf99ab3e1215987a631fa90cecc9240771fa5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02adb52df44ea160652abf4ad68780bcc5c2546bc94babff83a1cb9e158b15ce = $this->env->getExtension("native_profiler");
        $__internal_02adb52df44ea160652abf4ad68780bcc5c2546bc94babff83a1cb9e158b15ce->enter($__internal_02adb52df44ea160652abf4ad68780bcc5c2546bc94babff83a1cb9e158b15ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_02adb52df44ea160652abf4ad68780bcc5c2546bc94babff83a1cb9e158b15ce->leave($__internal_02adb52df44ea160652abf4ad68780bcc5c2546bc94babff83a1cb9e158b15ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
