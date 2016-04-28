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
        $__internal_871a699a171ebbf38517ea6fadb06563d57c0e30d1930ea2afba5ce28a6595a8 = $this->env->getExtension("native_profiler");
        $__internal_871a699a171ebbf38517ea6fadb06563d57c0e30d1930ea2afba5ce28a6595a8->enter($__internal_871a699a171ebbf38517ea6fadb06563d57c0e30d1930ea2afba5ce28a6595a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_871a699a171ebbf38517ea6fadb06563d57c0e30d1930ea2afba5ce28a6595a8->leave($__internal_871a699a171ebbf38517ea6fadb06563d57c0e30d1930ea2afba5ce28a6595a8_prof);

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
