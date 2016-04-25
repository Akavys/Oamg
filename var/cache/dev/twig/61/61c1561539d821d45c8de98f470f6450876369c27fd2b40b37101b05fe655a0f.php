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
        $__internal_9e6e06ca68092c93d0e5a9527a5af538d1e6d4a56bf4719ff41bdbfd830f96b8 = $this->env->getExtension("native_profiler");
        $__internal_9e6e06ca68092c93d0e5a9527a5af538d1e6d4a56bf4719ff41bdbfd830f96b8->enter($__internal_9e6e06ca68092c93d0e5a9527a5af538d1e6d4a56bf4719ff41bdbfd830f96b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6e06ca68092c93d0e5a9527a5af538d1e6d4a56bf4719ff41bdbfd830f96b8->leave($__internal_9e6e06ca68092c93d0e5a9527a5af538d1e6d4a56bf4719ff41bdbfd830f96b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_156824b8a3c739a9695fe1cae96c07ec7c38f81fee2b810bb77b9653b79c2e6a = $this->env->getExtension("native_profiler");
        $__internal_156824b8a3c739a9695fe1cae96c07ec7c38f81fee2b810bb77b9653b79c2e6a->enter($__internal_156824b8a3c739a9695fe1cae96c07ec7c38f81fee2b810bb77b9653b79c2e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_156824b8a3c739a9695fe1cae96c07ec7c38f81fee2b810bb77b9653b79c2e6a->leave($__internal_156824b8a3c739a9695fe1cae96c07ec7c38f81fee2b810bb77b9653b79c2e6a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a863041c485b22ee8e774e47d3ac94f84504015daa5624c433227d35c6d54d5e = $this->env->getExtension("native_profiler");
        $__internal_a863041c485b22ee8e774e47d3ac94f84504015daa5624c433227d35c6d54d5e->enter($__internal_a863041c485b22ee8e774e47d3ac94f84504015daa5624c433227d35c6d54d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a863041c485b22ee8e774e47d3ac94f84504015daa5624c433227d35c6d54d5e->leave($__internal_a863041c485b22ee8e774e47d3ac94f84504015daa5624c433227d35c6d54d5e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49ba5fd16d492698196e3ffba719ad8d13fab344ea03156e4710e91899779773 = $this->env->getExtension("native_profiler");
        $__internal_49ba5fd16d492698196e3ffba719ad8d13fab344ea03156e4710e91899779773->enter($__internal_49ba5fd16d492698196e3ffba719ad8d13fab344ea03156e4710e91899779773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_49ba5fd16d492698196e3ffba719ad8d13fab344ea03156e4710e91899779773->leave($__internal_49ba5fd16d492698196e3ffba719ad8d13fab344ea03156e4710e91899779773_prof);

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
