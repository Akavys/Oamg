<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f3c2895bd09d482450b75b4a58a4b28b9622eb46543deb949709b146e9171271 extends Twig_Template
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
        $__internal_8b069347cd9a54945397e628a44830aa3addaa5a6a83f6821fe73bd0b2dbd534 = $this->env->getExtension("native_profiler");
        $__internal_8b069347cd9a54945397e628a44830aa3addaa5a6a83f6821fe73bd0b2dbd534->enter($__internal_8b069347cd9a54945397e628a44830aa3addaa5a6a83f6821fe73bd0b2dbd534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8b069347cd9a54945397e628a44830aa3addaa5a6a83f6821fe73bd0b2dbd534->leave($__internal_8b069347cd9a54945397e628a44830aa3addaa5a6a83f6821fe73bd0b2dbd534_prof);

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
