<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_82b268c6c878152d052dd18562cbb8fd554a3cea6829b85723167ffc0f8cbefd extends Twig_Template
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
        $__internal_c43bbe83746fc10ac7fbb7bd91fa5d2e933899037d31430425e3ca6cd6ebcaf4 = $this->env->getExtension("native_profiler");
        $__internal_c43bbe83746fc10ac7fbb7bd91fa5d2e933899037d31430425e3ca6cd6ebcaf4->enter($__internal_c43bbe83746fc10ac7fbb7bd91fa5d2e933899037d31430425e3ca6cd6ebcaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c43bbe83746fc10ac7fbb7bd91fa5d2e933899037d31430425e3ca6cd6ebcaf4->leave($__internal_c43bbe83746fc10ac7fbb7bd91fa5d2e933899037d31430425e3ca6cd6ebcaf4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34dbfe8edd3901e81c36d07080bcc014d006284cbed464593c898de8d1974dce = $this->env->getExtension("native_profiler");
        $__internal_34dbfe8edd3901e81c36d07080bcc014d006284cbed464593c898de8d1974dce->enter($__internal_34dbfe8edd3901e81c36d07080bcc014d006284cbed464593c898de8d1974dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_34dbfe8edd3901e81c36d07080bcc014d006284cbed464593c898de8d1974dce->leave($__internal_34dbfe8edd3901e81c36d07080bcc014d006284cbed464593c898de8d1974dce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ce3cecea6d8954dbd3fc7d96ebda4e5182d79f63a86c72072c69d07748449c5 = $this->env->getExtension("native_profiler");
        $__internal_1ce3cecea6d8954dbd3fc7d96ebda4e5182d79f63a86c72072c69d07748449c5->enter($__internal_1ce3cecea6d8954dbd3fc7d96ebda4e5182d79f63a86c72072c69d07748449c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1ce3cecea6d8954dbd3fc7d96ebda4e5182d79f63a86c72072c69d07748449c5->leave($__internal_1ce3cecea6d8954dbd3fc7d96ebda4e5182d79f63a86c72072c69d07748449c5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1d18364e5d48a8e9897fd0c624043b897b66236739b17109c28b52011e0fa39 = $this->env->getExtension("native_profiler");
        $__internal_a1d18364e5d48a8e9897fd0c624043b897b66236739b17109c28b52011e0fa39->enter($__internal_a1d18364e5d48a8e9897fd0c624043b897b66236739b17109c28b52011e0fa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a1d18364e5d48a8e9897fd0c624043b897b66236739b17109c28b52011e0fa39->leave($__internal_a1d18364e5d48a8e9897fd0c624043b897b66236739b17109c28b52011e0fa39_prof);

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
