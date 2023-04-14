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

/* comptable/formulaireFicheFrais.html.twig */
class __TwigTemplate_4c6975638f089bda63cf571ef6e70c3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/formulaireFicheFrais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/formulaireFicheFrais.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head lang='fr'>
        <title>Filtrer fiche de frais</title>
        <meta charset=\"utf-8\">
        <!-- importer le fichier de style -->
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    </head>
    <body class=\"box\">
        <h1 class=\"title is-1 has-text-centered\">Formulaire fiche de frais</h1>

    <section class=\"section\">
  <div class=\"container\">
    <div class=\"box\">
      <form action=\"./FormulaireValiderFicheFrais\" method=\"POST\">
        <div class=\"field\">
          <label class=\"label\">1. Mois</label>
          <div class=\"control\">
            <div class=\"select\">
              <select name=\"mois\" id=\"mois-select\">
                <option value=\"\">--Choisir le mois--</option>
                <option value=\"Janvie\">Janvier</option>
                <option value=\"Fevrie\">Fevrier</option>
                <option value=\"Mars\">Mars</option>
                <option value=\"Avril\">Avril</option>
                <option value=\"Mai\">Mai</option>
                <option value=\"Juin\">Juin</option>
                <option value=\"Juille\">Juillet</option>
                <option value=\"Aout\">Aout</option>
                <option value=\"Septem\">Septembre</option>             
                <option value=\"Octobr\">Octobre</option> 
                <option value=\"Novemb\">Novembre</option>
                <option value=\"Decemb\">Decembre</option>
              </select>
            </div>
          </div>
        </div>

        <div class=\"field\">
          <label class=\"label\">2. Identifiant Visiteur</label>
          <div class=\"control\">
            <input class=\"input\" type=\"text\" placeholder=\"Identifiant...\" name=\"idVisiteur\" required>
          </div>
        </div>

        <div class=\"field is-grouped\">
          <div class=\"control\">
            <button class=\"button is-link\">Rechercher</button>
          </div>
          <div class=\"control\">
            <button class=\"button is-link is-light\">Annuler</button>
          </div>
          <div class=\"control\">
            <a href=\"/Comptable/Accueil\" class=\"button is-link is-light\">Retour</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>


    </body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/formulaireFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head lang='fr'>
        <title>Filtrer fiche de frais</title>
        <meta charset=\"utf-8\">
        <!-- importer le fichier de style -->
        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
    </head>
    <body class=\"box\">
        <h1 class=\"title is-1 has-text-centered\">Formulaire fiche de frais</h1>

    <section class=\"section\">
  <div class=\"container\">
    <div class=\"box\">
      <form action=\"./FormulaireValiderFicheFrais\" method=\"POST\">
        <div class=\"field\">
          <label class=\"label\">1. Mois</label>
          <div class=\"control\">
            <div class=\"select\">
              <select name=\"mois\" id=\"mois-select\">
                <option value=\"\">--Choisir le mois--</option>
                <option value=\"Janvie\">Janvier</option>
                <option value=\"Fevrie\">Fevrier</option>
                <option value=\"Mars\">Mars</option>
                <option value=\"Avril\">Avril</option>
                <option value=\"Mai\">Mai</option>
                <option value=\"Juin\">Juin</option>
                <option value=\"Juille\">Juillet</option>
                <option value=\"Aout\">Aout</option>
                <option value=\"Septem\">Septembre</option>             
                <option value=\"Octobr\">Octobre</option> 
                <option value=\"Novemb\">Novembre</option>
                <option value=\"Decemb\">Decembre</option>
              </select>
            </div>
          </div>
        </div>

        <div class=\"field\">
          <label class=\"label\">2. Identifiant Visiteur</label>
          <div class=\"control\">
            <input class=\"input\" type=\"text\" placeholder=\"Identifiant...\" name=\"idVisiteur\" required>
          </div>
        </div>

        <div class=\"field is-grouped\">
          <div class=\"control\">
            <button class=\"button is-link\">Rechercher</button>
          </div>
          <div class=\"control\">
            <button class=\"button is-link is-light\">Annuler</button>
          </div>
          <div class=\"control\">
            <a href=\"/Comptable/Accueil\" class=\"button is-link is-light\">Retour</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>


    </body>", "comptable/formulaireFicheFrais.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/comptable/formulaireFicheFrais.html.twig");
    }
}
