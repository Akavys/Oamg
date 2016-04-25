<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6cd6c74b34f79d87fde7f414eda7a6546e2a883593a8992adc89c3db4e463998 extends Twig_Template
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
        $__internal_6e48d1037ef919f2903d4f2b8d6523fdcb70c6c7c92bbfd6a4af15de581ea2d9 = $this->env->getExtension("native_profiler");
        $__internal_6e48d1037ef919f2903d4f2b8d6523fdcb70c6c7c92bbfd6a4af15de581ea2d9->enter($__internal_6e48d1037ef919f2903d4f2b8d6523fdcb70c6c7c92bbfd6a4af15de581ea2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6e48d1037ef919f2903d4f2b8d6523fdcb70c6c7c92bbfd6a4af15de581ea2d9->leave($__internal_6e48d1037ef919f2903d4f2b8d6523fdcb70c6c7c92bbfd6a4af15de581ea2d9_prof);

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
