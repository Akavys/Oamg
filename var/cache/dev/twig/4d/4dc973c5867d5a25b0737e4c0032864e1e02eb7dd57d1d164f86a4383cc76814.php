<?php

/* @GmaoMoulage/Presse/formulaire.html.twig */
class __TwigTemplate_962de6f0acf52ee2f757c48f912cce313e7e46e83c2dd3d98679ff59f6c9b333 extends Twig_Template
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
        $__internal_9662e14e49d3d4b180350f2dff19d92d47859fde6979501d21528f553aa0f585 = $this->env->getExtension("native_profiler");
        $__internal_9662e14e49d3d4b180350f2dff19d92d47859fde6979501d21528f553aa0f585->enter($__internal_9662e14e49d3d4b180350f2dff19d92d47859fde6979501d21528f553aa0f585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/formulaire.html.twig"));

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
        
        $__internal_9662e14e49d3d4b180350f2dff19d92d47859fde6979501d21528f553aa0f585->leave($__internal_9662e14e49d3d4b180350f2dff19d92d47859fde6979501d21528f553aa0f585_prof);

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
