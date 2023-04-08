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
class __TwigTemplate_08daf4e7a64db4b8c083a55b087efd75 extends Template
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
        <meta charset=\"utf-8\">
        <!-- importer le fichier de style -->
    </head>
    <body>
    <div id=\"container\">
    
            <!-- zone de connexion -->
            
            <form action=\"./ModifierFicheFrais\" method=\"GET\">
                <h1>Modifier fiche de frais</h1>
                <h2> <a href=\"./\"> Retour</a> </h2>

                </br>
                
                <label><b>1. Nombre de Justificatifs</b></label>
                <input type=\"text\" placeholder=\"Justificatifs...\" name=\"nbJustificatifs\" required=\"required\" autocomplete=\"off\">
                <label><b>2. Montant Valide</b></label>
                <input type=\"text\" placeholder=\"Montant...\" name=\"montantValide\" required=\"required\" autocomplete=\"off\">
                
                <input type=\"submit\" id='submit' value=\"Modifier\" >
                <input type=\"reset\" id='reset' value='Annuler' > 
                
                <a class=\"text-purple\" href=\".\">Retour</a>
                
            </form>
        </div>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/modifierFicheFrais.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html>
    <head lang='fr'>
        <title>Modifier fiche de frais</title>
        <meta charset=\"utf-8\">
        <!-- importer le fichier de style -->
    </head>
    <body>
    <div id=\"container\">
    
            <!-- zone de connexion -->
            
            <form action=\"./ModifierFicheFrais\" method=\"GET\">
                <h1>Modifier fiche de frais</h1>
                <h2> <a href=\"./\"> Retour</a> </h2>

                </br>
                
                <label><b>1. Nombre de Justificatifs</b></label>
                <input type=\"text\" placeholder=\"Justificatifs...\" name=\"nbJustificatifs\" required=\"required\" autocomplete=\"off\">
                <label><b>2. Montant Valide</b></label>
                <input type=\"text\" placeholder=\"Montant...\" name=\"montantValide\" required=\"required\" autocomplete=\"off\">
                
                <input type=\"submit\" id='submit' value=\"Modifier\" >
                <input type=\"reset\" id='reset' value='Annuler' > 
                
                <a class=\"text-purple\" href=\".\">Retour</a>
                
            </form>
        </div>
    </body>
</html>", "comptable/modifierFicheFrais.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/comptable/modifierFicheFrais.html.twig");
    }
}
