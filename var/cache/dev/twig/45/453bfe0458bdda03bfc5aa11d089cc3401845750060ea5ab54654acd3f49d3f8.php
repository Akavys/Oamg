<?php

/* GmaoMoulageBundle:Reference:modifier.html.twig */
class __TwigTemplate_7b43d7c9a2c7d459af4c238d4009d740682caaf3638169b3adf621fb605bb5d4 extends Twig_Template
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
        $__internal_2cc93b973753a2d2c80a00c65d23b772ae38de83d2903cbd957f48205d82d471 = $this->env->getExtension("native_profiler");
        $__internal_2cc93b973753a2d2c80a00c65d23b772ae38de83d2903cbd957f48205d82d471->enter($__internal_2cc93b973753a2d2c80a00c65d23b772ae38de83d2903cbd957f48205d82d471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc93b973753a2d2c80a00c65d23b772ae38de83d2903cbd957f48205d82d471->leave($__internal_2cc93b973753a2d2c80a00c65d23b772ae38de83d2903cbd957f48205d82d471_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c64ba1a031a7ad4ba815dd099910c3b732800a8eae5882519590c45cb86c740 = $this->env->getExtension("native_profiler");
        $__internal_0c64ba1a031a7ad4ba815dd099910c3b732800a8eae5882519590c45cb86c740->enter($__internal_0c64ba1a031a7ad4ba815dd099910c3b732800a8eae5882519590c45cb86c740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une référence - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0c64ba1a031a7ad4ba815dd099910c3b732800a8eae5882519590c45cb86c740->leave($__internal_0c64ba1a031a7ad4ba815dd099910c3b732800a8eae5882519590c45cb86c740_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_92fa0c2cfc61495278a164e29d980d0a87b735065f368b6b4fd1c519fcf9726b = $this->env->getExtension("native_profiler");
        $__internal_92fa0c2cfc61495278a164e29d980d0a87b735065f368b6b4fd1c519fcf9726b->enter($__internal_92fa0c2cfc61495278a164e29d980d0a87b735065f368b6b4fd1c519fcf9726b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92fa0c2cfc61495278a164e29d980d0a87b735065f368b6b4fd1c519fcf9726b->leave($__internal_92fa0c2cfc61495278a164e29d980d0a87b735065f368b6b4fd1c519fcf9726b_prof);

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
