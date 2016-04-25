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
        $__internal_a57f5413116a87c1a808077f1ddd87c690f4df5672a80d9ecd6f20d2415c1810 = $this->env->getExtension("native_profiler");
        $__internal_a57f5413116a87c1a808077f1ddd87c690f4df5672a80d9ecd6f20d2415c1810->enter($__internal_a57f5413116a87c1a808077f1ddd87c690f4df5672a80d9ecd6f20d2415c1810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a57f5413116a87c1a808077f1ddd87c690f4df5672a80d9ecd6f20d2415c1810->leave($__internal_a57f5413116a87c1a808077f1ddd87c690f4df5672a80d9ecd6f20d2415c1810_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_98d48abd74b6acf164cb1f051afac28a78701a9f0b8e989fcb46b59a5c3a6b3a = $this->env->getExtension("native_profiler");
        $__internal_98d48abd74b6acf164cb1f051afac28a78701a9f0b8e989fcb46b59a5c3a6b3a->enter($__internal_98d48abd74b6acf164cb1f051afac28a78701a9f0b8e989fcb46b59a5c3a6b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Gmao - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_98d48abd74b6acf164cb1f051afac28a78701a9f0b8e989fcb46b59a5c3a6b3a->leave($__internal_98d48abd74b6acf164cb1f051afac28a78701a9f0b8e989fcb46b59a5c3a6b3a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfed49eccaef24a7e5deb0370d376358d7782b2dc47e30cd4b63f12f79602f59 = $this->env->getExtension("native_profiler");
        $__internal_bfed49eccaef24a7e5deb0370d376358d7782b2dc47e30cd4b63f12f79602f59->enter($__internal_bfed49eccaef24a7e5deb0370d376358d7782b2dc47e30cd4b63f12f79602f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h1>Gmao</h1>

  <hr>

  ";
        // line 13
        $this->displayBlock('gmaoMoulage_body', $context, $blocks);
        // line 15
        echo "
";
        
        $__internal_bfed49eccaef24a7e5deb0370d376358d7782b2dc47e30cd4b63f12f79602f59->leave($__internal_bfed49eccaef24a7e5deb0370d376358d7782b2dc47e30cd4b63f12f79602f59_prof);

    }

    // line 13
    public function block_gmaoMoulage_body($context, array $blocks = array())
    {
        $__internal_5df36bb029ebe2986f6ebefc68dcca39bed91adaf1f58b7453accb4bff7ead79 = $this->env->getExtension("native_profiler");
        $__internal_5df36bb029ebe2986f6ebefc68dcca39bed91adaf1f58b7453accb4bff7ead79->enter($__internal_5df36bb029ebe2986f6ebefc68dcca39bed91adaf1f58b7453accb4bff7ead79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gmaoMoulage_body"));

        // line 14
        echo "  ";
        
        $__internal_5df36bb029ebe2986f6ebefc68dcca39bed91adaf1f58b7453accb4bff7ead79->leave($__internal_5df36bb029ebe2986f6ebefc68dcca39bed91adaf1f58b7453accb4bff7ead79_prof);

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
/*   Gmao - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h1>Gmao</h1>*/
/* */
/*   <hr>*/
/* */
/*   {% block gmaoMoulage_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
