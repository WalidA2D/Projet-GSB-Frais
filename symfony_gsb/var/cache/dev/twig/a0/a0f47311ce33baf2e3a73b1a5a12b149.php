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
class __TwigTemplate_6786c9de0ec48f41f0eea2fc4a3e0618 extends Template
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
        echo "<h1>Suivre fiche de frais</h1>

<h2> <a href=\"/Comptable/Accueil\"> Retour</a> </h2>



<table>
<thead>
    <tr>
        <th>Id Visiteur</th>
        <th>Mois </th>
        <th>Nombre de justificatifs</th>
        <th>Montant valide</th>
        <th>Date modif</th>
        ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 15, $this->source); })()), "idEtat", [], "array", false, false, false, 15) != "RB")) {
            // line 16
            echo "        <th>Etat</th>
        ";
        }
        // line 18
        echo "    
    </tr>
</thead>
<tbody>
<tr>
    <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 23, $this->source); })()), "idVisiteur", [], "array", false, false, false, 23), "html", null, true);
        echo "</td>
    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 24, $this->source); })()), "mois", [], "array", false, false, false, 24), "html", null, true);
        echo "</td>
    <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 25, $this->source); })()), "nbJustificatifs", [], "array", false, false, false, 25), "html", null, true);
        echo "</td>
    <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 26, $this->source); })()), "montantValide", [], "array", false, false, false, 26), "html", null, true);
        echo "</td>
    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 27, $this->source); })()), "dateModif", [], "array", false, false, false, 27), "html", null, true);
        echo "</td>
    ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 28, $this->source); })()), "idEtat", [], "array", false, false, false, 28) == "CR")) {
            // line 29
            echo "    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 29, $this->source); })()), "idEtat", [], "array", false, false, false, 29), "html", null, true);
            echo "</td>
    ";
        }
        // line 31
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 31, $this->source); })()), "idEtat", [], "array", false, false, false, 31) == "CL")) {
            // line 32
            echo "    <td><button><a href=\"/Comptable/SuivreFicheFrais/Modifier\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 32, $this->source); })()), "idEtat", [], "array", false, false, false, 32), "html", null, true);
            echo "</a></button></td>
    ";
        }
        // line 34
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 34, $this->source); })()), "idEtat", [], "array", false, false, false, 34) == "VA")) {
            // line 35
            echo "    <td>Mise en paiement</td>
    <td><button><a href=\"/Comptable/SuivreFicheFrais/Rembourser\">Remboursée</a></button></td>
    ";
        }
        // line 38
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 38, $this->source); })()), "idEtat", [], "array", false, false, false, 38) == "RB")) {
            // line 39
            echo "    <td><button><a href=\"/Comptable/SuivreFicheFrais/DetailFicheFrais\">Détail</a></button></td>
    <td>Fiche payée</td>
    ";
        }
        // line 42
        echo "   
    
</tr>



</tbody>
<tfoot>
    <tr>
      <td><strong>RB</strong></td>
      <td><strong>Remboursée</strong></td>
    </tr>
    <tr>
      <td><strong>CL</strong></td>
      <td><strong>Saisie clôturée</strong></td>
    </tr>
    <tr>
      <td><strong>CR</strong></td>
      <td><strong>Fiche créée, saisie en cours</strong></td>
    </tr>
    <tr>
      <td><strong>VA</strong></td>
      <td><strong>Validée et mise en paiement</strong></td>
    </tr>
</tfoot>

</table>";
        
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
        return array (  125 => 42,  120 => 39,  117 => 38,  112 => 35,  109 => 34,  103 => 32,  100 => 31,  94 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  65 => 18,  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Suivre fiche de frais</h1>

<h2> <a href=\"/Comptable/Accueil\"> Retour</a> </h2>



<table>
<thead>
    <tr>
        <th>Id Visiteur</th>
        <th>Mois </th>
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
    <td><button><a href=\"/Comptable/SuivreFicheFrais/Modifier\">{{ ficheFrais['idEtat']}}</a></button></td>
    {% endif %}
    {% if ficheFrais['idEtat'] == \"VA\" %}
    <td>Mise en paiement</td>
    <td><button><a href=\"/Comptable/SuivreFicheFrais/Rembourser\">Remboursée</a></button></td>
    {% endif %}
    {% if ficheFrais['idEtat'] == \"RB\" %}
    <td><button><a href=\"/Comptable/SuivreFicheFrais/DetailFicheFrais\">Détail</a></button></td>
    <td>Fiche payée</td>
    {% endif %}
   
    
</tr>



</tbody>
<tfoot>
    <tr>
      <td><strong>RB</strong></td>
      <td><strong>Remboursée</strong></td>
    </tr>
    <tr>
      <td><strong>CL</strong></td>
      <td><strong>Saisie clôturée</strong></td>
    </tr>
    <tr>
      <td><strong>CR</strong></td>
      <td><strong>Fiche créée, saisie en cours</strong></td>
    </tr>
    <tr>
      <td><strong>VA</strong></td>
      <td><strong>Validée et mise en paiement</strong></td>
    </tr>
</tfoot>

</table>", "comptable/suivreFicheFrais.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/comptable/suivreFicheFrais.html.twig");
    }
}
