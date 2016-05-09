<?php

/* ::base.html.twig */
class __TwigTemplate_5fd02bb57d96cb79db0d60c4a116160626222351920c726666974f825d28d018 extends Twig_Template
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
        $__internal_dab4b8da4261c7b217e3a18886e0d0d2d8f36bcffec03f3d1fdc72a8bb3bc67c = $this->env->getExtension("native_profiler");
        $__internal_dab4b8da4261c7b217e3a18886e0d0d2d8f36bcffec03f3d1fdc72a8bb3bc67c->enter($__internal_dab4b8da4261c7b217e3a18886e0d0d2d8f36bcffec03f3d1fdc72a8bb3bc67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_dab4b8da4261c7b217e3a18886e0d0d2d8f36bcffec03f3d1fdc72a8bb3bc67c->leave($__internal_dab4b8da4261c7b217e3a18886e0d0d2d8f36bcffec03f3d1fdc72a8bb3bc67c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af65b016d388c48072d1e3101fca6c09f355265c58b9ba099c2c18717e401a25 = $this->env->getExtension("native_profiler");
        $__internal_af65b016d388c48072d1e3101fca6c09f355265c58b9ba099c2c18717e401a25->enter($__internal_af65b016d388c48072d1e3101fca6c09f355265c58b9ba099c2c18717e401a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af65b016d388c48072d1e3101fca6c09f355265c58b9ba099c2c18717e401a25->leave($__internal_af65b016d388c48072d1e3101fca6c09f355265c58b9ba099c2c18717e401a25_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5fafaac25e3b17d3b6e2594221de5fa178353ea99d8462e450c71d24679dd347 = $this->env->getExtension("native_profiler");
        $__internal_5fafaac25e3b17d3b6e2594221de5fa178353ea99d8462e450c71d24679dd347->enter($__internal_5fafaac25e3b17d3b6e2594221de5fa178353ea99d8462e450c71d24679dd347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5fafaac25e3b17d3b6e2594221de5fa178353ea99d8462e450c71d24679dd347->leave($__internal_5fafaac25e3b17d3b6e2594221de5fa178353ea99d8462e450c71d24679dd347_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f82d8709204c58a252712c5ceebde426d0b222ddd56853c85438b8f7d5e164f = $this->env->getExtension("native_profiler");
        $__internal_2f82d8709204c58a252712c5ceebde426d0b222ddd56853c85438b8f7d5e164f->enter($__internal_2f82d8709204c58a252712c5ceebde426d0b222ddd56853c85438b8f7d5e164f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f82d8709204c58a252712c5ceebde426d0b222ddd56853c85438b8f7d5e164f->leave($__internal_2f82d8709204c58a252712c5ceebde426d0b222ddd56853c85438b8f7d5e164f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d34c1109face3ac978bed71f8a1c7a01e2b2db57b21a993ea9eee2a3121f24a2 = $this->env->getExtension("native_profiler");
        $__internal_d34c1109face3ac978bed71f8a1c7a01e2b2db57b21a993ea9eee2a3121f24a2->enter($__internal_d34c1109face3ac978bed71f8a1c7a01e2b2db57b21a993ea9eee2a3121f24a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d34c1109face3ac978bed71f8a1c7a01e2b2db57b21a993ea9eee2a3121f24a2->leave($__internal_d34c1109face3ac978bed71f8a1c7a01e2b2db57b21a993ea9eee2a3121f24a2_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
