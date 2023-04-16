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

/* visiteur/consulterVisiteur.html.twig */
class __TwigTemplate_4b54d0cbcfc6a5945118dd02cc28e37e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/consulterVisiteur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/consulterVisiteur.html.twig"));

        // line 1
        echo "<fieldset>
\t<legend>Consulter Fiche Frais</legend>
\t
\t\t<form action=\"/Visiteur/ConsulterResultat\" method=\"POST\">
            Sélectionner le mois à consulter :<br/>
            <br/>

            <select name=\"mois\"> <!-- Modifier ici pour utiliser l'attribut \"name\" -->
                <option value=\"Janvier\">Janvier</option>
                <option value=\"Février\">Février</option>
                <option value=\"Mars\">Mars</option>
                <option value=\"Avril\">Avril</option>
                <option value=\"Mai\">Mai</option>
                <option value=\"Juin\">Juin</option>
                <option value=\"Juillet\">Juillet</option>
                <option value=\"Août\">Août</option>
                <option value=\"Septembre\">Septembre</option>
                <option value=\"Octobre\">Octobre</option>
                <option value=\"Novembre\">Novembre</option>
                <option value=\"Décembre\">Décembre</option>
            </select>

            <br/>

            <input type=\"submit\" value=\"Valider\"/>
        </form>
        <br/>
    <button> <a href=\"./retourConsulter\"</a> Retour </button>
</fieldset>\t";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/consulterVisiteur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset>
\t<legend>Consulter Fiche Frais</legend>
\t
\t\t<form action=\"/Visiteur/ConsulterResultat\" method=\"POST\">
            Sélectionner le mois à consulter :<br/>
            <br/>

            <select name=\"mois\"> <!-- Modifier ici pour utiliser l'attribut \"name\" -->
                <option value=\"Janvier\">Janvier</option>
                <option value=\"Février\">Février</option>
                <option value=\"Mars\">Mars</option>
                <option value=\"Avril\">Avril</option>
                <option value=\"Mai\">Mai</option>
                <option value=\"Juin\">Juin</option>
                <option value=\"Juillet\">Juillet</option>
                <option value=\"Août\">Août</option>
                <option value=\"Septembre\">Septembre</option>
                <option value=\"Octobre\">Octobre</option>
                <option value=\"Novembre\">Novembre</option>
                <option value=\"Décembre\">Décembre</option>
            </select>

            <br/>

            <input type=\"submit\" value=\"Valider\"/>
        </form>
        <br/>
    <button> <a href=\"./retourConsulter\"</a> Retour </button>
</fieldset>\t", "visiteur/consulterVisiteur.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/visiteur/consulterVisiteur.html.twig");
    }
}
