<?php

/* ::layout.html.twig */
class __TwigTemplate_c6988c898e9c3e447c017d1a2860204c287a9d6ae60918bf36bf55df0b954671 extends Twig_Template
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
        $__internal_5f1ab2a68f94ded1cb3f23994b2c41e8ccc1c3e18e4bc0bce39057a4dfbfe9db = $this->env->getExtension("native_profiler");
        $__internal_5f1ab2a68f94ded1cb3f23994b2c41e8ccc1c3e18e4bc0bce39057a4dfbfe9db->enter($__internal_5f1ab2a68f94ded1cb3f23994b2c41e8ccc1c3e18e4bc0bce39057a4dfbfe9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_5f1ab2a68f94ded1cb3f23994b2c41e8ccc1c3e18e4bc0bce39057a4dfbfe9db->leave($__internal_5f1ab2a68f94ded1cb3f23994b2c41e8ccc1c3e18e4bc0bce39057a4dfbfe9db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_09e7e437e22f65209e55b87984853bf660b35de6412401e97586c092aecf80b5 = $this->env->getExtension("native_profiler");
        $__internal_09e7e437e22f65209e55b87984853bf660b35de6412401e97586c092aecf80b5->enter($__internal_09e7e437e22f65209e55b87984853bf660b35de6412401e97586c092aecf80b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GMAO";
        
        $__internal_09e7e437e22f65209e55b87984853bf660b35de6412401e97586c092aecf80b5->leave($__internal_09e7e437e22f65209e55b87984853bf660b35de6412401e97586c092aecf80b5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c9a16493581f817d4127c4137214672518b1bb9383b1f2143c387184e0e4933 = $this->env->getExtension("native_profiler");
        $__internal_0c9a16493581f817d4127c4137214672518b1bb9383b1f2143c387184e0e4933->enter($__internal_0c9a16493581f817d4127c4137214672518b1bb9383b1f2143c387184e0e4933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0c9a16493581f817d4127c4137214672518b1bb9383b1f2143c387184e0e4933->leave($__internal_0c9a16493581f817d4127c4137214672518b1bb9383b1f2143c387184e0e4933_prof);

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        $__internal_900e9924ba7c57efe2268820121e4ba3f15a8fe41b19e2ff54c034d2c3d66d21 = $this->env->getExtension("native_profiler");
        $__internal_900e9924ba7c57efe2268820121e4ba3f15a8fe41b19e2ff54c034d2c3d66d21->enter($__internal_900e9924ba7c57efe2268820121e4ba3f15a8fe41b19e2ff54c034d2c3d66d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 69
        echo "            ";
        
        $__internal_900e9924ba7c57efe2268820121e4ba3f15a8fe41b19e2ff54c034d2c3d66d21->leave($__internal_900e9924ba7c57efe2268820121e4ba3f15a8fe41b19e2ff54c034d2c3d66d21_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c13a65089f5bfff1c77bd041275d9090c2d0ddd5af99ab0c6735f346d27dc05 = $this->env->getExtension("native_profiler");
        $__internal_0c13a65089f5bfff1c77bd041275d9090c2d0ddd5af99ab0c6735f346d27dc05->enter($__internal_0c13a65089f5bfff1c77bd041275d9090c2d0ddd5af99ab0c6735f346d27dc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0c13a65089f5bfff1c77bd041275d9090c2d0ddd5af99ab0c6735f346d27dc05->leave($__internal_0c13a65089f5bfff1c77bd041275d9090c2d0ddd5af99ab0c6735f346d27dc05_prof);

    }

    // line 90
    public function block_javascriptsss($context, array $blocks = array())
    {
        $__internal_d205206727551d0141f41697a64a421096e38a27e5082f2f8c0ff7927855e2c1 = $this->env->getExtension("native_profiler");
        $__internal_d205206727551d0141f41697a64a421096e38a27e5082f2f8c0ff7927855e2c1->enter($__internal_d205206727551d0141f41697a64a421096e38a27e5082f2f8c0ff7927855e2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsss"));

        // line 91
        echo "    ";
        
        $__internal_d205206727551d0141f41697a64a421096e38a27e5082f2f8c0ff7927855e2c1->leave($__internal_d205206727551d0141f41697a64a421096e38a27e5082f2f8c0ff7927855e2c1_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
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
