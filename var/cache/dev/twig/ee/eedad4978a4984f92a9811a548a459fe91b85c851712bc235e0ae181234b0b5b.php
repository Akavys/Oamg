<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4f19476e63e2ab41d34075774038e1163a8bd527ade933be93fd68e8ab264cf7 extends Twig_Template
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
        $__internal_a7e29ddd922fd2ff96689ee7ba625ee96263922dda39f2c579d866ec670bedfb = $this->env->getExtension("native_profiler");
        $__internal_a7e29ddd922fd2ff96689ee7ba625ee96263922dda39f2c579d866ec670bedfb->enter($__internal_a7e29ddd922fd2ff96689ee7ba625ee96263922dda39f2c579d866ec670bedfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a7e29ddd922fd2ff96689ee7ba625ee96263922dda39f2c579d866ec670bedfb->leave($__internal_a7e29ddd922fd2ff96689ee7ba625ee96263922dda39f2c579d866ec670bedfb_prof);

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
