<?php

/* GmaoMoulageBundle:Reference:ajouter.html.twig */
class __TwigTemplate_3be38a2093d3274188e93f44de3c8ee6ad58c6a15446691cb0fe903176573b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Reference:ajouter.html.twig", 1);
        $this->blocks = array(
            'tittle' => array($this, 'block_tittle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6541b45678a08696d545050182627428741b60b4639e1d64ff25deba78e8050c = $this->env->getExtension("native_profiler");
        $__internal_6541b45678a08696d545050182627428741b60b4639e1d64ff25deba78e8050c->enter($__internal_6541b45678a08696d545050182627428741b60b4639e1d64ff25deba78e8050c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6541b45678a08696d545050182627428741b60b4639e1d64ff25deba78e8050c->leave($__internal_6541b45678a08696d545050182627428741b60b4639e1d64ff25deba78e8050c_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_8d5dcadd330454a89fc03457230e14748844f66356a98a2647d3a9e4241c0c07 = $this->env->getExtension("native_profiler");
        $__internal_8d5dcadd330454a89fc03457230e14748844f66356a98a2647d3a9e4241c0c07->enter($__internal_8d5dcadd330454a89fc03457230e14748844f66356a98a2647d3a9e4241c0c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_8d5dcadd330454a89fc03457230e14748844f66356a98a2647d3a9e4241c0c07->leave($__internal_8d5dcadd330454a89fc03457230e14748844f66356a98a2647d3a9e4241c0c07_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b246660b0c8ec2fadb9331308bdb358125fdd4e84624cf3389e299c96754fd = $this->env->getExtension("native_profiler");
        $__internal_25b246660b0c8ec2fadb9331308bdb358125fdd4e84624cf3389e299c96754fd->enter($__internal_25b246660b0c8ec2fadb9331308bdb358125fdd4e84624cf3389e299c96754fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une référence </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Reference:formulaire.html.twig", "GmaoMoulageBundle:Reference:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_25b246660b0c8ec2fadb9331308bdb358125fdd4e84624cf3389e299c96754fd->leave($__internal_25b246660b0c8ec2fadb9331308bdb358125fdd4e84624cf3389e299c96754fd_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Reference:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block tittle %}*/
/*   Ajouter - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header" > Ajouter une référence </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Reference:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
