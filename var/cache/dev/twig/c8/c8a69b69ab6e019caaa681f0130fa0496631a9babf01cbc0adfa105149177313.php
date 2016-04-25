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
        $__internal_3934cbf53152055109697c553166cf162d83c361a9425978803a1e49f6924cf9 = $this->env->getExtension("native_profiler");
        $__internal_3934cbf53152055109697c553166cf162d83c361a9425978803a1e49f6924cf9->enter($__internal_3934cbf53152055109697c553166cf162d83c361a9425978803a1e49f6924cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3934cbf53152055109697c553166cf162d83c361a9425978803a1e49f6924cf9->leave($__internal_3934cbf53152055109697c553166cf162d83c361a9425978803a1e49f6924cf9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_652deef0154bd9dcddb467469123f5cecaa0f4acf7626212a949f63667257598 = $this->env->getExtension("native_profiler");
        $__internal_652deef0154bd9dcddb467469123f5cecaa0f4acf7626212a949f63667257598->enter($__internal_652deef0154bd9dcddb467469123f5cecaa0f4acf7626212a949f63667257598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_652deef0154bd9dcddb467469123f5cecaa0f4acf7626212a949f63667257598->leave($__internal_652deef0154bd9dcddb467469123f5cecaa0f4acf7626212a949f63667257598_prof);

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
