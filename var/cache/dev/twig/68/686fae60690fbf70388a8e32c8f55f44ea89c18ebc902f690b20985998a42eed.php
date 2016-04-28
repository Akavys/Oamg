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
        $__internal_8af6d25af86fb8b01b2d930cf94854a02c0182f36ecf3a7035ab9081ac0a0f61 = $this->env->getExtension("native_profiler");
        $__internal_8af6d25af86fb8b01b2d930cf94854a02c0182f36ecf3a7035ab9081ac0a0f61->enter($__internal_8af6d25af86fb8b01b2d930cf94854a02c0182f36ecf3a7035ab9081ac0a0f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8af6d25af86fb8b01b2d930cf94854a02c0182f36ecf3a7035ab9081ac0a0f61->leave($__internal_8af6d25af86fb8b01b2d930cf94854a02c0182f36ecf3a7035ab9081ac0a0f61_prof);

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
