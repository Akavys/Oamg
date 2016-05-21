<?php

/* GmaoMoulageBundle:Reference:formulaire.html.twig */
class __TwigTemplate_f3e24b3218d909d6ce69832275b4bd457c22bcd02297997a9f4b2a1c74f741b2 extends Twig_Template
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
        $__internal_a2b4dba8ef8a6803f03b30d118659fb93db1bef3a2d5656bee65f2561afae685 = $this->env->getExtension("native_profiler");
        $__internal_a2b4dba8ef8a6803f03b30d118659fb93db1bef3a2d5656bee65f2561afae685->enter($__internal_a2b4dba8ef8a6803f03b30d118659fb93db1bef3a2d5656bee65f2561afae685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:formulaire.html.twig"));

        // line 1
        echo "
<div class=\"well\">
  <form method=\"post\">

    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <button type=\"submit\" class=\"btn btn-success\" >Valider</button>
  </form>
</div>
";
        
        $__internal_a2b4dba8ef8a6803f03b30d118659fb93db1bef3a2d5656bee65f2561afae685->leave($__internal_a2b4dba8ef8a6803f03b30d118659fb93db1bef3a2d5656bee65f2561afae685_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Reference:formulaire.html.twig";
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
/*   <form method="post">*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     {{ form_rest(form) }}*/
/*     <button type="submit" class="btn btn-success" >Valider</button>*/
/*   </form>*/
/* </div>*/
/* */
