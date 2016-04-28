<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c926f751da182e13d24ea34364b816471b3eec65d4a11d7acc926b78a73e3b92 extends Twig_Template
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
        $__internal_0ac4edec7ca3b5edbdb502f3ec3de30ddf2e36caa713159a72af5de3844c229a = $this->env->getExtension("native_profiler");
        $__internal_0ac4edec7ca3b5edbdb502f3ec3de30ddf2e36caa713159a72af5de3844c229a->enter($__internal_0ac4edec7ca3b5edbdb502f3ec3de30ddf2e36caa713159a72af5de3844c229a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0ac4edec7ca3b5edbdb502f3ec3de30ddf2e36caa713159a72af5de3844c229a->leave($__internal_0ac4edec7ca3b5edbdb502f3ec3de30ddf2e36caa713159a72af5de3844c229a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_665479145f00b02c2a4b8bcfe018137c6d7dcd0dda0faeb6ce5533eeffac7b67 = $this->env->getExtension("native_profiler");
        $__internal_665479145f00b02c2a4b8bcfe018137c6d7dcd0dda0faeb6ce5533eeffac7b67->enter($__internal_665479145f00b02c2a4b8bcfe018137c6d7dcd0dda0faeb6ce5533eeffac7b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_665479145f00b02c2a4b8bcfe018137c6d7dcd0dda0faeb6ce5533eeffac7b67->leave($__internal_665479145f00b02c2a4b8bcfe018137c6d7dcd0dda0faeb6ce5533eeffac7b67_prof);

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
