<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ce62dd09ff7778cee93ad300ad13107d9194fdf45ed9ed0d5326e46296e84d56 extends Twig_Template
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
        $__internal_42fd8481f7c207f67b57ba68e75e9747650422cfd54eeaabf01ecb9ee12ba934 = $this->env->getExtension("native_profiler");
        $__internal_42fd8481f7c207f67b57ba68e75e9747650422cfd54eeaabf01ecb9ee12ba934->enter($__internal_42fd8481f7c207f67b57ba68e75e9747650422cfd54eeaabf01ecb9ee12ba934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_42fd8481f7c207f67b57ba68e75e9747650422cfd54eeaabf01ecb9ee12ba934->leave($__internal_42fd8481f7c207f67b57ba68e75e9747650422cfd54eeaabf01ecb9ee12ba934_prof);

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
