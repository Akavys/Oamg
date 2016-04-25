<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fe52e22aec315f064937a22424b877c6be6a99b503462a13d26c014deace2e8b extends Twig_Template
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
        $__internal_2f7fef90d6f62ddfec7d4f6773b70bdb9f3f5ef0baddc6eec2f61a2fef05cd55 = $this->env->getExtension("native_profiler");
        $__internal_2f7fef90d6f62ddfec7d4f6773b70bdb9f3f5ef0baddc6eec2f61a2fef05cd55->enter($__internal_2f7fef90d6f62ddfec7d4f6773b70bdb9f3f5ef0baddc6eec2f61a2fef05cd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2f7fef90d6f62ddfec7d4f6773b70bdb9f3f5ef0baddc6eec2f61a2fef05cd55->leave($__internal_2f7fef90d6f62ddfec7d4f6773b70bdb9f3f5ef0baddc6eec2f61a2fef05cd55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
