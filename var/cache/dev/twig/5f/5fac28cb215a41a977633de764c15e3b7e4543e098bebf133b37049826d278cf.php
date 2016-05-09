<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d5af283209a27e5535ae0a258375b582f0d9a435162ec2209b5b2f40f8c85a6d extends Twig_Template
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
        $__internal_489c9318486ad4e0f9ee43c8228770b1ed324bcffa163e50faf044f845c5c961 = $this->env->getExtension("native_profiler");
        $__internal_489c9318486ad4e0f9ee43c8228770b1ed324bcffa163e50faf044f845c5c961->enter($__internal_489c9318486ad4e0f9ee43c8228770b1ed324bcffa163e50faf044f845c5c961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_489c9318486ad4e0f9ee43c8228770b1ed324bcffa163e50faf044f845c5c961->leave($__internal_489c9318486ad4e0f9ee43c8228770b1ed324bcffa163e50faf044f845c5c961_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
