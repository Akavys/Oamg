<?php

/* @GmaoMoulage/Presse/liste.html.twig */
class __TwigTemplate_1112241daa41e5e60a1cef5d45b6da4f8fac79c2f3110071ab00a5289a415f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "@GmaoMoulage/Presse/liste.html.twig", 1);
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
        $__internal_02071dc278ac15a73d43f9f0e79213f97c91d2d8ac9fdbf2da41268f9fd8ab6f = $this->env->getExtension("native_profiler");
        $__internal_02071dc278ac15a73d43f9f0e79213f97c91d2d8ac9fdbf2da41268f9fd8ab6f->enter($__internal_02071dc278ac15a73d43f9f0e79213f97c91d2d8ac9fdbf2da41268f9fd8ab6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GmaoMoulage/Presse/liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02071dc278ac15a73d43f9f0e79213f97c91d2d8ac9fdbf2da41268f9fd8ab6f->leave($__internal_02071dc278ac15a73d43f9f0e79213f97c91d2d8ac9fdbf2da41268f9fd8ab6f_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_8f3fd701d5f4af40c78a8ebca5d6343eb63d03a5d517b75c372aa2c8257e0c93 = $this->env->getExtension("native_profiler");
        $__internal_8f3fd701d5f4af40c78a8ebca5d6343eb63d03a5d517b75c372aa2c8257e0c93->enter($__internal_8f3fd701d5f4af40c78a8ebca5d6343eb63d03a5d517b75c372aa2c8257e0c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_8f3fd701d5f4af40c78a8ebca5d6343eb63d03a5d517b75c372aa2c8257e0c93->leave($__internal_8f3fd701d5f4af40c78a8ebca5d6343eb63d03a5d517b75c372aa2c8257e0c93_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c88026ba917e37181b1dc9ee83372c7d677d5dc5029cb5f47ed1021759a35c7c = $this->env->getExtension("native_profiler");
        $__internal_c88026ba917e37181b1dc9ee83372c7d677d5dc5029cb5f47ed1021759a35c7c->enter($__internal_c88026ba917e37181b1dc9ee83372c7d677d5dc5029cb5f47ed1021759a35c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <h2 class=\"ui dividing header\">Liste des presses</h2>
    </div>
    <div class=\"col-sm-2 col-md-2\" style=\"align-right\">
      <a class=\"ui primary button \" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_ajouter_presse");
        echo "\">
        <span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span>
          Ajouter une presse
      </a>
    </div>
  </div>

<br/>
  <table id=\"example\" class=\"ui celled table\">
        <thead>
            <tr>
                <th>Id Presse</th>
                <th>Presse</th>
                <th>Etat</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id Presse</th>
                <th>Presse</th>
                <th>Etat</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </tfoot>
        <tbody>

        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["presses"]) ? $context["presses"] : $this->getContext($context, "presses")));
        foreach ($context['_seq'] as $context["_key"] => $context["presse"]) {
            // line 58
            echo "        <tr>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["presse"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["presse"], "nomPresse", array()), "html", null, true);
            echo "</td>

            <td>";
            // line 62
            if (($this->getAttribute($context["presse"], "etatPresse", array()) == true)) {
                echo "<h4><span class=\"label label-success\">Active</span></h4> ";
            } else {
                echo "<h4><span class=\"label label-danger\">Inactive</span></h4>";
            }
            echo "</td>
            <td><form action=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_modifier_presse", array("id" => $this->getAttribute($context["presse"], "id", array()))), "html", null, true);
            echo "\" method=\"post\" >
                  <button type=\"submit\" class=\"btn btn-warning\">
                    <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
                  </button>
                </form>
            </td>
            <td><form action=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gmao_moulage_supprimer_presse", array("id" => $this->getAttribute($context["presse"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['presse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
        </tbody>
    </table>

      <center><div id=\"pag_presse_data1\"></div></center>

      <div id=\"form_num_page\">
        <form class=\"form-inline\" id=\"recherche_num_page\" action=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse", array("page" => 1));
        echo "\" method=\"post\">
          <div class=\"form-group\">
          <label for=\"pag\">Aller à la page</label>
          <input class=\"form-control\" id=\"pag\" name=\"pag\" placeholder=\"N°Page\"></input>
          </div>
          <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
        </form>
      </div>


";
        
        $__internal_c88026ba917e37181b1dc9ee83372c7d677d5dc5029cb5f47ed1021759a35c7c->leave($__internal_c88026ba917e37181b1dc9ee83372c7d677d5dc5029cb5f47ed1021759a35c7c_prof);

    }

    // line 98
    public function block_javascriptsss($context, array $blocks = array())
    {
        $__internal_14a5de49521d05fff6cf83e99254baff5ef8ca1042a0b97a23b6cd4abc246eeb = $this->env->getExtension("native_profiler");
        $__internal_14a5de49521d05fff6cf83e99254baff5ef8ca1042a0b97a23b6cd4abc246eeb->enter($__internal_14a5de49521d05fff6cf83e99254baff5ef8ca1042a0b97a23b6cd4abc246eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsss"));

        // line 99
        echo "
<script type='text/javascript'>
    var options = {
      currentPage: ";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo ",
      totalPages: ";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")), "html", null, true);
        echo ",
      pageUrl: function(type, page, current){
          return \"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse", array("page" => 1));
        echo "/\"+page;
      }
    }
    \$('#pag_presse_data1').bootstrapPaginator(options);

</script>
";
        
        $__internal_14a5de49521d05fff6cf83e99254baff5ef8ca1042a0b97a23b6cd4abc246eeb->leave($__internal_14a5de49521d05fff6cf83e99254baff5ef8ca1042a0b97a23b6cd4abc246eeb_prof);

    }

    public function getTemplateName()
    {
        return "@GmaoMoulage/Presse/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 105,  215 => 103,  211 => 102,  206 => 99,  200 => 98,  182 => 85,  173 => 78,  158 => 69,  149 => 63,  141 => 62,  136 => 60,  132 => 59,  129 => 58,  125 => 57,  93 => 28,  83 => 20,  72 => 15,  67 => 12,  62 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*       <h2 class="ui dividing header">Liste des presses</h2>*/
/*     </div>*/
/*     <div class="col-sm-2 col-md-2" style="align-right">*/
/*       <a class="ui primary button " href="{{ path('gmao_moulage_ajouter_presse') }}">*/
/*         <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>*/
/*           Ajouter une presse*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/* */
/* <br/>*/
/*   <table id="example" class="ui celled table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id Presse</th>*/
/*                 <th>Presse</th>*/
/*                 <th>Etat</th>*/
/*                 <th>Modifier</th>*/
/*                 <th>Supprimer</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tfoot>*/
/*             <tr>*/
/*                 <th>Id Presse</th>*/
/*                 <th>Presse</th>*/
/*                 <th>Etat</th>*/
/*                 <th>Modifier</th>*/
/*                 <th>Supprimer</th>*/
/*             </tr>*/
/*         </tfoot>*/
/*         <tbody>*/
/* */
/*         {% for presse in presses %}*/
/*         <tr>*/
/*             <td>{{ presse.id }}</td>*/
/*             <td>{{ presse.nomPresse }}</td>*/
/* */
/*             <td>{% if presse.etatPresse == true %}<h4><span class="label label-success">Active</span></h4> {% else %}<h4><span class="label label-danger">Inactive</span></h4>{% endif %}</td>*/
/*             <td><form action="{{ path('gmao_moulage_modifier_presse', {'id': presse.id }) }}" method="post" >*/
/*                   <button type="submit" class="btn btn-warning">*/
/*                     <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>*/
/*                   </button>*/
/*                 </form>*/
/*             </td>*/
/*             <td><form action="{{ path('gmao_moulage_supprimer_presse', {'id': presse.id }) }}" method="get" >*/
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
/*       <center><div id="pag_presse_data1"></div></center>*/
/* */
/*       <div id="form_num_page">*/
/*         <form class="form-inline" id="recherche_num_page" action="{{ path('gmao_moulage_liste_presse', {'page': 1}) }}" method="post">*/
/*           <div class="form-group">*/
/*           <label for="pag">Aller à la page</label>*/
/*           <input class="form-control" id="pag" name="pag" placeholder="N°Page"></input>*/
/*           </div>*/
/*           <button type="submit" class="btn btn-primary">Valider</button>*/
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
/*           return "{{ path('gmao_moulage_liste_presse', {'page': 1}) }}/"+page;*/
/*       }*/
/*     }*/
/*     $('#pag_presse_data1').bootstrapPaginator(options);*/
/* */
/* </script>*/
/* {% endblock %}*/
/* */
