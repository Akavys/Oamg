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
        $__internal_cbd386651ffff6e632fd17074a8553a89624ca6167017224c411eaa018bfe65a = $this->env->getExtension("native_profiler");
        $__internal_cbd386651ffff6e632fd17074a8553a89624ca6167017224c411eaa018bfe65a->enter($__internal_cbd386651ffff6e632fd17074a8553a89624ca6167017224c411eaa018bfe65a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_cbd386651ffff6e632fd17074a8553a89624ca6167017224c411eaa018bfe65a->leave($__internal_cbd386651ffff6e632fd17074a8553a89624ca6167017224c411eaa018bfe65a_prof);

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
