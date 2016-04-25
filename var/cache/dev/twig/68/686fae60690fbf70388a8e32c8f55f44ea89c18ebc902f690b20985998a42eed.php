<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0a6980ab79eef0b139703058309f9146327db755c878b08c3ea4ce0b5e79ca49 extends Twig_Template
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
        $__internal_a42804c5fc9a4fc9d345adf20f7fe3271fb2ce1f0a5df39ee89cdef2ace31708 = $this->env->getExtension("native_profiler");
        $__internal_a42804c5fc9a4fc9d345adf20f7fe3271fb2ce1f0a5df39ee89cdef2ace31708->enter($__internal_a42804c5fc9a4fc9d345adf20f7fe3271fb2ce1f0a5df39ee89cdef2ace31708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a42804c5fc9a4fc9d345adf20f7fe3271fb2ce1f0a5df39ee89cdef2ace31708->leave($__internal_a42804c5fc9a4fc9d345adf20f7fe3271fb2ce1f0a5df39ee89cdef2ace31708_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
