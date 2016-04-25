<?php

/* ::base.html.twig */
class __TwigTemplate_05d0ba5ba4a5e9ace122af5cd52e22dad84fcf3a878539f7e09303df6d7254d4 extends Twig_Template
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
        $__internal_8a87988fc34472a2234cd3bfc634e7dab5e374f2c822b7b681de29c399d72a73 = $this->env->getExtension("native_profiler");
        $__internal_8a87988fc34472a2234cd3bfc634e7dab5e374f2c822b7b681de29c399d72a73->enter($__internal_8a87988fc34472a2234cd3bfc634e7dab5e374f2c822b7b681de29c399d72a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8a87988fc34472a2234cd3bfc634e7dab5e374f2c822b7b681de29c399d72a73->leave($__internal_8a87988fc34472a2234cd3bfc634e7dab5e374f2c822b7b681de29c399d72a73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4770c4d2e08678c7fd012b64fbb227ba6bc5b5f33495d17ea5a9cc6bbd238542 = $this->env->getExtension("native_profiler");
        $__internal_4770c4d2e08678c7fd012b64fbb227ba6bc5b5f33495d17ea5a9cc6bbd238542->enter($__internal_4770c4d2e08678c7fd012b64fbb227ba6bc5b5f33495d17ea5a9cc6bbd238542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4770c4d2e08678c7fd012b64fbb227ba6bc5b5f33495d17ea5a9cc6bbd238542->leave($__internal_4770c4d2e08678c7fd012b64fbb227ba6bc5b5f33495d17ea5a9cc6bbd238542_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02fa7d2e8fa0e64e6b37b8cb07d346beb65f0d490730b65d4290d70e9afffa92 = $this->env->getExtension("native_profiler");
        $__internal_02fa7d2e8fa0e64e6b37b8cb07d346beb65f0d490730b65d4290d70e9afffa92->enter($__internal_02fa7d2e8fa0e64e6b37b8cb07d346beb65f0d490730b65d4290d70e9afffa92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_02fa7d2e8fa0e64e6b37b8cb07d346beb65f0d490730b65d4290d70e9afffa92->leave($__internal_02fa7d2e8fa0e64e6b37b8cb07d346beb65f0d490730b65d4290d70e9afffa92_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b85d1880f6ccbe699a9a65a2bc2eaaa2e25590a30f301f29214092594046bd5 = $this->env->getExtension("native_profiler");
        $__internal_3b85d1880f6ccbe699a9a65a2bc2eaaa2e25590a30f301f29214092594046bd5->enter($__internal_3b85d1880f6ccbe699a9a65a2bc2eaaa2e25590a30f301f29214092594046bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b85d1880f6ccbe699a9a65a2bc2eaaa2e25590a30f301f29214092594046bd5->leave($__internal_3b85d1880f6ccbe699a9a65a2bc2eaaa2e25590a30f301f29214092594046bd5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2b75ebd4a67fe0497ea7087fac1676a3c969c49ac5c53d93dbd66adb8404269 = $this->env->getExtension("native_profiler");
        $__internal_e2b75ebd4a67fe0497ea7087fac1676a3c969c49ac5c53d93dbd66adb8404269->enter($__internal_e2b75ebd4a67fe0497ea7087fac1676a3c969c49ac5c53d93dbd66adb8404269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e2b75ebd4a67fe0497ea7087fac1676a3c969c49ac5c53d93dbd66adb8404269->leave($__internal_e2b75ebd4a67fe0497ea7087fac1676a3c969c49ac5c53d93dbd66adb8404269_prof);

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
