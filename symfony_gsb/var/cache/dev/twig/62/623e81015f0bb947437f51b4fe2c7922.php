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

/* visiteur/ficheFraisVisiteur.html.twig */
class __TwigTemplate_402641b97f8bf9da7581d4129a915457 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/ficheFraisVisiteur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/ficheFraisVisiteur.html.twig"));

        // line 1
        echo "<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>GSB Frais - Connexion</title>
    </head>
    <body>

            
        
        
        <form action=\"./FicheDeFraisController\" method=\"GET\">
            <h1>Frais forfait</h1>
            <table>
                <tbody>

                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quantitesLibelles"]) || array_key_exists("quantitesLibelles", $context) ? $context["quantitesLibelles"] : (function () { throw new RuntimeError('Variable "quantitesLibelles" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneQuantiteLibelle"]) {
            // line 19
            echo "
                        <tr>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneQuantiteLibelle"], "libelle", [], "array", false, false, false, 21), "html", null, true);
            echo "</td>
                            <td> <input type=\"number\" min=\"0\" value=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneQuantiteLibelle"], "quantite", [], "array", false, false, false, 22), "html", null, true);
            echo " name=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneQuantiteLibelle"], "idFraisForfait", [], "array", false, false, false, 22), "html", null, true);
            echo " required> </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneQuantiteLibelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
 
                </tbody>
            </table>

            <br/>




            <table>
                <tbody>
                    <tr>
                        <td>Frais hors forfait</td>
                        <td> <input type=\"text\" name=\"libelle\"> </td>
                    </tr>


                    <tr>
                        <td>Date</td>
                        <td> <input type=\"date\" name=\"date\"> </td>
                    </tr>


                    <tr>
                        <td>Montant</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"montant\"> </td>
                    </tr>
                </tbody>
            </table>
            <br/>
            
            <input type=\"submit\" id='submit'  value=\"Soumettre\" >
            <br/>

            <br/>

            <h2> Fiche frais hors forfait </h2>

        </form>
        


                <thead>
                        <tr>
                            <td>id</td>
                            <td>Libellé</td>
                            <td>date</td>
                            <td>montant</td>
                        </tr>
                </thead>


    

                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ligneFraisHorsForfait"]) || array_key_exists("ligneFraisHorsForfait", $context) ? $context["ligneFraisHorsForfait"] : (function () { throw new RuntimeError('Variable "ligneFraisHorsForfait" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["uneLigneFraisHorsForfait"]) {
            // line 82
            echo "
                    <br/>
                    <br/>

                    <tbody>

                        <tr>
                            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigneFraisHorsForfait"], "id", [], "array", false, false, false, 89), "html", null, true);
            echo "</td> 
                            <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigneFraisHorsForfait"], "libelle", [], "array", false, false, false, 90), "html", null, true);
            echo "</td>
                            <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigneFraisHorsForfait"], "date", [], "array", false, false, false, 91), "html", null, true);
            echo "</td>
                            <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigneFraisHorsForfait"], "montant", [], "array", false, false, false, 92), "html", null, true);
            echo "</td>
                            <br/>
                            <form action=\"/Visiteur/SupprimerFicheHorsForfait\" method=\"POST\">
                                <br/>
                                <input type=\"hidden\" value=";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneLigneFraisHorsForfait"], "id", [], "array", false, false, false, 96), "html", null, true);
            echo " name=\"fraisHorsForfait\" />
                                <button  onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')\" type=\"submit\">Supprimer</button>
                            </form>
                        </tr>

                    </tbody>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneLigneFraisHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
            


\t\t\t\t

        


    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/ficheFraisVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 104,  175 => 96,  168 => 92,  164 => 91,  160 => 90,  156 => 89,  147 => 82,  143 => 81,  86 => 26,  74 => 22,  70 => 21,  66 => 19,  62 => 18,  43 => 1,);
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

            
        
        
        <form action=\"./FicheDeFraisController\" method=\"GET\">
            <h1>Frais forfait</h1>
            <table>
                <tbody>

                        {% for uneQuantiteLibelle in quantitesLibelles %}

                        <tr>
                            <td>{{uneQuantiteLibelle['libelle']}}</td>
                            <td> <input type=\"number\" min=\"0\" value={{uneQuantiteLibelle['quantite']}} name={{uneQuantiteLibelle['idFraisForfait']}} required> </td>
                        </tr>

                    {% endfor %}

 
                </tbody>
            </table>

            <br/>




            <table>
                <tbody>
                    <tr>
                        <td>Frais hors forfait</td>
                        <td> <input type=\"text\" name=\"libelle\"> </td>
                    </tr>


                    <tr>
                        <td>Date</td>
                        <td> <input type=\"date\" name=\"date\"> </td>
                    </tr>


                    <tr>
                        <td>Montant</td>
                        <td> <input type=\"number\" min=\"0\" value=\"0\" name=\"montant\"> </td>
                    </tr>
                </tbody>
            </table>
            <br/>
            
            <input type=\"submit\" id='submit'  value=\"Soumettre\" >
            <br/>

            <br/>

            <h2> Fiche frais hors forfait </h2>

        </form>
        


                <thead>
                        <tr>
                            <td>id</td>
                            <td>Libellé</td>
                            <td>date</td>
                            <td>montant</td>
                        </tr>
                </thead>


    

                {% for uneLigneFraisHorsForfait in ligneFraisHorsForfait %}

                    <br/>
                    <br/>

                    <tbody>

                        <tr>
                            <td>{{uneLigneFraisHorsForfait['id']}}</td> 
                            <td>{{uneLigneFraisHorsForfait['libelle']}}</td>
                            <td>{{uneLigneFraisHorsForfait['date']}}</td>
                            <td>{{uneLigneFraisHorsForfait['montant']}}</td>
                            <br/>
                            <form action=\"/Visiteur/SupprimerFicheHorsForfait\" method=\"POST\">
                                <br/>
                                <input type=\"hidden\" value={{uneLigneFraisHorsForfait['id']}} name=\"fraisHorsForfait\" />
                                <button  onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')\" type=\"submit\">Supprimer</button>
                            </form>
                        </tr>

                    </tbody>

                {% endfor %}

            


\t\t\t\t

        


    </body>
</html>", "visiteur/ficheFraisVisiteur.html.twig", "/home/r-mehdi/SIO/Projet-GSB-Frais/symfony_gsb/templates/visiteur/ficheFraisVisiteur.html.twig");
    }
}
