<?php

/* @GmaoMoulage/layout.html.twig */
class __TwigTemplate_4b21f20b128687ba0b1922c81ffa0dd592eab2bcf25c2e3afb427761903b3923 extends Twig_Template
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
        $__internal_92f5d7e5109b3f629c17be14a50f466aa65c17f1ebb5897613627f81d1be0bac = $this->env->getExtension("native_profiler");
        $__internal_92f5d7e5109b3f629c17be14a50f466aa65c17f1ebb5897613627f81d1be0bac->enter($__internal_92f5d7e5109b3f629c17be14a50f466aa65c17f1ebb5897613627f81d1be0bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92f5d7e5109b3f629c17be14a50f466aa65c17f1ebb5897613627f81d1be0bac->leave($__internal_92f5d7e5109b3f629c17be14a50f466aa65c17f1ebb5897613627f81d1be0bac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_27c4388639d18e1b29a647c4b1c19677671843fdce31ffec8c533f85f271eb6f = $this->env->getExtension("native_profiler");
        $__internal_27c4388639d18e1b29a647c4b1c19677671843fdce31ffec8c533f85f271eb6f->enter($__internal_27c4388639d18e1b29a647c4b1c19677671843fdce31ffec8c533f85f271eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  GMAO - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_27c4388639d18e1b29a647c4b1c19677671843fdce31ffec8c533f85f271eb6f->leave($__internal_27c4388639d18e1b29a647c4b1c19677671843fdce31ffec8c533f85f271eb6f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e84de93c40bf33dd6d44d162da7ef490b09d480ecc3d9b6baa2e816afe23ec4e = $this->env->getExtension("native_profiler");
        $__internal_e84de93c40bf33dd6d44d162da7ef490b09d480ecc3d9b6baa2e816afe23ec4e->enter($__internal_e84de93c40bf33dd6d44d162da7ef490b09d480ecc3d9b6baa2e816afe23ec4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e84de93c40bf33dd6d44d162da7ef490b09d480ecc3d9b6baa2e816afe23ec4e->leave($__internal_e84de93c40bf33dd6d44d162da7ef490b09d480ecc3d9b6baa2e816afe23ec4e_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_6ad7cd0cfc200e0256fc38153da5b32933530fd8bd0a6a6f0c46aa54a14bc84f = $this->env->getExtension("native_profiler");
        $__internal_6ad7cd0cfc200e0256fc38153da5b32933530fd8bd0a6a6f0c46aa54a14bc84f->enter($__internal_6ad7cd0cfc200e0256fc38153da5b32933530fd8bd0a6a6f0c46aa54a14bc84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_6ad7cd0cfc200e0256fc38153da5b32933530fd8bd0a6a6f0c46aa54a14bc84f->leave($__internal_6ad7cd0cfc200e0256fc38153da5b32933530fd8bd0a6a6f0c46aa54a14bc84f_prof);

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
