<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_90317ab30029b5dbc790fc9a5e9c6f5c44b1461be81d6b9aba8a13b9558ce413 extends Twig_Template
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
        $__internal_02749c5d1fd186ed180e0d4a737b3b0c35c351e5463b32c7ed9f5713f0dd563f = $this->env->getExtension("native_profiler");
        $__internal_02749c5d1fd186ed180e0d4a737b3b0c35c351e5463b32c7ed9f5713f0dd563f->enter($__internal_02749c5d1fd186ed180e0d4a737b3b0c35c351e5463b32c7ed9f5713f0dd563f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_02749c5d1fd186ed180e0d4a737b3b0c35c351e5463b32c7ed9f5713f0dd563f->leave($__internal_02749c5d1fd186ed180e0d4a737b3b0c35c351e5463b32c7ed9f5713f0dd563f_prof);

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
