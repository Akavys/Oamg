<?php

/* base.html.twig */
class __TwigTemplate_c734cc7864db4c3614bdd8cf6929b8ce868192246e2e8dd3f97c69ae7c243dd3 extends Twig_Template
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
        $__internal_e6f13e25a4c29bb6c257a006f8cbf3c7c676203bf7d3a6cdc669aa491210b29c = $this->env->getExtension("native_profiler");
        $__internal_e6f13e25a4c29bb6c257a006f8cbf3c7c676203bf7d3a6cdc669aa491210b29c->enter($__internal_e6f13e25a4c29bb6c257a006f8cbf3c7c676203bf7d3a6cdc669aa491210b29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e6f13e25a4c29bb6c257a006f8cbf3c7c676203bf7d3a6cdc669aa491210b29c->leave($__internal_e6f13e25a4c29bb6c257a006f8cbf3c7c676203bf7d3a6cdc669aa491210b29c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e5562f286077953c0faf4bbed5ce4d8a8107bd247a4e2df48999387594d55d7 = $this->env->getExtension("native_profiler");
        $__internal_5e5562f286077953c0faf4bbed5ce4d8a8107bd247a4e2df48999387594d55d7->enter($__internal_5e5562f286077953c0faf4bbed5ce4d8a8107bd247a4e2df48999387594d55d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5e5562f286077953c0faf4bbed5ce4d8a8107bd247a4e2df48999387594d55d7->leave($__internal_5e5562f286077953c0faf4bbed5ce4d8a8107bd247a4e2df48999387594d55d7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0936ea4ca6d57451eb7318e7e23a45e9a1445ee9f59bbacfe53c012ea8251383 = $this->env->getExtension("native_profiler");
        $__internal_0936ea4ca6d57451eb7318e7e23a45e9a1445ee9f59bbacfe53c012ea8251383->enter($__internal_0936ea4ca6d57451eb7318e7e23a45e9a1445ee9f59bbacfe53c012ea8251383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0936ea4ca6d57451eb7318e7e23a45e9a1445ee9f59bbacfe53c012ea8251383->leave($__internal_0936ea4ca6d57451eb7318e7e23a45e9a1445ee9f59bbacfe53c012ea8251383_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c50bfa311b26c4b4410d101c41f5850ad5ad144ddf3533b79177aa09b344bde1 = $this->env->getExtension("native_profiler");
        $__internal_c50bfa311b26c4b4410d101c41f5850ad5ad144ddf3533b79177aa09b344bde1->enter($__internal_c50bfa311b26c4b4410d101c41f5850ad5ad144ddf3533b79177aa09b344bde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c50bfa311b26c4b4410d101c41f5850ad5ad144ddf3533b79177aa09b344bde1->leave($__internal_c50bfa311b26c4b4410d101c41f5850ad5ad144ddf3533b79177aa09b344bde1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_831447c9a791459818f2617eb911a9c4a110a91671a8c8a08d226cfa68be1bb1 = $this->env->getExtension("native_profiler");
        $__internal_831447c9a791459818f2617eb911a9c4a110a91671a8c8a08d226cfa68be1bb1->enter($__internal_831447c9a791459818f2617eb911a9c4a110a91671a8c8a08d226cfa68be1bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_831447c9a791459818f2617eb911a9c4a110a91671a8c8a08d226cfa68be1bb1->leave($__internal_831447c9a791459818f2617eb911a9c4a110a91671a8c8a08d226cfa68be1bb1_prof);

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
