<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3716073bb9958c628449c1a24d9e2446f0ec82c7953a3c95b0ca3f498bd93926 extends Twig_Template
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
        $__internal_804f763eb3f4e21088fd0f5f7af7e12b45ab2159349ca51388103b6d03b90486 = $this->env->getExtension("native_profiler");
        $__internal_804f763eb3f4e21088fd0f5f7af7e12b45ab2159349ca51388103b6d03b90486->enter($__internal_804f763eb3f4e21088fd0f5f7af7e12b45ab2159349ca51388103b6d03b90486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_804f763eb3f4e21088fd0f5f7af7e12b45ab2159349ca51388103b6d03b90486->leave($__internal_804f763eb3f4e21088fd0f5f7af7e12b45ab2159349ca51388103b6d03b90486_prof);

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
