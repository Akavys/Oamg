<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_30caf984de41ccb65b022224badb526e89524e12b5ba073d1b413cf1556e88a6 extends Twig_Template
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
        $__internal_7aea6391b03c7080edc1ddf7811947306ac2f43cc43a1a14aa4b0fcd09b62910 = $this->env->getExtension("native_profiler");
        $__internal_7aea6391b03c7080edc1ddf7811947306ac2f43cc43a1a14aa4b0fcd09b62910->enter($__internal_7aea6391b03c7080edc1ddf7811947306ac2f43cc43a1a14aa4b0fcd09b62910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7aea6391b03c7080edc1ddf7811947306ac2f43cc43a1a14aa4b0fcd09b62910->leave($__internal_7aea6391b03c7080edc1ddf7811947306ac2f43cc43a1a14aa4b0fcd09b62910_prof);

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
