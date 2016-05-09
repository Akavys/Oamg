<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0c354567482a44d2aa2b9617990019379352338ca156573bd106872619623adb extends Twig_Template
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
        $__internal_9517676e8a11da48d6b36da13df09d97ed62b0a3d3cd48426a3736bc1c3b2555 = $this->env->getExtension("native_profiler");
        $__internal_9517676e8a11da48d6b36da13df09d97ed62b0a3d3cd48426a3736bc1c3b2555->enter($__internal_9517676e8a11da48d6b36da13df09d97ed62b0a3d3cd48426a3736bc1c3b2555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9517676e8a11da48d6b36da13df09d97ed62b0a3d3cd48426a3736bc1c3b2555->leave($__internal_9517676e8a11da48d6b36da13df09d97ed62b0a3d3cd48426a3736bc1c3b2555_prof);

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
