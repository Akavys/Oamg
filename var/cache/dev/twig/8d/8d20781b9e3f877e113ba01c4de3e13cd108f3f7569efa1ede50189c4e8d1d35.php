<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7f8c7693a76deb5fd7e1f7ae09a6980afbefadf73c942f8c4268195048e249d1 extends Twig_Template
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
        $__internal_0e3002f9db7d74ba4b5967f64f9f356ce6a87557726978d073552c6bca301f70 = $this->env->getExtension("native_profiler");
        $__internal_0e3002f9db7d74ba4b5967f64f9f356ce6a87557726978d073552c6bca301f70->enter($__internal_0e3002f9db7d74ba4b5967f64f9f356ce6a87557726978d073552c6bca301f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0e3002f9db7d74ba4b5967f64f9f356ce6a87557726978d073552c6bca301f70->leave($__internal_0e3002f9db7d74ba4b5967f64f9f356ce6a87557726978d073552c6bca301f70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
