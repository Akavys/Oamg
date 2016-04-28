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
        $__internal_8c92ff810add6289b633881675d869874b03ad8ba7c3116d3ef11f67d130a826 = $this->env->getExtension("native_profiler");
        $__internal_8c92ff810add6289b633881675d869874b03ad8ba7c3116d3ef11f67d130a826->enter($__internal_8c92ff810add6289b633881675d869874b03ad8ba7c3116d3ef11f67d130a826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8c92ff810add6289b633881675d869874b03ad8ba7c3116d3ef11f67d130a826->leave($__internal_8c92ff810add6289b633881675d869874b03ad8ba7c3116d3ef11f67d130a826_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc3e3e75c66eecc3d6ed44da140a1389ac33d2e1d9aa08149e90f8b6deb193a8 = $this->env->getExtension("native_profiler");
        $__internal_fc3e3e75c66eecc3d6ed44da140a1389ac33d2e1d9aa08149e90f8b6deb193a8->enter($__internal_fc3e3e75c66eecc3d6ed44da140a1389ac33d2e1d9aa08149e90f8b6deb193a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fc3e3e75c66eecc3d6ed44da140a1389ac33d2e1d9aa08149e90f8b6deb193a8->leave($__internal_fc3e3e75c66eecc3d6ed44da140a1389ac33d2e1d9aa08149e90f8b6deb193a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_358e4e481f3421966df7ba08c3e872dee1888d2df2f3f9d937aaec0485d0113d = $this->env->getExtension("native_profiler");
        $__internal_358e4e481f3421966df7ba08c3e872dee1888d2df2f3f9d937aaec0485d0113d->enter($__internal_358e4e481f3421966df7ba08c3e872dee1888d2df2f3f9d937aaec0485d0113d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_358e4e481f3421966df7ba08c3e872dee1888d2df2f3f9d937aaec0485d0113d->leave($__internal_358e4e481f3421966df7ba08c3e872dee1888d2df2f3f9d937aaec0485d0113d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdf5bc73263efe327310ec8e553b3cbd233d85b4ce4013da1107ed77252dde81 = $this->env->getExtension("native_profiler");
        $__internal_cdf5bc73263efe327310ec8e553b3cbd233d85b4ce4013da1107ed77252dde81->enter($__internal_cdf5bc73263efe327310ec8e553b3cbd233d85b4ce4013da1107ed77252dde81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cdf5bc73263efe327310ec8e553b3cbd233d85b4ce4013da1107ed77252dde81->leave($__internal_cdf5bc73263efe327310ec8e553b3cbd233d85b4ce4013da1107ed77252dde81_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca26ad7afd438d24e4ade4fc952cc57794a2d9e28f0f565848e3f327644c7e33 = $this->env->getExtension("native_profiler");
        $__internal_ca26ad7afd438d24e4ade4fc952cc57794a2d9e28f0f565848e3f327644c7e33->enter($__internal_ca26ad7afd438d24e4ade4fc952cc57794a2d9e28f0f565848e3f327644c7e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca26ad7afd438d24e4ade4fc952cc57794a2d9e28f0f565848e3f327644c7e33->leave($__internal_ca26ad7afd438d24e4ade4fc952cc57794a2d9e28f0f565848e3f327644c7e33_prof);

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
