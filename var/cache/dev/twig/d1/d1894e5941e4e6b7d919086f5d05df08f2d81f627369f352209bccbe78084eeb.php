<?php

/* @GmaoMoulage/Presse/formulaire.html.twig */
class __TwigTemplate_fffc2509b04f7c5223a4fcbf26b7eb0ca9c9927831108cffecefe015d3478b71 extends Twig_Template
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
        $__internal_d665915d69f138e25447a2f8811bb8e0e6616f3b41d957916c0be1d75f0bda50 = $this->env->getExtension("native_profiler");
        $__internal_d665915d69f138e25447a2f8811bb8e0e6616f3b41d957916c0be1d75f0bda50->enter($__internal_d665915d69f138e25447a2f8811bb8e0e6616f3b41d957916c0be1d75f0bda50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/formulaire.html.twig"));

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
        
        $__internal_d665915d69f138e25447a2f8811bb8e0e6616f3b41d957916c0be1d75f0bda50->leave($__internal_d665915d69f138e25447a2f8811bb8e0e6616f3b41d957916c0be1d75f0bda50_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Presse/formulaire.html.twig";
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
