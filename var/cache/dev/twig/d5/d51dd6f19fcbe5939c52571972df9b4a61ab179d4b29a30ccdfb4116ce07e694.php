<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_29cba672838cf1cc128b1d3423c4e0bab8881861c9a55094027bbe4d6ae69f6d extends Twig_Template
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
        $__internal_418805f9ae976ace087fb8a674f9fe04d18c443364503bc3ee446ce499833d02 = $this->env->getExtension("native_profiler");
        $__internal_418805f9ae976ace087fb8a674f9fe04d18c443364503bc3ee446ce499833d02->enter($__internal_418805f9ae976ace087fb8a674f9fe04d18c443364503bc3ee446ce499833d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_418805f9ae976ace087fb8a674f9fe04d18c443364503bc3ee446ce499833d02->leave($__internal_418805f9ae976ace087fb8a674f9fe04d18c443364503bc3ee446ce499833d02_prof);

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
