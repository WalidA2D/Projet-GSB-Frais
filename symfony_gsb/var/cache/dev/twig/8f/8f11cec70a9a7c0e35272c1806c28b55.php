<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* comptable/suivreFicheFrais.html.twig */
class __TwigTemplate_3bd02e5bdc46a7f42aad40ddac18677e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/suivreFicheFrais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/suivreFicheFrais.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        <title>GSB Frais - Suivre fiche de frais</title>
    </head>
    <body class=\"box\">
      <h1 class=\"title is-1 has-text-centered\">Suivre fiche de frais</h1>

      <h2 class=\"subtitle is-3 has-text-centered\">
        <button class=\"button is-link is-light\"><a href=\"/Comptable/Accueil\">Retour</a></button>    
      </h2>  


    <table class=\"table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">
      <thead>
        <tr>
          <th>Id Visiteur</th>
          <th>Mois</th>
          <th>Nombre de justificatifs</th>
          <th>Montant valide</th>
          <th>Date modif</th>
          ";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 25, $this->source); })()), "idEtat", [], "array", false, false, false, 25) != "RB")) {
            // line 26
            echo "          <th>Etat</th>
          ";
        }
        // line 28
        echo "        </tr>
      </thead>
      <tbody>
        <tr>
          <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 32, $this->source); })()), "idVisiteur", [], "array", false, false, false, 32), "html", null, true);
        echo "</td>
          <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 33, $this->source); })()), "mois", [], "array", false, false, false, 33), "html", null, true);
        echo "</td>
          <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 34, $this->source); })()), "nbJustificatifs", [], "array", false, false, false, 34), "html", null, true);
        echo "</td>
          <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 35, $this->source); })()), "montantValide", [], "array", false, false, false, 35), "html", null, true);
        echo "</td>
          <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 36, $this->source); })()), "dateModif", [], "array", false, false, false, 36), "html", null, true);
        echo "</td>
          ";
        // line 37
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 37, $this->source); })()), "idEtat", [], "array", false, false, false, 37) == "CR")) {
            // line 38
            echo "          <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 38, $this->source); })()), "idEtat", [], "array", false, false, false, 38), "html", null, true);
            echo "</td>
          ";
        }
        // line 40
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 40, $this->source); })()), "idEtat", [], "array", false, false, false, 40) == "CL")) {
            echo " 
          <td><button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/Modifier\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 41, $this->source); })()), "idEtat", [], "array", false, false, false, 41), "html", null, true);
            echo "</a></button></td>
          ";
        }
        // line 43
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 43, $this->source); })()), "idEtat", [], "array", false, false, false, 43) == "VA")) {
            // line 44
            echo "          <td>Mise en paiement</td>
          <td><button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/Rembourser\">Remboursée</a></button></td>
          ";
        }
        // line 47
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 47, $this->source); })()), "idEtat", [], "array", false, false, false, 47) == "RB")) {
            // line 48
            echo "          <td><button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/DetailFicheFrais\">Détail</a></button></td>
          <td>Fiche payée</td>
          ";
        }
        // line 51
        echo "        </tr>
      </tbody>
    </table>



  </body>
</html>  
<!--
      <footer class=\"footer\">
        <div class=\"container is-max-desktop\">
        <div class=\"columns\">
      <div class=\"column\">
        <strong>RB</strong>
        <strong>Remboursée</strong>
      </div>
      <div class=\"column\">
        <strong>CL</strong>
        <strong>Saisie clôturée</strong>
      </div>
      <div class=\"column\">
        <strong>CR</strong>
        <strong>Fiche créée, saisie en cours</strong>
      </div>
      <div class=\"column\">
        <strong>VA</strong>
        <strong>Validée et mise en paiement</strong>
      </div>
      </div>
      </div>
      </footer>
-!>
    
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/suivreFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 51,  133 => 48,  130 => 47,  125 => 44,  122 => 43,  117 => 41,  112 => 40,  106 => 38,  104 => 37,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  78 => 28,  74 => 26,  72 => 25,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
        <title>GSB Frais - Suivre fiche de frais</title>
    </head>
    <body class=\"box\">
      <h1 class=\"title is-1 has-text-centered\">Suivre fiche de frais</h1>

      <h2 class=\"subtitle is-3 has-text-centered\">
        <button class=\"button is-link is-light\"><a href=\"/Comptable/Accueil\">Retour</a></button>    
      </h2>  


    <table class=\"table is-bordered is-striped is-narrow is-hoverable is-fullwidth\">
      <thead>
        <tr>
          <th>Id Visiteur</th>
          <th>Mois</th>
          <th>Nombre de justificatifs</th>
          <th>Montant valide</th>
          <th>Date modif</th>
          {% if ficheFrais['idEtat'] != \"RB\"%}
          <th>Etat</th>
          {% endif %}
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ ficheFrais['idVisiteur']}}</td>
          <td>{{ ficheFrais['mois']}}</td>
          <td>{{ ficheFrais['nbJustificatifs']}}</td>
          <td>{{ ficheFrais['montantValide']}}</td>
          <td>{{ ficheFrais['dateModif']}}</td>
          {% if ficheFrais['idEtat'] == \"CR\" %}
          <td>{{ ficheFrais['idEtat']}}</td>
          {% endif %}
          {% if ficheFrais['idEtat'] == \"CL\" %} 
          <td><button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/Modifier\">{{ ficheFrais['idEtat']}}</a></button></td>
          {% endif %}
          {% if ficheFrais['idEtat'] == \"VA\" %}
          <td>Mise en paiement</td>
          <td><button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/Rembourser\">Remboursée</a></button></td>
          {% endif %}
          {% if ficheFrais['idEtat'] == \"RB\" %}
          <td><button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/DetailFicheFrais\">Détail</a></button></td>
          <td>Fiche payée</td>
          {% endif %}
        </tr>
      </tbody>
    </table>



  </body>
</html>  
<!--
      <footer class=\"footer\">
        <div class=\"container is-max-desktop\">
        <div class=\"columns\">
      <div class=\"column\">
        <strong>RB</strong>
        <strong>Remboursée</strong>
      </div>
      <div class=\"column\">
        <strong>CL</strong>
        <strong>Saisie clôturée</strong>
      </div>
      <div class=\"column\">
        <strong>CR</strong>
        <strong>Fiche créée, saisie en cours</strong>
      </div>
      <div class=\"column\">
        <strong>VA</strong>
        <strong>Validée et mise en paiement</strong>
      </div>
      </div>
      </div>
      </footer>
-!>
    
", "comptable/suivreFicheFrais.html.twig", "/media/etudiant/5C42-288C/Projet_GSB_Frais/Projet-GSB-Frais/symfony_gsb/templates/comptable/suivreFicheFrais.html.twig");
    }
}
