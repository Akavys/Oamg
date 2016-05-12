<?php

/* GmaoMoulageBundle:Moule:modifier.html.twig */
class __TwigTemplate_b04c1a833e508899311ea7485d2cb0bf4d325326baa95d78c5e98a04d2b55035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Moule:modifier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d0055055ecd351ba3b6ab193d8c6c981707ab65faa089dfa58f04b79be26823 = $this->env->getExtension("native_profiler");
        $__internal_6d0055055ecd351ba3b6ab193d8c6c981707ab65faa089dfa58f04b79be26823->enter($__internal_6d0055055ecd351ba3b6ab193d8c6c981707ab65faa089dfa58f04b79be26823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Moule:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d0055055ecd351ba3b6ab193d8c6c981707ab65faa089dfa58f04b79be26823->leave($__internal_6d0055055ecd351ba3b6ab193d8c6c981707ab65faa089dfa58f04b79be26823_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f264713e5a1aac98e6418361f0526c5d46c384a935f2bea344565d7d48d3be5 = $this->env->getExtension("native_profiler");
        $__internal_1f264713e5a1aac98e6418361f0526c5d46c384a935f2bea344565d7d48d3be5->enter($__internal_1f264713e5a1aac98e6418361f0526c5d46c384a935f2bea344565d7d48d3be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier un moule - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1f264713e5a1aac98e6418361f0526c5d46c384a935f2bea344565d7d48d3be5->leave($__internal_1f264713e5a1aac98e6418361f0526c5d46c384a935f2bea344565d7d48d3be5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2b2ba7a48de0f417e9e9001c7da78a9cbbf50e5af005e3dbad59e21308f367f = $this->env->getExtension("native_profiler");
        $__internal_d2b2ba7a48de0f417e9e9001c7da78a9cbbf50e5af005e3dbad59e21308f367f->enter($__internal_d2b2ba7a48de0f417e9e9001c7da78a9cbbf50e5af005e3dbad59e21308f367f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\">Modifier un moule</h2>

  ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Moule:formulaire.html.twig", "GmaoMoulageBundle:Moule:modifier.html.twig", 11)->display($context);
        // line 12
        echo "
  <p>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_moule");
        echo "\" class=\"ui orange button\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
      Retour vers la page liste moule
    </a>
  </p>


";
        
        $__internal_d2b2ba7a48de0f417e9e9001c7da78a9cbbf50e5af005e3dbad59e21308f367f->leave($__internal_d2b2ba7a48de0f417e9e9001c7da78a9cbbf50e5af005e3dbad59e21308f367f_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Moule:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un moule - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header">Modifier un moule</h2>*/
/* */
/*   {% include "GmaoMoulageBundle:Moule:formulaire.html.twig" %}*/
/* */
/*   <p>*/
/*     <a href="{{ path('gmao_moulage_liste_moule') }}" class="ui orange button">*/
/*       <i class="glyphicon glyphicon-arrow-left"></i>*/
/*       Retour vers la page liste moule*/
/*     </a>*/
/*   </p>*/
/* */
/* */
/* {% endblock %}*/
/* */
