<?php

/* @GmaoMoulage/Presse/ajouter.html.twig */
class __TwigTemplate_7675f022f4c1f05952c5745fa70a22d3f06ee9d5537da1f465b63dd8fb2a43ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Presse/ajouter.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ec594488a5e7dd9f2b84b3bb934798c887043c90207dda59a6e2ed332704c59 = $this->env->getExtension("native_profiler");
        $__internal_1ec594488a5e7dd9f2b84b3bb934798c887043c90207dda59a6e2ed332704c59->enter($__internal_1ec594488a5e7dd9f2b84b3bb934798c887043c90207dda59a6e2ed332704c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ec594488a5e7dd9f2b84b3bb934798c887043c90207dda59a6e2ed332704c59->leave($__internal_1ec594488a5e7dd9f2b84b3bb934798c887043c90207dda59a6e2ed332704c59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_206c8de977cc13ab114d51e834575a22b8b7f33ed737de1a45118718dd03a69d = $this->env->getExtension("native_profiler");
        $__internal_206c8de977cc13ab114d51e834575a22b8b7f33ed737de1a45118718dd03a69d->enter($__internal_206c8de977cc13ab114d51e834575a22b8b7f33ed737de1a45118718dd03a69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h1> Ajouter une presse </h1>

  ";
        // line 7
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "@GmaoMoulage/Presse/ajouter.html.twig", 7)->display($context);
        // line 8
        echo "
";
        
        $__internal_206c8de977cc13ab114d51e834575a22b8b7f33ed737de1a45118718dd03a69d->leave($__internal_206c8de977cc13ab114d51e834575a22b8b7f33ed737de1a45118718dd03a69d_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Presse/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h1> Ajouter une presse </h1>*/
/* */
/*   {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
