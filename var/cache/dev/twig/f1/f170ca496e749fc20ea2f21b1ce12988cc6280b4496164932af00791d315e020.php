<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2e1e3a55c03f1d6a82876bd7061e8cd70e777413d58b714bbac994e644077411 extends Twig_Template
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
        $__internal_799a3e646d43285a6bdf9233391ab13b17400356066b3ad1ea44782dc2a44d69 = $this->env->getExtension("native_profiler");
        $__internal_799a3e646d43285a6bdf9233391ab13b17400356066b3ad1ea44782dc2a44d69->enter($__internal_799a3e646d43285a6bdf9233391ab13b17400356066b3ad1ea44782dc2a44d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_799a3e646d43285a6bdf9233391ab13b17400356066b3ad1ea44782dc2a44d69->leave($__internal_799a3e646d43285a6bdf9233391ab13b17400356066b3ad1ea44782dc2a44d69_prof);

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
