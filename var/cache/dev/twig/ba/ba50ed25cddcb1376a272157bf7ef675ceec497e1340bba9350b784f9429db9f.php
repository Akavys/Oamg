<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ada7bf39e3a69f5e4f92e4d883debe2f58a96422293466e135b955bd42585c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69594007b447fbe8a99f148d3ec12a10fa22f0f693e66ba29b3f496ee19e1d95 = $this->env->getExtension("native_profiler");
        $__internal_69594007b447fbe8a99f148d3ec12a10fa22f0f693e66ba29b3f496ee19e1d95->enter($__internal_69594007b447fbe8a99f148d3ec12a10fa22f0f693e66ba29b3f496ee19e1d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_69594007b447fbe8a99f148d3ec12a10fa22f0f693e66ba29b3f496ee19e1d95->leave($__internal_69594007b447fbe8a99f148d3ec12a10fa22f0f693e66ba29b3f496ee19e1d95_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fa7e4201a687dbb8eb5fafa70b5884181d66c27952d7c9cac88fad3878fa56d = $this->env->getExtension("native_profiler");
        $__internal_7fa7e4201a687dbb8eb5fafa70b5884181d66c27952d7c9cac88fad3878fa56d->enter($__internal_7fa7e4201a687dbb8eb5fafa70b5884181d66c27952d7c9cac88fad3878fa56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7fa7e4201a687dbb8eb5fafa70b5884181d66c27952d7c9cac88fad3878fa56d->leave($__internal_7fa7e4201a687dbb8eb5fafa70b5884181d66c27952d7c9cac88fad3878fa56d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
