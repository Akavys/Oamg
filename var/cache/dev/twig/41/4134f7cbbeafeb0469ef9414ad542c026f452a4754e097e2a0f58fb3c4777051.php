<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6e16db76c7f20eec5351474153c13bada99d7e295a35f70034a4253b8dbc12e2 extends Twig_Template
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
        $__internal_8f750c49c9e021ab8d9741b735a9c436aa1c903cb74f4178e2d3e1c960baf18c = $this->env->getExtension("native_profiler");
        $__internal_8f750c49c9e021ab8d9741b735a9c436aa1c903cb74f4178e2d3e1c960baf18c->enter($__internal_8f750c49c9e021ab8d9741b735a9c436aa1c903cb74f4178e2d3e1c960baf18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8f750c49c9e021ab8d9741b735a9c436aa1c903cb74f4178e2d3e1c960baf18c->leave($__internal_8f750c49c9e021ab8d9741b735a9c436aa1c903cb74f4178e2d3e1c960baf18c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_312d50333818c355619d60ba8bab3c61e1cd95d36db5072a443f6ecfb8d43a79 = $this->env->getExtension("native_profiler");
        $__internal_312d50333818c355619d60ba8bab3c61e1cd95d36db5072a443f6ecfb8d43a79->enter($__internal_312d50333818c355619d60ba8bab3c61e1cd95d36db5072a443f6ecfb8d43a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_312d50333818c355619d60ba8bab3c61e1cd95d36db5072a443f6ecfb8d43a79->leave($__internal_312d50333818c355619d60ba8bab3c61e1cd95d36db5072a443f6ecfb8d43a79_prof);

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
