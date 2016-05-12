<?php

/* GmaoMoulageBundle:Presse:supprimer.html.twig */
class __TwigTemplate_2de9eee8782d80c4b5637464ab127c14153fc87f11782569332ece1b09c18278 extends Twig_Template
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
        $__internal_f2158019a369e89d0c6f444e2596eaaf27e0df9feef60f4ecd64ec4ca823c141 = $this->env->getExtension("native_profiler");
        $__internal_f2158019a369e89d0c6f444e2596eaaf27e0df9feef60f4ecd64ec4ca823c141->enter($__internal_f2158019a369e89d0c6f444e2596eaaf27e0df9feef60f4ecd64ec4ca823c141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2158019a369e89d0c6f444e2596eaaf27e0df9feef60f4ecd64ec4ca823c141->leave($__internal_f2158019a369e89d0c6f444e2596eaaf27e0df9feef60f4ecd64ec4ca823c141_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_edfa8dfa8ad2ee5d22bc2801e944a48c0d80783e77b974b4a1edd5f10ffe4444 = $this->env->getExtension("native_profiler");
        $__internal_edfa8dfa8ad2ee5d22bc2801e944a48c0d80783e77b974b4a1edd5f10ffe4444->enter($__internal_edfa8dfa8ad2ee5d22bc2801e944a48c0d80783e77b974b4a1edd5f10ffe4444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_edfa8dfa8ad2ee5d22bc2801e944a48c0d80783e77b974b4a1edd5f10ffe4444->leave($__internal_edfa8dfa8ad2ee5d22bc2801e944a48c0d80783e77b974b4a1edd5f10ffe4444_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1814951862e6c6843ac292aca80291227b3ff8675f1d9980f97574f069b70f7b = $this->env->getExtension("native_profiler");
        $__internal_1814951862e6c6843ac292aca80291227b3ff8675f1d9980f97574f069b70f7b->enter($__internal_1814951862e6c6843ac292aca80291227b3ff8675f1d9980f97574f069b70f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1814951862e6c6843ac292aca80291227b3ff8675f1d9980f97574f069b70f7b->leave($__internal_1814951862e6c6843ac292aca80291227b3ff8675f1d9980f97574f069b70f7b_prof);

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
