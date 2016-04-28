<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2eea2851982b1b8684091d68f5ade4f681d640283ddde3f1ff867e3c6dad39bb extends Twig_Template
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
        $__internal_cd499992b48b00e4b4b82899a73d7779328846175a2685ba2726e7e5bab58fa1 = $this->env->getExtension("native_profiler");
        $__internal_cd499992b48b00e4b4b82899a73d7779328846175a2685ba2726e7e5bab58fa1->enter($__internal_cd499992b48b00e4b4b82899a73d7779328846175a2685ba2726e7e5bab58fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_cd499992b48b00e4b4b82899a73d7779328846175a2685ba2726e7e5bab58fa1->leave($__internal_cd499992b48b00e4b4b82899a73d7779328846175a2685ba2726e7e5bab58fa1_prof);

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
