<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0ba747ab5a2f43cc53ecace19dad256cd6e81947e5d24628b28fb3d6923804a8 extends Twig_Template
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
        $__internal_0b26fddabf94566c1c5129c9a4a0cf0f896fd41e2bb86c7c594ec3465a361857 = $this->env->getExtension("native_profiler");
        $__internal_0b26fddabf94566c1c5129c9a4a0cf0f896fd41e2bb86c7c594ec3465a361857->enter($__internal_0b26fddabf94566c1c5129c9a4a0cf0f896fd41e2bb86c7c594ec3465a361857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0b26fddabf94566c1c5129c9a4a0cf0f896fd41e2bb86c7c594ec3465a361857->leave($__internal_0b26fddabf94566c1c5129c9a4a0cf0f896fd41e2bb86c7c594ec3465a361857_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
