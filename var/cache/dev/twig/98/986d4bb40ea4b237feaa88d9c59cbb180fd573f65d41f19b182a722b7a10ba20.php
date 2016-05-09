<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c933bac9061ef1873d1236f8c25b950e78cb7551f5005d282924322b2c99911f extends Twig_Template
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
        $__internal_10998a1ca68de79ed8b28e56ad9c1e3f728fdf94ea742c8387839c0fabc9837a = $this->env->getExtension("native_profiler");
        $__internal_10998a1ca68de79ed8b28e56ad9c1e3f728fdf94ea742c8387839c0fabc9837a->enter($__internal_10998a1ca68de79ed8b28e56ad9c1e3f728fdf94ea742c8387839c0fabc9837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10998a1ca68de79ed8b28e56ad9c1e3f728fdf94ea742c8387839c0fabc9837a->leave($__internal_10998a1ca68de79ed8b28e56ad9c1e3f728fdf94ea742c8387839c0fabc9837a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_873a4ae038d24971d8d128b6388c1dea1fa0ed740178724e58c3b99ab446a70f = $this->env->getExtension("native_profiler");
        $__internal_873a4ae038d24971d8d128b6388c1dea1fa0ed740178724e58c3b99ab446a70f->enter($__internal_873a4ae038d24971d8d128b6388c1dea1fa0ed740178724e58c3b99ab446a70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_873a4ae038d24971d8d128b6388c1dea1fa0ed740178724e58c3b99ab446a70f->leave($__internal_873a4ae038d24971d8d128b6388c1dea1fa0ed740178724e58c3b99ab446a70f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9795c840ca47330908f4342b826407612871b2a330da01516a58cc0dd29e73e = $this->env->getExtension("native_profiler");
        $__internal_a9795c840ca47330908f4342b826407612871b2a330da01516a58cc0dd29e73e->enter($__internal_a9795c840ca47330908f4342b826407612871b2a330da01516a58cc0dd29e73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a9795c840ca47330908f4342b826407612871b2a330da01516a58cc0dd29e73e->leave($__internal_a9795c840ca47330908f4342b826407612871b2a330da01516a58cc0dd29e73e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfbd254d113cc4f487dd397013542cd450fe6aaf65c7e11fdf7f16c78a3680a8 = $this->env->getExtension("native_profiler");
        $__internal_cfbd254d113cc4f487dd397013542cd450fe6aaf65c7e11fdf7f16c78a3680a8->enter($__internal_cfbd254d113cc4f487dd397013542cd450fe6aaf65c7e11fdf7f16c78a3680a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cfbd254d113cc4f487dd397013542cd450fe6aaf65c7e11fdf7f16c78a3680a8->leave($__internal_cfbd254d113cc4f487dd397013542cd450fe6aaf65c7e11fdf7f16c78a3680a8_prof);

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
