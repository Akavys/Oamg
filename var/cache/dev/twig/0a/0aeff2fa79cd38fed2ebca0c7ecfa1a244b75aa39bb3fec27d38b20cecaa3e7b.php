<?php

/* GmaoMoulageBundle:Presse:formulaire.html.twig */
class __TwigTemplate_f24fca7c3b676fbfa367fed8392fbbbd554fc89fcdfffd8c692b5cd78bb8fc3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffea41142d834c2f04233b2b364eb7af81d6a53174fafda3a548d1ab69c8f297 = $this->env->getExtension("native_profiler");
        $__internal_ffea41142d834c2f04233b2b364eb7af81d6a53174fafda3a548d1ab69c8f297->enter($__internal_ffea41142d834c2f04233b2b364eb7af81d6a53174fafda3a548d1ab69c8f297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:formulaire.html.twig"));

        // line 1
        echo "
<div class=\"well\">
  <form method=\"post\" >

    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" class=\"btn btn-primary\" />
  </form>
</div>
";
        
        $__internal_ffea41142d834c2f04233b2b364eb7af81d6a53174fafda3a548d1ab69c8f297->leave($__internal_ffea41142d834c2f04233b2b364eb7af81d6a53174fafda3a548d1ab69c8f297_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Presse:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* */
/* <div class="well">*/
/*   <form method="post" >*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     {{ form_rest(form) }}*/
/*     <input type="submit" class="btn btn-primary" />*/
/*   </form>*/
/* </div>*/
/* */
