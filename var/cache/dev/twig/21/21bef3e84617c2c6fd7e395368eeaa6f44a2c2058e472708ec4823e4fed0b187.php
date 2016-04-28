<?php

/* GmaoMoulageBundle::layout.html.twig */
class __TwigTemplate_1ed035cfd7b712718084e374f66a95d14a9da764d2e5f7bbc3afb9f6ba882bbe extends Twig_Template
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
        $__internal_2d3ec628cae167cc7775be277acfbce9db50128ef46ba7e1c6d0e2543b1de4e5 = $this->env->getExtension("native_profiler");
        $__internal_2d3ec628cae167cc7775be277acfbce9db50128ef46ba7e1c6d0e2543b1de4e5->enter($__internal_2d3ec628cae167cc7775be277acfbce9db50128ef46ba7e1c6d0e2543b1de4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d3ec628cae167cc7775be277acfbce9db50128ef46ba7e1c6d0e2543b1de4e5->leave($__internal_2d3ec628cae167cc7775be277acfbce9db50128ef46ba7e1c6d0e2543b1de4e5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a036328582a749a78104094b568d10f9fe8d55a655798170c282da35e1a1876a = $this->env->getExtension("native_profiler");
        $__internal_a036328582a749a78104094b568d10f9fe8d55a655798170c282da35e1a1876a->enter($__internal_a036328582a749a78104094b568d10f9fe8d55a655798170c282da35e1a1876a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  GMAO - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a036328582a749a78104094b568d10f9fe8d55a655798170c282da35e1a1876a->leave($__internal_a036328582a749a78104094b568d10f9fe8d55a655798170c282da35e1a1876a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2feff4ddc825c68805a7c6d32c1c7623236020f699f9439612d1acac4e74a2ab = $this->env->getExtension("native_profiler");
        $__internal_2feff4ddc825c68805a7c6d32c1c7623236020f699f9439612d1acac4e74a2ab->enter($__internal_2feff4ddc825c68805a7c6d32c1c7623236020f699f9439612d1acac4e74a2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2feff4ddc825c68805a7c6d32c1c7623236020f699f9439612d1acac4e74a2ab->leave($__internal_2feff4ddc825c68805a7c6d32c1c7623236020f699f9439612d1acac4e74a2ab_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_c7a66f0c0c0370cf9d87980b94047853a2c6ea1336cfc3ae7b314f85cfac5e5d = $this->env->getExtension("native_profiler");
        $__internal_c7a66f0c0c0370cf9d87980b94047853a2c6ea1336cfc3ae7b314f85cfac5e5d->enter($__internal_c7a66f0c0c0370cf9d87980b94047853a2c6ea1336cfc3ae7b314f85cfac5e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_c7a66f0c0c0370cf9d87980b94047853a2c6ea1336cfc3ae7b314f85cfac5e5d->leave($__internal_c7a66f0c0c0370cf9d87980b94047853a2c6ea1336cfc3ae7b314f85cfac5e5d_prof);

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
