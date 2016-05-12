<?php

/* GmaoMoulageBundle:Reference:supprimer.html.twig */
class __TwigTemplate_fe410c66d0b2bb295a7aa12995a486f957f82213b4ce015b4fb40cc934b78d5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Reference:supprimer.html.twig", 1);
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
        $__internal_135fdf467e96a301ad069c200f71734c93f11a2fe4ca9f3f705228678f7b4791 = $this->env->getExtension("native_profiler");
        $__internal_135fdf467e96a301ad069c200f71734c93f11a2fe4ca9f3f705228678f7b4791->enter($__internal_135fdf467e96a301ad069c200f71734c93f11a2fe4ca9f3f705228678f7b4791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_135fdf467e96a301ad069c200f71734c93f11a2fe4ca9f3f705228678f7b4791->leave($__internal_135fdf467e96a301ad069c200f71734c93f11a2fe4ca9f3f705228678f7b4791_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba4c3afad5112dd09c7df9525d83612c0eca80fc1c7c37d0cf9d47e4889c8774 = $this->env->getExtension("native_profiler");
        $__internal_ba4c3afad5112dd09c7df9525d83612c0eca80fc1c7c37d0cf9d47e4889c8774->enter($__internal_ba4c3afad5112dd09c7df9525d83612c0eca80fc1c7c37d0cf9d47e4889c8774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une référence - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ba4c3afad5112dd09c7df9525d83612c0eca80fc1c7c37d0cf9d47e4889c8774->leave($__internal_ba4c3afad5112dd09c7df9525d83612c0eca80fc1c7c37d0cf9d47e4889c8774_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e142f1b5d39b0e64d43ce439bf9fbe81b112637ac881fdc02f42a6701ab25171 = $this->env->getExtension("native_profiler");
        $__internal_e142f1b5d39b0e64d43ce439bf9fbe81b112637ac881fdc02f42a6701ab25171->enter($__internal_e142f1b5d39b0e64d43ce439bf9fbe81b112637ac881fdc02f42a6701ab25171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\"> Supprimer une référence</h2>

  <div class=\"well\">
    <form method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_supprimer_reference", array("id" => $this->getAttribute((isset($context["reference"]) ? $context["reference"] : $this->getContext($context, "reference")), "id", array()))), "html", null, true);
        echo "\"  >
      Êtes-vous sûr de vouloir supprimer définitivement cette référence?
      <button type=\"submit\" class=\"negative ui button\" >Valider</button>
    </form>
  </div>

  <p>
    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_reference");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste référence
    </a>
  </p>


";
        
        $__internal_e142f1b5d39b0e64d43ce439bf9fbe81b112637ac881fdc02f42a6701ab25171->leave($__internal_e142f1b5d39b0e64d43ce439bf9fbe81b112637ac881fdc02f42a6701ab25171_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Reference:supprimer.html.twig";
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
/*   Supprimer une référence - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header"> Supprimer une référence</h2>*/
/* */
/*   <div class="well">*/
/*     <form method="post" action="{{ path('gmao_moulage_supprimer_reference', {'id': reference.id}) }}"  >*/
/*       Êtes-vous sûr de vouloir supprimer définitivement cette référence?*/
/*       <button type="submit" class="negative ui button" >Valider</button>*/
/*     </form>*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('gmao_moulage_liste_reference') }}" class="ui orange button">*/
/*       <i class="glyphicon glyphicon-arrow-left"></i>*/
/*       Retour vers la page liste référence*/
/*     </a>*/
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
