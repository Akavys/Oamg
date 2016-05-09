<?php

/* GmaoMoulageBundle::layout.html.twig */
class __TwigTemplate_478fe344ee0ff63bce2b11441293c376db308909c5e8426ea9d7b80f55b10ba2 extends Twig_Template
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
        $__internal_0326431b272f3f06b58c681ba494ec3fafb25ab4eb39b77207e987a7431a5a6c = $this->env->getExtension("native_profiler");
        $__internal_0326431b272f3f06b58c681ba494ec3fafb25ab4eb39b77207e987a7431a5a6c->enter($__internal_0326431b272f3f06b58c681ba494ec3fafb25ab4eb39b77207e987a7431a5a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0326431b272f3f06b58c681ba494ec3fafb25ab4eb39b77207e987a7431a5a6c->leave($__internal_0326431b272f3f06b58c681ba494ec3fafb25ab4eb39b77207e987a7431a5a6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f3250ca3b236701742e556a66d38e714499ed82ec50ff678bc2ce6a38301295 = $this->env->getExtension("native_profiler");
        $__internal_2f3250ca3b236701742e556a66d38e714499ed82ec50ff678bc2ce6a38301295->enter($__internal_2f3250ca3b236701742e556a66d38e714499ed82ec50ff678bc2ce6a38301295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  GMAO - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2f3250ca3b236701742e556a66d38e714499ed82ec50ff678bc2ce6a38301295->leave($__internal_2f3250ca3b236701742e556a66d38e714499ed82ec50ff678bc2ce6a38301295_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_af5ec7a6ab17d6b2dd836d521f043d27cb266fb9d5c470c97d15caecd594bb65 = $this->env->getExtension("native_profiler");
        $__internal_af5ec7a6ab17d6b2dd836d521f043d27cb266fb9d5c470c97d15caecd594bb65->enter($__internal_af5ec7a6ab17d6b2dd836d521f043d27cb266fb9d5c470c97d15caecd594bb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af5ec7a6ab17d6b2dd836d521f043d27cb266fb9d5c470c97d15caecd594bb65->leave($__internal_af5ec7a6ab17d6b2dd836d521f043d27cb266fb9d5c470c97d15caecd594bb65_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_2bca0cbc2152c08ee265b24aa2aedc5d1cd507ee57761003df63412115076dfc = $this->env->getExtension("native_profiler");
        $__internal_2bca0cbc2152c08ee265b24aa2aedc5d1cd507ee57761003df63412115076dfc->enter($__internal_2bca0cbc2152c08ee265b24aa2aedc5d1cd507ee57761003df63412115076dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_2bca0cbc2152c08ee265b24aa2aedc5d1cd507ee57761003df63412115076dfc->leave($__internal_2bca0cbc2152c08ee265b24aa2aedc5d1cd507ee57761003df63412115076dfc_prof);

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
