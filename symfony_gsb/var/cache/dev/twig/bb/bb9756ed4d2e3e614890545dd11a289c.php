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

/* comptable/suivreFicheFraisValider.html.twig */
class __TwigTemplate_aecedfaa9cacd6875a2f7022cf63da7d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/suivreFicheFraisValider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/suivreFicheFraisValider.html.twig"));

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
      <th>Etat</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 30
            echo "    <tr>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "idVisiteur", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "mois", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
      <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "nbJustificatifs", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
      <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "montantValide", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
      <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "dateModif", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
      <td>
        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["fiche"], "idEtat", [], "any", false, false, false, 37) == "VA")) {
                // line 38
                echo "          <button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/SuivreValide/Modifier\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "idEtat", [], "any", false, false, false, 38), "html", null, true);
                echo "</a></button>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["fiche"], "idEtat", [], "any", false, false, false, 39) == "MP")) {
                // line 40
                echo "          <button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/SuivreValide/Rembourser\">Remboursée</a></button>
        ";
            }
            // line 42
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["fiche"], "idEtat", [], "any", false, false, false, 42) == "RB")) {
                // line 43
                echo "          <button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/DetailFicheFrais\">Détail</a></button>
        ";
            }
            // line 45
            echo "      </td>
      ";
            // line 46
            if ((twig_get_attribute($this->env, $this->source, $context["fiche"], "idEtat", [], "any", false, false, false, 46) == "MP")) {
                // line 47
                echo "      <td>Mise en paiement</td>
      ";
            }
            // line 49
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  </tbody>
</table>



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
-!>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/suivreFicheFraisValider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  133 => 49,  129 => 47,  127 => 46,  124 => 45,  120 => 43,  117 => 42,  113 => 40,  111 => 39,  106 => 38,  104 => 37,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  80 => 30,  76 => 29,  50 => 6,  43 => 1,);
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
      <th>Etat</th>
    </tr>
  </thead>
  <tbody>
    {% for fiche in ficheFrais %}
    <tr>
      <td>{{ fiche.idVisiteur }}</td>
      <td>{{ fiche.mois }}</td>
      <td>{{ fiche.nbJustificatifs }}</td>
      <td>{{ fiche.montantValide }}</td>
      <td>{{ fiche.dateModif }}</td>
      <td>
        {% if fiche.idEtat == \"VA\" %}
          <button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/SuivreValide/Modifier\">{{ fiche.idEtat }}</a></button>
        {% elseif fiche.idEtat == \"MP\" %}
          <button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/SuivreValide/Rembourser\">Remboursée</a></button>
        {% endif %}
        {% if fiche.idEtat == \"RB\" %}
          <button class=\"button is-link is-light is-small\"><a href=\"/Comptable/SuivreFicheFrais/DetailFicheFrais\">Détail</a></button>
        {% endif %}
      </td>
      {% if fiche.idEtat == \"MP\" %}
      <td>Mise en paiement</td>
      {% endif %}
    </tr>
    {% endfor %}
  </tbody>
</table>



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
-!>", "comptable/suivreFicheFraisValider.html.twig", "/media/etudiant/5C42-288C/Projet_GSB_Frais/Projet-GSB-Frais/symfony_gsb/templates/comptable/suivreFicheFraisValider.html.twig");
    }
}
