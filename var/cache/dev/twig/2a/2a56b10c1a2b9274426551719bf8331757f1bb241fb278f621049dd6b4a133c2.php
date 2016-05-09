<?php

/* ::layout.html.twig */
class __TwigTemplate_a9ee77915aad588f07cdbf87f6495b08ab4baa66e48d911c9bee908f124db1fd extends Twig_Template
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
        $__internal_6b6728676557c16fca206d63d238ac7591aff0c3f72c137958a3d6f77fac7a83 = $this->env->getExtension("native_profiler");
        $__internal_6b6728676557c16fca206d63d238ac7591aff0c3f72c137958a3d6f77fac7a83->enter($__internal_6b6728676557c16fca206d63d238ac7591aff0c3f72c137958a3d6f77fac7a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
          GMAO Moulage <font size=\"3px\">V20.0</font>
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
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Référence <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_reference", array("page" => 1));
        echo "\">Référence</a></li>
                  <li><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_ajouter_reference");
        echo "\">Ajouter référence</a></li>
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
        // line 71
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse");
        echo "\">Presse</a></li>
          </ul>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_reference");
        echo "\">Référence</a></li>
          </ul>
        </div>
        <div id=\"content\" class=\"col-sm-9 col-md-10 main\">
            ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "        </div>
      </div>

        <hr>

        <footer>
          <p>GMAO Moulage - DELPHI CONNECTION SYSTEMS FRANCE</p>
        </footer>
    </div>
    ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 99
        echo "
    ";
        // line 100
        $this->displayBlock('javascriptsss', $context, $blocks);
        // line 102
        echo "    </body>
</html>
";
        
        $__internal_6b6728676557c16fca206d63d238ac7591aff0c3f72c137958a3d6f77fac7a83->leave($__internal_6b6728676557c16fca206d63d238ac7591aff0c3f72c137958a3d6f77fac7a83_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_12b2875b22915ad2edc5295b79fc084b3f9b092dcf620c21aa3c6d718dd28926 = $this->env->getExtension("native_profiler");
        $__internal_12b2875b22915ad2edc5295b79fc084b3f9b092dcf620c21aa3c6d718dd28926->enter($__internal_12b2875b22915ad2edc5295b79fc084b3f9b092dcf620c21aa3c6d718dd28926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GMAO";
        
        $__internal_12b2875b22915ad2edc5295b79fc084b3f9b092dcf620c21aa3c6d718dd28926->leave($__internal_12b2875b22915ad2edc5295b79fc084b3f9b092dcf620c21aa3c6d718dd28926_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5fd5331d6fe44551c67f75229b38d87214146728b281e0f75507e2df510fdc5 = $this->env->getExtension("native_profiler");
        $__internal_a5fd5331d6fe44551c67f75229b38d87214146728b281e0f75507e2df510fdc5->enter($__internal_a5fd5331d6fe44551c67f75229b38d87214146728b281e0f75507e2df510fdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a5fd5331d6fe44551c67f75229b38d87214146728b281e0f75507e2df510fdc5->leave($__internal_a5fd5331d6fe44551c67f75229b38d87214146728b281e0f75507e2df510fdc5_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e9fc5361f8d2587708fe8d02d8389fdacf1995a4085567fea6c98006a91c0f2 = $this->env->getExtension("native_profiler");
        $__internal_8e9fc5361f8d2587708fe8d02d8389fdacf1995a4085567fea6c98006a91c0f2->enter($__internal_8e9fc5361f8d2587708fe8d02d8389fdacf1995a4085567fea6c98006a91c0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "            ";
        
        $__internal_8e9fc5361f8d2587708fe8d02d8389fdacf1995a4085567fea6c98006a91c0f2->leave($__internal_8e9fc5361f8d2587708fe8d02d8389fdacf1995a4085567fea6c98006a91c0f2_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac760e96db18d73d7fb0014268ab9f62bb44eeac0f677c9531a8fd192abcb095 = $this->env->getExtension("native_profiler");
        $__internal_ac760e96db18d73d7fb0014268ab9f62bb44eeac0f677c9531a8fd192abcb095->enter($__internal_ac760e96db18d73d7fb0014268ab9f62bb44eeac0f677c9531a8fd192abcb095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "      <script src=\"//code.jquery.com/jquery-2.1.3.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-paginator.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

      <!-- semantic ui -->
      <script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/semantic.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/semantic.min.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_ac760e96db18d73d7fb0014268ab9f62bb44eeac0f677c9531a8fd192abcb095->leave($__internal_ac760e96db18d73d7fb0014268ab9f62bb44eeac0f677c9531a8fd192abcb095_prof);

    }

    // line 100
    public function block_javascriptsss($context, array $blocks = array())
    {
        $__internal_684fef5cdd2ba081a7330d3b1fb5ab609f4fd4caf272a8064100c45b4a6cb4cb = $this->env->getExtension("native_profiler");
        $__internal_684fef5cdd2ba081a7330d3b1fb5ab609f4fd4caf272a8064100c45b4a6cb4cb->enter($__internal_684fef5cdd2ba081a7330d3b1fb5ab609f4fd4caf272a8064100c45b4a6cb4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsss"));

        // line 101
        echo "    ";
        
        $__internal_684fef5cdd2ba081a7330d3b1fb5ab609f4fd4caf272a8064100c45b4a6cb4cb->leave($__internal_684fef5cdd2ba081a7330d3b1fb5ab609f4fd4caf272a8064100c45b4a6cb4cb_prof);

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
        return array (  246 => 101,  240 => 100,  230 => 96,  226 => 95,  220 => 92,  216 => 91,  213 => 90,  207 => 89,  200 => 79,  194 => 78,  184 => 13,  180 => 12,  174 => 9,  169 => 8,  163 => 7,  151 => 5,  142 => 102,  140 => 100,  137 => 99,  135 => 89,  124 => 80,  122 => 78,  115 => 74,  109 => 71,  90 => 55,  86 => 54,  77 => 48,  73 => 47,  40 => 16,  38 => 7,  33 => 5,  27 => 1,);
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
/*           GMAO Moulage <font size="3px">V20.0</font>*/
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
/*               <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Référence <span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li><a href="{{ path('gmao_moulage_liste_reference', {'page': 1}) }}">Référence</a></li>*/
/*                   <li><a href="{{ path('gmao_moulage_ajouter_reference') }}">Ajouter référence</a></li>*/
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
/*           <ul class="nav nav-pills nav-stacked">*/
/*             <li><a href="{{ path('gmao_moulage_liste_reference') }}">Référence</a></li>*/
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
