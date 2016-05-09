<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e7e62d89948e8791f59021542b4eeed921cd44e0388f9c733499abdcadb3654e extends Twig_Template
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
        $__internal_0d45d92441a35c7aab270b3e458e0963a67a5d164bf1394fbc66225a44ce575a = $this->env->getExtension("native_profiler");
        $__internal_0d45d92441a35c7aab270b3e458e0963a67a5d164bf1394fbc66225a44ce575a->enter($__internal_0d45d92441a35c7aab270b3e458e0963a67a5d164bf1394fbc66225a44ce575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0d45d92441a35c7aab270b3e458e0963a67a5d164bf1394fbc66225a44ce575a->leave($__internal_0d45d92441a35c7aab270b3e458e0963a67a5d164bf1394fbc66225a44ce575a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
