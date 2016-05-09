<?php

/* GmaoMoulageBundle:Presse:formulaire.html.twig */
class __TwigTemplate_19f13a2ece564f438fae4365831aa9d8fed016503efb8fb32c94cf7478edc4c6 extends Twig_Template
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
        $__internal_ff90417aa5e0892f80540d1048f5d90b844fe8fc859a5501ad4f6fba3c79bc2e = $this->env->getExtension("native_profiler");
        $__internal_ff90417aa5e0892f80540d1048f5d90b844fe8fc859a5501ad4f6fba3c79bc2e->enter($__internal_ff90417aa5e0892f80540d1048f5d90b844fe8fc859a5501ad4f6fba3c79bc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:formulaire.html.twig"));

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
        
        $__internal_ff90417aa5e0892f80540d1048f5d90b844fe8fc859a5501ad4f6fba3c79bc2e->leave($__internal_ff90417aa5e0892f80540d1048f5d90b844fe8fc859a5501ad4f6fba3c79bc2e_prof);

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
