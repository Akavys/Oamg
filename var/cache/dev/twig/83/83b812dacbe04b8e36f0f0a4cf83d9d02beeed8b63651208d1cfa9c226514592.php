<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_db8c1fa6f590e4283b65c290dc8f3787723884b9ace1bc1b2ccc8e644dfb9903 extends Twig_Template
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
        $__internal_b1d49ebd1aedbf1217e71e10e0844f69110ce40912c4f8af8dd8aee601974265 = $this->env->getExtension("native_profiler");
        $__internal_b1d49ebd1aedbf1217e71e10e0844f69110ce40912c4f8af8dd8aee601974265->enter($__internal_b1d49ebd1aedbf1217e71e10e0844f69110ce40912c4f8af8dd8aee601974265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b1d49ebd1aedbf1217e71e10e0844f69110ce40912c4f8af8dd8aee601974265->leave($__internal_b1d49ebd1aedbf1217e71e10e0844f69110ce40912c4f8af8dd8aee601974265_prof);

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
