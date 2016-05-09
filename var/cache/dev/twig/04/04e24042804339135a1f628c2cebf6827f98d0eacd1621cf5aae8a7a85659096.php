<?php

/* GmaoMoulageBundle:Reference:formulaire.html.twig */
class __TwigTemplate_4030aec45f3cdd7313be2f761ae3948bc39b71225878697a0d663babaf7c384f extends Twig_Template
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
        $__internal_c599768de95a9520770d81e42122bac3f5a9be07addbe4c477399fbbc66c32f4 = $this->env->getExtension("native_profiler");
        $__internal_c599768de95a9520770d81e42122bac3f5a9be07addbe4c477399fbbc66c32f4->enter($__internal_c599768de95a9520770d81e42122bac3f5a9be07addbe4c477399fbbc66c32f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:formulaire.html.twig"));

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
        
        $__internal_c599768de95a9520770d81e42122bac3f5a9be07addbe4c477399fbbc66c32f4->leave($__internal_c599768de95a9520770d81e42122bac3f5a9be07addbe4c477399fbbc66c32f4_prof);

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
