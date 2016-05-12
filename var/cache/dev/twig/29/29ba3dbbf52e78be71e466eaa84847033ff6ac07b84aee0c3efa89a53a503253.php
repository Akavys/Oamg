<?php

/* @GmaoMoulage/Reference/ajouter.html.twig */
class __TwigTemplate_cfe76181f532159fec0fadd4645344ad77caf7bcc8f5ca53e8e3a1faf32886c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Reference/ajouter.html.twig", 1);
        $this->blocks = array(
            'tittle' => array($this, 'block_tittle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b32155883913035ee0ef30a0cfd5f7dc8d6c0d15de1f577cde19fc7d602ef19 = $this->env->getExtension("native_profiler");
        $__internal_8b32155883913035ee0ef30a0cfd5f7dc8d6c0d15de1f577cde19fc7d602ef19->enter($__internal_8b32155883913035ee0ef30a0cfd5f7dc8d6c0d15de1f577cde19fc7d602ef19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Reference/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b32155883913035ee0ef30a0cfd5f7dc8d6c0d15de1f577cde19fc7d602ef19->leave($__internal_8b32155883913035ee0ef30a0cfd5f7dc8d6c0d15de1f577cde19fc7d602ef19_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_d56c7f2cbe4cff3f55667696dc8715790c9040533272d16ac2b0e06c52961021 = $this->env->getExtension("native_profiler");
        $__internal_d56c7f2cbe4cff3f55667696dc8715790c9040533272d16ac2b0e06c52961021->enter($__internal_d56c7f2cbe4cff3f55667696dc8715790c9040533272d16ac2b0e06c52961021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_d56c7f2cbe4cff3f55667696dc8715790c9040533272d16ac2b0e06c52961021->leave($__internal_d56c7f2cbe4cff3f55667696dc8715790c9040533272d16ac2b0e06c52961021_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d17f35f3c958018f10642e583a27cd960c099b2216660d81ea0dec89bc811b14 = $this->env->getExtension("native_profiler");
        $__internal_d17f35f3c958018f10642e583a27cd960c099b2216660d81ea0dec89bc811b14->enter($__internal_d17f35f3c958018f10642e583a27cd960c099b2216660d81ea0dec89bc811b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une référence </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Reference:formulaire.html.twig", "@GmaoMoulage/Reference/ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_d17f35f3c958018f10642e583a27cd960c099b2216660d81ea0dec89bc811b14->leave($__internal_d17f35f3c958018f10642e583a27cd960c099b2216660d81ea0dec89bc811b14_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Reference/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block tittle %}*/
/*   Ajouter - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header" > Ajouter une référence </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Reference:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
