<?php

/* GmaoMoulageBundle:Presse:formulaire.html.twig */
class __TwigTemplate_9641f5e21713fecd98208c2c1f770d76399896945e57543b994f4415c9031818 extends Twig_Template
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
        $__internal_f67d9e57817fe3daa4ec6fa9c4406e123477c63ff82dbac55e129222cd855605 = $this->env->getExtension("native_profiler");
        $__internal_f67d9e57817fe3daa4ec6fa9c4406e123477c63ff82dbac55e129222cd855605->enter($__internal_f67d9e57817fe3daa4ec6fa9c4406e123477c63ff82dbac55e129222cd855605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:formulaire.html.twig"));

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
        
        $__internal_f67d9e57817fe3daa4ec6fa9c4406e123477c63ff82dbac55e129222cd855605->leave($__internal_f67d9e57817fe3daa4ec6fa9c4406e123477c63ff82dbac55e129222cd855605_prof);

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
/*   <form method="post">*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     {{ form_rest(form) }}*/
/*     <button type="submit" class="btn btn-success" >Valider</button>*/
/*   </form>*/
/* </div>*/
/* */
