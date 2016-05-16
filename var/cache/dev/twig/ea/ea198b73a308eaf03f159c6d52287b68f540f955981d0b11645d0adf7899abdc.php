<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_d41489b24c0ffe7b1dc7e05fee6b99ea22423b3e1343bf94b5c8836417105fe3 extends Twig_Template
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
        $__internal_9717296c1bdb7c5739f48b9741fbf6cdae3115e6de864223d048cfa814c62922 = $this->env->getExtension("native_profiler");
        $__internal_9717296c1bdb7c5739f48b9741fbf6cdae3115e6de864223d048cfa814c62922->enter($__internal_9717296c1bdb7c5739f48b9741fbf6cdae3115e6de864223d048cfa814c62922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9717296c1bdb7c5739f48b9741fbf6cdae3115e6de864223d048cfa814c62922->leave($__internal_9717296c1bdb7c5739f48b9741fbf6cdae3115e6de864223d048cfa814c62922_prof);

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
