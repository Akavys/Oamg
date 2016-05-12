<?php

/* @GmaoMoulage/Reference/formulaire.html.twig */
class __TwigTemplate_2c2333db89c7df259aa6e9cd8d61252d8be74a5d1cf8db2a9b77e214065afad2 extends Twig_Template
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
        $__internal_82814b10b8860fd91491b5c21925a68f04e31d9eba524a78e1e95d0a551135e9 = $this->env->getExtension("native_profiler");
        $__internal_82814b10b8860fd91491b5c21925a68f04e31d9eba524a78e1e95d0a551135e9->enter($__internal_82814b10b8860fd91491b5c21925a68f04e31d9eba524a78e1e95d0a551135e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Reference/formulaire.html.twig"));

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
        
        $__internal_82814b10b8860fd91491b5c21925a68f04e31d9eba524a78e1e95d0a551135e9->leave($__internal_82814b10b8860fd91491b5c21925a68f04e31d9eba524a78e1e95d0a551135e9_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Reference/formulaire.html.twig";
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
