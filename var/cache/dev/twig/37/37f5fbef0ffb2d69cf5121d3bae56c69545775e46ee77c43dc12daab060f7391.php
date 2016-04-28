<?php

/* @GmaoMoulage/layout.html.twig */
class __TwigTemplate_6b1cf9694dcaae95ad5b900f1c35a0bf8f5716914a3e1b3c1ade13851c27d1d7 extends Twig_Template
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
        $__internal_81b91533d78dc25ad045ca2f9d54c7bc7e295e4a3f060a51ae848748293a2d9d = $this->env->getExtension("native_profiler");
        $__internal_81b91533d78dc25ad045ca2f9d54c7bc7e295e4a3f060a51ae848748293a2d9d->enter($__internal_81b91533d78dc25ad045ca2f9d54c7bc7e295e4a3f060a51ae848748293a2d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b91533d78dc25ad045ca2f9d54c7bc7e295e4a3f060a51ae848748293a2d9d->leave($__internal_81b91533d78dc25ad045ca2f9d54c7bc7e295e4a3f060a51ae848748293a2d9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25a895430892dc0bca358d2e9d84707d1ae1302aa4b83641e178def98c37abe3 = $this->env->getExtension("native_profiler");
        $__internal_25a895430892dc0bca358d2e9d84707d1ae1302aa4b83641e178def98c37abe3->enter($__internal_25a895430892dc0bca358d2e9d84707d1ae1302aa4b83641e178def98c37abe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  GMAO - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_25a895430892dc0bca358d2e9d84707d1ae1302aa4b83641e178def98c37abe3->leave($__internal_25a895430892dc0bca358d2e9d84707d1ae1302aa4b83641e178def98c37abe3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4cd472397a1ceaed9d831a8fa818f29f73576d0e6d4990eeebb893d80434041 = $this->env->getExtension("native_profiler");
        $__internal_a4cd472397a1ceaed9d831a8fa818f29f73576d0e6d4990eeebb893d80434041->enter($__internal_a4cd472397a1ceaed9d831a8fa818f29f73576d0e6d4990eeebb893d80434041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a4cd472397a1ceaed9d831a8fa818f29f73576d0e6d4990eeebb893d80434041->leave($__internal_a4cd472397a1ceaed9d831a8fa818f29f73576d0e6d4990eeebb893d80434041_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_97096afc6b90bb8dee05997f25bba0b4628a67f46e2040d247f234ee287a5141 = $this->env->getExtension("native_profiler");
        $__internal_97096afc6b90bb8dee05997f25bba0b4628a67f46e2040d247f234ee287a5141->enter($__internal_97096afc6b90bb8dee05997f25bba0b4628a67f46e2040d247f234ee287a5141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_97096afc6b90bb8dee05997f25bba0b4628a67f46e2040d247f234ee287a5141->leave($__internal_97096afc6b90bb8dee05997f25bba0b4628a67f46e2040d247f234ee287a5141_prof);

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
