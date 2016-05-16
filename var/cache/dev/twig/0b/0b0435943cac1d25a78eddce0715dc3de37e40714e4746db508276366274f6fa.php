<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f3a9ed796e429b83cd5a9d6db4fa35ea659a12f10565564052b9efcc4751174f extends Twig_Template
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
        $__internal_8b2cbe590e303cbd975023901f6216063e19678974b4e44bbc78e2f2c8922440 = $this->env->getExtension("native_profiler");
        $__internal_8b2cbe590e303cbd975023901f6216063e19678974b4e44bbc78e2f2c8922440->enter($__internal_8b2cbe590e303cbd975023901f6216063e19678974b4e44bbc78e2f2c8922440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8b2cbe590e303cbd975023901f6216063e19678974b4e44bbc78e2f2c8922440->leave($__internal_8b2cbe590e303cbd975023901f6216063e19678974b4e44bbc78e2f2c8922440_prof);

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
