<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2cbffb34376076792b27500803782cafa8a4fa13450d40ec468caf93ade89f63 extends Twig_Template
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
        $__internal_f4e1b3b84c43b4ce42b80a7ce210e7835096cc2c25f9875de55365db92049d8a = $this->env->getExtension("native_profiler");
        $__internal_f4e1b3b84c43b4ce42b80a7ce210e7835096cc2c25f9875de55365db92049d8a->enter($__internal_f4e1b3b84c43b4ce42b80a7ce210e7835096cc2c25f9875de55365db92049d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f4e1b3b84c43b4ce42b80a7ce210e7835096cc2c25f9875de55365db92049d8a->leave($__internal_f4e1b3b84c43b4ce42b80a7ce210e7835096cc2c25f9875de55365db92049d8a_prof);

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
