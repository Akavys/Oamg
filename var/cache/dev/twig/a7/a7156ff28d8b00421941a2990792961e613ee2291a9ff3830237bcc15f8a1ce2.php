<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9e5e01b79d8fa81c7aaa2b3857b289afa387cd602a3a09655f1364be2dc0d736 extends Twig_Template
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
        $__internal_66a6992e28353ba91041d24f1fa1014254e69dace6bc7d5edbe76bd775ca1621 = $this->env->getExtension("native_profiler");
        $__internal_66a6992e28353ba91041d24f1fa1014254e69dace6bc7d5edbe76bd775ca1621->enter($__internal_66a6992e28353ba91041d24f1fa1014254e69dace6bc7d5edbe76bd775ca1621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_66a6992e28353ba91041d24f1fa1014254e69dace6bc7d5edbe76bd775ca1621->leave($__internal_66a6992e28353ba91041d24f1fa1014254e69dace6bc7d5edbe76bd775ca1621_prof);

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
