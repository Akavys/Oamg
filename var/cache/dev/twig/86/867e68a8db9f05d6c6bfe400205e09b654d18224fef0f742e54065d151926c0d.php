<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fe52e22aec315f064937a22424b877c6be6a99b503462a13d26c014deace2e8b extends Twig_Template
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
        $__internal_3dff22ab2bc7f01baeecf9f1e4b8ab47c778f2de5a40d988e02ee935844ce8e0 = $this->env->getExtension("native_profiler");
        $__internal_3dff22ab2bc7f01baeecf9f1e4b8ab47c778f2de5a40d988e02ee935844ce8e0->enter($__internal_3dff22ab2bc7f01baeecf9f1e4b8ab47c778f2de5a40d988e02ee935844ce8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3dff22ab2bc7f01baeecf9f1e4b8ab47c778f2de5a40d988e02ee935844ce8e0->leave($__internal_3dff22ab2bc7f01baeecf9f1e4b8ab47c778f2de5a40d988e02ee935844ce8e0_prof);

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
