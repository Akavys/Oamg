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
        $__internal_8de791320f8c392facf62937f391e69aef072c6abe7de2d622f61126bc353801 = $this->env->getExtension("native_profiler");
        $__internal_8de791320f8c392facf62937f391e69aef072c6abe7de2d622f61126bc353801->enter($__internal_8de791320f8c392facf62937f391e69aef072c6abe7de2d622f61126bc353801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8de791320f8c392facf62937f391e69aef072c6abe7de2d622f61126bc353801->leave($__internal_8de791320f8c392facf62937f391e69aef072c6abe7de2d622f61126bc353801_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f3b45e96c7a1b09332abba75d8fb3d4258a3fcf50aca26286300950ca8633f9 = $this->env->getExtension("native_profiler");
        $__internal_8f3b45e96c7a1b09332abba75d8fb3d4258a3fcf50aca26286300950ca8633f9->enter($__internal_8f3b45e96c7a1b09332abba75d8fb3d4258a3fcf50aca26286300950ca8633f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f3b45e96c7a1b09332abba75d8fb3d4258a3fcf50aca26286300950ca8633f9->leave($__internal_8f3b45e96c7a1b09332abba75d8fb3d4258a3fcf50aca26286300950ca8633f9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cb28f2496a0e67436499ddf56652a7eae4f83a683ac71a5160a35078672c2c1 = $this->env->getExtension("native_profiler");
        $__internal_1cb28f2496a0e67436499ddf56652a7eae4f83a683ac71a5160a35078672c2c1->enter($__internal_1cb28f2496a0e67436499ddf56652a7eae4f83a683ac71a5160a35078672c2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1cb28f2496a0e67436499ddf56652a7eae4f83a683ac71a5160a35078672c2c1->leave($__internal_1cb28f2496a0e67436499ddf56652a7eae4f83a683ac71a5160a35078672c2c1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2b473c45ea5f0377079ee14648d353580f228b4a00aceac1bf5fb51ed2f09ab = $this->env->getExtension("native_profiler");
        $__internal_e2b473c45ea5f0377079ee14648d353580f228b4a00aceac1bf5fb51ed2f09ab->enter($__internal_e2b473c45ea5f0377079ee14648d353580f228b4a00aceac1bf5fb51ed2f09ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2b473c45ea5f0377079ee14648d353580f228b4a00aceac1bf5fb51ed2f09ab->leave($__internal_e2b473c45ea5f0377079ee14648d353580f228b4a00aceac1bf5fb51ed2f09ab_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b0d6c3f1e1e451d16bfb847e0bffe28b1679f6d0a52b09b310ab63590abc62f6 = $this->env->getExtension("native_profiler");
        $__internal_b0d6c3f1e1e451d16bfb847e0bffe28b1679f6d0a52b09b310ab63590abc62f6->enter($__internal_b0d6c3f1e1e451d16bfb847e0bffe28b1679f6d0a52b09b310ab63590abc62f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b0d6c3f1e1e451d16bfb847e0bffe28b1679f6d0a52b09b310ab63590abc62f6->leave($__internal_b0d6c3f1e1e451d16bfb847e0bffe28b1679f6d0a52b09b310ab63590abc62f6_prof);

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
