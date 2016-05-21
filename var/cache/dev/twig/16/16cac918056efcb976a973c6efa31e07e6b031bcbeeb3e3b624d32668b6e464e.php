<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_00139d9bfd81382f0136d8a894bd4520be128ba8df6ce5c873b0849c7bc88f3e extends Twig_Template
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
        $__internal_0161e1977847213b87b4f2d6b10bc6c3c9b6ae5965e0ef00e9fafc21db3aac14 = $this->env->getExtension("native_profiler");
        $__internal_0161e1977847213b87b4f2d6b10bc6c3c9b6ae5965e0ef00e9fafc21db3aac14->enter($__internal_0161e1977847213b87b4f2d6b10bc6c3c9b6ae5965e0ef00e9fafc21db3aac14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0161e1977847213b87b4f2d6b10bc6c3c9b6ae5965e0ef00e9fafc21db3aac14->leave($__internal_0161e1977847213b87b4f2d6b10bc6c3c9b6ae5965e0ef00e9fafc21db3aac14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4244811d3464eced20f491e827e26fdc3b64a78047b1bcfc1f790caa0b1e920 = $this->env->getExtension("native_profiler");
        $__internal_c4244811d3464eced20f491e827e26fdc3b64a78047b1bcfc1f790caa0b1e920->enter($__internal_c4244811d3464eced20f491e827e26fdc3b64a78047b1bcfc1f790caa0b1e920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c4244811d3464eced20f491e827e26fdc3b64a78047b1bcfc1f790caa0b1e920->leave($__internal_c4244811d3464eced20f491e827e26fdc3b64a78047b1bcfc1f790caa0b1e920_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_220656cf3eb8fec7909aa5d3728a95a9cf37e8221287cd76f9f99076d3c2e65c = $this->env->getExtension("native_profiler");
        $__internal_220656cf3eb8fec7909aa5d3728a95a9cf37e8221287cd76f9f99076d3c2e65c->enter($__internal_220656cf3eb8fec7909aa5d3728a95a9cf37e8221287cd76f9f99076d3c2e65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_220656cf3eb8fec7909aa5d3728a95a9cf37e8221287cd76f9f99076d3c2e65c->leave($__internal_220656cf3eb8fec7909aa5d3728a95a9cf37e8221287cd76f9f99076d3c2e65c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0d5b931aa865134cc42f7d6489bb428b7cf7946056b356cabfb5f049116c3f3 = $this->env->getExtension("native_profiler");
        $__internal_c0d5b931aa865134cc42f7d6489bb428b7cf7946056b356cabfb5f049116c3f3->enter($__internal_c0d5b931aa865134cc42f7d6489bb428b7cf7946056b356cabfb5f049116c3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c0d5b931aa865134cc42f7d6489bb428b7cf7946056b356cabfb5f049116c3f3->leave($__internal_c0d5b931aa865134cc42f7d6489bb428b7cf7946056b356cabfb5f049116c3f3_prof);

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
