<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4c797d6ee580475bc2e0b1181084194821d76cb14c0033b457358c8122c807cd extends Twig_Template
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
        $__internal_d64d4b8d018e3fd6dbfd5e06b792b02c8016034040fca1f4f84b1701727a2933 = $this->env->getExtension("native_profiler");
        $__internal_d64d4b8d018e3fd6dbfd5e06b792b02c8016034040fca1f4f84b1701727a2933->enter($__internal_d64d4b8d018e3fd6dbfd5e06b792b02c8016034040fca1f4f84b1701727a2933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d64d4b8d018e3fd6dbfd5e06b792b02c8016034040fca1f4f84b1701727a2933->leave($__internal_d64d4b8d018e3fd6dbfd5e06b792b02c8016034040fca1f4f84b1701727a2933_prof);

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
