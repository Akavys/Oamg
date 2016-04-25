<?php

/* GmaoMoulageBundle:Presse:supprimer.html.twig */
class __TwigTemplate_ce05b6d01131bdea195c6f329ab04e989ffa7ae8c50ac44f8079f650cd385c71 extends Twig_Template
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
        $__internal_ae3e468c84d0c2f980b1b375999a0261a3482c8ddd4b91447d8b80b8b1a6b7c7 = $this->env->getExtension("native_profiler");
        $__internal_ae3e468c84d0c2f980b1b375999a0261a3482c8ddd4b91447d8b80b8b1a6b7c7->enter($__internal_ae3e468c84d0c2f980b1b375999a0261a3482c8ddd4b91447d8b80b8b1a6b7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae3e468c84d0c2f980b1b375999a0261a3482c8ddd4b91447d8b80b8b1a6b7c7->leave($__internal_ae3e468c84d0c2f980b1b375999a0261a3482c8ddd4b91447d8b80b8b1a6b7c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12dc03123393a9aab6b5c698ca29e093d6ca76683a946131f08ec7f9f2852400 = $this->env->getExtension("native_profiler");
        $__internal_12dc03123393a9aab6b5c698ca29e093d6ca76683a946131f08ec7f9f2852400->enter($__internal_12dc03123393a9aab6b5c698ca29e093d6ca76683a946131f08ec7f9f2852400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_12dc03123393a9aab6b5c698ca29e093d6ca76683a946131f08ec7f9f2852400->leave($__internal_12dc03123393a9aab6b5c698ca29e093d6ca76683a946131f08ec7f9f2852400_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbe62ccb99c0004abfd8d67474375c71a9db8641f16fa8c02def87b35ed85399 = $this->env->getExtension("native_profiler");
        $__internal_cbe62ccb99c0004abfd8d67474375c71a9db8641f16fa8c02def87b35ed85399->enter($__internal_cbe62ccb99c0004abfd8d67474375c71a9db8641f16fa8c02def87b35ed85399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h1> Supprimer une presse</h1>


  <div class=\"well\">
    <form method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_supprimer_presse", array("id" => $this->getAttribute((isset($context["presse"]) ? $context["presse"] : $this->getContext($context, "presse")), "id", array()))), "html", null, true);
        echo "\"  >

      etes vous sur de vouloir supprimer cette presse?

      <input type=\"submit\" class=\"btn btn-primary\" />

    </form>
  </div>


  <p>
  Vous éditez un article déjà existant, ne le changez pas trop pour éviter aux membres de ne pas comprendre
  ce qu'il se passe.
  </p>
  <p>
  <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse");
        echo "\"
  class=\"btn\">
  <i class=\"icon-chevron-left\"></i> Retour vers la page liste presse
  </a> </p>


";
        
        $__internal_cbe62ccb99c0004abfd8d67474375c71a9db8641f16fa8c02def87b35ed85399->leave($__internal_cbe62ccb99c0004abfd8d67474375c71a9db8641f16fa8c02def87b35ed85399_prof);

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
        return array (  82 => 28,  64 => 13,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*   <h1> Supprimer une presse</h1>*/
/* */
/* */
/*   <div class="well">*/
/*     <form method="post" action="{{ path('gmao_moulage_supprimer_presse', {'id': presse.id}) }}"  >*/
/* */
/*       etes vous sur de vouloir supprimer cette presse?*/
/* */
/*       <input type="submit" class="btn btn-primary" />*/
/* */
/*     </form>*/
/*   </div>*/
/* */
/* */
/*   <p>*/
/*   Vous éditez un article déjà existant, ne le changez pas trop pour éviter aux membres de ne pas comprendre*/
/*   ce qu'il se passe.*/
/*   </p>*/
/*   <p>*/
/*   <a href="{{ path('gmao_moulage_liste_presse') }}"*/
/*   class="btn">*/
/*   <i class="icon-chevron-left"></i> Retour vers la page liste presse*/
/*   </a> </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
