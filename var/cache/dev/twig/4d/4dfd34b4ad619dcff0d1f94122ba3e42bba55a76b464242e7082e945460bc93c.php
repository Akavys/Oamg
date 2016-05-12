<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0f9c1476b3f98d682a9afa01ebaf331db722744bf0ddf362056bc246d5615542 extends Twig_Template
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
        $__internal_e75c71b9d5c7718af99d29cb26eafffd7b9e1b089d9e70cc148581c02fd88082 = $this->env->getExtension("native_profiler");
        $__internal_e75c71b9d5c7718af99d29cb26eafffd7b9e1b089d9e70cc148581c02fd88082->enter($__internal_e75c71b9d5c7718af99d29cb26eafffd7b9e1b089d9e70cc148581c02fd88082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e75c71b9d5c7718af99d29cb26eafffd7b9e1b089d9e70cc148581c02fd88082->leave($__internal_e75c71b9d5c7718af99d29cb26eafffd7b9e1b089d9e70cc148581c02fd88082_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
