<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5c64784cd8db7f4332a734980bbdf56d618e9bf5752d278c2260a99a7c330c37 extends Twig_Template
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
        $__internal_9cd34023b2eff70b3776ab2a658e0eb24402ed46dcf2e355b498a8fdf82cd9ec = $this->env->getExtension("native_profiler");
        $__internal_9cd34023b2eff70b3776ab2a658e0eb24402ed46dcf2e355b498a8fdf82cd9ec->enter($__internal_9cd34023b2eff70b3776ab2a658e0eb24402ed46dcf2e355b498a8fdf82cd9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9cd34023b2eff70b3776ab2a658e0eb24402ed46dcf2e355b498a8fdf82cd9ec->leave($__internal_9cd34023b2eff70b3776ab2a658e0eb24402ed46dcf2e355b498a8fdf82cd9ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
