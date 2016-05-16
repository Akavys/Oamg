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
        $__internal_db532c2ba5dbb644831f240d304d70fae9522a6d68fa5031478847150191740e = $this->env->getExtension("native_profiler");
        $__internal_db532c2ba5dbb644831f240d304d70fae9522a6d68fa5031478847150191740e->enter($__internal_db532c2ba5dbb644831f240d304d70fae9522a6d68fa5031478847150191740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db532c2ba5dbb644831f240d304d70fae9522a6d68fa5031478847150191740e->leave($__internal_db532c2ba5dbb644831f240d304d70fae9522a6d68fa5031478847150191740e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffd65e97efed6f13d38b171db2bf8b0b9289645549373590ac4f47079652bb9b = $this->env->getExtension("native_profiler");
        $__internal_ffd65e97efed6f13d38b171db2bf8b0b9289645549373590ac4f47079652bb9b->enter($__internal_ffd65e97efed6f13d38b171db2bf8b0b9289645549373590ac4f47079652bb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  GMAO - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ffd65e97efed6f13d38b171db2bf8b0b9289645549373590ac4f47079652bb9b->leave($__internal_ffd65e97efed6f13d38b171db2bf8b0b9289645549373590ac4f47079652bb9b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dacb98bda8f00d48afde44484d9f2a62ae735420f6023782f32f8cd317e0626 = $this->env->getExtension("native_profiler");
        $__internal_6dacb98bda8f00d48afde44484d9f2a62ae735420f6023782f32f8cd317e0626->enter($__internal_6dacb98bda8f00d48afde44484d9f2a62ae735420f6023782f32f8cd317e0626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6dacb98bda8f00d48afde44484d9f2a62ae735420f6023782f32f8cd317e0626->leave($__internal_6dacb98bda8f00d48afde44484d9f2a62ae735420f6023782f32f8cd317e0626_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_b03efaadb87e02ce2fe5e4a84b7eff9062077e852c3cbb772b1883d3dc92babd = $this->env->getExtension("native_profiler");
        $__internal_b03efaadb87e02ce2fe5e4a84b7eff9062077e852c3cbb772b1883d3dc92babd->enter($__internal_b03efaadb87e02ce2fe5e4a84b7eff9062077e852c3cbb772b1883d3dc92babd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_b03efaadb87e02ce2fe5e4a84b7eff9062077e852c3cbb772b1883d3dc92babd->leave($__internal_b03efaadb87e02ce2fe5e4a84b7eff9062077e852c3cbb772b1883d3dc92babd_prof);

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
