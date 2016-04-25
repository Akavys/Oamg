<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7aea7f885721dfe5bb05d3e635f96c699b9cf9b93ba249ac74ca07b19919e4ea extends Twig_Template
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
        $__internal_2f25188592da1be41d83b93c62f03a45ba412a85a9e0ea25f09cab65d773f4d6 = $this->env->getExtension("native_profiler");
        $__internal_2f25188592da1be41d83b93c62f03a45ba412a85a9e0ea25f09cab65d773f4d6->enter($__internal_2f25188592da1be41d83b93c62f03a45ba412a85a9e0ea25f09cab65d773f4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_2f25188592da1be41d83b93c62f03a45ba412a85a9e0ea25f09cab65d773f4d6->leave($__internal_2f25188592da1be41d83b93c62f03a45ba412a85a9e0ea25f09cab65d773f4d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
