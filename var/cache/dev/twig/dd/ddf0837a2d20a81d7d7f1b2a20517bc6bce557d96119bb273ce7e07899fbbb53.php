<?php

/* @GmaoMoulage/Presse/ajouter.html.twig */
class __TwigTemplate_a17ea170c55b915b84024449a1ab2016a03a4402ad56c3e85258e7d10c7e8370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Presse/ajouter.html.twig", 1);
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
        $__internal_6c6f3267f486dac8954269c501e8a34150657c313750360a8d01dd09daf4ed9c = $this->env->getExtension("native_profiler");
        $__internal_6c6f3267f486dac8954269c501e8a34150657c313750360a8d01dd09daf4ed9c->enter($__internal_6c6f3267f486dac8954269c501e8a34150657c313750360a8d01dd09daf4ed9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c6f3267f486dac8954269c501e8a34150657c313750360a8d01dd09daf4ed9c->leave($__internal_6c6f3267f486dac8954269c501e8a34150657c313750360a8d01dd09daf4ed9c_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_aa9f2be3fbd1bcd8cfd13f155154f720c530fb520037c03fe4dbd5510003a160 = $this->env->getExtension("native_profiler");
        $__internal_aa9f2be3fbd1bcd8cfd13f155154f720c530fb520037c03fe4dbd5510003a160->enter($__internal_aa9f2be3fbd1bcd8cfd13f155154f720c530fb520037c03fe4dbd5510003a160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_aa9f2be3fbd1bcd8cfd13f155154f720c530fb520037c03fe4dbd5510003a160->leave($__internal_aa9f2be3fbd1bcd8cfd13f155154f720c530fb520037c03fe4dbd5510003a160_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2f3f1a09bb99a8a5e96117dedc4c2baa8f9d5526ee35d8d5f9974de07285630 = $this->env->getExtension("native_profiler");
        $__internal_d2f3f1a09bb99a8a5e96117dedc4c2baa8f9d5526ee35d8d5f9974de07285630->enter($__internal_d2f3f1a09bb99a8a5e96117dedc4c2baa8f9d5526ee35d8d5f9974de07285630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une presse </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "@GmaoMoulage/Presse/ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_d2f3f1a09bb99a8a5e96117dedc4c2baa8f9d5526ee35d8d5f9974de07285630->leave($__internal_d2f3f1a09bb99a8a5e96117dedc4c2baa8f9d5526ee35d8d5f9974de07285630_prof);

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
