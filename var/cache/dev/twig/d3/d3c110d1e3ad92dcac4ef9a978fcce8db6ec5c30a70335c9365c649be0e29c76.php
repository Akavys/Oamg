<?php

/* GmaoMoulageBundle:Presse:formulaire.html.twig */
class __TwigTemplate_c89aab9c23132b05f405cac54e0ddb9bf9637b296e7bdb1a3816bfb2378bb538 extends Twig_Template
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
        $__internal_3d7f5fb120ead4ae36df7a622d1b4beadb2c78929d20abaef3f319ae78f7e81c = $this->env->getExtension("native_profiler");
        $__internal_3d7f5fb120ead4ae36df7a622d1b4beadb2c78929d20abaef3f319ae78f7e81c->enter($__internal_3d7f5fb120ead4ae36df7a622d1b4beadb2c78929d20abaef3f319ae78f7e81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:formulaire.html.twig"));

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
        
        $__internal_3d7f5fb120ead4ae36df7a622d1b4beadb2c78929d20abaef3f319ae78f7e81c->leave($__internal_3d7f5fb120ead4ae36df7a622d1b4beadb2c78929d20abaef3f319ae78f7e81c_prof);

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
