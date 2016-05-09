<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_709fcd97dd825e2af5db6d79bbc99d8a820a5e6a4b917adbb304cbeb9e9ff200 extends Twig_Template
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
        $__internal_48fd7fe9984be4786fdeaa25b0f33ce940d745d9d998346f46fde4263642265f = $this->env->getExtension("native_profiler");
        $__internal_48fd7fe9984be4786fdeaa25b0f33ce940d745d9d998346f46fde4263642265f->enter($__internal_48fd7fe9984be4786fdeaa25b0f33ce940d745d9d998346f46fde4263642265f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_48fd7fe9984be4786fdeaa25b0f33ce940d745d9d998346f46fde4263642265f->leave($__internal_48fd7fe9984be4786fdeaa25b0f33ce940d745d9d998346f46fde4263642265f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
