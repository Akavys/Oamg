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
        $__internal_683224154e95b25a79b409b0df85222d58ca0dcb2542531f57e1bcf2614790ca = $this->env->getExtension("native_profiler");
        $__internal_683224154e95b25a79b409b0df85222d58ca0dcb2542531f57e1bcf2614790ca->enter($__internal_683224154e95b25a79b409b0df85222d58ca0dcb2542531f57e1bcf2614790ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_683224154e95b25a79b409b0df85222d58ca0dcb2542531f57e1bcf2614790ca->leave($__internal_683224154e95b25a79b409b0df85222d58ca0dcb2542531f57e1bcf2614790ca_prof);

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
