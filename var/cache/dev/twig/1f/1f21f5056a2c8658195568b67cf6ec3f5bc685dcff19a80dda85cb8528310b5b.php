<?php

/* GmaoMoulageBundle:Presse:ajouter.html.twig */
class __TwigTemplate_d28331d1d55d2f5bd651955374d5d082b6c8795b30b7b7beca3364232bdd9def extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 1);
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
        $__internal_c8475998b2941cd3bac9bf2c2ee5d5d2ce14470a1769db521c24a80c75745678 = $this->env->getExtension("native_profiler");
        $__internal_c8475998b2941cd3bac9bf2c2ee5d5d2ce14470a1769db521c24a80c75745678->enter($__internal_c8475998b2941cd3bac9bf2c2ee5d5d2ce14470a1769db521c24a80c75745678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8475998b2941cd3bac9bf2c2ee5d5d2ce14470a1769db521c24a80c75745678->leave($__internal_c8475998b2941cd3bac9bf2c2ee5d5d2ce14470a1769db521c24a80c75745678_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_011bd966fca9cf8acb80af845f5ad5c5fa9052731cde4b9ab57d3d1ea438b865 = $this->env->getExtension("native_profiler");
        $__internal_011bd966fca9cf8acb80af845f5ad5c5fa9052731cde4b9ab57d3d1ea438b865->enter($__internal_011bd966fca9cf8acb80af845f5ad5c5fa9052731cde4b9ab57d3d1ea438b865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_011bd966fca9cf8acb80af845f5ad5c5fa9052731cde4b9ab57d3d1ea438b865->leave($__internal_011bd966fca9cf8acb80af845f5ad5c5fa9052731cde4b9ab57d3d1ea438b865_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_10c8eafe671057b579008385b9395c501b479887b228c22aead6501ce40b0c7f = $this->env->getExtension("native_profiler");
        $__internal_10c8eafe671057b579008385b9395c501b479887b228c22aead6501ce40b0c7f->enter($__internal_10c8eafe671057b579008385b9395c501b479887b228c22aead6501ce40b0c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une presse </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_10c8eafe671057b579008385b9395c501b479887b228c22aead6501ce40b0c7f->leave($__internal_10c8eafe671057b579008385b9395c501b479887b228c22aead6501ce40b0c7f_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Presse:ajouter.html.twig";
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
/*   Liste - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header" > Ajouter une presse </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
