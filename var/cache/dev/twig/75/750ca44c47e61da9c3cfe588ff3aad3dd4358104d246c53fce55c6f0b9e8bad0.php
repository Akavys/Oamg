<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_10c4dd316aad317993a4acfe3dbf76c7989bada13d4c765b1188a2b89a696f31 extends Twig_Template
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
        $__internal_982a228bbe9e06df1f9abafc42b3a57fcd622e2c7b670c917a6f9a2f1119697d = $this->env->getExtension("native_profiler");
        $__internal_982a228bbe9e06df1f9abafc42b3a57fcd622e2c7b670c917a6f9a2f1119697d->enter($__internal_982a228bbe9e06df1f9abafc42b3a57fcd622e2c7b670c917a6f9a2f1119697d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_982a228bbe9e06df1f9abafc42b3a57fcd622e2c7b670c917a6f9a2f1119697d->leave($__internal_982a228bbe9e06df1f9abafc42b3a57fcd622e2c7b670c917a6f9a2f1119697d_prof);

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
