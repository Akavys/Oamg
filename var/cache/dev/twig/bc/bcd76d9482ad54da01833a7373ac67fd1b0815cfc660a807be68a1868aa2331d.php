<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_bde46f2febdff968edeb085a023347144c29954cb349d7a4b54b7a7d6c0bc2a1 extends Twig_Template
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
        $__internal_7359d57157199dd14e128d807e91c42f72c12e51c18b27be980a0b6009934264 = $this->env->getExtension("native_profiler");
        $__internal_7359d57157199dd14e128d807e91c42f72c12e51c18b27be980a0b6009934264->enter($__internal_7359d57157199dd14e128d807e91c42f72c12e51c18b27be980a0b6009934264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7359d57157199dd14e128d807e91c42f72c12e51c18b27be980a0b6009934264->leave($__internal_7359d57157199dd14e128d807e91c42f72c12e51c18b27be980a0b6009934264_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
