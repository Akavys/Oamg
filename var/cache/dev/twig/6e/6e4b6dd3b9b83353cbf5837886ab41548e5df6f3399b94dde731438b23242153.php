<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4b1adb87f02ff93116dfe1fd91b3bef595f68a7a010d7c28d1a8a19a85ad849c extends Twig_Template
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
        $__internal_d187de7b310c4ae4679b21786b972d94e576ac77e5e1f8f92cd7181dfab4e80f = $this->env->getExtension("native_profiler");
        $__internal_d187de7b310c4ae4679b21786b972d94e576ac77e5e1f8f92cd7181dfab4e80f->enter($__internal_d187de7b310c4ae4679b21786b972d94e576ac77e5e1f8f92cd7181dfab4e80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d187de7b310c4ae4679b21786b972d94e576ac77e5e1f8f92cd7181dfab4e80f->leave($__internal_d187de7b310c4ae4679b21786b972d94e576ac77e5e1f8f92cd7181dfab4e80f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
