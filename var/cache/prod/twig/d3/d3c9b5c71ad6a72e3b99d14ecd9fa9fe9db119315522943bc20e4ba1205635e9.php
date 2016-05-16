<?php

/* GmaoMoulageBundle:Moule:formulaire.html.twig */
class __TwigTemplate_6942bf0c886db2b364dc9e068f7915aeb56cd7e85b5a6801705c6e0e488c4436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"well\">
  <form method=\"post\">

    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "empreintes", array()), 'row');
        echo "
    <a href=\"#\" id=\"add_empreinte\" class=\"btn btn-default\">Ajouter une empreinte</a>



    <button type=\"submit\" class=\"btn btn-success\" >Valider</button>
  </form>
</div>



";
        // line 21
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
";
        // line 23
        echo "<script type=\"text/javascript\">
\$(document).ready(function() {
// On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
var \$container = \$('div#moule_empreintes');

// On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
var index = \$container.find(':input').length;

// On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
\$('#add_empreinte').click(function(e) {
  addEmpreinte(\$container);

  e.preventDefault(); // évite qu'un # apparaisse dans l'URL
  return false;
});

// On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
if (index == 0) {
  addEmpreinte(\$container);
} else {
  // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
  \$container.children('div').each(function() {
    addDeleteLink(\$(this));
  });
}

// La fonction qui ajoute un formulaire CategoryType
function addEmpreinte(\$container) {
  // Dans le contenu de l'attribut « data-prototype », on remplace :
  // - le texte \"__name__label__\" qu'il contient par le label du champ
  // - le texte \"__name__\" qu'il contient par le numéro du champ
  var template = \$container.attr('data-prototype')
    .replace(/__name__label__/g, 'Empreinte n°' + (index+1))
    .replace(/__name__/g,        index)
  ;

  // On crée un objet jquery qui contient ce template
  var \$prototype = \$(template);

  // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
  addDeleteLink(\$prototype);

  // On ajoute le prototype modifié à la fin de la balise <div>
  \$container.append(\$prototype);

  // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
  index++;
}

// La fonction qui ajoute un lien de suppression d'une catégorie
function addDeleteLink(\$prototype) {
  // Création du lien
  var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

  // Ajout du lien
  \$prototype.append(\$deleteLink);

  // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
  \$deleteLink.click(function(e) {
    \$prototype.remove();

    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });
}
});
</script>
";
    }

    public function getTemplateName()
    {
        return "GmaoMoulageBundle:Moule:formulaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  49 => 21,  35 => 9,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* */
/* <div class="well">*/
/*   <form method="post">*/
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     {{ form_rest(form) }}*/
/* */
/*     {{ form_row(form.empreintes) }}*/
/*     <a href="#" id="add_empreinte" class="btn btn-default">Ajouter une empreinte</a>*/
/* */
/* */
/* */
/*     <button type="submit" class="btn btn-success" >Valider</button>*/
/*   </form>*/
/* </div>*/
/* */
/* */
/* */
/* {# On charge la bibliothèque jQuery. Ici, je la prends depuis le site jquery.com,mais si vous l'avez en local, changez simplement l'adresse. #}*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* {# Voici le script en question : #}*/
/* <script type="text/javascript">*/
/* $(document).ready(function() {*/
/* // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.*/
/* var $container = $('div#moule_empreintes');*/
/* */
/* // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement*/
/* var index = $container.find(':input').length;*/
/* */
/* // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.*/
/* $('#add_empreinte').click(function(e) {*/
/*   addEmpreinte($container);*/
/* */
/*   e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*   return false;*/
/* });*/
/* */
/* // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).*/
/* if (index == 0) {*/
/*   addEmpreinte($container);*/
/* } else {*/
/*   // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles*/
/*   $container.children('div').each(function() {*/
/*     addDeleteLink($(this));*/
/*   });*/
/* }*/
/* */
/* // La fonction qui ajoute un formulaire CategoryType*/
/* function addEmpreinte($container) {*/
/*   // Dans le contenu de l'attribut « data-prototype », on remplace :*/
/*   // - le texte "__name__label__" qu'il contient par le label du champ*/
/*   // - le texte "__name__" qu'il contient par le numéro du champ*/
/*   var template = $container.attr('data-prototype')*/
/*     .replace(/__name__label__/g, 'Empreinte n°' + (index+1))*/
/*     .replace(/__name__/g,        index)*/
/*   ;*/
/* */
/*   // On crée un objet jquery qui contient ce template*/
/*   var $prototype = $(template);*/
/* */
/*   // On ajoute au prototype un lien pour pouvoir supprimer la catégorie*/
/*   addDeleteLink($prototype);*/
/* */
/*   // On ajoute le prototype modifié à la fin de la balise <div>*/
/*   $container.append($prototype);*/
/* */
/*   // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro*/
/*   index++;*/
/* }*/
/* */
/* // La fonction qui ajoute un lien de suppression d'une catégorie*/
/* function addDeleteLink($prototype) {*/
/*   // Création du lien*/
/*   var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');*/
/* */
/*   // Ajout du lien*/
/*   $prototype.append($deleteLink);*/
/* */
/*   // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie*/
/*   $deleteLink.click(function(e) {*/
/*     $prototype.remove();*/
/* */
/*     e.preventDefault(); // évite qu'un # apparaisse dans l'URL*/
/*     return false;*/
/*   });*/
/* }*/
/* });*/
/* </script>*/
/* */
