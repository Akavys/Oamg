<?php

/* @GmaoMoulage/Presse/ajouter.html.twig */
class __TwigTemplate_0c1f0dc082a74914209cf6f4478ac283d8e563ef523c4f1d6a5ee576cb959ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Presse/ajouter.html.twig", 1);
        $this->blocks = array(
            'tittle' => array($this, 'block_tittle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445de66b934f2be95e1b2b44764b61fbafd183e1b9df7d07478b53de135b72e9 = $this->env->getExtension("native_profiler");
        $__internal_445de66b934f2be95e1b2b44764b61fbafd183e1b9df7d07478b53de135b72e9->enter($__internal_445de66b934f2be95e1b2b44764b61fbafd183e1b9df7d07478b53de135b72e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445de66b934f2be95e1b2b44764b61fbafd183e1b9df7d07478b53de135b72e9->leave($__internal_445de66b934f2be95e1b2b44764b61fbafd183e1b9df7d07478b53de135b72e9_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_c5c157d1698ddd5483314442db06e4180e7aa18b6d77adb5a51795e043b6ca9c = $this->env->getExtension("native_profiler");
        $__internal_c5c157d1698ddd5483314442db06e4180e7aa18b6d77adb5a51795e043b6ca9c->enter($__internal_c5c157d1698ddd5483314442db06e4180e7aa18b6d77adb5a51795e043b6ca9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_c5c157d1698ddd5483314442db06e4180e7aa18b6d77adb5a51795e043b6ca9c->leave($__internal_c5c157d1698ddd5483314442db06e4180e7aa18b6d77adb5a51795e043b6ca9c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_957c4909b376755e85cdb1e99a969d96ecd0a9d1fbddc233eaf2bd922f1b9b87 = $this->env->getExtension("native_profiler");
        $__internal_957c4909b376755e85cdb1e99a969d96ecd0a9d1fbddc233eaf2bd922f1b9b87->enter($__internal_957c4909b376755e85cdb1e99a969d96ecd0a9d1fbddc233eaf2bd922f1b9b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter une presse </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Presse:formulaire.html.twig", "@GmaoMoulage/Presse/ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_957c4909b376755e85cdb1e99a969d96ecd0a9d1fbddc233eaf2bd922f1b9b87->leave($__internal_957c4909b376755e85cdb1e99a969d96ecd0a9d1fbddc233eaf2bd922f1b9b87_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Presse/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block tittle %}*/
/*   Liste - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header" > Ajouter une presse </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Presse:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
