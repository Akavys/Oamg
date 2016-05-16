<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67eb1594aab52b9a73baedfcd109c680e721a05d147d7d33a5b0d83fb43c01f4 extends Twig_Template
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
        $__internal_ddea867c4e672f11ba01a285d465ceab9c8ee9d2b728d68c2360df762364b1a7 = $this->env->getExtension("native_profiler");
        $__internal_ddea867c4e672f11ba01a285d465ceab9c8ee9d2b728d68c2360df762364b1a7->enter($__internal_ddea867c4e672f11ba01a285d465ceab9c8ee9d2b728d68c2360df762364b1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ddea867c4e672f11ba01a285d465ceab9c8ee9d2b728d68c2360df762364b1a7->leave($__internal_ddea867c4e672f11ba01a285d465ceab9c8ee9d2b728d68c2360df762364b1a7_prof);

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
