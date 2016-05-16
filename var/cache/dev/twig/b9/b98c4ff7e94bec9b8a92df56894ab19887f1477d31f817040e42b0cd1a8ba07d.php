<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3a34abecb5187fe0c5089bf6315b364bc41d450ddff0fc3dbf7a3af008b9f5bf extends Twig_Template
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
        $__internal_bbf7ad7523e8533392f8ff3f6ead32dbb32795bf4e68be247bcf3dd48038ef8c = $this->env->getExtension("native_profiler");
        $__internal_bbf7ad7523e8533392f8ff3f6ead32dbb32795bf4e68be247bcf3dd48038ef8c->enter($__internal_bbf7ad7523e8533392f8ff3f6ead32dbb32795bf4e68be247bcf3dd48038ef8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bbf7ad7523e8533392f8ff3f6ead32dbb32795bf4e68be247bcf3dd48038ef8c->leave($__internal_bbf7ad7523e8533392f8ff3f6ead32dbb32795bf4e68be247bcf3dd48038ef8c_prof);

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
