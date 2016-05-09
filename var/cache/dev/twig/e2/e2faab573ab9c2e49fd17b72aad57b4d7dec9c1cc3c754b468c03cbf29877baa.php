<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_fe15e2255ace3419fe70875306b92e1758d2ab389274bdbd81f63138c52874b4 extends Twig_Template
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
        $__internal_5a3edd3c3e9d31296e684cbfd5321c9248974583427cb9026755e1e0af1c9769 = $this->env->getExtension("native_profiler");
        $__internal_5a3edd3c3e9d31296e684cbfd5321c9248974583427cb9026755e1e0af1c9769->enter($__internal_5a3edd3c3e9d31296e684cbfd5321c9248974583427cb9026755e1e0af1c9769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5a3edd3c3e9d31296e684cbfd5321c9248974583427cb9026755e1e0af1c9769->leave($__internal_5a3edd3c3e9d31296e684cbfd5321c9248974583427cb9026755e1e0af1c9769_prof);

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
