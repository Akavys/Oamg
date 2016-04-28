<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_493d1cd4cf9b9735f18bf3d8995882b7acf499f60cffe14db890e6d9db10cc19 extends Twig_Template
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
        $__internal_bc797ed087eb1e62cf47ea2ed7931a7bc3b0033d48c7faebf9f67e2ec40b2287 = $this->env->getExtension("native_profiler");
        $__internal_bc797ed087eb1e62cf47ea2ed7931a7bc3b0033d48c7faebf9f67e2ec40b2287->enter($__internal_bc797ed087eb1e62cf47ea2ed7931a7bc3b0033d48c7faebf9f67e2ec40b2287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bc797ed087eb1e62cf47ea2ed7931a7bc3b0033d48c7faebf9f67e2ec40b2287->leave($__internal_bc797ed087eb1e62cf47ea2ed7931a7bc3b0033d48c7faebf9f67e2ec40b2287_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
