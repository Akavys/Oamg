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
        $__internal_72f3edd47c42527d896ed11cf530747ced161ba9c1fe5c31d4ba8b87109d7eb3 = $this->env->getExtension("native_profiler");
        $__internal_72f3edd47c42527d896ed11cf530747ced161ba9c1fe5c31d4ba8b87109d7eb3->enter($__internal_72f3edd47c42527d896ed11cf530747ced161ba9c1fe5c31d4ba8b87109d7eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_72f3edd47c42527d896ed11cf530747ced161ba9c1fe5c31d4ba8b87109d7eb3->leave($__internal_72f3edd47c42527d896ed11cf530747ced161ba9c1fe5c31d4ba8b87109d7eb3_prof);

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
