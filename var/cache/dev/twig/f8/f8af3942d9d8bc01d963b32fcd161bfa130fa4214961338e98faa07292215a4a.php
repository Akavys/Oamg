<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_04cf29ffefbf6159c408ad2db58abb052855f18b34d39bc4a47f7b86da82983b extends Twig_Template
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
        $__internal_641b9c834e2ee00da87fd3153b2d9ad6429956d24af385503c6827570ddd43fb = $this->env->getExtension("native_profiler");
        $__internal_641b9c834e2ee00da87fd3153b2d9ad6429956d24af385503c6827570ddd43fb->enter($__internal_641b9c834e2ee00da87fd3153b2d9ad6429956d24af385503c6827570ddd43fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_641b9c834e2ee00da87fd3153b2d9ad6429956d24af385503c6827570ddd43fb->leave($__internal_641b9c834e2ee00da87fd3153b2d9ad6429956d24af385503c6827570ddd43fb_prof);

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
