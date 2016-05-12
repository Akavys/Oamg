<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6a94024011ca374c30d8ebb7749df45cbf3c9cd6082dbd389606547c2c552941 extends Twig_Template
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
        $__internal_75da84e9c8de53cd8877d8476255dd787cb3dc3357aea5b63ae0f1aa1385c589 = $this->env->getExtension("native_profiler");
        $__internal_75da84e9c8de53cd8877d8476255dd787cb3dc3357aea5b63ae0f1aa1385c589->enter($__internal_75da84e9c8de53cd8877d8476255dd787cb3dc3357aea5b63ae0f1aa1385c589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_75da84e9c8de53cd8877d8476255dd787cb3dc3357aea5b63ae0f1aa1385c589->leave($__internal_75da84e9c8de53cd8877d8476255dd787cb3dc3357aea5b63ae0f1aa1385c589_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
