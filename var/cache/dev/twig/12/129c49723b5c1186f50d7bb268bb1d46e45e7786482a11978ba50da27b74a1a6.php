<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_309860bc94c63e95336992db9b17d802e333cc4c9e5ea580da6f1a2eb266b58f extends Twig_Template
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
        $__internal_6e21ddc4fe092aa6c9c14de1e2e999ec583d058baa70457aeb53110c09f1a8e2 = $this->env->getExtension("native_profiler");
        $__internal_6e21ddc4fe092aa6c9c14de1e2e999ec583d058baa70457aeb53110c09f1a8e2->enter($__internal_6e21ddc4fe092aa6c9c14de1e2e999ec583d058baa70457aeb53110c09f1a8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6e21ddc4fe092aa6c9c14de1e2e999ec583d058baa70457aeb53110c09f1a8e2->leave($__internal_6e21ddc4fe092aa6c9c14de1e2e999ec583d058baa70457aeb53110c09f1a8e2_prof);

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
