<?php

/* GmaoMoulageBundle::layout.html.twig */
class __TwigTemplate_9fbab3621512fc0038c1a5d7af89d746f1b8916c22c34711fd1758243469edec extends Twig_Template
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
        $__internal_662381c07265cc702704b7eab6bb4d9f5500b0f144bcdd017214dba604dae720 = $this->env->getExtension("native_profiler");
        $__internal_662381c07265cc702704b7eab6bb4d9f5500b0f144bcdd017214dba604dae720->enter($__internal_662381c07265cc702704b7eab6bb4d9f5500b0f144bcdd017214dba604dae720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_662381c07265cc702704b7eab6bb4d9f5500b0f144bcdd017214dba604dae720->leave($__internal_662381c07265cc702704b7eab6bb4d9f5500b0f144bcdd017214dba604dae720_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5f050f5be799aba60f9d9f8894cbdb252dedd363993757dbf8e557273a737c7 = $this->env->getExtension("native_profiler");
        $__internal_b5f050f5be799aba60f9d9f8894cbdb252dedd363993757dbf8e557273a737c7->enter($__internal_b5f050f5be799aba60f9d9f8894cbdb252dedd363993757dbf8e557273a737c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  GMAO - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b5f050f5be799aba60f9d9f8894cbdb252dedd363993757dbf8e557273a737c7->leave($__internal_b5f050f5be799aba60f9d9f8894cbdb252dedd363993757dbf8e557273a737c7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0085ab34288000b4bb0994d1e61fcfe3ae1e587a4184cb870ea129d67fea9860 = $this->env->getExtension("native_profiler");
        $__internal_0085ab34288000b4bb0994d1e61fcfe3ae1e587a4184cb870ea129d67fea9860->enter($__internal_0085ab34288000b4bb0994d1e61fcfe3ae1e587a4184cb870ea129d67fea9860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0085ab34288000b4bb0994d1e61fcfe3ae1e587a4184cb870ea129d67fea9860->leave($__internal_0085ab34288000b4bb0994d1e61fcfe3ae1e587a4184cb870ea129d67fea9860_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_3f150bdf0ea84225e94003923f15d9d055a45c4c8dc063d926753246a1dc476e = $this->env->getExtension("native_profiler");
        $__internal_3f150bdf0ea84225e94003923f15d9d055a45c4c8dc063d926753246a1dc476e->enter($__internal_3f150bdf0ea84225e94003923f15d9d055a45c4c8dc063d926753246a1dc476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_3f150bdf0ea84225e94003923f15d9d055a45c4c8dc063d926753246a1dc476e->leave($__internal_3f150bdf0ea84225e94003923f15d9d055a45c4c8dc063d926753246a1dc476e_prof);

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
