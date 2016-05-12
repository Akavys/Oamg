<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e53a48a983f37bdd6ea5a127ea5872c45d7cbdbcebfe80b172bd7702bf113af1 extends Twig_Template
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
        $__internal_bed021327d2a0d09db194c7e830f2d0c0824a4d58bb5461a73da21815bd0d0e3 = $this->env->getExtension("native_profiler");
        $__internal_bed021327d2a0d09db194c7e830f2d0c0824a4d58bb5461a73da21815bd0d0e3->enter($__internal_bed021327d2a0d09db194c7e830f2d0c0824a4d58bb5461a73da21815bd0d0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_bed021327d2a0d09db194c7e830f2d0c0824a4d58bb5461a73da21815bd0d0e3->leave($__internal_bed021327d2a0d09db194c7e830f2d0c0824a4d58bb5461a73da21815bd0d0e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
