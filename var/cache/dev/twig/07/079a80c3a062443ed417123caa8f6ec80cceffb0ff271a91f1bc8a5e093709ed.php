<?php

/* GmaoMoulageBundle::layout.html.twig */
class __TwigTemplate_550a125f5cb676f008f5984e214e6ad5761d986e23b4a546115327917e88bf32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GmaoMoulageBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'gmaoMoulage_body' => array($this, 'block_gmaoMoulage_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de2d8fb6821ff4f962b7fb1a0c03a5033d4cccda481959a72a0b39436932ec02 = $this->env->getExtension("native_profiler");
        $__internal_de2d8fb6821ff4f962b7fb1a0c03a5033d4cccda481959a72a0b39436932ec02->enter($__internal_de2d8fb6821ff4f962b7fb1a0c03a5033d4cccda481959a72a0b39436932ec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de2d8fb6821ff4f962b7fb1a0c03a5033d4cccda481959a72a0b39436932ec02->leave($__internal_de2d8fb6821ff4f962b7fb1a0c03a5033d4cccda481959a72a0b39436932ec02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e3870c9206b81b0c7bcf141a4271ca11d1c7c111e8cd2aee3747f20138844c7 = $this->env->getExtension("native_profiler");
        $__internal_5e3870c9206b81b0c7bcf141a4271ca11d1c7c111e8cd2aee3747f20138844c7->enter($__internal_5e3870c9206b81b0c7bcf141a4271ca11d1c7c111e8cd2aee3747f20138844c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  GMAO - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5e3870c9206b81b0c7bcf141a4271ca11d1c7c111e8cd2aee3747f20138844c7->leave($__internal_5e3870c9206b81b0c7bcf141a4271ca11d1c7c111e8cd2aee3747f20138844c7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3eab7a691a63b0a1984cde6d6229046b0d6bb28b5bae0303cce8fca9d90c786 = $this->env->getExtension("native_profiler");
        $__internal_c3eab7a691a63b0a1984cde6d6229046b0d6bb28b5bae0303cce8fca9d90c786->enter($__internal_c3eab7a691a63b0a1984cde6d6229046b0d6bb28b5bae0303cce8fca9d90c786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h1>GMAO</h1>

  <hr>

  ";
        // line 13
        $this->displayBlock('gmaoMoulage_body', $context, $blocks);
        // line 15
        echo "
";
        
        $__internal_c3eab7a691a63b0a1984cde6d6229046b0d6bb28b5bae0303cce8fca9d90c786->leave($__internal_c3eab7a691a63b0a1984cde6d6229046b0d6bb28b5bae0303cce8fca9d90c786_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_e2fd3c97795c865aa02010450775712c98ee220231cb30114494eb76029fdf8e = $this->env->getExtension("native_profiler");
        $__internal_e2fd3c97795c865aa02010450775712c98ee220231cb30114494eb76029fdf8e->enter($__internal_e2fd3c97795c865aa02010450775712c98ee220231cb30114494eb76029fdf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_e2fd3c97795c865aa02010450775712c98ee220231cb30114494eb76029fdf8e->leave($__internal_e2fd3c97795c865aa02010450775712c98ee220231cb30114494eb76029fdf8e_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  75 => 13,  67 => 15,  65 => 13,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   GMAO - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h1>GMAO</h1>*/
/* */
/*   <hr>*/
/* */
/*   {% block gmaoMoulage_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
