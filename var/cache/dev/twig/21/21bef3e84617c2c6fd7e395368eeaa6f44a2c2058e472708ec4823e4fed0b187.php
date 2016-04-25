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
        $__internal_40caa49620cadfac366b9a1a059a5acb89c8ac2fceca6a7553bbd6411ce9c5ef = $this->env->getExtension("native_profiler");
        $__internal_40caa49620cadfac366b9a1a059a5acb89c8ac2fceca6a7553bbd6411ce9c5ef->enter($__internal_40caa49620cadfac366b9a1a059a5acb89c8ac2fceca6a7553bbd6411ce9c5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40caa49620cadfac366b9a1a059a5acb89c8ac2fceca6a7553bbd6411ce9c5ef->leave($__internal_40caa49620cadfac366b9a1a059a5acb89c8ac2fceca6a7553bbd6411ce9c5ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7471b73080bda673397b8dc63f911d1988e8d0be98d3031eb5d32e63dd832051 = $this->env->getExtension("native_profiler");
        $__internal_7471b73080bda673397b8dc63f911d1988e8d0be98d3031eb5d32e63dd832051->enter($__internal_7471b73080bda673397b8dc63f911d1988e8d0be98d3031eb5d32e63dd832051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  GMAO - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7471b73080bda673397b8dc63f911d1988e8d0be98d3031eb5d32e63dd832051->leave($__internal_7471b73080bda673397b8dc63f911d1988e8d0be98d3031eb5d32e63dd832051_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b9f8c2ac1241bb06603215f62e06a5b26dd2f706ce824d0ab52346961046f33 = $this->env->getExtension("native_profiler");
        $__internal_3b9f8c2ac1241bb06603215f62e06a5b26dd2f706ce824d0ab52346961046f33->enter($__internal_3b9f8c2ac1241bb06603215f62e06a5b26dd2f706ce824d0ab52346961046f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b9f8c2ac1241bb06603215f62e06a5b26dd2f706ce824d0ab52346961046f33->leave($__internal_3b9f8c2ac1241bb06603215f62e06a5b26dd2f706ce824d0ab52346961046f33_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_8740c387d032e5319cba0cb2df8599f96ee420615f19e4aaa3350ea0b9eb89e1 = $this->env->getExtension("native_profiler");
        $__internal_8740c387d032e5319cba0cb2df8599f96ee420615f19e4aaa3350ea0b9eb89e1->enter($__internal_8740c387d032e5319cba0cb2df8599f96ee420615f19e4aaa3350ea0b9eb89e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_8740c387d032e5319cba0cb2df8599f96ee420615f19e4aaa3350ea0b9eb89e1->leave($__internal_8740c387d032e5319cba0cb2df8599f96ee420615f19e4aaa3350ea0b9eb89e1_prof);

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
