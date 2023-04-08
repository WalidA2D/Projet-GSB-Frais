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
class __TwigTemplate_7fe865c03b2d335b762f5181ad5590b8 extends Template
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
    <title>Liste des lignes de frais forfaitaires</title>
</head>
<body>
    <h1>Détail</h1>
    <h2> <a href=\"./\"> Retour</a> </h2>
    <h2>Liste des lignes de frais forfaitaires</h2>
    <ul>
       
            
            <li>idVisiteur : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 14, $this->source); })()), "idVisiteur", [], "array", false, false, false, 14), "html", null, true);
        echo "<br></li>
            <li>mois : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 15, $this->source); })()), "mois", [], "array", false, false, false, 15), "html", null, true);
        echo "<br></li>
            <li>idFraisForfait : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 16, $this->source); })()), "idFraisForfait", [], "array", false, false, false, 16), "html", null, true);
        echo "<br></li>
            <li>quantite : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 17, $this->source); })()), "quantite", [], "array", false, false, false, 17), "html", null, true);
        echo "<br></li>
           
        
    </ul>
    <h2>Liste des lignes de frais hors forfaitaires</h2>
    <ul>
    
            <li>id : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 24, $this->source); })()), "id", [], "array", false, false, false, 24), "html", null, true);
        echo "<br></li>
            <li>idVisiteur : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 25, $this->source); })()), "idVisiteur", [], "array", false, false, false, 25), "html", null, true);
        echo "<br></li>
            <li>mois : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 26, $this->source); })()), "mois", [], "array", false, false, false, 26), "html", null, true);
        echo "<br></li>
            <li>libelle : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 27, $this->source); })()), "libelle", [], "array", false, false, false, 27), "html", null, true);
        echo "<br></li>
            <li>date : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 28, $this->source); })()), "date", [], "array", false, false, false, 28), "html", null, true);
        echo "<br></li>
            <li>montant : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 29, $this->source); })()), "montant", [], "array", false, false, false, 29), "html", null, true);
        echo "<br></li>
        
    </ul>
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
        return array (  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Liste des lignes de frais forfaitaires</title>
</head>
<body>
    <h1>Détail</h1>
    <h2> <a href=\"./\"> Retour</a> </h2>
    <h2>Liste des lignes de frais forfaitaires</h2>
    <ul>
       
            
            <li>idVisiteur : {{ ficheFrais['idVisiteur']}}<br></li>
            <li>mois : {{ ficheFrais['mois']}}<br></li>
            <li>idFraisForfait : {{ ficheFrais['idFraisForfait']}}<br></li>
            <li>quantite : {{ ficheFrais['quantite']}}<br></li>
           
        
    </ul>
    <h2>Liste des lignes de frais hors forfaitaires</h2>
    <ul>
    
            <li>id : {{ ficheHorsFrais['id']}}<br></li>
            <li>idVisiteur : {{ ficheHorsFrais['idVisiteur']}}<br></li>
            <li>mois : {{ ficheHorsFrais['mois']}}<br></li>
            <li>libelle : {{ ficheHorsFrais['libelle']}}<br></li>
            <li>date : {{ ficheHorsFrais['date']}}<br></li>
            <li>montant : {{ ficheHorsFrais['montant']}}<br></li>
        
    </ul>
</body>
</html>", "comptable/detailFicheFrais.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/comptable/detailFicheFrais.html.twig");
    }
}
