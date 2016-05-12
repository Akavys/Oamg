<?php

/* @GmaoMoulage/Moule/modifier.html.twig */
class __TwigTemplate_2bd1170f74bcd299d0caa42f0e5175e15e638626054d7904e0cc38fafc320e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Moule/modifier.html.twig", 1);
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
        $__internal_5b032e2148d2a82552600f1cb04f4d40299c420a333929bff2ba0f63219e8e1d = $this->env->getExtension("native_profiler");
        $__internal_5b032e2148d2a82552600f1cb04f4d40299c420a333929bff2ba0f63219e8e1d->enter($__internal_5b032e2148d2a82552600f1cb04f4d40299c420a333929bff2ba0f63219e8e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Moule/modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b032e2148d2a82552600f1cb04f4d40299c420a333929bff2ba0f63219e8e1d->leave($__internal_5b032e2148d2a82552600f1cb04f4d40299c420a333929bff2ba0f63219e8e1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12261cb7c59b6082f50ad78dd252be0068d971e81a84e81a2e0173f7234ae99b = $this->env->getExtension("native_profiler");
        $__internal_12261cb7c59b6082f50ad78dd252be0068d971e81a84e81a2e0173f7234ae99b->enter($__internal_12261cb7c59b6082f50ad78dd252be0068d971e81a84e81a2e0173f7234ae99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier un moule - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_12261cb7c59b6082f50ad78dd252be0068d971e81a84e81a2e0173f7234ae99b->leave($__internal_12261cb7c59b6082f50ad78dd252be0068d971e81a84e81a2e0173f7234ae99b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_01c768d5878b8f16b722c65b563afa17e87bbdb80dfa0c5638019f75383ac686 = $this->env->getExtension("native_profiler");
        $__internal_01c768d5878b8f16b722c65b563afa17e87bbdb80dfa0c5638019f75383ac686->enter($__internal_01c768d5878b8f16b722c65b563afa17e87bbdb80dfa0c5638019f75383ac686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\">Modifier un moule</h2>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Moule:formulaire.html.twig", "@GmaoMoulage/Moule/modifier.html.twig", 11)->display($context);
        // line 12
        echo "
  <p>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_moule");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste moule
    </a>
  </p>


";
        
        $__internal_01c768d5878b8f16b722c65b563afa17e87bbdb80dfa0c5638019f75383ac686->leave($__internal_01c768d5878b8f16b722c65b563afa17e87bbdb80dfa0c5638019f75383ac686_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Moule/modifier.html.twig";
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
/*   Modifier un moule - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header">Modifier un moule</h2>*/
/* */
/*   {% include "GmaoMoulageBundle:Moule:formulaire.html.twig" %}*/
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
