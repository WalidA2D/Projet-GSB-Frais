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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styleDétail.css"), "html", null, true);
        echo "\">
    <title>Liste des lignes de frais forfaitaires</title>
</head>
<body>
    <section class=\"section\">
        <div class=\"container\">
            <h1 class=\"title\">Détail</h1>
            <h2 class=\"subtitle\"><a href=\"./\">Retour</a></h2>
            <h2 class=\"subtitle\">Liste des lignes de frais forfaitaires</h2>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ficheFrais"]) || array_key_exists("ficheFrais", $context) ? $context["ficheFrais"] : (function () { throw new RuntimeError('Variable "ficheFrais" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneFraisForfait"]) {
            // line 17
            echo "                <div class=\"box\">
                
                    <ul> 
                        <li>idVisiteur: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisForfait"], "idVisiteur", [], "array", false, false, false, 20), "html", null, true);
            echo "<br></li>
                        <li>mois: ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisForfait"], "mois", [], "array", false, false, false, 21), "html", null, true);
            echo "<br></li>
                        <li>idFraisForfait: ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisForfait"], "idFraisForfait", [], "array", false, false, false, 22), "html", null, true);
            echo "<br></li>
                        <li>quantite: ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisForfait"], "quantite", [], "array", false, false, false, 23), "html", null, true);
            echo "<br></li>
                    </ul>
               
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneFraisForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            <h2 class=\"subtitle\">Liste des lignes de frais hors forfaitaires</h2>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ficheHorsFrais"]) || array_key_exists("ficheHorsFrais", $context) ? $context["ficheHorsFrais"] : (function () { throw new RuntimeError('Variable "ficheHorsFrais" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneFraisHorsForfait"]) {
            // line 30
            echo "                <div class=\"box\">
               
                    <ul>
                        <li>id: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisHorsForfait"], "id", [], "array", false, false, false, 33), "html", null, true);
            echo "<br></li>
                        <li>idVisiteur: ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisHorsForfait"], "idVisiteur", [], "array", false, false, false, 34), "html", null, true);
            echo "<br></li>
                        <li>mois: ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisHorsForfait"], "mois", [], "array", false, false, false, 35), "html", null, true);
            echo "<br></li>
                        <li>libelle: ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisHorsForfait"], "libelle", [], "array", false, false, false, 36), "html", null, true);
            echo "<br></li>
                        <li>date: ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisHorsForfait"], "date", [], "array", false, false, false, 37), "html", null, true);
            echo "<br></li>
                        <li>montant: ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ligneFraisHorsForfait"], "montant", [], "array", false, false, false, 38), "html", null, true);
            echo "<br></li>
                    </ul>    
                
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneFraisHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>
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
        return array (  138 => 43,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  102 => 30,  98 => 29,  95 => 28,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  67 => 17,  63 => 16,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"{{ asset('styleDétail.css') }}\">
    <title>Liste des lignes de frais forfaitaires</title>
</head>
<body>
    <section class=\"section\">
        <div class=\"container\">
            <h1 class=\"title\">Détail</h1>
            <h2 class=\"subtitle\"><a href=\"./\">Retour</a></h2>
            <h2 class=\"subtitle\">Liste des lignes de frais forfaitaires</h2>
            {% for ligneFraisForfait in ficheFrais %}
                <div class=\"box\">
                
                    <ul> 
                        <li>idVisiteur: {{ ligneFraisForfait['idVisiteur'] }}<br></li>
                        <li>mois: {{ ligneFraisForfait['mois'] }}<br></li>
                        <li>idFraisForfait: {{ ligneFraisForfait['idFraisForfait'] }}<br></li>
                        <li>quantite: {{ ligneFraisForfait['quantite'] }}<br></li>
                    </ul>
               
                </div>
            {% endfor %}
            <h2 class=\"subtitle\">Liste des lignes de frais hors forfaitaires</h2>
            {% for ligneFraisHorsForfait in ficheHorsFrais %}
                <div class=\"box\">
               
                    <ul>
                        <li>id: {{ ligneFraisHorsForfait['id'] }}<br></li>
                        <li>idVisiteur: {{ ligneFraisHorsForfait['idVisiteur'] }}<br></li>
                        <li>mois: {{ ligneFraisHorsForfait['mois'] }}<br></li>
                        <li>libelle: {{ ligneFraisHorsForfait['libelle'] }}<br></li>
                        <li>date: {{ ligneFraisHorsForfait['date'] }}<br></li>
                        <li>montant: {{ ligneFraisHorsForfait['montant'] }}<br></li>
                    </ul>    
                
                </div>
            {% endfor %}
        </div>
    </section>
</body>
</html>", "comptable/detailFicheFrais.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/comptable/detailFicheFrais.html.twig");
    }
}
