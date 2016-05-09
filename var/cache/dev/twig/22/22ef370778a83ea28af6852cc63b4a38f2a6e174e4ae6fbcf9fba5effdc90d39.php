<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_339ec6f5d86878693388813ddec155cb310edf1d761e3f3d05e682f7dc5cf727 extends Twig_Template
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
        $__internal_5d2b9e7c13fe830c1ec399e38759a59d7f556451cf0b86b62b618be4fb10c3a9 = $this->env->getExtension("native_profiler");
        $__internal_5d2b9e7c13fe830c1ec399e38759a59d7f556451cf0b86b62b618be4fb10c3a9->enter($__internal_5d2b9e7c13fe830c1ec399e38759a59d7f556451cf0b86b62b618be4fb10c3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2b9e7c13fe830c1ec399e38759a59d7f556451cf0b86b62b618be4fb10c3a9->leave($__internal_5d2b9e7c13fe830c1ec399e38759a59d7f556451cf0b86b62b618be4fb10c3a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73b24985bab2b90fb22b52b9adf7432a1763e92c81954aa2215215cf85949182 = $this->env->getExtension("native_profiler");
        $__internal_73b24985bab2b90fb22b52b9adf7432a1763e92c81954aa2215215cf85949182->enter($__internal_73b24985bab2b90fb22b52b9adf7432a1763e92c81954aa2215215cf85949182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_73b24985bab2b90fb22b52b9adf7432a1763e92c81954aa2215215cf85949182->leave($__internal_73b24985bab2b90fb22b52b9adf7432a1763e92c81954aa2215215cf85949182_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbd97336a578a02878ca26dfbab21c981d0cee123e540b833f3737cb721adc1d = $this->env->getExtension("native_profiler");
        $__internal_bbd97336a578a02878ca26dfbab21c981d0cee123e540b833f3737cb721adc1d->enter($__internal_bbd97336a578a02878ca26dfbab21c981d0cee123e540b833f3737cb721adc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbd97336a578a02878ca26dfbab21c981d0cee123e540b833f3737cb721adc1d->leave($__internal_bbd97336a578a02878ca26dfbab21c981d0cee123e540b833f3737cb721adc1d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8133e28595e52253d236b79b5f84b0d2ae216b1b92c3c1f6d770abe38cbe0ba6 = $this->env->getExtension("native_profiler");
        $__internal_8133e28595e52253d236b79b5f84b0d2ae216b1b92c3c1f6d770abe38cbe0ba6->enter($__internal_8133e28595e52253d236b79b5f84b0d2ae216b1b92c3c1f6d770abe38cbe0ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8133e28595e52253d236b79b5f84b0d2ae216b1b92c3c1f6d770abe38cbe0ba6->leave($__internal_8133e28595e52253d236b79b5f84b0d2ae216b1b92c3c1f6d770abe38cbe0ba6_prof);

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
