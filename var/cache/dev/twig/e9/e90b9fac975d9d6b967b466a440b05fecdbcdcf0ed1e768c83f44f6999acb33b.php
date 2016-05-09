<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2c2e7c9bcccab9aa9606391ecff6b17d19402b66d0a27e33e26a9ef8e5a7c3ae extends Twig_Template
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
        $__internal_a4301da15fa7502b8ef5855e12de013bd69dce552e28168dc0ad98659547895c = $this->env->getExtension("native_profiler");
        $__internal_a4301da15fa7502b8ef5855e12de013bd69dce552e28168dc0ad98659547895c->enter($__internal_a4301da15fa7502b8ef5855e12de013bd69dce552e28168dc0ad98659547895c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a4301da15fa7502b8ef5855e12de013bd69dce552e28168dc0ad98659547895c->leave($__internal_a4301da15fa7502b8ef5855e12de013bd69dce552e28168dc0ad98659547895c_prof);

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
