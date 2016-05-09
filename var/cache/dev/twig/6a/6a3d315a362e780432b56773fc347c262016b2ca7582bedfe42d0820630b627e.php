<?php

/* @GmaoMoulage/layout.html.twig */
class __TwigTemplate_f0cfe1e238086bba339d1aa7fd46d45db2cb8e6d732c6e7e5f28a59231ae8df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@GmaoMoulage/layout.html.twig", 1);
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
        $__internal_8791845fd006cba09c6c81353dcbf72365d1ce53ae1823b9e858b190aaaf6fc3 = $this->env->getExtension("native_profiler");
        $__internal_8791845fd006cba09c6c81353dcbf72365d1ce53ae1823b9e858b190aaaf6fc3->enter($__internal_8791845fd006cba09c6c81353dcbf72365d1ce53ae1823b9e858b190aaaf6fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8791845fd006cba09c6c81353dcbf72365d1ce53ae1823b9e858b190aaaf6fc3->leave($__internal_8791845fd006cba09c6c81353dcbf72365d1ce53ae1823b9e858b190aaaf6fc3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1f2d719c033458f6faa2e43a56bbafc85ee7d10efd2a2203e2c5460d1f3674c = $this->env->getExtension("native_profiler");
        $__internal_c1f2d719c033458f6faa2e43a56bbafc85ee7d10efd2a2203e2c5460d1f3674c->enter($__internal_c1f2d719c033458f6faa2e43a56bbafc85ee7d10efd2a2203e2c5460d1f3674c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  GMAO - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c1f2d719c033458f6faa2e43a56bbafc85ee7d10efd2a2203e2c5460d1f3674c->leave($__internal_c1f2d719c033458f6faa2e43a56bbafc85ee7d10efd2a2203e2c5460d1f3674c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0f47b8490140ce2c768566e158c61e9dff3ae4c86a970e1643bb89cc5f06ca7 = $this->env->getExtension("native_profiler");
        $__internal_f0f47b8490140ce2c768566e158c61e9dff3ae4c86a970e1643bb89cc5f06ca7->enter($__internal_f0f47b8490140ce2c768566e158c61e9dff3ae4c86a970e1643bb89cc5f06ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0f47b8490140ce2c768566e158c61e9dff3ae4c86a970e1643bb89cc5f06ca7->leave($__internal_f0f47b8490140ce2c768566e158c61e9dff3ae4c86a970e1643bb89cc5f06ca7_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_100fac2e4fa6da16830aa3c1e4f4863f331ade04c49a07e9d5ad420e5a16f166 = $this->env->getExtension("native_profiler");
        $__internal_100fac2e4fa6da16830aa3c1e4f4863f331ade04c49a07e9d5ad420e5a16f166->enter($__internal_100fac2e4fa6da16830aa3c1e4f4863f331ade04c49a07e9d5ad420e5a16f166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_100fac2e4fa6da16830aa3c1e4f4863f331ade04c49a07e9d5ad420e5a16f166->leave($__internal_100fac2e4fa6da16830aa3c1e4f4863f331ade04c49a07e9d5ad420e5a16f166_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/layout.html.twig";
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
