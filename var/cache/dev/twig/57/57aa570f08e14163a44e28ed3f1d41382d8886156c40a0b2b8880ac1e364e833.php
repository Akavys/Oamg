<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_980b5cbebb5d6354acccdc0b944802fdccbc31930181424779d0eb5cac2a27a4 extends Twig_Template
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
        $__internal_53859ad9a61bc986bc7255ec87b1efeb1c7ce0365d7364aec7f71f6004d5d135 = $this->env->getExtension("native_profiler");
        $__internal_53859ad9a61bc986bc7255ec87b1efeb1c7ce0365d7364aec7f71f6004d5d135->enter($__internal_53859ad9a61bc986bc7255ec87b1efeb1c7ce0365d7364aec7f71f6004d5d135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_53859ad9a61bc986bc7255ec87b1efeb1c7ce0365d7364aec7f71f6004d5d135->leave($__internal_53859ad9a61bc986bc7255ec87b1efeb1c7ce0365d7364aec7f71f6004d5d135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
