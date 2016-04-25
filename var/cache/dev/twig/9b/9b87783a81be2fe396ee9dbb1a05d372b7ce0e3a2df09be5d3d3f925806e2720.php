<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c7c5b6f9733f5aad36ee36893466af11ba5dd29cf23452c65efc41be4dbeecb6 extends Twig_Template
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
        $__internal_6d7b5d8a6df5105d8f9c8cbe75e9092cda94ab7314fd31ac416af4bb6a85c38e = $this->env->getExtension("native_profiler");
        $__internal_6d7b5d8a6df5105d8f9c8cbe75e9092cda94ab7314fd31ac416af4bb6a85c38e->enter($__internal_6d7b5d8a6df5105d8f9c8cbe75e9092cda94ab7314fd31ac416af4bb6a85c38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_6d7b5d8a6df5105d8f9c8cbe75e9092cda94ab7314fd31ac416af4bb6a85c38e->leave($__internal_6d7b5d8a6df5105d8f9c8cbe75e9092cda94ab7314fd31ac416af4bb6a85c38e_prof);

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
