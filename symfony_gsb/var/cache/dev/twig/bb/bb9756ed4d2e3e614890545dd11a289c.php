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
                echo "
        <form action=\"/Comptable/SuivreFicheFrais/SuivreValide/Modifier\" method=\"POST\">
          <input type=\"hidden\" value=";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "idVisiteur", [], "any", false, false, false, 40), "html", null, true);
                echo " name=\"idVisiteur\" />
          <input type=\"hidden\" value=";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "mois", [], "any", false, false, false, 41), "html", null, true);
                echo " name=\"mois\" />
          <button class=\"button is-link is-light is-small\" onclick=\"return confirm('Êtes-vous sûr de vouloir mettre en paiement cet élément ?')\" type=\"submit\">Mettre en paiement</button>
        </form>

        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 45
$context["fiche"], "idEtat", [], "any", false, false, false, 45) == "MP")) {
                // line 46
                echo "
        <form action=\"/Comptable/SuivreFicheFrais/SuivreValide/Rembourser\" method=\"POST\">
          <input type=\"hidden\" value=";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "idVisiteur", [], "any", false, false, false, 48), "html", null, true);
                echo " name=\"idVisiteur\" />
          <input type=\"hidden\" value=";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "mois", [], "any", false, false, false, 49), "html", null, true);
                echo " name=\"mois\" />
          <button class=\"button is-link is-light is-small\" onclick=\"return confirm('Êtes-vous sûr de vouloir remboursée cet élément ?')\" type=\"submit\">Remboursée</button>
        </form>
        
        ";
            }
            // line 54
            echo "        
        ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, $context["fiche"], "idEtat", [], "any", false, false, false, 55) == "RB")) {
                // line 56
                echo "        <form action=\"/Comptable/SuivreFicheFrais/DetailFicheFraisValider\" method=\"POST\">
          <input type=\"hidden\" value=";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "idVisiteur", [], "any", false, false, false, 57), "html", null, true);
                echo " name=\"idVisiteur\" />
          <input type=\"hidden\" value=";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "mois", [], "any", false, false, false, 58), "html", null, true);
                echo " name=\"mois\" />
          <button class=\"button is-link is-light is-small\" type=\"submit\">Détail</button>
        </form>
        
        ";
            }
            // line 63
            echo "      
      </td>
      ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, $context["fiche"], "idEtat", [], "any", false, false, false, 65) == "MP")) {
                // line 66
                echo "      <td>Mise en paiement</td>
      ";
            }
            // line 68
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        return array (  176 => 70,  169 => 68,  165 => 66,  163 => 65,  159 => 63,  151 => 58,  147 => 57,  144 => 56,  142 => 55,  139 => 54,  131 => 49,  127 => 48,  123 => 46,  121 => 45,  114 => 41,  110 => 40,  106 => 38,  104 => 37,  99 => 35,  95 => 34,  91 => 33,  87 => 32,  83 => 31,  80 => 30,  76 => 29,  50 => 6,  43 => 1,);
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

        <form action=\"/Comptable/SuivreFicheFrais/SuivreValide/Modifier\" method=\"POST\">
          <input type=\"hidden\" value={{fiche.idVisiteur}} name=\"idVisiteur\" />
          <input type=\"hidden\" value={{fiche.mois}} name=\"mois\" />
          <button class=\"button is-link is-light is-small\" onclick=\"return confirm('Êtes-vous sûr de vouloir mettre en paiement cet élément ?')\" type=\"submit\">Mettre en paiement</button>
        </form>

        {% elseif fiche.idEtat == \"MP\" %}

        <form action=\"/Comptable/SuivreFicheFrais/SuivreValide/Rembourser\" method=\"POST\">
          <input type=\"hidden\" value={{fiche.idVisiteur}} name=\"idVisiteur\" />
          <input type=\"hidden\" value={{fiche.mois}} name=\"mois\" />
          <button class=\"button is-link is-light is-small\" onclick=\"return confirm('Êtes-vous sûr de vouloir remboursée cet élément ?')\" type=\"submit\">Remboursée</button>
        </form>
        
        {% endif %}
        
        {% if fiche.idEtat == \"RB\" %}
        <form action=\"/Comptable/SuivreFicheFrais/DetailFicheFraisValider\" method=\"POST\">
          <input type=\"hidden\" value={{fiche.idVisiteur}} name=\"idVisiteur\" />
          <input type=\"hidden\" value={{fiche.mois}} name=\"mois\" />
          <button class=\"button is-link is-light is-small\" type=\"submit\">Détail</button>
        </form>
        
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
-!>", "comptable/suivreFicheFraisValider.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/comptable/suivreFicheFraisValider.html.twig");
    }
}
