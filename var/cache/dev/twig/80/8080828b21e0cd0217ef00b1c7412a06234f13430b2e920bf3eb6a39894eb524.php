<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b0f6d7630dce5c4e9bd0d29f9dd71c3a605e79f44d7b05d7db4fb66cbd868280 extends Twig_Template
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
        $__internal_13690ff1ba83643228c4ac2f309df95ec987b35dd97d51dec6f4c30a404aba67 = $this->env->getExtension("native_profiler");
        $__internal_13690ff1ba83643228c4ac2f309df95ec987b35dd97d51dec6f4c30a404aba67->enter($__internal_13690ff1ba83643228c4ac2f309df95ec987b35dd97d51dec6f4c30a404aba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_13690ff1ba83643228c4ac2f309df95ec987b35dd97d51dec6f4c30a404aba67->leave($__internal_13690ff1ba83643228c4ac2f309df95ec987b35dd97d51dec6f4c30a404aba67_prof);

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
