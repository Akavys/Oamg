<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_19c158cbf24cd4e26bd2374ba7fd74ecce8c2951b8e5b07bfc0df7f36b977a52 extends Twig_Template
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
        $__internal_644dead05be6d7fbe3a9b7c8ca6c0f58f740de2d036db96cf4fb198666f3ac57 = $this->env->getExtension("native_profiler");
        $__internal_644dead05be6d7fbe3a9b7c8ca6c0f58f740de2d036db96cf4fb198666f3ac57->enter($__internal_644dead05be6d7fbe3a9b7c8ca6c0f58f740de2d036db96cf4fb198666f3ac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_644dead05be6d7fbe3a9b7c8ca6c0f58f740de2d036db96cf4fb198666f3ac57->leave($__internal_644dead05be6d7fbe3a9b7c8ca6c0f58f740de2d036db96cf4fb198666f3ac57_prof);

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
