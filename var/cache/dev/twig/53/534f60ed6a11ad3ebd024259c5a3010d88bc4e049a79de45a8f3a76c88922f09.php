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
        $__internal_942912c757e9061c7d26ba6200c11712b2ee1893061fd202fd57e1896f869b45 = $this->env->getExtension("native_profiler");
        $__internal_942912c757e9061c7d26ba6200c11712b2ee1893061fd202fd57e1896f869b45->enter($__internal_942912c757e9061c7d26ba6200c11712b2ee1893061fd202fd57e1896f869b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_942912c757e9061c7d26ba6200c11712b2ee1893061fd202fd57e1896f869b45->leave($__internal_942912c757e9061c7d26ba6200c11712b2ee1893061fd202fd57e1896f869b45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42832459cecdf9dcaf4857fa9912f2e921644633cfff99d0a81b3adcb3e4267c = $this->env->getExtension("native_profiler");
        $__internal_42832459cecdf9dcaf4857fa9912f2e921644633cfff99d0a81b3adcb3e4267c->enter($__internal_42832459cecdf9dcaf4857fa9912f2e921644633cfff99d0a81b3adcb3e4267c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une presse - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_42832459cecdf9dcaf4857fa9912f2e921644633cfff99d0a81b3adcb3e4267c->leave($__internal_42832459cecdf9dcaf4857fa9912f2e921644633cfff99d0a81b3adcb3e4267c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f269824c396d5ddc64e087e66deb605f2acad91c7bf28f75dcee808f78f06b17 = $this->env->getExtension("native_profiler");
        $__internal_f269824c396d5ddc64e087e66deb605f2acad91c7bf28f75dcee808f78f06b17->enter($__internal_f269824c396d5ddc64e087e66deb605f2acad91c7bf28f75dcee808f78f06b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f269824c396d5ddc64e087e66deb605f2acad91c7bf28f75dcee808f78f06b17->leave($__internal_f269824c396d5ddc64e087e66deb605f2acad91c7bf28f75dcee808f78f06b17_prof);

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
