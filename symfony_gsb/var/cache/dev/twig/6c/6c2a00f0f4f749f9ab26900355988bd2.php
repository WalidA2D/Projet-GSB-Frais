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

/* visiteur/connexionVisiteur.html.twig */
class __TwigTemplate_73f0fea0f1180bdf2ccc74adaf467098 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/connexionVisiteur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/connexionVisiteur.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>GSB Frais - Connexion</title>
    </head>
    <body>

        <form action=\"./Connecter\" method=\"POST\">
                        
        <div class=\"mb-3 form-group\">
            <label class=\"col-form-label\">Nom de connexion</label>
            <input type=\"text\" class=\"form-control\" name=\"login\" />
            
        </div>
        
        <div class=\"mb-3 form-group\">
            <label class=\"col-form-label\">Mot de passe</label>
            <input type=\"password\"  class=\"form-control\" name=\"mdp\" />
        </div>
        
        <div class=\"mb-3\">
            <button class=\"btn btn-primary\" type=\"submit\">Valider</button>
            <button class=\"btn btn-primary\" type=\"reset\">Annuler</button>
        </div>

        </form>

    </body>
</html>



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/connexionVisiteur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>GSB Frais - Connexion</title>
    </head>
    <body>

        <form action=\"./Connecter\" method=\"POST\">
                        
        <div class=\"mb-3 form-group\">
            <label class=\"col-form-label\">Nom de connexion</label>
            <input type=\"text\" class=\"form-control\" name=\"login\" />
            
        </div>
        
        <div class=\"mb-3 form-group\">
            <label class=\"col-form-label\">Mot de passe</label>
            <input type=\"password\"  class=\"form-control\" name=\"mdp\" />
        </div>
        
        <div class=\"mb-3\">
            <button class=\"btn btn-primary\" type=\"submit\">Valider</button>
            <button class=\"btn btn-primary\" type=\"reset\">Annuler</button>
        </div>

        </form>

    </body>
</html>



", "visiteur/connexionVisiteur.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/visiteur/connexionVisiteur.html.twig");
    }
}
