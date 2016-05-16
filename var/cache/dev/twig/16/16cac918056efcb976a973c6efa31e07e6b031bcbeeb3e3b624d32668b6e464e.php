<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_00139d9bfd81382f0136d8a894bd4520be128ba8df6ce5c873b0849c7bc88f3e extends Twig_Template
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
        $__internal_33e9c73d45c08f5dcf1fba77620bbd858c4f03490c8d0d08aa4e258c18f82fbc = $this->env->getExtension("native_profiler");
        $__internal_33e9c73d45c08f5dcf1fba77620bbd858c4f03490c8d0d08aa4e258c18f82fbc->enter($__internal_33e9c73d45c08f5dcf1fba77620bbd858c4f03490c8d0d08aa4e258c18f82fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33e9c73d45c08f5dcf1fba77620bbd858c4f03490c8d0d08aa4e258c18f82fbc->leave($__internal_33e9c73d45c08f5dcf1fba77620bbd858c4f03490c8d0d08aa4e258c18f82fbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d23b56c34251655c6f059d1a177acd4f2c2cc98de6e0b6c7a851133b9fd6332f = $this->env->getExtension("native_profiler");
        $__internal_d23b56c34251655c6f059d1a177acd4f2c2cc98de6e0b6c7a851133b9fd6332f->enter($__internal_d23b56c34251655c6f059d1a177acd4f2c2cc98de6e0b6c7a851133b9fd6332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d23b56c34251655c6f059d1a177acd4f2c2cc98de6e0b6c7a851133b9fd6332f->leave($__internal_d23b56c34251655c6f059d1a177acd4f2c2cc98de6e0b6c7a851133b9fd6332f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4f5f29f20931336f2408b7ffa83b422963d9823d35653b8cc9b8d145dc9c00a = $this->env->getExtension("native_profiler");
        $__internal_c4f5f29f20931336f2408b7ffa83b422963d9823d35653b8cc9b8d145dc9c00a->enter($__internal_c4f5f29f20931336f2408b7ffa83b422963d9823d35653b8cc9b8d145dc9c00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4f5f29f20931336f2408b7ffa83b422963d9823d35653b8cc9b8d145dc9c00a->leave($__internal_c4f5f29f20931336f2408b7ffa83b422963d9823d35653b8cc9b8d145dc9c00a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e76ea5a3e1be9eb194c89c0992d7fad783727027bc12199e15d54e221e9dc25 = $this->env->getExtension("native_profiler");
        $__internal_1e76ea5a3e1be9eb194c89c0992d7fad783727027bc12199e15d54e221e9dc25->enter($__internal_1e76ea5a3e1be9eb194c89c0992d7fad783727027bc12199e15d54e221e9dc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1e76ea5a3e1be9eb194c89c0992d7fad783727027bc12199e15d54e221e9dc25->leave($__internal_1e76ea5a3e1be9eb194c89c0992d7fad783727027bc12199e15d54e221e9dc25_prof);

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
