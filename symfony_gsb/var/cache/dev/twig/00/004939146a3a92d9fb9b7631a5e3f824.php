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

/* accueil/index.html.twig */
class __TwigTemplate_5e2109e69b59c5e85aaf48e65e4c7b98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

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
\t<title>GSB Frais - Connexion</title>
</head>
<body>

\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title has-text-centered\">Accueil</h1>
\t\t\t<div class=\"columns is-centered\">
\t\t\t\t<div class=\"column is-half\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<header class=\"card-header\">
\t\t\t\t\t\t\t<p class=\"card-header-title\">
\t\t\t\t\t\t\t\t<a href=\"./Visiteur/Connexion\">Visiteur</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Accéder à l'espace Visiteur pour saisir vos fiches de frais.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"column is-half\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<header class=\"card-header\">
\t\t\t\t\t\t\t<p class=\"card-header-title\">
\t\t\t\t\t\t\t\t<a href=\"./Comptable/Connexion\">Comptable</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Accéder à l'espace Comptable pour valider les fiches de frais des visiteurs.</p>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

</body>
</html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
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
\t<title>GSB Frais - Connexion</title>
</head>
<body>

\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title has-text-centered\">Accueil</h1>
\t\t\t<div class=\"columns is-centered\">
\t\t\t\t<div class=\"column is-half\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<header class=\"card-header\">
\t\t\t\t\t\t\t<p class=\"card-header-title\">
\t\t\t\t\t\t\t\t<a href=\"./Visiteur/Connexion\">Visiteur</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Accéder à l'espace Visiteur pour saisir vos fiches de frais.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"column is-half\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<header class=\"card-header\">
\t\t\t\t\t\t\t<p class=\"card-header-title\">
\t\t\t\t\t\t\t\t<a href=\"./Comptable/Connexion\">Comptable</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>Accéder à l'espace Comptable pour valider les fiches de frais des visiteurs.</p>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

</body>
</html>


", "accueil/index.html.twig", "/media/etudiant/5C42-288C/Projet_GSB_Frais/Projet-GSB-Frais/symfony_gsb/templates/accueil/index.html.twig");
    }
}
