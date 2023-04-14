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

/* comptable/accueilComptable.html.twig */
class __TwigTemplate_6d43bdf7c2b0d76b5a1e3d3105219f39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/accueilComptable.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/accueilComptable.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
\t<title>GSB Frais - Comptable Accueil</title>
</head>
<body>
    <section class=\"section\">
        <div class=\"container\">
            <h1 class=\"title has-text-centered\">Bienvenue Comptable</h1>
            <div class=\"columns\">
                <div class=\"column\">
                    <h2 class=\"subtitle\">
                        <a href=\"./FormulaireFicheFrais\" class=\"button is-primary is-large is-fullwidth\">Valider les fiches de frais</a>
                    </h2>
                </div>
                <div class=\"column\">
                    <h2 class=\"subtitle\">
                        <a href=\"/Comptable/SuivreFicheFrais/SuivreValide\" class=\"button is-primary is-large is-fullwidth\">Suivre les fiches de frais validées</a>
                    </h2>
                </div>
            </div>
            <button class=\"button is-danger\"><a href=\"./Deconnecter\" style=\"color:white;\">Se Deconnecter</a></button>
        </div>
    </section>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/accueilComptable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
\t<title>GSB Frais - Comptable Accueil</title>
</head>
<body>
    <section class=\"section\">
        <div class=\"container\">
            <h1 class=\"title has-text-centered\">Bienvenue Comptable</h1>
            <div class=\"columns\">
                <div class=\"column\">
                    <h2 class=\"subtitle\">
                        <a href=\"./FormulaireFicheFrais\" class=\"button is-primary is-large is-fullwidth\">Valider les fiches de frais</a>
                    </h2>
                </div>
                <div class=\"column\">
                    <h2 class=\"subtitle\">
                        <a href=\"/Comptable/SuivreFicheFrais/SuivreValide\" class=\"button is-primary is-large is-fullwidth\">Suivre les fiches de frais validées</a>
                    </h2>
                </div>
            </div>
            <button class=\"button is-danger\"><a href=\"./Deconnecter\" style=\"color:white;\">Se Deconnecter</a></button>
        </div>
    </section>
</body>
</html>", "comptable/accueilComptable.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/comptable/accueilComptable.html.twig");
    }
}
