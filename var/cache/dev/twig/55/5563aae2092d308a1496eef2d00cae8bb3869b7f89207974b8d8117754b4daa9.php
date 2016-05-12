<?php

/* GmaoMoulageBundle:Presse:ajouter.html.twig */
class __TwigTemplate_b2520dbeb90dd9837cdbb57bb219cdbb2dce55e3f1bc5b72fdaff74a65e248e2 extends Twig_Template
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
        $__internal_96b6343478218e0212ec6ffcf99858593064c805f3e0dd27216f2b59a19fdda2 = $this->env->getExtension("native_profiler");
        $__internal_96b6343478218e0212ec6ffcf99858593064c805f3e0dd27216f2b59a19fdda2->enter($__internal_96b6343478218e0212ec6ffcf99858593064c805f3e0dd27216f2b59a19fdda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96b6343478218e0212ec6ffcf99858593064c805f3e0dd27216f2b59a19fdda2->leave($__internal_96b6343478218e0212ec6ffcf99858593064c805f3e0dd27216f2b59a19fdda2_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_b6648141ffa4e73ed6938f9ed2c7dd49fe5e7f8994074fdc6978e3e16e201462 = $this->env->getExtension("native_profiler");
        $__internal_b6648141ffa4e73ed6938f9ed2c7dd49fe5e7f8994074fdc6978e3e16e201462->enter($__internal_b6648141ffa4e73ed6938f9ed2c7dd49fe5e7f8994074fdc6978e3e16e201462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_b6648141ffa4e73ed6938f9ed2c7dd49fe5e7f8994074fdc6978e3e16e201462->leave($__internal_b6648141ffa4e73ed6938f9ed2c7dd49fe5e7f8994074fdc6978e3e16e201462_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c28d848c8464401e480fa51352dab36a6976ade7a2ced0f4c1cfddd83b9d12e1 = $this->env->getExtension("native_profiler");
        $__internal_c28d848c8464401e480fa51352dab36a6976ade7a2ced0f4c1cfddd83b9d12e1->enter($__internal_c28d848c8464401e480fa51352dab36a6976ade7a2ced0f4c1cfddd83b9d12e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une presse </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "GmaoMoulageBundle:Presse:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_c28d848c8464401e480fa51352dab36a6976ade7a2ced0f4c1cfddd83b9d12e1->leave($__internal_c28d848c8464401e480fa51352dab36a6976ade7a2ced0f4c1cfddd83b9d12e1_prof);

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
