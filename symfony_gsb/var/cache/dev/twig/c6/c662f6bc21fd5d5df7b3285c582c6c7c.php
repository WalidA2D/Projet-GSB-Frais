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

/* comptable/detailFicheFrais.html.twig */
class __TwigTemplate_cde0396280d4c289319d865c39fb6322 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/detailFicheFrais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/detailFicheFrais.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
    <title>Liste des lignes de frais forfaitaires</title>
</head>
<body>
    <section class=\"section\">
        <div class=\"container\">
            <h1 class=\"title\">Détail</h1>
            <h2 class=\"subtitle\"><a href=\"./\">Retour</a></h2>
            <h2 class=\"subtitle\">Liste des lignes de frais forfaitaires</h2>
            <div class=\"box\">
                <ul>
                    <li>idVisiteur: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 18, $this->source); })()), "idVisiteur", [], "array", false, false, false, 18), "html", null, true);
        echo "<br></li>
                    <li>mois: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 19, $this->source); })()), "mois", [], "array", false, false, false, 19), "html", null, true);
        echo "<br></li>
                    <li>idFraisForfait: ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 20, $this->source); })()), "idFraisForfait", [], "array", false, false, false, 20), "html", null, true);
        echo "<br></li>
                    <li>quantite: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 21, $this->source); })()), "quantite", [], "array", false, false, false, 21), "html", null, true);
        echo "<br></li>
                </ul>
            </div>
            <h2 class=\"subtitle\">Liste des lignes de frais hors forfaitaires</h2>
            <div class=\"box\">
                <ul>
                    <li>id: ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 27, $this->source); })()), "id", [], "array", false, false, false, 27), "html", null, true);
        echo "<br></li>
                    <li>idVisiteur: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 28, $this->source); })()), "idVisiteur", [], "array", false, false, false, 28), "html", null, true);
        echo "<br></li>
                    <li>mois: ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 29, $this->source); })()), "mois", [], "array", false, false, false, 29), "html", null, true);
        echo "<br></li>
                    <li>libelle: ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 30, $this->source); })()), "libelle", [], "array", false, false, false, 30), "html", null, true);
        echo "<br></li>
                    <li>date: ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 31, $this->source); })()), "date", [], "array", false, false, false, 31), "html", null, true);
        echo "<br></li>
                    <li>montant: ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 32, $this->source); })()), "montant", [], "array", false, false, false, 32), "html", null, true);
        echo "<br></li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/detailFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  86 => 27,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
    <title>Liste des lignes de frais forfaitaires</title>
</head>
<body>
    <section class=\"section\">
        <div class=\"container\">
            <h1 class=\"title\">Détail</h1>
            <h2 class=\"subtitle\"><a href=\"./\">Retour</a></h2>
            <h2 class=\"subtitle\">Liste des lignes de frais forfaitaires</h2>
            <div class=\"box\">
                <ul>
                    <li>idVisiteur: {{ ficheFrais['idVisiteur'] }}<br></li>
                    <li>mois: {{ ficheFrais['mois'] }}<br></li>
                    <li>idFraisForfait: {{ ficheFrais['idFraisForfait'] }}<br></li>
                    <li>quantite: {{ ficheFrais['quantite'] }}<br></li>
                </ul>
            </div>
            <h2 class=\"subtitle\">Liste des lignes de frais hors forfaitaires</h2>
            <div class=\"box\">
                <ul>
                    <li>id: {{ ficheHorsFrais['id'] }}<br></li>
                    <li>idVisiteur: {{ ficheHorsFrais['idVisiteur'] }}<br></li>
                    <li>mois: {{ ficheHorsFrais['mois'] }}<br></li>
                    <li>libelle: {{ ficheHorsFrais['libelle'] }}<br></li>
                    <li>date: {{ ficheHorsFrais['date'] }}<br></li>
                    <li>montant: {{ ficheHorsFrais['montant'] }}<br></li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>", "comptable/detailFicheFrais.html.twig", "/media/etudiant/5C42-288C/Projet_GSB_Frais/Projet-GSB-Frais/symfony_gsb/templates/comptable/detailFicheFrais.html.twig");
    }
}
