<?php

/* GmaoMoulageBundle:Reference:modifier.html.twig */
class __TwigTemplate_01d430e39dceb331bbf3e5e237ab1f490ce0cfc7130e390e63e83c7a6db80a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Reference:modifier.html.twig", 1);
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
        $__internal_594372a06743c214ea86f6704f424a21481b9746e5209072ed8ede3480d7dfb5 = $this->env->getExtension("native_profiler");
        $__internal_594372a06743c214ea86f6704f424a21481b9746e5209072ed8ede3480d7dfb5->enter($__internal_594372a06743c214ea86f6704f424a21481b9746e5209072ed8ede3480d7dfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_594372a06743c214ea86f6704f424a21481b9746e5209072ed8ede3480d7dfb5->leave($__internal_594372a06743c214ea86f6704f424a21481b9746e5209072ed8ede3480d7dfb5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c00fa72144800412dbb95d15e9027ffb78330a5c3ae891951591fa88e5a644b4 = $this->env->getExtension("native_profiler");
        $__internal_c00fa72144800412dbb95d15e9027ffb78330a5c3ae891951591fa88e5a644b4->enter($__internal_c00fa72144800412dbb95d15e9027ffb78330a5c3ae891951591fa88e5a644b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une référence - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c00fa72144800412dbb95d15e9027ffb78330a5c3ae891951591fa88e5a644b4->leave($__internal_c00fa72144800412dbb95d15e9027ffb78330a5c3ae891951591fa88e5a644b4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_17a55e17207a5c2734d89ed53ba8e4a1d2432661dfa5ea1dbae7d378c42ae59e = $this->env->getExtension("native_profiler");
        $__internal_17a55e17207a5c2734d89ed53ba8e4a1d2432661dfa5ea1dbae7d378c42ae59e->enter($__internal_17a55e17207a5c2734d89ed53ba8e4a1d2432661dfa5ea1dbae7d378c42ae59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\">Modifier une référence</h2>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Reference:formulaire.html.twig", "GmaoMoulageBundle:Reference:modifier.html.twig", 11)->display($context);
        // line 12
        echo "
  <p>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_reference");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste référence
    </a>
  </p>


";
        
        $__internal_17a55e17207a5c2734d89ed53ba8e4a1d2432661dfa5ea1dbae7d378c42ae59e->leave($__internal_17a55e17207a5c2734d89ed53ba8e4a1d2432661dfa5ea1dbae7d378c42ae59e_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Reference:modifier.html.twig";
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
/*   Modifier une référence - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header">Modifier une référence</h2>*/
/* */
/*   {% include "GmaoMoulageBundle:Reference:formulaire.html.twig" %}*/
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
