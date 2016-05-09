<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_43f7bb5f2ae6ca2837b58ffeb164fb451502241a86e98ba0ce061745471f6361 extends Twig_Template
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
        $__internal_e1dcb716498dcb0b66cc4bce203ca8c50fad233dda6b52a441b16db1ee5d154c = $this->env->getExtension("native_profiler");
        $__internal_e1dcb716498dcb0b66cc4bce203ca8c50fad233dda6b52a441b16db1ee5d154c->enter($__internal_e1dcb716498dcb0b66cc4bce203ca8c50fad233dda6b52a441b16db1ee5d154c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e1dcb716498dcb0b66cc4bce203ca8c50fad233dda6b52a441b16db1ee5d154c->leave($__internal_e1dcb716498dcb0b66cc4bce203ca8c50fad233dda6b52a441b16db1ee5d154c_prof);

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
