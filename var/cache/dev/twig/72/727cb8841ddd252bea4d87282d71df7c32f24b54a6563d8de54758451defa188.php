<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9f6fee0ec4d65b51f1b64298d9dceca9309c22d13e58d72b5ca2ff55c232179 extends Twig_Template
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
        $__internal_6fcfea1fdba476453cd571448e0365730c6bf782dfe7d0aed7fbaf83b366c89b = $this->env->getExtension("native_profiler");
        $__internal_6fcfea1fdba476453cd571448e0365730c6bf782dfe7d0aed7fbaf83b366c89b->enter($__internal_6fcfea1fdba476453cd571448e0365730c6bf782dfe7d0aed7fbaf83b366c89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6fcfea1fdba476453cd571448e0365730c6bf782dfe7d0aed7fbaf83b366c89b->leave($__internal_6fcfea1fdba476453cd571448e0365730c6bf782dfe7d0aed7fbaf83b366c89b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
