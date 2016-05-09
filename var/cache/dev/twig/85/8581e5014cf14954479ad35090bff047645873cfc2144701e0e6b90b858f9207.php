<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3258b3ba125ad5075b224559ef65ebe274c56f7a944334198e3228246a2e6c28 extends Twig_Template
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
        $__internal_9139d32ed2b86d1da3784e23cd45b30d19a0d496507fca5215c8c07a62cded31 = $this->env->getExtension("native_profiler");
        $__internal_9139d32ed2b86d1da3784e23cd45b30d19a0d496507fca5215c8c07a62cded31->enter($__internal_9139d32ed2b86d1da3784e23cd45b30d19a0d496507fca5215c8c07a62cded31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9139d32ed2b86d1da3784e23cd45b30d19a0d496507fca5215c8c07a62cded31->leave($__internal_9139d32ed2b86d1da3784e23cd45b30d19a0d496507fca5215c8c07a62cded31_prof);

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
