<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_803fd3377f5c687fb402847a23db802494347888eb0da3467d8cf9e13b38daea extends Twig_Template
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
        $__internal_7806629b028b6448c626db25f4eb46fd81df92ac73460a964a1ee5db7dcbce00 = $this->env->getExtension("native_profiler");
        $__internal_7806629b028b6448c626db25f4eb46fd81df92ac73460a964a1ee5db7dcbce00->enter($__internal_7806629b028b6448c626db25f4eb46fd81df92ac73460a964a1ee5db7dcbce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7806629b028b6448c626db25f4eb46fd81df92ac73460a964a1ee5db7dcbce00->leave($__internal_7806629b028b6448c626db25f4eb46fd81df92ac73460a964a1ee5db7dcbce00_prof);

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
