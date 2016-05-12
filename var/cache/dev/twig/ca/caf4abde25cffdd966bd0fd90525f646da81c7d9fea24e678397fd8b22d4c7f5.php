<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0fd7f694021d5966d102937cdd06b4cceb3760373714d67463ccdaa7c7c181ad extends Twig_Template
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
        $__internal_624e4021e96f918e35159f8e8734b474575aa0ffdad804b8a0bde75a71540a47 = $this->env->getExtension("native_profiler");
        $__internal_624e4021e96f918e35159f8e8734b474575aa0ffdad804b8a0bde75a71540a47->enter($__internal_624e4021e96f918e35159f8e8734b474575aa0ffdad804b8a0bde75a71540a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_624e4021e96f918e35159f8e8734b474575aa0ffdad804b8a0bde75a71540a47->leave($__internal_624e4021e96f918e35159f8e8734b474575aa0ffdad804b8a0bde75a71540a47_prof);

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
