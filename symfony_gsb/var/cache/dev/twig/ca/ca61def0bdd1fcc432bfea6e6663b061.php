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

/* visiteur/resultConsulterVisiteur.html.twig */
class __TwigTemplate_68a882e6c956474ac89062fe9cb12e08 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/resultConsulterVisiteur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/resultConsulterVisiteur.html.twig"));

        // line 1
        echo "<fieldset>
\t<legend>Fiche Frais Forfait</legend>

        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ligneFicheFrais"]) || array_key_exists("ligneFicheFrais", $context) ? $context["ligneFicheFrais"] : (function () { throw new RuntimeError('Variable "ligneFicheFrais" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneLigneFicheFrais"]) {
            // line 5
            echo "
                <tr>
                <td>Libelle : ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigneFicheFrais"], "libelle", [], "array", false, false, false, 7), "html", null, true);
            echo "</td>
                </br>
                <td>Quantite : ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigneFicheFrais"], "quantite", [], "array", false, false, false, 9), "html", null, true);
            echo "</td>
                </br>

                </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneLigneFicheFrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
</fieldset>


<fieldset>
\t<legend>Fiche Frais Hors Forfait</legend>

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ligneFicheFraisHF"]) || array_key_exists("ligneFicheFraisHF", $context) ? $context["ligneFicheFraisHF"] : (function () { throw new RuntimeError('Variable "ligneFicheFraisHF" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneLigneFicheFraisHF"]) {
            // line 23
            echo "
            <tr>
                <td>Libelle : ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigneFicheFraisHF"], "libelle", [], "array", false, false, false, 25), "html", null, true);
            echo "</td>
                </br>
                <td>Montant : ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigneFicheFraisHF"], "montant", [], "array", false, false, false, 27), "html", null, true);
            echo "</td>
                </br>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneLigneFicheFraisHF'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
</fieldset>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/resultConsulterVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  95 => 27,  90 => 25,  86 => 23,  82 => 22,  73 => 15,  61 => 9,  56 => 7,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset>
\t<legend>Fiche Frais Forfait</legend>

        {% for uneLigneFicheFrais in ligneFicheFrais %}

                <tr>
                <td>Libelle : {{uneLigneFicheFrais['libelle']}}</td>
                </br>
                <td>Quantite : {{uneLigneFicheFrais['quantite']}}</td>
                </br>

                </tr>

        {% endfor %}

</fieldset>


<fieldset>
\t<legend>Fiche Frais Hors Forfait</legend>

        {% for uneLigneFicheFraisHF in ligneFicheFraisHF %}

            <tr>
                <td>Libelle : {{uneLigneFicheFraisHF['libelle']}}</td>
                </br>
                <td>Montant : {{uneLigneFicheFraisHF['montant']}}</td>
                </br>
            </tr>

        {% endfor %}

</fieldset>

", "visiteur/resultConsulterVisiteur.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/visiteur/resultConsulterVisiteur.html.twig");
    }
}
