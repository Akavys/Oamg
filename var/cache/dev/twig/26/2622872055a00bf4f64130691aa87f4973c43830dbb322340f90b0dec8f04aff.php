<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_758f3389f94d6a3ff94aabafc02d000d5b814a6b0593203a379c971c71845d4a extends Twig_Template
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
        $__internal_f148ddb3dc2eb96d87a376d3fb4e7923f9d16bf2610b7772ef1ce69c0b7bc0c2 = $this->env->getExtension("native_profiler");
        $__internal_f148ddb3dc2eb96d87a376d3fb4e7923f9d16bf2610b7772ef1ce69c0b7bc0c2->enter($__internal_f148ddb3dc2eb96d87a376d3fb4e7923f9d16bf2610b7772ef1ce69c0b7bc0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f148ddb3dc2eb96d87a376d3fb4e7923f9d16bf2610b7772ef1ce69c0b7bc0c2->leave($__internal_f148ddb3dc2eb96d87a376d3fb4e7923f9d16bf2610b7772ef1ce69c0b7bc0c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
