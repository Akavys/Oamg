<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cc4f9a23b0009b3ae99bb0aa7990e598a50d2e14b5a6754a9061456f1c9432eb extends Twig_Template
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
        $__internal_378bd777089777d71ba9916f8f1f2d1d569b284512cf6b4b9f40e51163043897 = $this->env->getExtension("native_profiler");
        $__internal_378bd777089777d71ba9916f8f1f2d1d569b284512cf6b4b9f40e51163043897->enter($__internal_378bd777089777d71ba9916f8f1f2d1d569b284512cf6b4b9f40e51163043897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_378bd777089777d71ba9916f8f1f2d1d569b284512cf6b4b9f40e51163043897->leave($__internal_378bd777089777d71ba9916f8f1f2d1d569b284512cf6b4b9f40e51163043897_prof);

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
