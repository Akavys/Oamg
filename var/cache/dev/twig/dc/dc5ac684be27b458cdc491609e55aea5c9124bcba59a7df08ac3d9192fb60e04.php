<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c7891395f3e1569c2b995978cc77390ec4157a3bd0442d17857c3c1fa835a0f2 extends Twig_Template
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
        $__internal_032c61828aa5e435046a093db8630873e199117bd3fc8a13f10ce674b7288aea = $this->env->getExtension("native_profiler");
        $__internal_032c61828aa5e435046a093db8630873e199117bd3fc8a13f10ce674b7288aea->enter($__internal_032c61828aa5e435046a093db8630873e199117bd3fc8a13f10ce674b7288aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_032c61828aa5e435046a093db8630873e199117bd3fc8a13f10ce674b7288aea->leave($__internal_032c61828aa5e435046a093db8630873e199117bd3fc8a13f10ce674b7288aea_prof);

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
