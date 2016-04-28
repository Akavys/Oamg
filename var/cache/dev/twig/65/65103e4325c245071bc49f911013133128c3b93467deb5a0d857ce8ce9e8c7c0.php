<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8a63b323f366feafc68bf7f6d1aa47eabf2c9e5c6f695412b50da9d52650c992 extends Twig_Template
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
        $__internal_1f724595a7434dcdba669820e3af6a5f224a4b0df85e95599c792fd51982d9b5 = $this->env->getExtension("native_profiler");
        $__internal_1f724595a7434dcdba669820e3af6a5f224a4b0df85e95599c792fd51982d9b5->enter($__internal_1f724595a7434dcdba669820e3af6a5f224a4b0df85e95599c792fd51982d9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1f724595a7434dcdba669820e3af6a5f224a4b0df85e95599c792fd51982d9b5->leave($__internal_1f724595a7434dcdba669820e3af6a5f224a4b0df85e95599c792fd51982d9b5_prof);

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
