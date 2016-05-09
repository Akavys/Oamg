<?php

/* GmaoMoulageBundle:Reference:ajouter.html.twig */
class __TwigTemplate_e7f602e6081444aeb52f420531c7229c1b022990345e98a582a48830bc603a82 extends Twig_Template
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
        $__internal_d2c97ae5fdc1700f460847adb1a7ba8a21bd5586db9e26187804f953e21eef71 = $this->env->getExtension("native_profiler");
        $__internal_d2c97ae5fdc1700f460847adb1a7ba8a21bd5586db9e26187804f953e21eef71->enter($__internal_d2c97ae5fdc1700f460847adb1a7ba8a21bd5586db9e26187804f953e21eef71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Reference:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2c97ae5fdc1700f460847adb1a7ba8a21bd5586db9e26187804f953e21eef71->leave($__internal_d2c97ae5fdc1700f460847adb1a7ba8a21bd5586db9e26187804f953e21eef71_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_5181bd6365ea4e74292e786665dc98a90a4fea6fb38f7a77f2018d8d6ce64ec6 = $this->env->getExtension("native_profiler");
        $__internal_5181bd6365ea4e74292e786665dc98a90a4fea6fb38f7a77f2018d8d6ce64ec6->enter($__internal_5181bd6365ea4e74292e786665dc98a90a4fea6fb38f7a77f2018d8d6ce64ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_5181bd6365ea4e74292e786665dc98a90a4fea6fb38f7a77f2018d8d6ce64ec6->leave($__internal_5181bd6365ea4e74292e786665dc98a90a4fea6fb38f7a77f2018d8d6ce64ec6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_92ea79d048d307da3df0e14701175f2c8181fe8f073a33f4d704c436ec92ec9a = $this->env->getExtension("native_profiler");
        $__internal_92ea79d048d307da3df0e14701175f2c8181fe8f073a33f4d704c436ec92ec9a->enter($__internal_92ea79d048d307da3df0e14701175f2c8181fe8f073a33f4d704c436ec92ec9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une référence </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Reference:formulaire.html.twig", "GmaoMoulageBundle:Reference:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_92ea79d048d307da3df0e14701175f2c8181fe8f073a33f4d704c436ec92ec9a->leave($__internal_92ea79d048d307da3df0e14701175f2c8181fe8f073a33f4d704c436ec92ec9a_prof);

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
