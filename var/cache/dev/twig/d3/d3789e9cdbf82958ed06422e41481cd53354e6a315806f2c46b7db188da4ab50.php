<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_58e7f3b49c12ee5b792b5cde1b0763d0d3b244c12ad899bcdfd33777a2dd739e extends Twig_Template
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
        $__internal_4f0a604691a9d7c0f4be324f8ce8ea0c7a3ac16746dc48a3fa69757b3ed02e2c = $this->env->getExtension("native_profiler");
        $__internal_4f0a604691a9d7c0f4be324f8ce8ea0c7a3ac16746dc48a3fa69757b3ed02e2c->enter($__internal_4f0a604691a9d7c0f4be324f8ce8ea0c7a3ac16746dc48a3fa69757b3ed02e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4f0a604691a9d7c0f4be324f8ce8ea0c7a3ac16746dc48a3fa69757b3ed02e2c->leave($__internal_4f0a604691a9d7c0f4be324f8ce8ea0c7a3ac16746dc48a3fa69757b3ed02e2c_prof);

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
