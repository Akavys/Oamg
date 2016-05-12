<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ff362e001397f6fe179d13450b73ad2f67a6d4f19d62d7285dcf11f16e309b6b extends Twig_Template
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
        $__internal_877225ee86993e685de40cdbd735692b15a8b3d71665f48a6668cb2dbf51a907 = $this->env->getExtension("native_profiler");
        $__internal_877225ee86993e685de40cdbd735692b15a8b3d71665f48a6668cb2dbf51a907->enter($__internal_877225ee86993e685de40cdbd735692b15a8b3d71665f48a6668cb2dbf51a907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_877225ee86993e685de40cdbd735692b15a8b3d71665f48a6668cb2dbf51a907->leave($__internal_877225ee86993e685de40cdbd735692b15a8b3d71665f48a6668cb2dbf51a907_prof);

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
