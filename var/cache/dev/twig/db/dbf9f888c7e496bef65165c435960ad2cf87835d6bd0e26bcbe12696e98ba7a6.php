<?php

/* layout.html.twig */
class __TwigTemplate_5c59b2d6f41632f73511a3e122b445bf26175d2b06c7e67ceec2a507ffe33106 extends Twig_Template
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
        $__internal_5f2d595a5d8079e9a9d85fdfa78920e78cda90436527c2b4a069e0a3ed7bd32a = $this->env->getExtension("native_profiler");
        $__internal_5f2d595a5d8079e9a9d85fdfa78920e78cda90436527c2b4a069e0a3ed7bd32a->enter($__internal_5f2d595a5d8079e9a9d85fdfa78920e78cda90436527c2b4a069e0a3ed7bd32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Moule <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_moule", array("page" => 1));
        echo "\">Moule</a></li>
                  <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_ajouter_moule");
        echo "\">Ajouter moule</a></li>
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
        // line 78
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse");
        echo "\">Presse</a></li>
          </ul>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_reference");
        echo "\">Référence</a></li>
          </ul>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_moule");
        echo "\">Moule</a></li>
          </ul>
        </div>
        <div id=\"content\" class=\"col-sm-9 col-md-10 main\">
            ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "        </div>
      </div>

        <hr>

        <footer>
          <p>GMAO Moulage - DELPHI CONNECTION SYSTEMS FRANCE</p>
        </footer>
    </div>
    ";
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "
    ";
        // line 110
        $this->displayBlock('javascriptsss', $context, $blocks);
        // line 112
        echo "    </body>
</html>
";
        
        $__internal_5f2d595a5d8079e9a9d85fdfa78920e78cda90436527c2b4a069e0a3ed7bd32a->leave($__internal_5f2d595a5d8079e9a9d85fdfa78920e78cda90436527c2b4a069e0a3ed7bd32a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_74a4ec05cabc6d1f0a99fe017fb49c62e768e76f3516895fe00cb96fded0f0c5 = $this->env->getExtension("native_profiler");
        $__internal_74a4ec05cabc6d1f0a99fe017fb49c62e768e76f3516895fe00cb96fded0f0c5->enter($__internal_74a4ec05cabc6d1f0a99fe017fb49c62e768e76f3516895fe00cb96fded0f0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GMAO";
        
        $__internal_74a4ec05cabc6d1f0a99fe017fb49c62e768e76f3516895fe00cb96fded0f0c5->leave($__internal_74a4ec05cabc6d1f0a99fe017fb49c62e768e76f3516895fe00cb96fded0f0c5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7722595c6f0611d5b36e17bd34a91262f66f529d1f5b88542b2a1d3a7d88a66 = $this->env->getExtension("native_profiler");
        $__internal_c7722595c6f0611d5b36e17bd34a91262f66f529d1f5b88542b2a1d3a7d88a66->enter($__internal_c7722595c6f0611d5b36e17bd34a91262f66f529d1f5b88542b2a1d3a7d88a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c7722595c6f0611d5b36e17bd34a91262f66f529d1f5b88542b2a1d3a7d88a66->leave($__internal_c7722595c6f0611d5b36e17bd34a91262f66f529d1f5b88542b2a1d3a7d88a66_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_19cf75f6bbd1333c7f9a818d2bb25fa26f2bb7a0c3db0dbfe14122dfdb2abcd8 = $this->env->getExtension("native_profiler");
        $__internal_19cf75f6bbd1333c7f9a818d2bb25fa26f2bb7a0c3db0dbfe14122dfdb2abcd8->enter($__internal_19cf75f6bbd1333c7f9a818d2bb25fa26f2bb7a0c3db0dbfe14122dfdb2abcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo "            ";
        
        $__internal_19cf75f6bbd1333c7f9a818d2bb25fa26f2bb7a0c3db0dbfe14122dfdb2abcd8->leave($__internal_19cf75f6bbd1333c7f9a818d2bb25fa26f2bb7a0c3db0dbfe14122dfdb2abcd8_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae6a23c47d349bca4369dff2f5ae45561f98a3ca1941fe713c413207c8301c27 = $this->env->getExtension("native_profiler");
        $__internal_ae6a23c47d349bca4369dff2f5ae45561f98a3ca1941fe713c413207c8301c27->enter($__internal_ae6a23c47d349bca4369dff2f5ae45561f98a3ca1941fe713c413207c8301c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "      <script src=\"//code.jquery.com/jquery-2.1.3.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap-paginator.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

      <!-- semantic ui -->
      <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/semantic.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/semantic.min.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_ae6a23c47d349bca4369dff2f5ae45561f98a3ca1941fe713c413207c8301c27->leave($__internal_ae6a23c47d349bca4369dff2f5ae45561f98a3ca1941fe713c413207c8301c27_prof);

    }

    // line 110
    public function block_javascriptsss($context, array $blocks = array())
    {
        $__internal_0522f6e2c8cbbb2725d973e89c7f79968bc7a01375eeae5f9d12fa188ede962c = $this->env->getExtension("native_profiler");
        $__internal_0522f6e2c8cbbb2725d973e89c7f79968bc7a01375eeae5f9d12fa188ede962c->enter($__internal_0522f6e2c8cbbb2725d973e89c7f79968bc7a01375eeae5f9d12fa188ede962c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsss"));

        // line 111
        echo "    ";
        
        $__internal_0522f6e2c8cbbb2725d973e89c7f79968bc7a01375eeae5f9d12fa188ede962c->leave($__internal_0522f6e2c8cbbb2725d973e89c7f79968bc7a01375eeae5f9d12fa188ede962c_prof);

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
        return array (  265 => 111,  259 => 110,  249 => 106,  245 => 105,  239 => 102,  235 => 101,  232 => 100,  226 => 99,  219 => 89,  213 => 88,  203 => 13,  199 => 12,  193 => 9,  188 => 8,  182 => 7,  170 => 5,  161 => 112,  159 => 110,  156 => 109,  154 => 99,  143 => 90,  141 => 88,  134 => 84,  128 => 81,  122 => 78,  103 => 62,  99 => 61,  90 => 55,  86 => 54,  77 => 48,  73 => 47,  40 => 16,  38 => 7,  33 => 5,  27 => 1,);
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
/*               <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Moule <span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li><a href="{{ path('gmao_moulage_liste_moule', {'page': 1}) }}">Moule</a></li>*/
/*                   <li><a href="{{ path('gmao_moulage_ajouter_moule') }}">Ajouter moule</a></li>*/
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
/*           <ul class="nav nav-pills nav-stacked">*/
/*             <li><a href="{{ path('gmao_moulage_liste_moule') }}">Moule</a></li>*/
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
