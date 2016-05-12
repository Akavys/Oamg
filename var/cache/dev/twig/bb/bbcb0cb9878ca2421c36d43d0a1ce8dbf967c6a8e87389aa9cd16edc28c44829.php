<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cc931369f467f659fb6ebc8cf003da8887d19a68fd949e43b99cda6abb70bfc9 extends Twig_Template
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
        $__internal_ec7381b3cce276355abc7ceb5925c9cfd87deeb6847d476cf2be9b679918ebf5 = $this->env->getExtension("native_profiler");
        $__internal_ec7381b3cce276355abc7ceb5925c9cfd87deeb6847d476cf2be9b679918ebf5->enter($__internal_ec7381b3cce276355abc7ceb5925c9cfd87deeb6847d476cf2be9b679918ebf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ec7381b3cce276355abc7ceb5925c9cfd87deeb6847d476cf2be9b679918ebf5->leave($__internal_ec7381b3cce276355abc7ceb5925c9cfd87deeb6847d476cf2be9b679918ebf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
