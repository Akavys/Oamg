<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c3099e8586d241ebdb0a33f6394eaffc16842b7b25dd181738fff2b576e378a4 extends Twig_Template
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
        $__internal_a80e97f2157295c19ac194af5920bddf3002111cdd3a08f2c1736cb7ac70bfb1 = $this->env->getExtension("native_profiler");
        $__internal_a80e97f2157295c19ac194af5920bddf3002111cdd3a08f2c1736cb7ac70bfb1->enter($__internal_a80e97f2157295c19ac194af5920bddf3002111cdd3a08f2c1736cb7ac70bfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a80e97f2157295c19ac194af5920bddf3002111cdd3a08f2c1736cb7ac70bfb1->leave($__internal_a80e97f2157295c19ac194af5920bddf3002111cdd3a08f2c1736cb7ac70bfb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
