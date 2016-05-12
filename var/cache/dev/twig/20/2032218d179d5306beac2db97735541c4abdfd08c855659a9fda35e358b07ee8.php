<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4bd7e1bcf35722acc851f85fecdbcce8e23ac335dbdb70d721a6d3caf2e1b156 extends Twig_Template
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
        $__internal_f982e9968bcbee052e90c9a752ebe9742a395b45390e0cd58f53b8355cc2b1f8 = $this->env->getExtension("native_profiler");
        $__internal_f982e9968bcbee052e90c9a752ebe9742a395b45390e0cd58f53b8355cc2b1f8->enter($__internal_f982e9968bcbee052e90c9a752ebe9742a395b45390e0cd58f53b8355cc2b1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f982e9968bcbee052e90c9a752ebe9742a395b45390e0cd58f53b8355cc2b1f8->leave($__internal_f982e9968bcbee052e90c9a752ebe9742a395b45390e0cd58f53b8355cc2b1f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fceeb1697700f765dff51ab7efa0218f33a0ef187c4847aee6b8272422260c67 = $this->env->getExtension("native_profiler");
        $__internal_fceeb1697700f765dff51ab7efa0218f33a0ef187c4847aee6b8272422260c67->enter($__internal_fceeb1697700f765dff51ab7efa0218f33a0ef187c4847aee6b8272422260c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fceeb1697700f765dff51ab7efa0218f33a0ef187c4847aee6b8272422260c67->leave($__internal_fceeb1697700f765dff51ab7efa0218f33a0ef187c4847aee6b8272422260c67_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_47912cd87678b18eedaa550069500eec00a05e0de473663b6f05f0959db5ce8d = $this->env->getExtension("native_profiler");
        $__internal_47912cd87678b18eedaa550069500eec00a05e0de473663b6f05f0959db5ce8d->enter($__internal_47912cd87678b18eedaa550069500eec00a05e0de473663b6f05f0959db5ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_47912cd87678b18eedaa550069500eec00a05e0de473663b6f05f0959db5ce8d->leave($__internal_47912cd87678b18eedaa550069500eec00a05e0de473663b6f05f0959db5ce8d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4f21d674504b149c82347ba246c85400f006ddfce17b1f99fc22e8ad74288e3 = $this->env->getExtension("native_profiler");
        $__internal_d4f21d674504b149c82347ba246c85400f006ddfce17b1f99fc22e8ad74288e3->enter($__internal_d4f21d674504b149c82347ba246c85400f006ddfce17b1f99fc22e8ad74288e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d4f21d674504b149c82347ba246c85400f006ddfce17b1f99fc22e8ad74288e3->leave($__internal_d4f21d674504b149c82347ba246c85400f006ddfce17b1f99fc22e8ad74288e3_prof);

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
