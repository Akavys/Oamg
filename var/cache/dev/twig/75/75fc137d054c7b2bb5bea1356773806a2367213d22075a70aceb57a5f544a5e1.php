<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e6f2ee22081cc9e4570d1e07043b7153353d9e1b0d37c72ce356c4ce80cdbbb5 extends Twig_Template
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
        $__internal_1a878d3c554f9900a312a43dd7aae0cf3f7bce86b12436eb8f71dcfc11c60e7c = $this->env->getExtension("native_profiler");
        $__internal_1a878d3c554f9900a312a43dd7aae0cf3f7bce86b12436eb8f71dcfc11c60e7c->enter($__internal_1a878d3c554f9900a312a43dd7aae0cf3f7bce86b12436eb8f71dcfc11c60e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_1a878d3c554f9900a312a43dd7aae0cf3f7bce86b12436eb8f71dcfc11c60e7c->leave($__internal_1a878d3c554f9900a312a43dd7aae0cf3f7bce86b12436eb8f71dcfc11c60e7c_prof);

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
