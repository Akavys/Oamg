<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d0a587345e27cd8f2d1af635432af776ead7f63a80f2d869e6c390bc29570c3b extends Twig_Template
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
        $__internal_24193e45ef43f19fa5014e37bf5f69e5ac170227c78ebaa92f65f7386bd05b39 = $this->env->getExtension("native_profiler");
        $__internal_24193e45ef43f19fa5014e37bf5f69e5ac170227c78ebaa92f65f7386bd05b39->enter($__internal_24193e45ef43f19fa5014e37bf5f69e5ac170227c78ebaa92f65f7386bd05b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_24193e45ef43f19fa5014e37bf5f69e5ac170227c78ebaa92f65f7386bd05b39->leave($__internal_24193e45ef43f19fa5014e37bf5f69e5ac170227c78ebaa92f65f7386bd05b39_prof);

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
