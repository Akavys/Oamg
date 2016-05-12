<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_86b68ff720d1f637f5fdbf793f7fe0a031a2b278d8626729dc2d78b8ef080e34 extends Twig_Template
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
        $__internal_b737e80fd79835a04259bcd74559033b5543f9e7ed3a1a3355e0faa86f1a64ec = $this->env->getExtension("native_profiler");
        $__internal_b737e80fd79835a04259bcd74559033b5543f9e7ed3a1a3355e0faa86f1a64ec->enter($__internal_b737e80fd79835a04259bcd74559033b5543f9e7ed3a1a3355e0faa86f1a64ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b737e80fd79835a04259bcd74559033b5543f9e7ed3a1a3355e0faa86f1a64ec->leave($__internal_b737e80fd79835a04259bcd74559033b5543f9e7ed3a1a3355e0faa86f1a64ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
