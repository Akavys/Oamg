<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b680f40601ff69a9eeed5cdb5cad8b7ef48daaac82baaddaa91651eedd6a716b extends Twig_Template
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
        $__internal_04f7fe6b6113ebbcf7a1d616321a1150ddcf3618ec306911448268b6b05f5b53 = $this->env->getExtension("native_profiler");
        $__internal_04f7fe6b6113ebbcf7a1d616321a1150ddcf3618ec306911448268b6b05f5b53->enter($__internal_04f7fe6b6113ebbcf7a1d616321a1150ddcf3618ec306911448268b6b05f5b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_04f7fe6b6113ebbcf7a1d616321a1150ddcf3618ec306911448268b6b05f5b53->leave($__internal_04f7fe6b6113ebbcf7a1d616321a1150ddcf3618ec306911448268b6b05f5b53_prof);

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
