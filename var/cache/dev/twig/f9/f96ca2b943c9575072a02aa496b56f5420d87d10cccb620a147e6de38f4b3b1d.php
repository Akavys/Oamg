<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_18cf4e76ef5c1f78a8301b709edb2d6e44c8aa9a23b3d70ae9bcacfdc070fdf0 extends Twig_Template
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
        $__internal_7052500883db848c962a9b663b50ce594ac8b9b6a9f6a4cddfb16aa7ced14efb = $this->env->getExtension("native_profiler");
        $__internal_7052500883db848c962a9b663b50ce594ac8b9b6a9f6a4cddfb16aa7ced14efb->enter($__internal_7052500883db848c962a9b663b50ce594ac8b9b6a9f6a4cddfb16aa7ced14efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7052500883db848c962a9b663b50ce594ac8b9b6a9f6a4cddfb16aa7ced14efb->leave($__internal_7052500883db848c962a9b663b50ce594ac8b9b6a9f6a4cddfb16aa7ced14efb_prof);

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
