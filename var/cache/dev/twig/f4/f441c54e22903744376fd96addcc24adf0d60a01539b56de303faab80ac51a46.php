<?php

/* @GmaoMoulage/Moule/ajouter.html.twig */
class __TwigTemplate_3a3021a81f2411ab437fbba8b323008ef3070369f27db05acb3775fbdb4daafc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Moule/ajouter.html.twig", 1);
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
        $__internal_99c122367117ac52b7f6e0276c297c7769e9531ba499773b88c13e7543374db5 = $this->env->getExtension("native_profiler");
        $__internal_99c122367117ac52b7f6e0276c297c7769e9531ba499773b88c13e7543374db5->enter($__internal_99c122367117ac52b7f6e0276c297c7769e9531ba499773b88c13e7543374db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Moule/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c122367117ac52b7f6e0276c297c7769e9531ba499773b88c13e7543374db5->leave($__internal_99c122367117ac52b7f6e0276c297c7769e9531ba499773b88c13e7543374db5_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_0ec46dfb4ad54c21ebc0a50ecf40f04d187dfc728a03b85e1cb8fab0ce2ee138 = $this->env->getExtension("native_profiler");
        $__internal_0ec46dfb4ad54c21ebc0a50ecf40f04d187dfc728a03b85e1cb8fab0ce2ee138->enter($__internal_0ec46dfb4ad54c21ebc0a50ecf40f04d187dfc728a03b85e1cb8fab0ce2ee138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_0ec46dfb4ad54c21ebc0a50ecf40f04d187dfc728a03b85e1cb8fab0ce2ee138->leave($__internal_0ec46dfb4ad54c21ebc0a50ecf40f04d187dfc728a03b85e1cb8fab0ce2ee138_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_48f44ce5e2fd367b0dcdc6df6ea205f1de09c4e4619c5e49e0ddbd307393e456 = $this->env->getExtension("native_profiler");
        $__internal_48f44ce5e2fd367b0dcdc6df6ea205f1de09c4e4619c5e49e0ddbd307393e456->enter($__internal_48f44ce5e2fd367b0dcdc6df6ea205f1de09c4e4619c5e49e0ddbd307393e456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter un moule </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Moule:formulaire.html.twig", "@GmaoMoulage/Moule/ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_48f44ce5e2fd367b0dcdc6df6ea205f1de09c4e4619c5e49e0ddbd307393e456->leave($__internal_48f44ce5e2fd367b0dcdc6df6ea205f1de09c4e4619c5e49e0ddbd307393e456_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Moule/ajouter.html.twig";
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
