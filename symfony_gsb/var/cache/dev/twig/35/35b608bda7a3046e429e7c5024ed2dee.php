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

/* comptable/connexionComptable.html.twig */
class __TwigTemplate_40ace5201a8ca65671cfeea98d99c554 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/connexionComptable.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "comptable/connexionComptable.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
    
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">
        <title>GSB Frais - Comptable connexion</title>
    </head>
  <body>
    <section class=\"section\">
      <div class=\"container\">
        <h1 class=\"title has-text-centered\">GSB Frais - Comptable connexion</h1>
        <div class=\"columns is-centered\">
          <div class=\"column is-half\">
            <form action=\"./Connecter\" method=\"POST\">
              <div class=\"field\">
                <label class=\"label\">Nom de connexion</label>
                <div class=\"control has-icons-left\">
                  <input class=\"input\" type=\"text\" placeholder=\"Nom de connexion\" name=\"login\" />
                  <span class=\"icon is-small is-left\">
                    <i class=\"fas fa-user\"></i>
                  </span>
                </div>
              </div>

              <div class=\"field\">
                <label class=\"label\">Mot de passe</label>
                <div class=\"control has-icons-left\">
                  <input class=\"input\" type=\"password\" placeholder=\"Mot de passe\" name=\"mdp\" />
                  <span class=\"icon is-small is-left\">
                    <i class=\"fas fa-lock\"></i>
                  </span>
                </div>
              </div>

              <div class=\"field is-grouped\">
                <div class=\"control\">
                  <button class=\"button is-primary\" type=\"submit\">Valider</button>
                </div>
                <div class=\"control\">
                  <button class=\"button is-link\" type=\"reset\">Annuler</button>
                </div>
              </div>
            </form>
            <h2 class=\"subtitle has-text-centered\"><i class=\"fas fa-arrow-left\"></i> 
              <a href=\"../\">Retour</a>
            </h2>
          </div>
        </div>
      </div>
    </section>

    <script defer src=\"https://use.fontawesome.com/releases/v5.14.0/js/all.js\"></script>
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "comptable/connexionComptable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"fr\">
    
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">
        <title>GSB Frais - Comptable connexion</title>
    </head>
  <body>
    <section class=\"section\">
      <div class=\"container\">
        <h1 class=\"title has-text-centered\">GSB Frais - Comptable connexion</h1>
        <div class=\"columns is-centered\">
          <div class=\"column is-half\">
            <form action=\"./Connecter\" method=\"POST\">
              <div class=\"field\">
                <label class=\"label\">Nom de connexion</label>
                <div class=\"control has-icons-left\">
                  <input class=\"input\" type=\"text\" placeholder=\"Nom de connexion\" name=\"login\" />
                  <span class=\"icon is-small is-left\">
                    <i class=\"fas fa-user\"></i>
                  </span>
                </div>
              </div>

              <div class=\"field\">
                <label class=\"label\">Mot de passe</label>
                <div class=\"control has-icons-left\">
                  <input class=\"input\" type=\"password\" placeholder=\"Mot de passe\" name=\"mdp\" />
                  <span class=\"icon is-small is-left\">
                    <i class=\"fas fa-lock\"></i>
                  </span>
                </div>
              </div>

              <div class=\"field is-grouped\">
                <div class=\"control\">
                  <button class=\"button is-primary\" type=\"submit\">Valider</button>
                </div>
                <div class=\"control\">
                  <button class=\"button is-link\" type=\"reset\">Annuler</button>
                </div>
              </div>
            </form>
            <h2 class=\"subtitle has-text-centered\"><i class=\"fas fa-arrow-left\"></i> 
              <a href=\"../\">Retour</a>
            </h2>
          </div>
        </div>
      </div>
    </section>

    <script defer src=\"https://use.fontawesome.com/releases/v5.14.0/js/all.js\"></script>
  </body>
</html>", "comptable/connexionComptable.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/comptable/connexionComptable.html.twig");
    }
}
