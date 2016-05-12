<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_44da368f652f30054a57f1d82ec6566b4dc216045c128b5f93629c85fe4c8859 extends Twig_Template
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
        $__internal_2abb9d4a29e20e11b3919d72e3dade5043b3057df512d8183c2b1fac54a34f7e = $this->env->getExtension("native_profiler");
        $__internal_2abb9d4a29e20e11b3919d72e3dade5043b3057df512d8183c2b1fac54a34f7e->enter($__internal_2abb9d4a29e20e11b3919d72e3dade5043b3057df512d8183c2b1fac54a34f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2abb9d4a29e20e11b3919d72e3dade5043b3057df512d8183c2b1fac54a34f7e->leave($__internal_2abb9d4a29e20e11b3919d72e3dade5043b3057df512d8183c2b1fac54a34f7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
