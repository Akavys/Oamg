<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_22f31dfc9233f1608a6af958dbc5b19305cb3d1bfe1464ed04987b1bb83726d6 extends Twig_Template
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
        $__internal_56eaabdf288bd960fac6ea182038adec2d535bd3320ef94757f1f02424dd79db = $this->env->getExtension("native_profiler");
        $__internal_56eaabdf288bd960fac6ea182038adec2d535bd3320ef94757f1f02424dd79db->enter($__internal_56eaabdf288bd960fac6ea182038adec2d535bd3320ef94757f1f02424dd79db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_56eaabdf288bd960fac6ea182038adec2d535bd3320ef94757f1f02424dd79db->leave($__internal_56eaabdf288bd960fac6ea182038adec2d535bd3320ef94757f1f02424dd79db_prof);

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
