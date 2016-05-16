<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7f2d6c3b03b8ea1556f7117a24d512f138c058adc3abceff31844d2356474b1e extends Twig_Template
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
        $__internal_03e1c6c44df66ac7e3dc9f35e8303fd1c038047766e991f5724b40d2d0231f12 = $this->env->getExtension("native_profiler");
        $__internal_03e1c6c44df66ac7e3dc9f35e8303fd1c038047766e991f5724b40d2d0231f12->enter($__internal_03e1c6c44df66ac7e3dc9f35e8303fd1c038047766e991f5724b40d2d0231f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_03e1c6c44df66ac7e3dc9f35e8303fd1c038047766e991f5724b40d2d0231f12->leave($__internal_03e1c6c44df66ac7e3dc9f35e8303fd1c038047766e991f5724b40d2d0231f12_prof);

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
