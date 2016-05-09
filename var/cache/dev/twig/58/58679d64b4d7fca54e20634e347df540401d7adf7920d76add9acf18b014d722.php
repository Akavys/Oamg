<?php

/* @GmaoMoulage/Presse/supprimer.html.twig */
class __TwigTemplate_2c261ff79ac92998d8cd868fa7ba9d1b2ec54c38fa168c0e21a0a14ec813af45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Presse/supprimer.html.twig", 1);
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
        $__internal_85a7bd9ccee6e2e087ccc9cb9c966d94bddf162d0421979444d37a1e3ed87537 = $this->env->getExtension("native_profiler");
        $__internal_85a7bd9ccee6e2e087ccc9cb9c966d94bddf162d0421979444d37a1e3ed87537->enter($__internal_85a7bd9ccee6e2e087ccc9cb9c966d94bddf162d0421979444d37a1e3ed87537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85a7bd9ccee6e2e087ccc9cb9c966d94bddf162d0421979444d37a1e3ed87537->leave($__internal_85a7bd9ccee6e2e087ccc9cb9c966d94bddf162d0421979444d37a1e3ed87537_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_809c5fc6fb796e2b2529cc386dc59137923b1e8950a4a55f364ea466a39076bd = $this->env->getExtension("native_profiler");
        $__internal_809c5fc6fb796e2b2529cc386dc59137923b1e8950a4a55f364ea466a39076bd->enter($__internal_809c5fc6fb796e2b2529cc386dc59137923b1e8950a4a55f364ea466a39076bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_809c5fc6fb796e2b2529cc386dc59137923b1e8950a4a55f364ea466a39076bd->leave($__internal_809c5fc6fb796e2b2529cc386dc59137923b1e8950a4a55f364ea466a39076bd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ef9023745dca8a5e196378a85fcc73f5cdedaf910392d5a57cee73db6c9187e = $this->env->getExtension("native_profiler");
        $__internal_3ef9023745dca8a5e196378a85fcc73f5cdedaf910392d5a57cee73db6c9187e->enter($__internal_3ef9023745dca8a5e196378a85fcc73f5cdedaf910392d5a57cee73db6c9187e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" class=\"ui labeled icon orange button\">
      <i class=\"left chevron icon\"></i>
      Retour vers la page liste presse
    </a>
  </p>


";
        
        $__internal_3ef9023745dca8a5e196378a85fcc73f5cdedaf910392d5a57cee73db6c9187e->leave($__internal_3ef9023745dca8a5e196378a85fcc73f5cdedaf910392d5a57cee73db6c9187e_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Presse/supprimer.html.twig";
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
/*     <a href="{{ path('gmao_moulage_liste_presse') }}" class="ui labeled icon orange button">*/
/*       <i class="left chevron icon"></i>*/
/*       Retour vers la page liste presse*/
/*     </a>*/
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
