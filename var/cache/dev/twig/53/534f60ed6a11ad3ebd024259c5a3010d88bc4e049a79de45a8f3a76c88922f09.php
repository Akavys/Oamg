<?php

/* GmaoMoulageBundle:Presse:modifier.html.twig */
class __TwigTemplate_f42d6f1fb865a93411a0f74f3425b9e73dfc57660b69e2ec4e579f647a4f8274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Presse:modifier.html.twig", 1);
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
        $__internal_932b9ba3931c8e4f1f1988f257423263770906bd4803cc3661bf934ea032d929 = $this->env->getExtension("native_profiler");
        $__internal_932b9ba3931c8e4f1f1988f257423263770906bd4803cc3661bf934ea032d929->enter($__internal_932b9ba3931c8e4f1f1988f257423263770906bd4803cc3661bf934ea032d929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_932b9ba3931c8e4f1f1988f257423263770906bd4803cc3661bf934ea032d929->leave($__internal_932b9ba3931c8e4f1f1988f257423263770906bd4803cc3661bf934ea032d929_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a237aae60e0d3b0c18475fed54f1174ab8ac8efde6d226ec4035445fffb56126 = $this->env->getExtension("native_profiler");
        $__internal_a237aae60e0d3b0c18475fed54f1174ab8ac8efde6d226ec4035445fffb56126->enter($__internal_a237aae60e0d3b0c18475fed54f1174ab8ac8efde6d226ec4035445fffb56126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a237aae60e0d3b0c18475fed54f1174ab8ac8efde6d226ec4035445fffb56126->leave($__internal_a237aae60e0d3b0c18475fed54f1174ab8ac8efde6d226ec4035445fffb56126_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f084438c77364fad8822222a05c1ab5cb22cd5476748027586ffa2faac2456b1 = $this->env->getExtension("native_profiler");
        $__internal_f084438c77364fad8822222a05c1ab5cb22cd5476748027586ffa2faac2456b1->enter($__internal_f084438c77364fad8822222a05c1ab5cb22cd5476748027586ffa2faac2456b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h1> Modifier une presse</h1>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "GmaoMoulageBundle:Presse:modifier.html.twig", 11)->display($context);
        // line 12
        echo "

  <p>
  Vous éditez un article déjà existant, ne le changez pas trop pour éviter aux membres de ne pas comprendre
  ce qu'il se passe.
  </p>
  <p>
  <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse");
        echo "\"
  class=\"btn\">
  <i class=\"icon-chevron-left\"></i> Retour vers la page liste presse
  </a> </p>


";
        
        $__internal_f084438c77364fad8822222a05c1ab5cb22cd5476748027586ffa2faac2456b1->leave($__internal_f084438c77364fad8822222a05c1ab5cb22cd5476748027586ffa2faac2456b1_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Presse:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*   <h1> Modifier une presse</h1>*/
/* */
/*   {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
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
