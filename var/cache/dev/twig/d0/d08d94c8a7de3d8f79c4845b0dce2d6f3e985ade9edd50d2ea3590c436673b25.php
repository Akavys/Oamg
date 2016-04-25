<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9229ab95d58e34274efbdddb218914a20ab8a58c6f8762649dc356dfbe26b230 extends Twig_Template
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
        $__internal_ca2c0f7872da7fee2e76a3f8a1e3ecb00ee81c9d1c6557572f3f8466e70fd143 = $this->env->getExtension("native_profiler");
        $__internal_ca2c0f7872da7fee2e76a3f8a1e3ecb00ee81c9d1c6557572f3f8466e70fd143->enter($__internal_ca2c0f7872da7fee2e76a3f8a1e3ecb00ee81c9d1c6557572f3f8466e70fd143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ca2c0f7872da7fee2e76a3f8a1e3ecb00ee81c9d1c6557572f3f8466e70fd143->leave($__internal_ca2c0f7872da7fee2e76a3f8a1e3ecb00ee81c9d1c6557572f3f8466e70fd143_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
