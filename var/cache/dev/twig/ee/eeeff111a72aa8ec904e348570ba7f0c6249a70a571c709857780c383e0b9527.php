<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c3598bd0889d81b07d3a87d9af52fa3b1c5e733985744496935f3bf1bc04f45d extends Twig_Template
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
        $__internal_bcb2805480d06ff3b0080fa9582ce5c1c9f690c44f8477cecf159cee50c6d7a7 = $this->env->getExtension("native_profiler");
        $__internal_bcb2805480d06ff3b0080fa9582ce5c1c9f690c44f8477cecf159cee50c6d7a7->enter($__internal_bcb2805480d06ff3b0080fa9582ce5c1c9f690c44f8477cecf159cee50c6d7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bcb2805480d06ff3b0080fa9582ce5c1c9f690c44f8477cecf159cee50c6d7a7->leave($__internal_bcb2805480d06ff3b0080fa9582ce5c1c9f690c44f8477cecf159cee50c6d7a7_prof);

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
