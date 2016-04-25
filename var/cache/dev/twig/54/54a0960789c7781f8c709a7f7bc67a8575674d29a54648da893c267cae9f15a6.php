<?php

/* GmaoMoulageBundle:Presse:liste.html.twig */
class __TwigTemplate_c7e29731172a49234a9ff942bbef8491ca6d4b79d624198c49a7abbcb3ef8119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GmaoMoulageBundle::layout.html.twig", "GmaoMoulageBundle:Presse:liste.html.twig", 1);
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
        $__internal_3500b785a387117672ded07445b79b8edf8892d8ea4fb65a62a7957f6e1c26c7 = $this->env->getExtension("native_profiler");
        $__internal_3500b785a387117672ded07445b79b8edf8892d8ea4fb65a62a7957f6e1c26c7->enter($__internal_3500b785a387117672ded07445b79b8edf8892d8ea4fb65a62a7957f6e1c26c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GmaoMoulageBundle:Presse:liste.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3500b785a387117672ded07445b79b8edf8892d8ea4fb65a62a7957f6e1c26c7->leave($__internal_3500b785a387117672ded07445b79b8edf8892d8ea4fb65a62a7957f6e1c26c7_prof);

    }

    // line 3
    public function block_tittle($context, array $blocks = array())
    {
        $__internal_e7274583cf135327da53514d766f3dac8ecfe9f6104e79247fc37e619470f01f = $this->env->getExtension("native_profiler");
        $__internal_e7274583cf135327da53514d766f3dac8ecfe9f6104e79247fc37e619470f01f->enter($__internal_e7274583cf135327da53514d766f3dac8ecfe9f6104e79247fc37e619470f01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tittle"));

        // line 4
        echo "  Liste - ";
        $this->displayParentBlock("tittle", $context, $blocks);
        echo "
";
        
        $__internal_e7274583cf135327da53514d766f3dac8ecfe9f6104e79247fc37e619470f01f->leave($__internal_e7274583cf135327da53514d766f3dac8ecfe9f6104e79247fc37e619470f01f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fddd8ac02d84ff8c78e729aa6cf565553fcdbb1116bec83e9795f54a0bbd9c0 = $this->env->getExtension("native_profiler");
        $__internal_7fddd8ac02d84ff8c78e729aa6cf565553fcdbb1116bec83e9795f54a0bbd9c0->enter($__internal_7fddd8ac02d84ff8c78e729aa6cf565553fcdbb1116bec83e9795f54a0bbd9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <div id=\"pag_presse_data1\"></div>

    <div id=\"form_num_page\">
      <form id=\"recherche_num_page\" action=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse", array("page" => 3));
        echo "\" method=\"get\">
        <input id=\"pag\" name=\"pag\"></input>
        <button type=\"submit\">Aller à la page</button>
      </form>
    </div>
";
        
        $__internal_7fddd8ac02d84ff8c78e729aa6cf565553fcdbb1116bec83e9795f54a0bbd9c0->leave($__internal_7fddd8ac02d84ff8c78e729aa6cf565553fcdbb1116bec83e9795f54a0bbd9c0_prof);

    }

    // line 93
    public function block_javascriptsss($context, array $blocks = array())
    {
        $__internal_8d06681c9faae8d90108b711c3b246a000b27e08dfa6fc064130605a503cbd76 = $this->env->getExtension("native_profiler");
        $__internal_8d06681c9faae8d90108b711c3b246a000b27e08dfa6fc064130605a503cbd76->enter($__internal_8d06681c9faae8d90108b711c3b246a000b27e08dfa6fc064130605a503cbd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascriptsss"));

        // line 94
        echo "
<script type='text/javascript'>
    var options = {
      currentPage: ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
        echo ",
      totalPages: ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage")), "html", null, true);
        echo ",
      pageUrl: function(type, page, current){
          return \"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("gmao_moulage_liste_presse", array("page" => 1));
        echo "/\"+page;
      }
    }
    \$('#pag_presse_data1').bootstrapPaginator(options);

</script>
";
        
        $__internal_8d06681c9faae8d90108b711c3b246a000b27e08dfa6fc064130605a503cbd76->leave($__internal_8d06681c9faae8d90108b711c3b246a000b27e08dfa6fc064130605a503cbd76_prof);

    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Presse:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 100,  210 => 98,  206 => 97,  201 => 94,  195 => 93,  182 => 85,  173 => 78,  158 => 69,  149 => 63,  141 => 62,  136 => 60,  132 => 59,  129 => 58,  125 => 57,  93 => 28,  83 => 20,  72 => 15,  67 => 12,  62 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
/*     <div id="pag_presse_data1"></div>*/
/* */
/*     <div id="form_num_page">*/
/*       <form id="recherche_num_page" action="{{ path('gmao_moulage_liste_presse', {'page': 3}) }}" method="get">*/
/*         <input id="pag" name="pag"></input>*/
/*         <button type="submit">Aller à la page</button>*/
/*       </form>*/
/*     </div>*/
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
