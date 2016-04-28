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
        $__internal_06ace04b1b5b3bf4c82d15965549251b8f111e33d0aea6ba890f33b30d6bf12d = $this->env->getExtension("native_profiler");
        $__internal_06ace04b1b5b3bf4c82d15965549251b8f111e33d0aea6ba890f33b30d6bf12d->enter($__internal_06ace04b1b5b3bf4c82d15965549251b8f111e33d0aea6ba890f33b30d6bf12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_06ace04b1b5b3bf4c82d15965549251b8f111e33d0aea6ba890f33b30d6bf12d->leave($__internal_06ace04b1b5b3bf4c82d15965549251b8f111e33d0aea6ba890f33b30d6bf12d_prof);

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
