<?php

/* GmaoMoulageBundle:Moule:supprimer.html.twig */
class __TwigTemplate_0223eb066d118b4b9c572f3b19e4c1392d44206cfc8dd5271132389edc56a4e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Moule:supprimer.html.twig", 1);
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
        $__internal_9b82e8cc806db9aa13fe40b50b279f2e389f9565dcf5dd27d47600cb41904d14 = $this->env->getExtension("native_profiler");
        $__internal_9b82e8cc806db9aa13fe40b50b279f2e389f9565dcf5dd27d47600cb41904d14->enter($__internal_9b82e8cc806db9aa13fe40b50b279f2e389f9565dcf5dd27d47600cb41904d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Moule:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b82e8cc806db9aa13fe40b50b279f2e389f9565dcf5dd27d47600cb41904d14->leave($__internal_9b82e8cc806db9aa13fe40b50b279f2e389f9565dcf5dd27d47600cb41904d14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ea538962f728b91be28ee7e5082c5380f67e2af78b925db35bf7eb57b3f6eed = $this->env->getExtension("native_profiler");
        $__internal_9ea538962f728b91be28ee7e5082c5380f67e2af78b925db35bf7eb57b3f6eed->enter($__internal_9ea538962f728b91be28ee7e5082c5380f67e2af78b925db35bf7eb57b3f6eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer un moule - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9ea538962f728b91be28ee7e5082c5380f67e2af78b925db35bf7eb57b3f6eed->leave($__internal_9ea538962f728b91be28ee7e5082c5380f67e2af78b925db35bf7eb57b3f6eed_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_25d9f6e20ba58c0b706d03f80b99f5f1f67192c8ea1af2c92b873a2a29a046fd = $this->env->getExtension("native_profiler");
        $__internal_25d9f6e20ba58c0b706d03f80b99f5f1f67192c8ea1af2c92b873a2a29a046fd->enter($__internal_25d9f6e20ba58c0b706d03f80b99f5f1f67192c8ea1af2c92b873a2a29a046fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25d9f6e20ba58c0b706d03f80b99f5f1f67192c8ea1af2c92b873a2a29a046fd->leave($__internal_25d9f6e20ba58c0b706d03f80b99f5f1f67192c8ea1af2c92b873a2a29a046fd_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Moule:supprimer.html.twig";
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
