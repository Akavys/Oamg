<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a4d77ec4b000e2a817ead387ecf1d5c612a32827c7d40151b2cefca0d216dd90 extends Twig_Template
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
        $__internal_294a45c1cd5e58e3d2a5e93ad3595b9ac56030d07acfe532d2941b10c48ce149 = $this->env->getExtension("native_profiler");
        $__internal_294a45c1cd5e58e3d2a5e93ad3595b9ac56030d07acfe532d2941b10c48ce149->enter($__internal_294a45c1cd5e58e3d2a5e93ad3595b9ac56030d07acfe532d2941b10c48ce149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_294a45c1cd5e58e3d2a5e93ad3595b9ac56030d07acfe532d2941b10c48ce149->leave($__internal_294a45c1cd5e58e3d2a5e93ad3595b9ac56030d07acfe532d2941b10c48ce149_prof);

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
