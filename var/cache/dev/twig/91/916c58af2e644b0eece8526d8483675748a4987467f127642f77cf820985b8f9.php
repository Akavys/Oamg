<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_39e6503f0167102a1e8be62d6a24cd9e93b2a317518a1bb8cba23fe1fecef86e extends Twig_Template
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
        $__internal_a8762dfc0d3096c610484d7019306e3dfde8c62586f18106519c8c902d25b37f = $this->env->getExtension("native_profiler");
        $__internal_a8762dfc0d3096c610484d7019306e3dfde8c62586f18106519c8c902d25b37f->enter($__internal_a8762dfc0d3096c610484d7019306e3dfde8c62586f18106519c8c902d25b37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a8762dfc0d3096c610484d7019306e3dfde8c62586f18106519c8c902d25b37f->leave($__internal_a8762dfc0d3096c610484d7019306e3dfde8c62586f18106519c8c902d25b37f_prof);

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
