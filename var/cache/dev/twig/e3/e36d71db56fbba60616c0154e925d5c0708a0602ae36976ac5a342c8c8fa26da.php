<?php

/* GmaoMoulageBundle:Moule:ajouter.html.twig */
class __TwigTemplate_77a5cd9771e162ace70ccacf6cccca1a003588d9d627417f807d9c6968b6ce18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Moule:ajouter.html.twig", 1);
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
        $__internal_4135b40a804bf215f4f266cbfb9d8a92e3de3282a2f36a594978f1f7185897d4 = $this->env->getExtension("native_profiler");
        $__internal_4135b40a804bf215f4f266cbfb9d8a92e3de3282a2f36a594978f1f7185897d4->enter($__internal_4135b40a804bf215f4f266cbfb9d8a92e3de3282a2f36a594978f1f7185897d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Moule:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4135b40a804bf215f4f266cbfb9d8a92e3de3282a2f36a594978f1f7185897d4->leave($__internal_4135b40a804bf215f4f266cbfb9d8a92e3de3282a2f36a594978f1f7185897d4_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_6c4afa3cc7c974afd372b7f602c1a32c29335497c6062bd57d59ffa5b8de0337 = $this->env->getExtension("native_profiler");
        $__internal_6c4afa3cc7c974afd372b7f602c1a32c29335497c6062bd57d59ffa5b8de0337->enter($__internal_6c4afa3cc7c974afd372b7f602c1a32c29335497c6062bd57d59ffa5b8de0337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Ajouter - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_6c4afa3cc7c974afd372b7f602c1a32c29335497c6062bd57d59ffa5b8de0337->leave($__internal_6c4afa3cc7c974afd372b7f602c1a32c29335497c6062bd57d59ffa5b8de0337_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_236a1eededc80f282300dc9404e634739e081b29424a80fb950f7dc0329a4b7e = $this->env->getExtension("native_profiler");
        $__internal_236a1eededc80f282300dc9404e634739e081b29424a80fb950f7dc0329a4b7e->enter($__internal_236a1eededc80f282300dc9404e634739e081b29424a80fb950f7dc0329a4b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2 class=\"ui dividing header\" > Ajouter un moule </h2>

    ";
        // line 11
        $this->loadTemplate("GmaoMoulageBundle:Moule:formulaire.html.twig", "GmaoMoulageBundle:Moule:ajouter.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_236a1eededc80f282300dc9404e634739e081b29424a80fb950f7dc0329a4b7e->leave($__internal_236a1eededc80f282300dc9404e634739e081b29424a80fb950f7dc0329a4b7e_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Moule:ajouter.html.twig";
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
/*   Ajouter - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2 class="ui dividing header" > Ajouter un moule </h2>*/
/* */
/*     {% include "GmaoMoulageBundle:Moule:formulaire.html.twig" %}*/
/* */
/* {% endblock %}*/
/* */
