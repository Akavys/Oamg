<?php

/* GmaoMoulageBundle:Moule:liste.html.twig */
class __TwigTemplate_0f5f31db0784d714eb600b055444d6b5176737e2761ef3dbad680ebb2da63510 extends Twig_Template
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
        $__internal_04b4b583b2f18099735132bc801f13a013304754aeed06437956c8a05867cecb = $this->env->getExtension("native_profiler");
        $__internal_04b4b583b2f18099735132bc801f13a013304754aeed06437956c8a05867cecb->enter($__internal_04b4b583b2f18099735132bc801f13a013304754aeed06437956c8a05867cecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Moule:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04b4b583b2f18099735132bc801f13a013304754aeed06437956c8a05867cecb->leave($__internal_04b4b583b2f18099735132bc801f13a013304754aeed06437956c8a05867cecb_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_e3e1d49174ff85c01a1e63b71b9125cc3fe2662b33ea8ce90dcfb589162897e9 = $this->env->getExtension("native_profiler");
        $__internal_e3e1d49174ff85c01a1e63b71b9125cc3fe2662b33ea8ce90dcfb589162897e9->enter($__internal_e3e1d49174ff85c01a1e63b71b9125cc3fe2662b33ea8ce90dcfb589162897e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_e3e1d49174ff85c01a1e63b71b9125cc3fe2662b33ea8ce90dcfb589162897e9->leave($__internal_e3e1d49174ff85c01a1e63b71b9125cc3fe2662b33ea8ce90dcfb589162897e9_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_564479289484b73b2658ce1c55a3b51c171488533125320cab00008337592080 = $this->env->getExtension("native_profiler");
        $__internal_564479289484b73b2658ce1c55a3b51c171488533125320cab00008337592080->enter($__internal_564479289484b73b2658ce1c55a3b51c171488533125320cab00008337592080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
              <th>Etat</th>
              <th>Modifier</th>
              <th>Supprimer</th>
            </tr>
        </tfoot>
        <tbody>

        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moules"]) ? $context["moules"] : $this->getContext($context, "moules")));
        foreach ($context['_seq'] as $context["_key"] => $context["moule"]) {
            // line 60
            echo "        <tr>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["moule"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["moule"], "nomMoule", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["moule"], "designation", array()), "html", null, true);
            echo "

            <td>";
            // line 65
            if (($this->getAttribute($context["moule"], "etatMoule", array()) == true)) {
                echo "<h4><span class=\"label label-success\">Active</span></h4> ";
            } else {
                echo "<h4><span class=\"label label-danger\">Inactive</span></h4>";
            }
            echo "</td>
            <td><form action=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_modifier_moule", array("id" => $this->getAttribute($context["moule"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" >
                  <button type=\"submit\" class=\"btn btn-warning\">
                    <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                  </button>
                </form>
            </td>
            <td><form action=\"";
            // line 72
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
        // line 81
        echo "
        </tbody>
    </table>

      <center><div id=\"pag_moule_data1\"></div></center>

      <div id=\"form_num_page\">
        <form class=\"form-inline\" id=\"recherche_num_page\" action=\"";
        // line 88
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
        
        $__internal_564479289484b73b2658ce1c55a3b51c171488533125320cab00008337592080->leave($__internal_564479289484b73b2658ce1c55a3b51c171488533125320cab00008337592080_prof);

    }

    // line 101
    public function block_javascriptsss($context, array $blocks = array())
    {
        $__internal_798abfa3e34f4e0e92652a44dd1a260e6b90281c4070a9c6c34d22865250e428 = $this->env->getExtension("native_profiler");
        $__internal_798abfa3e34f4e0e92652a44dd1a260e6b90281c4070a9c6c34d22865250e428->enter($__internal_798abfa3e34f4e0e92652a44dd1a260e6b90281c4070a9c6c34d22865250e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsss"));

        // line 102
        echo "
<script type='text/javascript'>
    var options = {
      currentPage: ";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo ",
      totalPages: ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")), "html", null, true);
        echo ",
      pageUrl: function(type, page, current){
          return \"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_moule", array("page" => 1));
        echo "/\"+page;
      }
    }
    \$('#pag_moule_data1').bootstrapPaginator(options);

</script>
";
        
        $__internal_798abfa3e34f4e0e92652a44dd1a260e6b90281c4070a9c6c34d22865250e428->leave($__internal_798abfa3e34f4e0e92652a44dd1a260e6b90281c4070a9c6c34d22865250e428_prof);

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
        return array (  226 => 108,  221 => 106,  217 => 105,  212 => 102,  206 => 101,  188 => 88,  179 => 81,  164 => 72,  155 => 66,  147 => 65,  142 => 63,  138 => 62,  134 => 61,  131 => 60,  127 => 59,  93 => 28,  83 => 20,  72 => 15,  67 => 12,  62 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*             <td>{{ moule.designation }}*/
/* */
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
