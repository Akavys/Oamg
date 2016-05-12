<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7b9ba04ebc2359e0cc337150de4f3ebbc3a0c18f5eab9b8db12960541d173c7f extends Twig_Template
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
        $__internal_d2df17d15cc95e651c74cd4573d6ad1cb4d7f43df0802c9671e12f37bb80f6b2 = $this->env->getExtension("native_profiler");
        $__internal_d2df17d15cc95e651c74cd4573d6ad1cb4d7f43df0802c9671e12f37bb80f6b2->enter($__internal_d2df17d15cc95e651c74cd4573d6ad1cb4d7f43df0802c9671e12f37bb80f6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d2df17d15cc95e651c74cd4573d6ad1cb4d7f43df0802c9671e12f37bb80f6b2->leave($__internal_d2df17d15cc95e651c74cd4573d6ad1cb4d7f43df0802c9671e12f37bb80f6b2_prof);

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
