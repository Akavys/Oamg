<?php

/* GmaoMoulageBundle:Reference:ajouter.html.twig */
class __TwigTemplate_9358eaeb33264021ed98bf2d5be09fd99a35c4f59aa7bf3aa15c0a7f04f2a955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Reference:ajouter.html.twig", 1);
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
        $__internal_f46aca36cdf711ec5e280c701f1c33dd6f5861fff0d7ff495b2efe29a65837e8 = $this->env->getExtension("native_profiler");
        $__internal_f46aca36cdf711ec5e280c701f1c33dd6f5861fff0d7ff495b2efe29a65837e8->enter($__internal_f46aca36cdf711ec5e280c701f1c33dd6f5861fff0d7ff495b2efe29a65837e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46aca36cdf711ec5e280c701f1c33dd6f5861fff0d7ff495b2efe29a65837e8->leave($__internal_f46aca36cdf711ec5e280c701f1c33dd6f5861fff0d7ff495b2efe29a65837e8_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_8184c4c92a67c03ee907888991f690e15a2c1fc3f6a4f9f4c1bc53f064d41c39 = $this->env->getExtension("native_profiler");
        $__internal_8184c4c92a67c03ee907888991f690e15a2c1fc3f6a4f9f4c1bc53f064d41c39->enter($__internal_8184c4c92a67c03ee907888991f690e15a2c1fc3f6a4f9f4c1bc53f064d41c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_8184c4c92a67c03ee907888991f690e15a2c1fc3f6a4f9f4c1bc53f064d41c39->leave($__internal_8184c4c92a67c03ee907888991f690e15a2c1fc3f6a4f9f4c1bc53f064d41c39_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1847bf9801e5736ed30d04217ebf62e46f297012dd5a094895012ffff6865715 = $this->env->getExtension("native_profiler");
        $__internal_1847bf9801e5736ed30d04217ebf62e46f297012dd5a094895012ffff6865715->enter($__internal_1847bf9801e5736ed30d04217ebf62e46f297012dd5a094895012ffff6865715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une référence </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Reference:formulaire.html.twig", "GmaoMoulageBundle:Reference:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_1847bf9801e5736ed30d04217ebf62e46f297012dd5a094895012ffff6865715->leave($__internal_1847bf9801e5736ed30d04217ebf62e46f297012dd5a094895012ffff6865715_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Reference:ajouter.html.twig";
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
