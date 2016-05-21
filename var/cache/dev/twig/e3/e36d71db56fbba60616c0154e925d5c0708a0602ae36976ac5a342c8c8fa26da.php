<?php

/* GmaoMoulageBundle:Moule:ajouter.html.twig */
class __TwigTemplate_77a5cd9771e162ace70ccacf6cccca1a003588d9d627417f807d9c6968b6ce18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Moule:ajouter.html.twig", 1);
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
        $__internal_e55b71069582b94bb6d8ce9c420f5a171ea78739539fd764fab098cee25392a2 = $this->env->getExtension("native_profiler");
        $__internal_e55b71069582b94bb6d8ce9c420f5a171ea78739539fd764fab098cee25392a2->enter($__internal_e55b71069582b94bb6d8ce9c420f5a171ea78739539fd764fab098cee25392a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Moule:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e55b71069582b94bb6d8ce9c420f5a171ea78739539fd764fab098cee25392a2->leave($__internal_e55b71069582b94bb6d8ce9c420f5a171ea78739539fd764fab098cee25392a2_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_7508a8f10c9eb0845c8a5ac4d5fb1a889f186cce3b9d1dc33674c1adb02eb983 = $this->env->getExtension("native_profiler");
        $__internal_7508a8f10c9eb0845c8a5ac4d5fb1a889f186cce3b9d1dc33674c1adb02eb983->enter($__internal_7508a8f10c9eb0845c8a5ac4d5fb1a889f186cce3b9d1dc33674c1adb02eb983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_7508a8f10c9eb0845c8a5ac4d5fb1a889f186cce3b9d1dc33674c1adb02eb983->leave($__internal_7508a8f10c9eb0845c8a5ac4d5fb1a889f186cce3b9d1dc33674c1adb02eb983_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a34ece8899d121f8b241b847b80c4151dbbf2a0e8270d6d96813f4d414f2846d = $this->env->getExtension("native_profiler");
        $__internal_a34ece8899d121f8b241b847b80c4151dbbf2a0e8270d6d96813f4d414f2846d->enter($__internal_a34ece8899d121f8b241b847b80c4151dbbf2a0e8270d6d96813f4d414f2846d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter un moule </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Moule:formulaire.html.twig", "GmaoMoulageBundle:Moule:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_a34ece8899d121f8b241b847b80c4151dbbf2a0e8270d6d96813f4d414f2846d->leave($__internal_a34ece8899d121f8b241b847b80c4151dbbf2a0e8270d6d96813f4d414f2846d_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Moule:ajouter.html.twig";
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
/*   <h2 class="ui dividing header" > Ajouter un moule </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Moule:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
