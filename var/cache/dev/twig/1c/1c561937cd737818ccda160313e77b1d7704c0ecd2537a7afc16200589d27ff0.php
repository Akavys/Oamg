<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_572b16c1bbddb22d3f722f964d5a795f7561afe3b42fe75273eee2adf0590393 extends Twig_Template
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
        $__internal_17f9aed1ae8e81e047c8e9c07b530793074b6250c30859244ce6261eefb5fbbe = $this->env->getExtension("native_profiler");
        $__internal_17f9aed1ae8e81e047c8e9c07b530793074b6250c30859244ce6261eefb5fbbe->enter($__internal_17f9aed1ae8e81e047c8e9c07b530793074b6250c30859244ce6261eefb5fbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_17f9aed1ae8e81e047c8e9c07b530793074b6250c30859244ce6261eefb5fbbe->leave($__internal_17f9aed1ae8e81e047c8e9c07b530793074b6250c30859244ce6261eefb5fbbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
