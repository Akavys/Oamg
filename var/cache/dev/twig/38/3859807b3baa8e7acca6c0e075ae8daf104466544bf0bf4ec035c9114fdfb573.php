<?php

/* @GmaoMoulage/Presse/ajouter.html.twig */
class __TwigTemplate_7675f022f4c1f05952c5745fa70a22d3f06ee9d5537da1f465b63dd8fb2a43ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Presse/ajouter.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0668a043f37e750ebf205bdde6cbdf319a6ab9bbc3f14a8744b366df04dbe5a0 = $this->env->getExtension("native_profiler");
        $__internal_0668a043f37e750ebf205bdde6cbdf319a6ab9bbc3f14a8744b366df04dbe5a0->enter($__internal_0668a043f37e750ebf205bdde6cbdf319a6ab9bbc3f14a8744b366df04dbe5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0668a043f37e750ebf205bdde6cbdf319a6ab9bbc3f14a8744b366df04dbe5a0->leave($__internal_0668a043f37e750ebf205bdde6cbdf319a6ab9bbc3f14a8744b366df04dbe5a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12cc1d1858486efd005ffec0a09c91bb250fa546b0be72a5017ae93c9c67f45 = $this->env->getExtension("native_profiler");
        $__internal_e12cc1d1858486efd005ffec0a09c91bb250fa546b0be72a5017ae93c9c67f45->enter($__internal_e12cc1d1858486efd005ffec0a09c91bb250fa546b0be72a5017ae93c9c67f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h2> Ajouter une presse </h2>

  ";
        // line 7
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "@GmaoMoulage/Presse/ajouter.html.twig", 7)->display($context);
        // line 8
        echo "
  <p>
    Attention: cet article sera ajouté directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_e12cc1d1858486efd005ffec0a09c91bb250fa546b0be72a5017ae93c9c67f45->leave($__internal_e12cc1d1858486efd005ffec0a09c91bb250fa546b0be72a5017ae93c9c67f45_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Presse/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2> Ajouter une presse </h2>*/
/* */
/*   {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
/* */
/*   <p>*/
/*     Attention: cet article sera ajouté directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
