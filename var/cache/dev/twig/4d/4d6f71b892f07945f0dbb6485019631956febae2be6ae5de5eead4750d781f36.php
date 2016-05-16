<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_db27e4ea164098bca1b1fd496d5058535cb56e5047dbfdffbab9a8dd0bf59de3 extends Twig_Template
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
        $__internal_3e1060496c26aa798f2c20024e1d0ac05eebd5cbab1c25b43bfde34630344f40 = $this->env->getExtension("native_profiler");
        $__internal_3e1060496c26aa798f2c20024e1d0ac05eebd5cbab1c25b43bfde34630344f40->enter($__internal_3e1060496c26aa798f2c20024e1d0ac05eebd5cbab1c25b43bfde34630344f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3e1060496c26aa798f2c20024e1d0ac05eebd5cbab1c25b43bfde34630344f40->leave($__internal_3e1060496c26aa798f2c20024e1d0ac05eebd5cbab1c25b43bfde34630344f40_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
