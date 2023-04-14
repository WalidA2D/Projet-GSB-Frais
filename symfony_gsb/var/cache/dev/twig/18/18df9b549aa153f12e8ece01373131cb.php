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

/* comptable/modifierFicheFrais.html.twig */
class __TwigTemplate_ae461348e88dc75f12a47292f03ca170 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/modifierFicheFrais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/modifierFicheFrais.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head lang='fr'>
        <title>Modifier fiche de frais</title>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        
    </head>
  <body>
    <div class=\"container\">
      <section class=\"section\">
        <h1 class=\"title is-1 has-text-centered\">Modifier fiche de frais</h1>
        <form action=\"/Comptable/SuivreFicheFrais/SuivreValide/ModifierFicheFrais\" method=\"GET\">
          <div class=\"field\">
            <label class=\"label\">1. Nombre de Justificatifs</label>
            <div class=\"control\">
              <input class=\"input\" type=\"text\" placeholder=\"Justificatifs...\" name=\"nbJustificatifs\" required=\"required\" autocomplete=\"off\">
            </div>
          </div>
          <div class=\"field\">
            <label class=\"label\">2. Montant Valide</label>
            <div class=\"control\">
              <input class=\"input\" type=\"text\" placeholder=\"Montant...\" name=\"montantValide\" required=\"required\" autocomplete=\"off\">
            </div>
          </div>
          <div class=\"field is-grouped\">
            <div class=\"control\">
              <button class=\"button is-primary\" type=\"submit\"><i class=\"fas fa-edit\"></i> Modifier</button>
            </div>
            <div class=\"control\">
              <button class=\"button is-light\" type=\"reset\"><i class=\"\"></i> Annuler</button>
            </div>
          </div>
        </form>
        <h2 class=\"subtitle is-5 has-text-centered\"><a href=\"/Comptable/SuivreFicheFrais/SuivreValide\"><i class=\"fas fa-arrow-left\"></i> Retour</a></h2>
      </section>
    </div>
    <script defer src=\"https://use.fontawesome.com/releases/v5.14.0/js/all.js\"></script>
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/modifierFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
    <head lang='fr'>
        <title>Modifier fiche de frais</title>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
        
    </head>
  <body>
    <div class=\"container\">
      <section class=\"section\">
        <h1 class=\"title is-1 has-text-centered\">Modifier fiche de frais</h1>
        <form action=\"/Comptable/SuivreFicheFrais/SuivreValide/ModifierFicheFrais\" method=\"GET\">
          <div class=\"field\">
            <label class=\"label\">1. Nombre de Justificatifs</label>
            <div class=\"control\">
              <input class=\"input\" type=\"text\" placeholder=\"Justificatifs...\" name=\"nbJustificatifs\" required=\"required\" autocomplete=\"off\">
            </div>
          </div>
          <div class=\"field\">
            <label class=\"label\">2. Montant Valide</label>
            <div class=\"control\">
              <input class=\"input\" type=\"text\" placeholder=\"Montant...\" name=\"montantValide\" required=\"required\" autocomplete=\"off\">
            </div>
          </div>
          <div class=\"field is-grouped\">
            <div class=\"control\">
              <button class=\"button is-primary\" type=\"submit\"><i class=\"fas fa-edit\"></i> Modifier</button>
            </div>
            <div class=\"control\">
              <button class=\"button is-light\" type=\"reset\"><i class=\"\"></i> Annuler</button>
            </div>
          </div>
        </form>
        <h2 class=\"subtitle is-5 has-text-centered\"><a href=\"/Comptable/SuivreFicheFrais/SuivreValide\"><i class=\"fas fa-arrow-left\"></i> Retour</a></h2>
      </section>
    </div>
    <script defer src=\"https://use.fontawesome.com/releases/v5.14.0/js/all.js\"></script>
  </body>
</html>", "comptable/modifierFicheFrais.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/comptable/modifierFicheFrais.html.twig");
    }
}
