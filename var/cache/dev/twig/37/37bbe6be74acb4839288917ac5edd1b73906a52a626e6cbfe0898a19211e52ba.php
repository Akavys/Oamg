<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e8e4e9e3e96f17e7f6adce55b4bb82d664634f375591473815b5e0b118c3d1a2 extends Twig_Template
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
        $__internal_2c758d66f686c45cd9d7299ff3b9859ca4e3b134a7ac885bba4618cee144d170 = $this->env->getExtension("native_profiler");
        $__internal_2c758d66f686c45cd9d7299ff3b9859ca4e3b134a7ac885bba4618cee144d170->enter($__internal_2c758d66f686c45cd9d7299ff3b9859ca4e3b134a7ac885bba4618cee144d170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2c758d66f686c45cd9d7299ff3b9859ca4e3b134a7ac885bba4618cee144d170->leave($__internal_2c758d66f686c45cd9d7299ff3b9859ca4e3b134a7ac885bba4618cee144d170_prof);

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
