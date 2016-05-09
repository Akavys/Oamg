<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f37c4beaa0a62f8a4f6fb35c6f7387862001fb96e2ed8aa100c6fd71050cc319 extends Twig_Template
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
        $__internal_cdc7fa616d6b1b32e74f922b5455b469c2ee9ca5c630ffc52ccb4b2113fa7f34 = $this->env->getExtension("native_profiler");
        $__internal_cdc7fa616d6b1b32e74f922b5455b469c2ee9ca5c630ffc52ccb4b2113fa7f34->enter($__internal_cdc7fa616d6b1b32e74f922b5455b469c2ee9ca5c630ffc52ccb4b2113fa7f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_cdc7fa616d6b1b32e74f922b5455b469c2ee9ca5c630ffc52ccb4b2113fa7f34->leave($__internal_cdc7fa616d6b1b32e74f922b5455b469c2ee9ca5c630ffc52ccb4b2113fa7f34_prof);

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
