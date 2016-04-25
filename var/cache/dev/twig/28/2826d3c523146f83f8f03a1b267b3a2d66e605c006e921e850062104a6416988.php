<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0ea9e5b98759ed082c6d60442772380daef8b720cca9a855f3ce5355bda4cf17 extends Twig_Template
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
        $__internal_63e0de45b2ea001da0405b05c52340917b49d27b2c4c60a6eb40a22f3ff6c360 = $this->env->getExtension("native_profiler");
        $__internal_63e0de45b2ea001da0405b05c52340917b49d27b2c4c60a6eb40a22f3ff6c360->enter($__internal_63e0de45b2ea001da0405b05c52340917b49d27b2c4c60a6eb40a22f3ff6c360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_63e0de45b2ea001da0405b05c52340917b49d27b2c4c60a6eb40a22f3ff6c360->leave($__internal_63e0de45b2ea001da0405b05c52340917b49d27b2c4c60a6eb40a22f3ff6c360_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
