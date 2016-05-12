<?php

/* base.html.twig */
class __TwigTemplate_681ad43c36b67449810bf3da9b5fb10d1a4ee889c4c70464559d6a655674d0d6 extends Twig_Template
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
        $__internal_7c0b1284b2dd95f1d54aa8ecfa0b277fcec493d19d5479c04609cd8fc5216c14 = $this->env->getExtension("native_profiler");
        $__internal_7c0b1284b2dd95f1d54aa8ecfa0b277fcec493d19d5479c04609cd8fc5216c14->enter($__internal_7c0b1284b2dd95f1d54aa8ecfa0b277fcec493d19d5479c04609cd8fc5216c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7c0b1284b2dd95f1d54aa8ecfa0b277fcec493d19d5479c04609cd8fc5216c14->leave($__internal_7c0b1284b2dd95f1d54aa8ecfa0b277fcec493d19d5479c04609cd8fc5216c14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1281412dbdfd7d0a897661d830af33d60e7b4aab8edcf779cb78b0bda6770fc5 = $this->env->getExtension("native_profiler");
        $__internal_1281412dbdfd7d0a897661d830af33d60e7b4aab8edcf779cb78b0bda6770fc5->enter($__internal_1281412dbdfd7d0a897661d830af33d60e7b4aab8edcf779cb78b0bda6770fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1281412dbdfd7d0a897661d830af33d60e7b4aab8edcf779cb78b0bda6770fc5->leave($__internal_1281412dbdfd7d0a897661d830af33d60e7b4aab8edcf779cb78b0bda6770fc5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07db8f70f168e0aad2e4c93b053bb04c57b668e8f2e779e5bab22598fa8743bb = $this->env->getExtension("native_profiler");
        $__internal_07db8f70f168e0aad2e4c93b053bb04c57b668e8f2e779e5bab22598fa8743bb->enter($__internal_07db8f70f168e0aad2e4c93b053bb04c57b668e8f2e779e5bab22598fa8743bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07db8f70f168e0aad2e4c93b053bb04c57b668e8f2e779e5bab22598fa8743bb->leave($__internal_07db8f70f168e0aad2e4c93b053bb04c57b668e8f2e779e5bab22598fa8743bb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_78a44ed5bf9f2fbcc1c7530c1ab3cd5dad6e7e1954c9eb1dbd5f606a03e87ebe = $this->env->getExtension("native_profiler");
        $__internal_78a44ed5bf9f2fbcc1c7530c1ab3cd5dad6e7e1954c9eb1dbd5f606a03e87ebe->enter($__internal_78a44ed5bf9f2fbcc1c7530c1ab3cd5dad6e7e1954c9eb1dbd5f606a03e87ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_78a44ed5bf9f2fbcc1c7530c1ab3cd5dad6e7e1954c9eb1dbd5f606a03e87ebe->leave($__internal_78a44ed5bf9f2fbcc1c7530c1ab3cd5dad6e7e1954c9eb1dbd5f606a03e87ebe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72d21d49376948376f22f4d83a3bbf28f5cc7fd3fb6a74e6f288b76d825b368b = $this->env->getExtension("native_profiler");
        $__internal_72d21d49376948376f22f4d83a3bbf28f5cc7fd3fb6a74e6f288b76d825b368b->enter($__internal_72d21d49376948376f22f4d83a3bbf28f5cc7fd3fb6a74e6f288b76d825b368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_72d21d49376948376f22f4d83a3bbf28f5cc7fd3fb6a74e6f288b76d825b368b->leave($__internal_72d21d49376948376f22f4d83a3bbf28f5cc7fd3fb6a74e6f288b76d825b368b_prof);

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
