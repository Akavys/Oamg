<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_32abc4de0d2279e23ee57ba9f500e3f17c64b80578b4ed9f1b99b20bbd73ed6f extends Twig_Template
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
        $__internal_38f49877734b8229bb8539f591026ef37df6f2f2419f3d89904fce90056a1245 = $this->env->getExtension("native_profiler");
        $__internal_38f49877734b8229bb8539f591026ef37df6f2f2419f3d89904fce90056a1245->enter($__internal_38f49877734b8229bb8539f591026ef37df6f2f2419f3d89904fce90056a1245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_38f49877734b8229bb8539f591026ef37df6f2f2419f3d89904fce90056a1245->leave($__internal_38f49877734b8229bb8539f591026ef37df6f2f2419f3d89904fce90056a1245_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
