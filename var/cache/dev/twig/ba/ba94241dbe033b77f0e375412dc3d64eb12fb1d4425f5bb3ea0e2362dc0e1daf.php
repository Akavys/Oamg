<?php

/* GmaoMoulageBundle:Reference:formulaire.html.twig */
class __TwigTemplate_833a501378e33ba278f08e6ee05e53b509c7ea034ad1b2293413f061c252e001 extends Twig_Template
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
        $__internal_1e20cabe9ec99d99b9f691388f36fc84bdff7650a9e1a5cc67ce4b52881ed9d4 = $this->env->getExtension("native_profiler");
        $__internal_1e20cabe9ec99d99b9f691388f36fc84bdff7650a9e1a5cc67ce4b52881ed9d4->enter($__internal_1e20cabe9ec99d99b9f691388f36fc84bdff7650a9e1a5cc67ce4b52881ed9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:formulaire.html.twig"));

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
        
        $__internal_1e20cabe9ec99d99b9f691388f36fc84bdff7650a9e1a5cc67ce4b52881ed9d4->leave($__internal_1e20cabe9ec99d99b9f691388f36fc84bdff7650a9e1a5cc67ce4b52881ed9d4_prof);

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
