<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f434ebec808bd74df008ec075c5e30a8d3c476a88659de38fe58843895ada2b0 extends Twig_Template
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
        $__internal_30d796b8d6ed18d9318a8b5f64a4df54fd2692be409feb063664864fa829e87c = $this->env->getExtension("native_profiler");
        $__internal_30d796b8d6ed18d9318a8b5f64a4df54fd2692be409feb063664864fa829e87c->enter($__internal_30d796b8d6ed18d9318a8b5f64a4df54fd2692be409feb063664864fa829e87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_30d796b8d6ed18d9318a8b5f64a4df54fd2692be409feb063664864fa829e87c->leave($__internal_30d796b8d6ed18d9318a8b5f64a4df54fd2692be409feb063664864fa829e87c_prof);

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
