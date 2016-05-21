<?php

/* GmaoMoulageBundle:Moule:liste.html.twig */
class __TwigTemplate_c23186e5e87724b70bac90d5df0d48585443c6fff7884b40bdb945c0f6ebd06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Moule:liste.html.twig", 1);
        $this->blocks = array(
            'tittle' => array($this, 'block_tittle'),
            'body' => array($this, 'block_body'),
            'javascriptsss' => array($this, 'block_javascriptsss'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GmaoMoulageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8fc2f7645fa1e747256e19b5e1cdaeaa71eb135ff0d94c7d433a6fc03421f98 = $this->env->getExtension("native_profiler");
        $__internal_d8fc2f7645fa1e747256e19b5e1cdaeaa71eb135ff0d94c7d433a6fc03421f98->enter($__internal_d8fc2f7645fa1e747256e19b5e1cdaeaa71eb135ff0d94c7d433a6fc03421f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Moule:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8fc2f7645fa1e747256e19b5e1cdaeaa71eb135ff0d94c7d433a6fc03421f98->leave($__internal_d8fc2f7645fa1e747256e19b5e1cdaeaa71eb135ff0d94c7d433a6fc03421f98_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_555b2de00e619f412dd33f1531218e546e393d191e9d8f77b71c7b1f94a3c661 = $this->env->getExtension("native_profiler");
        $__internal_555b2de00e619f412dd33f1531218e546e393d191e9d8f77b71c7b1f94a3c661->enter($__internal_555b2de00e619f412dd33f1531218e546e393d191e9d8f77b71c7b1f94a3c661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_555b2de00e619f412dd33f1531218e546e393d191e9d8f77b71c7b1f94a3c661->leave($__internal_555b2de00e619f412dd33f1531218e546e393d191e9d8f77b71c7b1f94a3c661_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdb57d9c836fc12c60d391b78ae8c063be334fd779204579b6b224f884b9956f = $this->env->getExtension("native_profiler");
        $__internal_bdb57d9c836fc12c60d391b78ae8c063be334fd779204579b6b224f884b9956f->enter($__internal_bdb57d9c836fc12c60d391b78ae8c063be334fd779204579b6b224f884b9956f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

      ";
        // line 11
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "      <div class=\"ui info message\">
        <i class=\"close icon\"></i>
        <div class=\"header\">
          <p>Information : ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
        </div>
      </div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
      <br/>

  <div class=\"row\">
    <div class=\"col-sm-10 col-md-10\">
      <h2 class=\"ui dividing header\">Liste des moules</h2>
    </div>
    <div class=\"col-sm-2 col-md-2\" style=\"align-right\">
      <a class=\"ui primary button \" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_ajouter_moule");
        echo "\">
        <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
          Ajouter un moule
      </a>
    </div>
  </div>

<br/>
  <table id=\"example\" class=\"ui celled table\">
        <thead>
            <tr>
                <th>Id Moule</th>
                <th>Moule</th>
                <th>Désignation</th>
                <th>Presses</th>
                <th>Références</th>
                <th>Etat</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
              <th>Id Moule</th>
              <th>Moule</th>
              <th>Désignation</th>
              <th>Presses</th>
              <th>Références</th>
              <th>Etat</th>
              <th>Modifier</th>
              <th>Supprimer</th>
            </tr>
        </tfoot>
        <tbody>

        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moules"]) ? $context["moules"] : $this->getContext($context, "moules")));
        foreach ($context['_seq'] as $context["_key"] => $context["moule"]) {
            // line 64
            echo "        <tr>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["moule"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["moule"], "nomMoule", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["moule"], "designation", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["moule"], "presses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomPresse", array()), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td>";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["moule"], "references", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nomReference", array()), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td>";
            // line 70
            if (($this->getAttribute($context["moule"], "etatMoule", array()) == true)) {
                echo "<h4><span class=\"label label-success\">Active</span></h4> ";
            } else {
                echo "<h4><span class=\"label label-danger\">Inactive</span></h4>";
            }
            echo "</td>
            <td><form action=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_modifier_moule", array("id" => $this->getAttribute($context["moule"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" >
                  <button type=\"submit\" class=\"btn btn-warning\">
                    <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                  </button>
                </form>
            </td>
            <td><form action=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_supprimer_moule", array("id" => $this->getAttribute($context["moule"], "id", array()))), "html", null, true);
            echo "\" method=\"get\" >
                  <button type=\"submit\" class=\"btn btn-danger\">
                    <span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span>
                  </button>
                </form>
            </td>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
        </tbody>
    </table>

      <center><div id=\"pag_moule_data1\"></div></center>

      <div id=\"form_num_page\">
        <form class=\"form-inline\" id=\"recherche_num_page\" action=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_moule", array("page" => 1));
        echo "\" method=\"post\">
          <div class=\"form-group\">
          <label for=\"pag\">Aller à la page</label>
          <input class=\"form-control\" id=\"pag\" name=\"pag\" placeholder=\"N°Page\"></input>
          </div>
          <button type=\"submit\" class=\"ui primary button\"><i class=\"glyphicon glyphicon-log-in\"></i></button>
        </form>
      </div>


";
        
        $__internal_bdb57d9c836fc12c60d391b78ae8c063be334fd779204579b6b224f884b9956f->leave($__internal_bdb57d9c836fc12c60d391b78ae8c063be334fd779204579b6b224f884b9956f_prof);

    }

    // line 106
    public function block_javascriptsss($context, array $blocks = array())
    {
        $__internal_db7a4d4dd5b7e3086efd51090048850e2bbf5874e5403586d66b86cb9560f598 = $this->env->getExtension("native_profiler");
        $__internal_db7a4d4dd5b7e3086efd51090048850e2bbf5874e5403586d66b86cb9560f598->enter($__internal_db7a4d4dd5b7e3086efd51090048850e2bbf5874e5403586d66b86cb9560f598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsss"));

        // line 107
        echo "
<script type='text/javascript'>
    var options = {
      currentPage: ";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo ",
      totalPages: ";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")), "html", null, true);
        echo ",
      pageUrl: function(type, page, current){
          return \"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_moule", array("page" => 1));
        echo "/\"+page;
      }
    }
    \$('#pag_moule_data1').bootstrapPaginator(options);

</script>
";
        
        $__internal_db7a4d4dd5b7e3086efd51090048850e2bbf5874e5403586d66b86cb9560f598->leave($__internal_db7a4d4dd5b7e3086efd51090048850e2bbf5874e5403586d66b86cb9560f598_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Moule:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 113,  250 => 111,  246 => 110,  241 => 107,  235 => 106,  217 => 93,  208 => 86,  193 => 77,  184 => 71,  176 => 70,  163 => 69,  150 => 68,  146 => 67,  142 => 66,  138 => 65,  135 => 64,  131 => 63,  93 => 28,  83 => 20,  72 => 15,  67 => 12,  62 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "GmaoMoulageBundle::layout.html.twig" %}*/
/* */
/* {% block tittle %}*/
/*   Liste - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*       {# On affiche tous les messages flash dont le nom est « info » #}*/
/*       {% for message in app.session.flashbag.get('info') %}*/
/*       <div class="ui info message">*/
/*         <i class="close icon"></i>*/
/*         <div class="header">*/
/*           <p>Information : {{ message }}</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       {% endfor %}*/
/* */
/*       <br/>*/
/* */
/*   <div class="row">*/
/*     <div class="col-sm-10 col-md-10">*/
/*       <h2 class="ui dividing header">Liste des moules</h2>*/
/*     </div>*/
/*     <div class="col-sm-2 col-md-2" style="align-right">*/
/*       <a class="ui primary button " href="{{ path('gmao_moulage_ajouter_moule') }}">*/
/*         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>*/
/*           Ajouter un moule*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/* */
/* <br/>*/
/*   <table id="example" class="ui celled table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id Moule</th>*/
/*                 <th>Moule</th>*/
/*                 <th>Désignation</th>*/
/*                 <th>Presses</th>*/
/*                 <th>Références</th>*/
/*                 <th>Etat</th>*/
/*                 <th>Modifier</th>*/
/*                 <th>Supprimer</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tfoot>*/
/*             <tr>*/
/*               <th>Id Moule</th>*/
/*               <th>Moule</th>*/
/*               <th>Désignation</th>*/
/*               <th>Presses</th>*/
/*               <th>Références</th>*/
/*               <th>Etat</th>*/
/*               <th>Modifier</th>*/
/*               <th>Supprimer</th>*/
/*             </tr>*/
/*         </tfoot>*/
/*         <tbody>*/
/* */
/*         {% for moule in moules %}*/
/*         <tr>*/
/*             <td>{{ moule.id }}</td>*/
/*             <td>{{ moule.nomMoule }}</td>*/
/*             <td>{{ moule.designation }}</td>*/
/*             <td>{% for p in moule.presses %} {{ p.nomPresse }} {% endfor %}</td>*/
/*             <td>{% for r in moule.references %} {{ r.nomReference }} {% endfor %}</td>*/
/*             <td>{% if moule.etatMoule == true %}<h4><span class="label label-success">Active</span></h4> {% else %}<h4><span class="label label-danger">Inactive</span></h4>{% endif %}</td>*/
/*             <td><form action="{{ path('gmao_moulage_modifier_moule', {'id': moule.id }) }}" method="post" >*/
/*                   <button type="submit" class="btn btn-warning">*/
/*                     <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>*/
/*                   </button>*/
/*                 </form>*/
/*             </td>*/
/*             <td><form action="{{ path('gmao_moulage_supprimer_moule', {'id': moule.id }) }}" method="get" >*/
/*                   <button type="submit" class="btn btn-danger">*/
/*                     <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>*/
/*                   </button>*/
/*                 </form>*/
/*             </td>*/
/*         </tr>*/
/* */
/*         {% endfor %}*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/*       <center><div id="pag_moule_data1"></div></center>*/
/* */
/*       <div id="form_num_page">*/
/*         <form class="form-inline" id="recherche_num_page" action="{{ path('gmao_moulage_liste_moule', {'page': 1}) }}" method="post">*/
/*           <div class="form-group">*/
/*           <label for="pag">Aller à la page</label>*/
/*           <input class="form-control" id="pag" name="pag" placeholder="N°Page"></input>*/
/*           </div>*/
/*           <button type="submit" class="ui primary button"><i class="glyphicon glyphicon-log-in"></i></button>*/
/*         </form>*/
/*       </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block javascriptsss %}*/
/* */
/* <script type='text/javascript'>*/
/*     var options = {*/
/*       currentPage: {{page}},*/
/*       totalPages: {{nombrePage}},*/
/*       pageUrl: function(type, page, current){*/
/*           return "{{ path('gmao_moulage_liste_moule', {'page': 1}) }}/"+page;*/
/*       }*/
/*     }*/
/*     $('#pag_moule_data1').bootstrapPaginator(options);*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
