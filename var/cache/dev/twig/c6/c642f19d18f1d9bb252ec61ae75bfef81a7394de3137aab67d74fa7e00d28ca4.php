<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_87896da5ba1ea5483fcb720c47cc8d62ccfa39dfabc07e03627afa61eb82841f extends Twig_Template
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
        $__internal_0e1b1592cfc73605a9d09aad939f42dca6c9ece73744a4d280a400082a80bf88 = $this->env->getExtension("native_profiler");
        $__internal_0e1b1592cfc73605a9d09aad939f42dca6c9ece73744a4d280a400082a80bf88->enter($__internal_0e1b1592cfc73605a9d09aad939f42dca6c9ece73744a4d280a400082a80bf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0e1b1592cfc73605a9d09aad939f42dca6c9ece73744a4d280a400082a80bf88->leave($__internal_0e1b1592cfc73605a9d09aad939f42dca6c9ece73744a4d280a400082a80bf88_prof);

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
