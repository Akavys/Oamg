<?php

/* ::base.html.twig */
class __TwigTemplate_6e4375e9cdb655201b765308f4be6e5cf9f8d7d61199651de730d7c6b8dbe495 extends Twig_Template
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
        $__internal_d9a3856b863c04e06e5aa1e98833c8ce0818d600b7758d23c08bbca34444709f = $this->env->getExtension("native_profiler");
        $__internal_d9a3856b863c04e06e5aa1e98833c8ce0818d600b7758d23c08bbca34444709f->enter($__internal_d9a3856b863c04e06e5aa1e98833c8ce0818d600b7758d23c08bbca34444709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d9a3856b863c04e06e5aa1e98833c8ce0818d600b7758d23c08bbca34444709f->leave($__internal_d9a3856b863c04e06e5aa1e98833c8ce0818d600b7758d23c08bbca34444709f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e073b3da3585ea8241e0729e564e23bfadb32194a12e729ae025b13a5cb1c032 = $this->env->getExtension("native_profiler");
        $__internal_e073b3da3585ea8241e0729e564e23bfadb32194a12e729ae025b13a5cb1c032->enter($__internal_e073b3da3585ea8241e0729e564e23bfadb32194a12e729ae025b13a5cb1c032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e073b3da3585ea8241e0729e564e23bfadb32194a12e729ae025b13a5cb1c032->leave($__internal_e073b3da3585ea8241e0729e564e23bfadb32194a12e729ae025b13a5cb1c032_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c60c851c13d53d0b9e26a351a8bfb644697cb105d375936c672e6bf3803f9b33 = $this->env->getExtension("native_profiler");
        $__internal_c60c851c13d53d0b9e26a351a8bfb644697cb105d375936c672e6bf3803f9b33->enter($__internal_c60c851c13d53d0b9e26a351a8bfb644697cb105d375936c672e6bf3803f9b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c60c851c13d53d0b9e26a351a8bfb644697cb105d375936c672e6bf3803f9b33->leave($__internal_c60c851c13d53d0b9e26a351a8bfb644697cb105d375936c672e6bf3803f9b33_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_68ec0767282c6f0310061940fdeb14c6e076cf69ff8c0aa5ead831eb93d6b731 = $this->env->getExtension("native_profiler");
        $__internal_68ec0767282c6f0310061940fdeb14c6e076cf69ff8c0aa5ead831eb93d6b731->enter($__internal_68ec0767282c6f0310061940fdeb14c6e076cf69ff8c0aa5ead831eb93d6b731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68ec0767282c6f0310061940fdeb14c6e076cf69ff8c0aa5ead831eb93d6b731->leave($__internal_68ec0767282c6f0310061940fdeb14c6e076cf69ff8c0aa5ead831eb93d6b731_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29090ebf4c5cf845af7679918a611eb4aef58cca3149ec15c8ae904023c768aa = $this->env->getExtension("native_profiler");
        $__internal_29090ebf4c5cf845af7679918a611eb4aef58cca3149ec15c8ae904023c768aa->enter($__internal_29090ebf4c5cf845af7679918a611eb4aef58cca3149ec15c8ae904023c768aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_29090ebf4c5cf845af7679918a611eb4aef58cca3149ec15c8ae904023c768aa->leave($__internal_29090ebf4c5cf845af7679918a611eb4aef58cca3149ec15c8ae904023c768aa_prof);

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
