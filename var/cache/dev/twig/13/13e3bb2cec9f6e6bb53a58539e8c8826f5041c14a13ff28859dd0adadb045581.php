<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_40562652f7e7f6f13e1f27efd3577f2d61e62ecc40be3d61d78ae8df0224b597 extends Twig_Template
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
        $__internal_654c53de85f62ce606c86a3dff7f1ea91330e5d6fdda6d2d22732eae457525f0 = $this->env->getExtension("native_profiler");
        $__internal_654c53de85f62ce606c86a3dff7f1ea91330e5d6fdda6d2d22732eae457525f0->enter($__internal_654c53de85f62ce606c86a3dff7f1ea91330e5d6fdda6d2d22732eae457525f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_654c53de85f62ce606c86a3dff7f1ea91330e5d6fdda6d2d22732eae457525f0->leave($__internal_654c53de85f62ce606c86a3dff7f1ea91330e5d6fdda6d2d22732eae457525f0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eacb7d143b4fd0f728721c29fa12100f40426d28a807f794f51d12d3bb4d09fb = $this->env->getExtension("native_profiler");
        $__internal_eacb7d143b4fd0f728721c29fa12100f40426d28a807f794f51d12d3bb4d09fb->enter($__internal_eacb7d143b4fd0f728721c29fa12100f40426d28a807f794f51d12d3bb4d09fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eacb7d143b4fd0f728721c29fa12100f40426d28a807f794f51d12d3bb4d09fb->leave($__internal_eacb7d143b4fd0f728721c29fa12100f40426d28a807f794f51d12d3bb4d09fb_prof);

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
