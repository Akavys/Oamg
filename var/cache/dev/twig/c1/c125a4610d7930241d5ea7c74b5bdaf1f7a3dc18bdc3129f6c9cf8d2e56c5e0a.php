<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_401e91ef8004037967f4ebb897de18822724cf50b786725a77f50052a69a1b73 extends Twig_Template
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
        $__internal_4290adfad7782e16b927506c76d4d49b937334d797dd743e634f8a3c56a17d3d = $this->env->getExtension("native_profiler");
        $__internal_4290adfad7782e16b927506c76d4d49b937334d797dd743e634f8a3c56a17d3d->enter($__internal_4290adfad7782e16b927506c76d4d49b937334d797dd743e634f8a3c56a17d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4290adfad7782e16b927506c76d4d49b937334d797dd743e634f8a3c56a17d3d->leave($__internal_4290adfad7782e16b927506c76d4d49b937334d797dd743e634f8a3c56a17d3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
