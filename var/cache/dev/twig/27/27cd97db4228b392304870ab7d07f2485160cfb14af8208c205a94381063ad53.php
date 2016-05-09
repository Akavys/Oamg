<?php

/* base.html.twig */
class __TwigTemplate_5da0ee43467bc40192d93cffdc1cb22f36bd6512770a5ab3a14bba1f580943f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90725d7cd5f39d45c5ef78ec4e046d59a88fbeb821ad9a1100d91aec20434589 = $this->env->getExtension("native_profiler");
        $__internal_90725d7cd5f39d45c5ef78ec4e046d59a88fbeb821ad9a1100d91aec20434589->enter($__internal_90725d7cd5f39d45c5ef78ec4e046d59a88fbeb821ad9a1100d91aec20434589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_90725d7cd5f39d45c5ef78ec4e046d59a88fbeb821ad9a1100d91aec20434589->leave($__internal_90725d7cd5f39d45c5ef78ec4e046d59a88fbeb821ad9a1100d91aec20434589_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_940b0c1c131930623d8ccf8deed9e1d80b7ab95ffa419b7a4ef6f2d052d77972 = $this->env->getExtension("native_profiler");
        $__internal_940b0c1c131930623d8ccf8deed9e1d80b7ab95ffa419b7a4ef6f2d052d77972->enter($__internal_940b0c1c131930623d8ccf8deed9e1d80b7ab95ffa419b7a4ef6f2d052d77972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_940b0c1c131930623d8ccf8deed9e1d80b7ab95ffa419b7a4ef6f2d052d77972->leave($__internal_940b0c1c131930623d8ccf8deed9e1d80b7ab95ffa419b7a4ef6f2d052d77972_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e861b4eb5743f24f826fe888a6766e55b7c780f27e69b154be8b081c23413012 = $this->env->getExtension("native_profiler");
        $__internal_e861b4eb5743f24f826fe888a6766e55b7c780f27e69b154be8b081c23413012->enter($__internal_e861b4eb5743f24f826fe888a6766e55b7c780f27e69b154be8b081c23413012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e861b4eb5743f24f826fe888a6766e55b7c780f27e69b154be8b081c23413012->leave($__internal_e861b4eb5743f24f826fe888a6766e55b7c780f27e69b154be8b081c23413012_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a51df28e162e65bf1166cf9ada03fe94f380a997b7d37109ba01946fda442dd = $this->env->getExtension("native_profiler");
        $__internal_2a51df28e162e65bf1166cf9ada03fe94f380a997b7d37109ba01946fda442dd->enter($__internal_2a51df28e162e65bf1166cf9ada03fe94f380a997b7d37109ba01946fda442dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a51df28e162e65bf1166cf9ada03fe94f380a997b7d37109ba01946fda442dd->leave($__internal_2a51df28e162e65bf1166cf9ada03fe94f380a997b7d37109ba01946fda442dd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41661d9e63ea5944e5d72dcce18e21cbab55e90cecb5e73128090767257645ec = $this->env->getExtension("native_profiler");
        $__internal_41661d9e63ea5944e5d72dcce18e21cbab55e90cecb5e73128090767257645ec->enter($__internal_41661d9e63ea5944e5d72dcce18e21cbab55e90cecb5e73128090767257645ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_41661d9e63ea5944e5d72dcce18e21cbab55e90cecb5e73128090767257645ec->leave($__internal_41661d9e63ea5944e5d72dcce18e21cbab55e90cecb5e73128090767257645ec_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
