<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a886dc714be1d9c633d36fc6ec6071a2007336825d63085e54c28df3076124f4 extends Twig_Template
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
        $__internal_152a913b05d2c79aabf10ca90da773491e1d42e72e72a572ad66de4f47191e37 = $this->env->getExtension("native_profiler");
        $__internal_152a913b05d2c79aabf10ca90da773491e1d42e72e72a572ad66de4f47191e37->enter($__internal_152a913b05d2c79aabf10ca90da773491e1d42e72e72a572ad66de4f47191e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_152a913b05d2c79aabf10ca90da773491e1d42e72e72a572ad66de4f47191e37->leave($__internal_152a913b05d2c79aabf10ca90da773491e1d42e72e72a572ad66de4f47191e37_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
