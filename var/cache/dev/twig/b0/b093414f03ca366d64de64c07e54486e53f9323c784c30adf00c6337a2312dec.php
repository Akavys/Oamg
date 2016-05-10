<?php

/* GmaoMoulageBundle:Presse:supprimer.html.twig */
class __TwigTemplate_c9b5089732de4d1a06d198e0b15a20fbb493cc262cae85a5406515860a62758d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Presse:supprimer.html.twig", 1);
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
        $__internal_464c0c54defaf19d0927dfdc9f1db4de6c540259dddeb009193d6ebc4a80222e = $this->env->getExtension("native_profiler");
        $__internal_464c0c54defaf19d0927dfdc9f1db4de6c540259dddeb009193d6ebc4a80222e->enter($__internal_464c0c54defaf19d0927dfdc9f1db4de6c540259dddeb009193d6ebc4a80222e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_464c0c54defaf19d0927dfdc9f1db4de6c540259dddeb009193d6ebc4a80222e->leave($__internal_464c0c54defaf19d0927dfdc9f1db4de6c540259dddeb009193d6ebc4a80222e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70a276dc620fb10cab8d0a425da77b8f378a98b082e817aa4cae75264deadbd8 = $this->env->getExtension("native_profiler");
        $__internal_70a276dc620fb10cab8d0a425da77b8f378a98b082e817aa4cae75264deadbd8->enter($__internal_70a276dc620fb10cab8d0a425da77b8f378a98b082e817aa4cae75264deadbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_70a276dc620fb10cab8d0a425da77b8f378a98b082e817aa4cae75264deadbd8->leave($__internal_70a276dc620fb10cab8d0a425da77b8f378a98b082e817aa4cae75264deadbd8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f09fb1dc367709d777d877b61307d282907231289eaf2e6750f6ee14f4c5f3ad = $this->env->getExtension("native_profiler");
        $__internal_f09fb1dc367709d777d877b61307d282907231289eaf2e6750f6ee14f4c5f3ad->enter($__internal_f09fb1dc367709d777d877b61307d282907231289eaf2e6750f6ee14f4c5f3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\"> Supprimer une presse</h2>

  <div class=\"well\">
    <form method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_supprimer_presse", array("id" => $this->getAttribute((isset($context["presse"]) ? $context["presse"] : $this->getContext($context, "presse")), "id", array()))), "html", null, true);
        echo "\"  >
      Êtes-vous sûr de vouloir supprimer définitivement cette presse?
      <button type=\"submit\" class=\"negative ui button\" >Valider</button>
    </form>
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste presse
    </a>
  </p>


";
        
        $__internal_f09fb1dc367709d777d877b61307d282907231289eaf2e6750f6ee14f4c5f3ad->leave($__internal_f09fb1dc367709d777d877b61307d282907231289eaf2e6750f6ee14f4c5f3ad_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Presse:supprimer.html.twig";
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
/*   Supprimer une presse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header"> Supprimer une presse</h2>*/
/* */
/*   <div class="well">*/
/*     <form method="post" action="{{ path('gmao_moulage_supprimer_presse', {'id': presse.id}) }}"  >*/
/*       Êtes-vous sûr de vouloir supprimer définitivement cette presse?*/
/*       <button type="submit" class="negative ui button" >Valider</button>*/
/*     </form>*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('gmao_moulage_liste_presse') }}" class="ui orange button">*/
/*       <i class="glyphicon glyphicon-arrow-left"></i>*/
/*       Retour vers la page liste presse*/
/*     </a>*/
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
