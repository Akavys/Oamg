<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_cec8c256d3b539bfca14e600581aedac99a0185b9841b56618e4a75376e020f0 extends Twig_Template
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
        $__internal_17022821492fd041c66054783431d3a8a228b2b7b24a884ac5171743ffca9a06 = $this->env->getExtension("native_profiler");
        $__internal_17022821492fd041c66054783431d3a8a228b2b7b24a884ac5171743ffca9a06->enter($__internal_17022821492fd041c66054783431d3a8a228b2b7b24a884ac5171743ffca9a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_17022821492fd041c66054783431d3a8a228b2b7b24a884ac5171743ffca9a06->leave($__internal_17022821492fd041c66054783431d3a8a228b2b7b24a884ac5171743ffca9a06_prof);

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
