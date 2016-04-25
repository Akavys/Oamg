<?php

/* layout.html.twig */
class __TwigTemplate_0550775989b831771196d33b944a9b19301ab23348a07e0b1bbd1e2f8e171d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e146afac726ba100c275e629491dcfc016549aaa56ec5a53c11004bfc29ab3d = $this->env->getExtension("native_profiler");
        $__internal_7e146afac726ba100c275e629491dcfc016549aaa56ec5a53c11004bfc29ab3d->enter($__internal_7e146afac726ba100c275e629491dcfc016549aaa56ec5a53c11004bfc29ab3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "  </head>

  <body>
    <div class=\"contrainer\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>GMAO Moulage</h1>
        <p>V1.0 </p>
      </div>

      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>GMAO</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_ajouter_presse");
        echo "\">Ajouter une presse</a></li>
          </ul>

          <!-- ";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:Blog:menu", array("nombre" => 3)));
        echo " -->

          </div>
          <div id=\"content\" class=\"span9\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "          </div>
        </div>

        <hr>

        <footer>
          <p>The sky's the limit @ 2015 and beyond.</p>
        </footer>
      </div>

      ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </body>
</html>
";
        
        $__internal_7e146afac726ba100c275e629491dcfc016549aaa56ec5a53c11004bfc29ab3d->leave($__internal_7e146afac726ba100c275e629491dcfc016549aaa56ec5a53c11004bfc29ab3d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30fa5ab5a8cf75e1863da15f7ce82b6e138b0d3d01a8aea80554ba0b718254da = $this->env->getExtension("native_profiler");
        $__internal_30fa5ab5a8cf75e1863da15f7ce82b6e138b0d3d01a8aea80554ba0b718254da->enter($__internal_30fa5ab5a8cf75e1863da15f7ce82b6e138b0d3d01a8aea80554ba0b718254da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GMAO";
        
        $__internal_30fa5ab5a8cf75e1863da15f7ce82b6e138b0d3d01a8aea80554ba0b718254da->leave($__internal_30fa5ab5a8cf75e1863da15f7ce82b6e138b0d3d01a8aea80554ba0b718254da_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc96db784fc3c91a6e6e429bc3e371bdbb0e1ac1e28cb83aa17a862c63afd941 = $this->env->getExtension("native_profiler");
        $__internal_cc96db784fc3c91a6e6e429bc3e371bdbb0e1ac1e28cb83aa17a862c63afd941->enter($__internal_cc96db784fc3c91a6e6e429bc3e371bdbb0e1ac1e28cb83aa17a862c63afd941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    ";
        
        $__internal_cc96db784fc3c91a6e6e429bc3e371bdbb0e1ac1e28cb83aa17a862c63afd941->leave($__internal_cc96db784fc3c91a6e6e429bc3e371bdbb0e1ac1e28cb83aa17a862c63afd941_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_079ea991d5ce0c493d0263c9d79336e3077d33b8ea2c735bc4d3d5cae4f82ede = $this->env->getExtension("native_profiler");
        $__internal_079ea991d5ce0c493d0263c9d79336e3077d33b8ea2c735bc4d3d5cae4f82ede->enter($__internal_079ea991d5ce0c493d0263c9d79336e3077d33b8ea2c735bc4d3d5cae4f82ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "            ";
        
        $__internal_079ea991d5ce0c493d0263c9d79336e3077d33b8ea2c735bc4d3d5cae4f82ede->leave($__internal_079ea991d5ce0c493d0263c9d79336e3077d33b8ea2c735bc4d3d5cae4f82ede_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f052f02274c35dcf4f93f36f63ee950826b3614ed735049ce38feabbf2bc50d8 = $this->env->getExtension("native_profiler");
        $__internal_f052f02274c35dcf4f93f36f63ee950826b3614ed735049ce38feabbf2bc50d8->enter($__internal_f052f02274c35dcf4f93f36f63ee950826b3614ed735049ce38feabbf2bc50d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f052f02274c35dcf4f93f36f63ee950826b3614ed735049ce38feabbf2bc50d8->leave($__internal_f052f02274c35dcf4f93f36f63ee950826b3614ed735049ce38feabbf2bc50d8_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  139 => 43,  133 => 42,  126 => 31,  120 => 30,  110 => 8,  104 => 7,  92 => 5,  83 => 46,  81 => 42,  69 => 32,  67 => 30,  60 => 26,  54 => 23,  39 => 10,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     <title> {% block title %}GMAO{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css"/>*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/*     <div class="contrainer">*/
/*       <div id="header" class="hero-unit">*/
/*         <h1>GMAO Moulage</h1>*/
/*         <p>V1.0 </p>*/
/*       </div>*/
/* */
/*       <div class="row">*/
/*         <div id="menu" class="span3">*/
/*           <h3>GMAO</h3>*/
/*           <ul class="nav nav-pills nav-stacked">*/
/*             <li><a href="{{ path('gmao_moulage_ajouter_presse') }}">Ajouter une presse</a></li>*/
/*           </ul>*/
/* */
/*           <!-- {{ render(controller("SdzBlogBundle:Blog:menu", {'nombre': 3} )) }} -->*/
/* */
/*           </div>*/
/*           <div id="content" class="span9">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <hr>*/
/* */
/*         <footer>*/
/*           <p>The sky's the limit @ 2015 and beyond.</p>*/
/*         </footer>*/
/*       </div>*/
/* */
/*       {% block javascripts %}*/
/*         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
