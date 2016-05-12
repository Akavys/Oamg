<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_835b47f88fccd44b5e137b02689a80e3c95adccd26d8000521ac2c6046fcbdf6 extends Twig_Template
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
        $__internal_d6d0dddc39c802b2ac2dac25da889cc55f3a539abe7f39715c785d57b2e3794f = $this->env->getExtension("native_profiler");
        $__internal_d6d0dddc39c802b2ac2dac25da889cc55f3a539abe7f39715c785d57b2e3794f->enter($__internal_d6d0dddc39c802b2ac2dac25da889cc55f3a539abe7f39715c785d57b2e3794f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d6d0dddc39c802b2ac2dac25da889cc55f3a539abe7f39715c785d57b2e3794f->leave($__internal_d6d0dddc39c802b2ac2dac25da889cc55f3a539abe7f39715c785d57b2e3794f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
