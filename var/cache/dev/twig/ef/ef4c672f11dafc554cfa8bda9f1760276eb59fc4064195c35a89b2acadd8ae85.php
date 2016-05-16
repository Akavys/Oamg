<?php

/* GmaoMoulageBundle:Moule:supprimer.html.twig */
class __TwigTemplate_8e593a062ab0155b5e234e30d8024402ffd379cfd02fb19d1a2c0104b99f567a extends Twig_Template
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
        $__internal_a935dfc40641b7be32462b8289c98eb0354d33d93660280fa64f0d2593a5dcf1 = $this->env->getExtension("native_profiler");
        $__internal_a935dfc40641b7be32462b8289c98eb0354d33d93660280fa64f0d2593a5dcf1->enter($__internal_a935dfc40641b7be32462b8289c98eb0354d33d93660280fa64f0d2593a5dcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Moule:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a935dfc40641b7be32462b8289c98eb0354d33d93660280fa64f0d2593a5dcf1->leave($__internal_a935dfc40641b7be32462b8289c98eb0354d33d93660280fa64f0d2593a5dcf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a20e0321a83c5dd645be36b38c1176c6d2a4715ee16cc8b81eed272632d68a8 = $this->env->getExtension("native_profiler");
        $__internal_1a20e0321a83c5dd645be36b38c1176c6d2a4715ee16cc8b81eed272632d68a8->enter($__internal_1a20e0321a83c5dd645be36b38c1176c6d2a4715ee16cc8b81eed272632d68a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer un moule - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1a20e0321a83c5dd645be36b38c1176c6d2a4715ee16cc8b81eed272632d68a8->leave($__internal_1a20e0321a83c5dd645be36b38c1176c6d2a4715ee16cc8b81eed272632d68a8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_efbc135c737886d6df876b7a1a35cd9964b51c411dbd40d172f3de172d303090 = $this->env->getExtension("native_profiler");
        $__internal_efbc135c737886d6df876b7a1a35cd9964b51c411dbd40d172f3de172d303090->enter($__internal_efbc135c737886d6df876b7a1a35cd9964b51c411dbd40d172f3de172d303090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efbc135c737886d6df876b7a1a35cd9964b51c411dbd40d172f3de172d303090->leave($__internal_efbc135c737886d6df876b7a1a35cd9964b51c411dbd40d172f3de172d303090_prof);

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
