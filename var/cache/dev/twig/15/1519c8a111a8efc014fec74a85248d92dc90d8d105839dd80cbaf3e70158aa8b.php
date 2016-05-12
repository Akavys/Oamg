<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a74e52353d91a7a96d24f8d595f7e008043d3b981fcdc3879ab5e22e65132e40 extends Twig_Template
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
        $__internal_b4aef81a7c90a72e612b927c96ee388695a1986b0baed82767dd133db2f968fa = $this->env->getExtension("native_profiler");
        $__internal_b4aef81a7c90a72e612b927c96ee388695a1986b0baed82767dd133db2f968fa->enter($__internal_b4aef81a7c90a72e612b927c96ee388695a1986b0baed82767dd133db2f968fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b4aef81a7c90a72e612b927c96ee388695a1986b0baed82767dd133db2f968fa->leave($__internal_b4aef81a7c90a72e612b927c96ee388695a1986b0baed82767dd133db2f968fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
