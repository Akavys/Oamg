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
            'javascriptsss' => array($this, 'block_javascriptsss'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0266a87f8d7df67b414079eab702a4d3aeeb642f1ce3c8551ce28ebbb59e4ed1 = $this->env->getExtension("native_profiler");
        $__internal_0266a87f8d7df67b414079eab702a4d3aeeb642f1ce3c8551ce28ebbb59e4ed1->enter($__internal_0266a87f8d7df67b414079eab702a4d3aeeb642f1ce3c8551ce28ebbb59e4ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 16
        echo "  </head>

  <body>

      <link rel=\"shortcut icon\" type=\"image/png\"
        href=\"/GmaoMoulage/Image/fav.png\" />
      <div id=\"barre\" class=\"oc-header\">
        <div class=\"barreh7\">
          GMAO Moulage <font size=\"3px\">V9.8</font>
        </div>
      </div>

      <nav class=\"navbar navbar-default navbar-inverse\">
        <div class=\"container-fluid\">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">GMAO Moulage</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Presse <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse", array("page" => 1));
        echo "\">Presse</a></li>
                  <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_ajouter_presse");
        echo "\">Ajouter presse</a></li>
                </ul>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>


    <div class=\"container-fluid\">

      <div class=\"row\">
        <div id=\"menu\" class=\"col-sm-3 col-md-2 sidebar\">
          <h3>Accès rapide</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse");
        echo "\">Presse</a></li>
          </ul>
        </div>
        <div id=\"content\" class=\"col-sm-9 col-md-10 main\">
            ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "        </div>
      </div>

        <hr>

        <footer>
          <p>GMAO Moulage - DELPHI CONNECTION SYSTEMS FRANCE</p>
        </footer>
    </div>
    ";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "
    ";
        // line 90
        $this->displayBlock('javascriptsss', $context, $blocks);
        // line 92
        echo "    </body>
</html>
";
        
        $__internal_0266a87f8d7df67b414079eab702a4d3aeeb642f1ce3c8551ce28ebbb59e4ed1->leave($__internal_0266a87f8d7df67b414079eab702a4d3aeeb642f1ce3c8551ce28ebbb59e4ed1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a76f4d73fd631762c1d153ed4528cfdbbc57b8932eeb96be0be69610ecf158ed = $this->env->getExtension("native_profiler");
        $__internal_a76f4d73fd631762c1d153ed4528cfdbbc57b8932eeb96be0be69610ecf158ed->enter($__internal_a76f4d73fd631762c1d153ed4528cfdbbc57b8932eeb96be0be69610ecf158ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GMAO";
        
        $__internal_a76f4d73fd631762c1d153ed4528cfdbbc57b8932eeb96be0be69610ecf158ed->leave($__internal_a76f4d73fd631762c1d153ed4528cfdbbc57b8932eeb96be0be69610ecf158ed_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d1b75a6aedae0ddde1d76463688fefa5d0b819c4259e9747bf7350c38e1af16 = $this->env->getExtension("native_profiler");
        $__internal_6d1b75a6aedae0ddde1d76463688fefa5d0b819c4259e9747bf7350c38e1af16->enter($__internal_6d1b75a6aedae0ddde1d76463688fefa5d0b819c4259e9747bf7350c38e1af16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>

    <!-- semantic ui -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/semantic.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/semantic.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>

    ";
        
        $__internal_6d1b75a6aedae0ddde1d76463688fefa5d0b819c4259e9747bf7350c38e1af16->leave($__internal_6d1b75a6aedae0ddde1d76463688fefa5d0b819c4259e9747bf7350c38e1af16_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a9641c5743e3e427ed440160b44c3706566428f6af42bb2f4199780f4bd6fc5 = $this->env->getExtension("native_profiler");
        $__internal_3a9641c5743e3e427ed440160b44c3706566428f6af42bb2f4199780f4bd6fc5->enter($__internal_3a9641c5743e3e427ed440160b44c3706566428f6af42bb2f4199780f4bd6fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "            ";
        
        $__internal_3a9641c5743e3e427ed440160b44c3706566428f6af42bb2f4199780f4bd6fc5->leave($__internal_3a9641c5743e3e427ed440160b44c3706566428f6af42bb2f4199780f4bd6fc5_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67b5108d54342f5d962d29c4d8f4787852876ba8c1ab8f008a66fe457ed473fa = $this->env->getExtension("native_profiler");
        $__internal_67b5108d54342f5d962d29c4d8f4787852876ba8c1ab8f008a66fe457ed473fa->enter($__internal_67b5108d54342f5d962d29c4d8f4787852876ba8c1ab8f008a66fe457ed473fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "      <script src=\"//code.jquery.com/jquery-2.1.3.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-paginator.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

      <!-- semantic ui -->
      <script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/semantic.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/semantic.min.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_67b5108d54342f5d962d29c4d8f4787852876ba8c1ab8f008a66fe457ed473fa->leave($__internal_67b5108d54342f5d962d29c4d8f4787852876ba8c1ab8f008a66fe457ed473fa_prof);

    }

    // line 90
    public function block_javascriptsss($context, array $blocks = array())
    {
        $__internal_b35ab747515f95cf3fc35edf2b1a97418929c08053a4bfe7c1e4c798376cc82c = $this->env->getExtension("native_profiler");
        $__internal_b35ab747515f95cf3fc35edf2b1a97418929c08053a4bfe7c1e4c798376cc82c->enter($__internal_b35ab747515f95cf3fc35edf2b1a97418929c08053a4bfe7c1e4c798376cc82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsss"));

        // line 91
        echo "    ";
        
        $__internal_b35ab747515f95cf3fc35edf2b1a97418929c08053a4bfe7c1e4c798376cc82c->leave($__internal_b35ab747515f95cf3fc35edf2b1a97418929c08053a4bfe7c1e4c798376cc82c_prof);

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
        return array (  227 => 91,  221 => 90,  211 => 86,  207 => 85,  201 => 82,  197 => 81,  194 => 80,  188 => 79,  181 => 69,  175 => 68,  165 => 13,  161 => 12,  155 => 9,  150 => 8,  144 => 7,  132 => 5,  123 => 92,  121 => 90,  118 => 89,  116 => 79,  105 => 70,  103 => 68,  96 => 64,  77 => 48,  73 => 47,  40 => 16,  38 => 7,  33 => 5,  27 => 1,);
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
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>*/
/* */
/*     <!-- semantic ui -->*/
/*     <link rel="stylesheet" href="{{ asset('css/semantic.css') }}" type="text/css"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/semantic.min.css') }}" type="text/css"/>*/
/* */
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/* */
/*       <link rel="shortcut icon" type="image/png"*/
/*         href="/GmaoMoulage/Image/fav.png" />*/
/*       <div id="barre" class="oc-header">*/
/*         <div class="barreh7">*/
/*           GMAO Moulage <font size="3px">V9.8</font>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <nav class="navbar navbar-default navbar-inverse">*/
/*         <div class="container-fluid">*/
/*           <!-- Brand and toggle get grouped for better mobile display -->*/
/*           <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="#">GMAO Moulage</a>*/
/*           </div>*/
/* */
/*           <!-- Collect the nav links, forms, and other content for toggling -->*/
/*           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*               <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Presse <span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li><a href="{{ path('gmao_moulage_liste_presse', {'page': 1}) }}">Presse</a></li>*/
/*                   <li><a href="{{ path('gmao_moulage_ajouter_presse') }}">Ajouter presse</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*             </ul>*/
/* */
/*           </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*       </nav>*/
/* */
/* */
/*     <div class="container-fluid">*/
/* */
/*       <div class="row">*/
/*         <div id="menu" class="col-sm-3 col-md-2 sidebar">*/
/*           <h3>Accès rapide</h3>*/
/*           <ul class="nav nav-pills nav-stacked">*/
/*             <li><a href="{{ path('gmao_moulage_liste_presse') }}">Presse</a></li>*/
/*           </ul>*/
/*         </div>*/
/*         <div id="content" class="col-sm-9 col-md-10 main">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*       </div>*/
/* */
/*         <hr>*/
/* */
/*         <footer>*/
/*           <p>GMAO Moulage - DELPHI CONNECTION SYSTEMS FRANCE</p>*/
/*         </footer>*/
/*     </div>*/
/*     {% block javascripts %}*/
/*       <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>*/
/*       <script type="text/javascript" src="{{ asset('js/bootstrap-paginator.min.js') }}"></script>*/
/*       <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* */
/*       <!-- semantic ui -->*/
/*       <script type="text/javascript" src="{{ asset('js/semantic.js') }}"></script>*/
/*       <script type="text/javascript" src="{{ asset('js/semantic.min.js') }}"></script>*/
/* */
/*     {% endblock %}*/
/* */
/*     {% block javascriptsss %}*/
/*     {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
