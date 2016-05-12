<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b0093df98874c3942242822b99a68d659266bb88494ea8a63a049b8224f118c4 extends Twig_Template
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
        $__internal_ddc7a42c0fce56f5031fd81639a8b6d20fbe69301d3e75d57e1bb823fcc8a491 = $this->env->getExtension("native_profiler");
        $__internal_ddc7a42c0fce56f5031fd81639a8b6d20fbe69301d3e75d57e1bb823fcc8a491->enter($__internal_ddc7a42c0fce56f5031fd81639a8b6d20fbe69301d3e75d57e1bb823fcc8a491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ddc7a42c0fce56f5031fd81639a8b6d20fbe69301d3e75d57e1bb823fcc8a491->leave($__internal_ddc7a42c0fce56f5031fd81639a8b6d20fbe69301d3e75d57e1bb823fcc8a491_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
