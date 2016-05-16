<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5b3aac3f04687d942729d9117e168faa01bba8ea02545229ee6c952c61b050d5 extends Twig_Template
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
        $__internal_d4fff5bcedec9eb5afdb94b9e4562326860296573b8c36ab0a179f70fd482975 = $this->env->getExtension("native_profiler");
        $__internal_d4fff5bcedec9eb5afdb94b9e4562326860296573b8c36ab0a179f70fd482975->enter($__internal_d4fff5bcedec9eb5afdb94b9e4562326860296573b8c36ab0a179f70fd482975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d4fff5bcedec9eb5afdb94b9e4562326860296573b8c36ab0a179f70fd482975->leave($__internal_d4fff5bcedec9eb5afdb94b9e4562326860296573b8c36ab0a179f70fd482975_prof);

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
