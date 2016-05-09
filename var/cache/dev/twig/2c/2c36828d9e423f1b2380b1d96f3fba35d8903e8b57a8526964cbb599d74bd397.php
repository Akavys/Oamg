<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a9b1d757333fb1ae4bb6571657842e0de0e60a821758b5e5ca472c278eaf0f4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7fccb9967f13db2a018ed224b3d3a451e255c569762d207ac0bd77272178f94 = $this->env->getExtension("native_profiler");
        $__internal_c7fccb9967f13db2a018ed224b3d3a451e255c569762d207ac0bd77272178f94->enter($__internal_c7fccb9967f13db2a018ed224b3d3a451e255c569762d207ac0bd77272178f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_c7fccb9967f13db2a018ed224b3d3a451e255c569762d207ac0bd77272178f94->leave($__internal_c7fccb9967f13db2a018ed224b3d3a451e255c569762d207ac0bd77272178f94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
