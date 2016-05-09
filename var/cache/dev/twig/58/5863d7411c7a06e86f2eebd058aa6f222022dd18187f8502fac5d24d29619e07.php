<?php

/* @GmaoMoulage/Presse/modifier.html.twig */
class __TwigTemplate_010785862beb5166a9b3d39873bdceabc38d726f4bf7be9a7c66bc0d7af2be4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Presse/modifier.html.twig", 1);
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
        $__internal_4fe22de2d1c3a459e0e54b61318f2f32ceb7c8197539e08f3efb54bd0497e1f4 = $this->env->getExtension("native_profiler");
        $__internal_4fe22de2d1c3a459e0e54b61318f2f32ceb7c8197539e08f3efb54bd0497e1f4->enter($__internal_4fe22de2d1c3a459e0e54b61318f2f32ceb7c8197539e08f3efb54bd0497e1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe22de2d1c3a459e0e54b61318f2f32ceb7c8197539e08f3efb54bd0497e1f4->leave($__internal_4fe22de2d1c3a459e0e54b61318f2f32ceb7c8197539e08f3efb54bd0497e1f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9df1f60260d11840dd023c7cb03763bde343f35e6e4a2527bf8d8183a69c1d3 = $this->env->getExtension("native_profiler");
        $__internal_c9df1f60260d11840dd023c7cb03763bde343f35e6e4a2527bf8d8183a69c1d3->enter($__internal_c9df1f60260d11840dd023c7cb03763bde343f35e6e4a2527bf8d8183a69c1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c9df1f60260d11840dd023c7cb03763bde343f35e6e4a2527bf8d8183a69c1d3->leave($__internal_c9df1f60260d11840dd023c7cb03763bde343f35e6e4a2527bf8d8183a69c1d3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9634e216c0ba7ac837cfddfee28ac10af1f659a1f65642b56ba3e4329555577b = $this->env->getExtension("native_profiler");
        $__internal_9634e216c0ba7ac837cfddfee28ac10af1f659a1f65642b56ba3e4329555577b->enter($__internal_9634e216c0ba7ac837cfddfee28ac10af1f659a1f65642b56ba3e4329555577b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\">Modifier une presse</h2>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "@GmaoMoulage/Presse/modifier.html.twig", 11)->display($context);
        // line 12
        echo "
  <p>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse");
        echo "\" class=\"ui labeled icon orange button\">
      <i class=\"left chevron icon\"></i>
      Retour vers la page liste presse
    </a>
  </p>


";
        
        $__internal_9634e216c0ba7ac837cfddfee28ac10af1f659a1f65642b56ba3e4329555577b->leave($__internal_9634e216c0ba7ac837cfddfee28ac10af1f659a1f65642b56ba3e4329555577b_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Presse/modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une presse - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header">Modifier une presse</h2>*/
/* */
/*   {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
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
