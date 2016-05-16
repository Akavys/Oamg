<?php

/* GmaoMoulageBundle:Presse:supprimer.html.twig */
class __TwigTemplate_6af926bd70fcc0d2e1fadbd189ca7b94fb9cb801578b99140c90f5f503bb795c extends Twig_Template
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
        $__internal_81d1840a18ce9656494ee91099877192642479709d09353259e3eaff99643fad = $this->env->getExtension("native_profiler");
        $__internal_81d1840a18ce9656494ee91099877192642479709d09353259e3eaff99643fad->enter($__internal_81d1840a18ce9656494ee91099877192642479709d09353259e3eaff99643fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81d1840a18ce9656494ee91099877192642479709d09353259e3eaff99643fad->leave($__internal_81d1840a18ce9656494ee91099877192642479709d09353259e3eaff99643fad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6666758d3ae869914177783628ebabc33d9a3e0b2cf9c86bff1f7151847caecf = $this->env->getExtension("native_profiler");
        $__internal_6666758d3ae869914177783628ebabc33d9a3e0b2cf9c86bff1f7151847caecf->enter($__internal_6666758d3ae869914177783628ebabc33d9a3e0b2cf9c86bff1f7151847caecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6666758d3ae869914177783628ebabc33d9a3e0b2cf9c86bff1f7151847caecf->leave($__internal_6666758d3ae869914177783628ebabc33d9a3e0b2cf9c86bff1f7151847caecf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3719749f8dded98e6b8de5a9c3456597caa42ca41fb345b49b13ae1ee4f894b0 = $this->env->getExtension("native_profiler");
        $__internal_3719749f8dded98e6b8de5a9c3456597caa42ca41fb345b49b13ae1ee4f894b0->enter($__internal_3719749f8dded98e6b8de5a9c3456597caa42ca41fb345b49b13ae1ee4f894b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3719749f8dded98e6b8de5a9c3456597caa42ca41fb345b49b13ae1ee4f894b0->leave($__internal_3719749f8dded98e6b8de5a9c3456597caa42ca41fb345b49b13ae1ee4f894b0_prof);

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
