<?php

/* @GmaoMoulage/Moule/supprimer.html.twig */
class __TwigTemplate_85779611b9509c2da8904239857634d59fb8666715c23af17f5b97e5d62fb6e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Moule/supprimer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e454f01d10c8c62b753659ea8cd9c04672ecbaf4b1b208059568a2d4c6789065 = $this->env->getExtension("native_profiler");
        $__internal_e454f01d10c8c62b753659ea8cd9c04672ecbaf4b1b208059568a2d4c6789065->enter($__internal_e454f01d10c8c62b753659ea8cd9c04672ecbaf4b1b208059568a2d4c6789065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Moule/supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e454f01d10c8c62b753659ea8cd9c04672ecbaf4b1b208059568a2d4c6789065->leave($__internal_e454f01d10c8c62b753659ea8cd9c04672ecbaf4b1b208059568a2d4c6789065_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3de9ee921e3dcd18d5993ddb270658d827fca6261924d1ce8789804807617bb = $this->env->getExtension("native_profiler");
        $__internal_b3de9ee921e3dcd18d5993ddb270658d827fca6261924d1ce8789804807617bb->enter($__internal_b3de9ee921e3dcd18d5993ddb270658d827fca6261924d1ce8789804807617bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer un moule - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b3de9ee921e3dcd18d5993ddb270658d827fca6261924d1ce8789804807617bb->leave($__internal_b3de9ee921e3dcd18d5993ddb270658d827fca6261924d1ce8789804807617bb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c32661b58ce6fb7757953896c6efe0ca6d466ed993932165e16e7af49d4e88f = $this->env->getExtension("native_profiler");
        $__internal_4c32661b58ce6fb7757953896c6efe0ca6d466ed993932165e16e7af49d4e88f->enter($__internal_4c32661b58ce6fb7757953896c6efe0ca6d466ed993932165e16e7af49d4e88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\"> Supprimer un moule</h2>

  <div class=\"well\">
    <form method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_supprimer_moule", array("id" => $this->getAttribute((isset($context["moule"]) ? $context["moule"] : $this->getContext($context, "moule")), "id", array()))), "html", null, true);
        echo "\"  >
      Êtes-vous sûr de vouloir supprimer définitivement ce moule?
      <button type=\"submit\" class=\"negative ui button\" >Valider</button>
    </form>
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_moule");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste moule
    </a>
  </p>


";
        
        $__internal_4c32661b58ce6fb7757953896c6efe0ca6d466ed993932165e16e7af49d4e88f->leave($__internal_4c32661b58ce6fb7757953896c6efe0ca6d466ed993932165e16e7af49d4e88f_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Moule/supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer un moule - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header"> Supprimer un moule</h2>*/
/* */
/*   <div class="well">*/
/*     <form method="post" action="{{ path('gmao_moulage_supprimer_moule', {'id': moule.id}) }}"  >*/
/*       Êtes-vous sûr de vouloir supprimer définitivement ce moule?*/
/*       <button type="submit" class="negative ui button" >Valider</button>*/
/*     </form>*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('gmao_moulage_liste_moule') }}" class="ui orange button">*/
/*       <i class="glyphicon glyphicon-arrow-left"></i>*/
/*       Retour vers la page liste moule*/
/*     </a>*/
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
