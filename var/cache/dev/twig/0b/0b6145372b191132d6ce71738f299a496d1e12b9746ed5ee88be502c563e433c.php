<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3169b5d76f351468a1dfce41c83b5bbb910724771e3c291a467d335768553a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd2245b50bfb31416980ce3ff42b9c4af7b34737100d4c275704e35623528ee0 = $this->env->getExtension("native_profiler");
        $__internal_cd2245b50bfb31416980ce3ff42b9c4af7b34737100d4c275704e35623528ee0->enter($__internal_cd2245b50bfb31416980ce3ff42b9c4af7b34737100d4c275704e35623528ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2245b50bfb31416980ce3ff42b9c4af7b34737100d4c275704e35623528ee0->leave($__internal_cd2245b50bfb31416980ce3ff42b9c4af7b34737100d4c275704e35623528ee0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ae254d6cc9537f96b546c7f30c734a228652c0fc49b0790a1fa6da30ae8963d = $this->env->getExtension("native_profiler");
        $__internal_7ae254d6cc9537f96b546c7f30c734a228652c0fc49b0790a1fa6da30ae8963d->enter($__internal_7ae254d6cc9537f96b546c7f30c734a228652c0fc49b0790a1fa6da30ae8963d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7ae254d6cc9537f96b546c7f30c734a228652c0fc49b0790a1fa6da30ae8963d->leave($__internal_7ae254d6cc9537f96b546c7f30c734a228652c0fc49b0790a1fa6da30ae8963d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a39f8da28526fb214a90905286c683d3ff9e3ff01f5a10cf29463522106b552 = $this->env->getExtension("native_profiler");
        $__internal_0a39f8da28526fb214a90905286c683d3ff9e3ff01f5a10cf29463522106b552->enter($__internal_0a39f8da28526fb214a90905286c683d3ff9e3ff01f5a10cf29463522106b552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a39f8da28526fb214a90905286c683d3ff9e3ff01f5a10cf29463522106b552->leave($__internal_0a39f8da28526fb214a90905286c683d3ff9e3ff01f5a10cf29463522106b552_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ed61a39f4938ff023ebdcea97eec0174a7eeb92d90f97083f2f975cb7e6d342 = $this->env->getExtension("native_profiler");
        $__internal_4ed61a39f4938ff023ebdcea97eec0174a7eeb92d90f97083f2f975cb7e6d342->enter($__internal_4ed61a39f4938ff023ebdcea97eec0174a7eeb92d90f97083f2f975cb7e6d342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ed61a39f4938ff023ebdcea97eec0174a7eeb92d90f97083f2f975cb7e6d342->leave($__internal_4ed61a39f4938ff023ebdcea97eec0174a7eeb92d90f97083f2f975cb7e6d342_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
