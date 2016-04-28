<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f641dc3fd68b42a994342193ccbf9bece54a784edd585c230cffb5f5482265b9 extends Twig_Template
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
        $__internal_977d1d5dc0a06e2612995cec9ba5dbde29db10732f213eca257892018aa70b3d = $this->env->getExtension("native_profiler");
        $__internal_977d1d5dc0a06e2612995cec9ba5dbde29db10732f213eca257892018aa70b3d->enter($__internal_977d1d5dc0a06e2612995cec9ba5dbde29db10732f213eca257892018aa70b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_977d1d5dc0a06e2612995cec9ba5dbde29db10732f213eca257892018aa70b3d->leave($__internal_977d1d5dc0a06e2612995cec9ba5dbde29db10732f213eca257892018aa70b3d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_21b083c96a6996b212da3380e48ee50d1fe6c43a3b63ae6a0c5f77ebbc52a866 = $this->env->getExtension("native_profiler");
        $__internal_21b083c96a6996b212da3380e48ee50d1fe6c43a3b63ae6a0c5f77ebbc52a866->enter($__internal_21b083c96a6996b212da3380e48ee50d1fe6c43a3b63ae6a0c5f77ebbc52a866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_21b083c96a6996b212da3380e48ee50d1fe6c43a3b63ae6a0c5f77ebbc52a866->leave($__internal_21b083c96a6996b212da3380e48ee50d1fe6c43a3b63ae6a0c5f77ebbc52a866_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4efad643bd1b9898f330b9e78bf3461c3d7aec84085d02153a58255e40cf602 = $this->env->getExtension("native_profiler");
        $__internal_c4efad643bd1b9898f330b9e78bf3461c3d7aec84085d02153a58255e40cf602->enter($__internal_c4efad643bd1b9898f330b9e78bf3461c3d7aec84085d02153a58255e40cf602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c4efad643bd1b9898f330b9e78bf3461c3d7aec84085d02153a58255e40cf602->leave($__internal_c4efad643bd1b9898f330b9e78bf3461c3d7aec84085d02153a58255e40cf602_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b7724aa78ad2c187787289a92f268e1cafbd55af0cc3b1e3de6e5a304e36cde = $this->env->getExtension("native_profiler");
        $__internal_0b7724aa78ad2c187787289a92f268e1cafbd55af0cc3b1e3de6e5a304e36cde->enter($__internal_0b7724aa78ad2c187787289a92f268e1cafbd55af0cc3b1e3de6e5a304e36cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0b7724aa78ad2c187787289a92f268e1cafbd55af0cc3b1e3de6e5a304e36cde->leave($__internal_0b7724aa78ad2c187787289a92f268e1cafbd55af0cc3b1e3de6e5a304e36cde_prof);

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
