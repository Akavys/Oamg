<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9e747db9261fe03aba45b4e335f9e9c07221b1dd54a3b1e595e3b12db9497d57 extends Twig_Template
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
        $__internal_80c300185677504981c30e5074333e8306396b26cacf3c6f1be3a34aeda53775 = $this->env->getExtension("native_profiler");
        $__internal_80c300185677504981c30e5074333e8306396b26cacf3c6f1be3a34aeda53775->enter($__internal_80c300185677504981c30e5074333e8306396b26cacf3c6f1be3a34aeda53775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_80c300185677504981c30e5074333e8306396b26cacf3c6f1be3a34aeda53775->leave($__internal_80c300185677504981c30e5074333e8306396b26cacf3c6f1be3a34aeda53775_prof);

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
