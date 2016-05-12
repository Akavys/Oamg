<?php

/* @GmaoMoulage/Presse/supprimer.html.twig */
class __TwigTemplate_3ccfb0ab6bdea24b88f0ffb26a372e129f24146094b6eeb573c8aa696c21b2ee extends Twig_Template
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
        $__internal_2d4c105e5e9dfcbdf574d7f7ad5dab27c73a94aa276d4531c3ac2af9168f48a4 = $this->env->getExtension("native_profiler");
        $__internal_2d4c105e5e9dfcbdf574d7f7ad5dab27c73a94aa276d4531c3ac2af9168f48a4->enter($__internal_2d4c105e5e9dfcbdf574d7f7ad5dab27c73a94aa276d4531c3ac2af9168f48a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d4c105e5e9dfcbdf574d7f7ad5dab27c73a94aa276d4531c3ac2af9168f48a4->leave($__internal_2d4c105e5e9dfcbdf574d7f7ad5dab27c73a94aa276d4531c3ac2af9168f48a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_777bbfbb9912bbd6080e6fabe259f5367c35f112d22e9c6e1f115214363750a8 = $this->env->getExtension("native_profiler");
        $__internal_777bbfbb9912bbd6080e6fabe259f5367c35f112d22e9c6e1f115214363750a8->enter($__internal_777bbfbb9912bbd6080e6fabe259f5367c35f112d22e9c6e1f115214363750a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_777bbfbb9912bbd6080e6fabe259f5367c35f112d22e9c6e1f115214363750a8->leave($__internal_777bbfbb9912bbd6080e6fabe259f5367c35f112d22e9c6e1f115214363750a8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d2964e01498f845821a1dfcf60ac29fa9f5ab3e06c30ae824c7b4e93b98c5f3 = $this->env->getExtension("native_profiler");
        $__internal_2d2964e01498f845821a1dfcf60ac29fa9f5ab3e06c30ae824c7b4e93b98c5f3->enter($__internal_2d2964e01498f845821a1dfcf60ac29fa9f5ab3e06c30ae824c7b4e93b98c5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d2964e01498f845821a1dfcf60ac29fa9f5ab3e06c30ae824c7b4e93b98c5f3->leave($__internal_2d2964e01498f845821a1dfcf60ac29fa9f5ab3e06c30ae824c7b4e93b98c5f3_prof);

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
/*     <a href="{{ path('gmao_moulage_liste_presse') }}" class="ui orange button">*/
/*       <i class="glyphicon glyphicon-arrow-left"></i>*/
/*       Retour vers la page liste presse*/
/*     </a>*/
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
