<?php

/* ::base.html.twig */
class __TwigTemplate_35ee8238f2c815c8b4d0c039f5b03e525b9f7b487f2d5796d94669cb51eb48b3 extends Twig_Template
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
        $__internal_f3c1535d2a54fd330b6c74db21edcaa1efbc7cb5f01b45848527f7b1cc33d2de = $this->env->getExtension("native_profiler");
        $__internal_f3c1535d2a54fd330b6c74db21edcaa1efbc7cb5f01b45848527f7b1cc33d2de->enter($__internal_f3c1535d2a54fd330b6c74db21edcaa1efbc7cb5f01b45848527f7b1cc33d2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f3c1535d2a54fd330b6c74db21edcaa1efbc7cb5f01b45848527f7b1cc33d2de->leave($__internal_f3c1535d2a54fd330b6c74db21edcaa1efbc7cb5f01b45848527f7b1cc33d2de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba7e4ccf0207faf5da485fafa78bfc2b6932aa06dbcdb04d48be7fd191fbd51e = $this->env->getExtension("native_profiler");
        $__internal_ba7e4ccf0207faf5da485fafa78bfc2b6932aa06dbcdb04d48be7fd191fbd51e->enter($__internal_ba7e4ccf0207faf5da485fafa78bfc2b6932aa06dbcdb04d48be7fd191fbd51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ba7e4ccf0207faf5da485fafa78bfc2b6932aa06dbcdb04d48be7fd191fbd51e->leave($__internal_ba7e4ccf0207faf5da485fafa78bfc2b6932aa06dbcdb04d48be7fd191fbd51e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92d7f60a296dc02ddf04de607bfd5380039b81e67c860b05cbb3dd3bd0664c63 = $this->env->getExtension("native_profiler");
        $__internal_92d7f60a296dc02ddf04de607bfd5380039b81e67c860b05cbb3dd3bd0664c63->enter($__internal_92d7f60a296dc02ddf04de607bfd5380039b81e67c860b05cbb3dd3bd0664c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_92d7f60a296dc02ddf04de607bfd5380039b81e67c860b05cbb3dd3bd0664c63->leave($__internal_92d7f60a296dc02ddf04de607bfd5380039b81e67c860b05cbb3dd3bd0664c63_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a36ce9a88a61582af261d84d40773b32e20afd16eb89317db50d9a2a465a8a74 = $this->env->getExtension("native_profiler");
        $__internal_a36ce9a88a61582af261d84d40773b32e20afd16eb89317db50d9a2a465a8a74->enter($__internal_a36ce9a88a61582af261d84d40773b32e20afd16eb89317db50d9a2a465a8a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a36ce9a88a61582af261d84d40773b32e20afd16eb89317db50d9a2a465a8a74->leave($__internal_a36ce9a88a61582af261d84d40773b32e20afd16eb89317db50d9a2a465a8a74_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ad607e56ef3e699b142382786789a03c76c5e39a910991535c262cbb5bfd4db = $this->env->getExtension("native_profiler");
        $__internal_2ad607e56ef3e699b142382786789a03c76c5e39a910991535c262cbb5bfd4db->enter($__internal_2ad607e56ef3e699b142382786789a03c76c5e39a910991535c262cbb5bfd4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ad607e56ef3e699b142382786789a03c76c5e39a910991535c262cbb5bfd4db->leave($__internal_2ad607e56ef3e699b142382786789a03c76c5e39a910991535c262cbb5bfd4db_prof);

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
