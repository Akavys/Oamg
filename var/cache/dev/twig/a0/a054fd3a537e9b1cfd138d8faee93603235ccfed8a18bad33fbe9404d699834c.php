<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_cac3e407c33c836cb15e71addbdcff9f03920021c232c8da92c7f154e0f2639c extends Twig_Template
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
        $__internal_546582a044835f13a4c2716602caab80949f35f28c4b7ca249172a453c018493 = $this->env->getExtension("native_profiler");
        $__internal_546582a044835f13a4c2716602caab80949f35f28c4b7ca249172a453c018493->enter($__internal_546582a044835f13a4c2716602caab80949f35f28c4b7ca249172a453c018493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_546582a044835f13a4c2716602caab80949f35f28c4b7ca249172a453c018493->leave($__internal_546582a044835f13a4c2716602caab80949f35f28c4b7ca249172a453c018493_prof);

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
