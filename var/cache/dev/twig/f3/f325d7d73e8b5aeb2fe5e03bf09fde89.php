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

/* manifestation/manifestation_detail.html.twig */
class __TwigTemplate_0fe699bfa89d4dd2db09d4a2e5bfc6b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manifestation/manifestation_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manifestation/manifestation_detail.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Feuille de style -->
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <!-- Fichiers js -->
    ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "</head>
<body>
<header>
    <nav class=\"desktop_nav\">
        <a href=\"../accueil\" class=\"logo_lien\"><img src=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/Logo_ville2.png"), "html", null, true);
        echo " alt=\"Logo_de_la_ville\" class=\"fluid_logo_nav\"></a>
        <ul class=\"navbar\">
            <a href=\"../accueil\" style=\"margin-right: 50px;\">Accueil</a>
            <div style=\"margin-right: 50px;\">
                <li id=\"lien1\">Événement</li>
                <ul class=\"boite invisible\" id=\"liens1\">
                    <li class=\"sous-boite\"><a href=\"../manifestation\">Spectacle</a></li>
                    <li class=\"sous-boite\"><a href=\"../lieu\">Lieu</a></li>
                    <li class=\"sous-boite\"><a href=\"../infoPratique\">Info Pratique</a></li>
                </ul>
            </div>
            <div>
                <li id=\"lien2\">Compte</li>
                <ul class=\"boite invisible\" id=\"liens2\">
                    <li class=\"sous-boite\"><a href=\"../profil/\">Profil</a></li>
                    <li class=\"sous-boite\"><a href=\"../panier/\">Panier</a></li>
                    <li class=\"sous-boite\"><a href=\"\">Déconnexion</a></li>
                </ul>
            </div>
            </div>
    </nav>
    <div class=\"nav_responsive\">
        <nav id=\"mySidenav\" class=\"sidenav\">
            <a id=\"closeBtn\" href=\"#\" class=\"close\">×</a>
            <ul>
                <li class=\"li_nav\">
                    <a href=\"../accueil\">Accueil</a>
                    <a href=\"../profil\">Profil</a>
                    <a href=\"../manifestation\">Événement</a>
                    <a href=\"../panier\">Panier</a>
                    <a href=\"../\">Déconnexion</a>
                    <a href=\"../infoPratique\">Info pratique</a>
                </li>
            </ul>
        </nav>
        <img src=";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/Logo_ville2.png"), "html", null, true);
        echo " alt=\"Logo de la ville\" class=\"fluid_logo_nav\">
        <a href=\"#\" id=\"openBtn\">
            <span class=\"burger-icon\">
              <span></span>
              <span></span>
              <span></span>
            </span>
        </a>
    </div>
</header>
        <section class=\"reservation\">
            <article class=\"info_manif\">
                <img src=";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Manifestation"]) || array_key_exists("Manifestation", $context) ? $context["Manifestation"] : (function () { throw new RuntimeError('Variable "Manifestation" does not exist.', 67, $this->source); })()), "getAffiche", [], "any", false, false, false, 67), "html", null, true);
        echo " class=\"affiche_reservation\">
                <p>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Manifestation"]) || array_key_exists("Manifestation", $context) ? $context["Manifestation"] : (function () { throw new RuntimeError('Variable "Manifestation" does not exist.', 68, $this->source); })()), "GetGenre", [], "any", false, false, false, 68), "html", null, true);
        echo "</p>
                <p>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Manifestation"]) || array_key_exists("Manifestation", $context) ? $context["Manifestation"] : (function () { throw new RuntimeError('Variable "Manifestation" does not exist.', 69, $this->source); })()), "GetTitre", [], "any", false, false, false, 69), "html", null, true);
        echo "</p>
                <p>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Manifestation"]) || array_key_exists("Manifestation", $context) ? $context["Manifestation"] : (function () { throw new RuntimeError('Variable "Manifestation" does not exist.', 70, $this->source); })()), "getDescription", [], "any", false, false, false, 70), "html", null, true);
        echo "</p>
            </article>
            <article class=\"info_reservation\">
                <div class=\"sous_info_reservation\">
                    <img src=";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/notice.png"), "html", null, true);
        echo " alt=\"\" class=\"notice_info\">
                    <h3>Info pratique</h3>
                </div>
                <p>Accés libre : </p>
                <p>Accés handicapé : </p>
                <p>Sur réservation : </p>
                <p>Familial : </p>
                <p>Jeune public : </p>
                <br>
                <p>Organisateur : </p>
                <p>site web : </p>
                <br>
                <p>tarif : ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Manifestation"]) || array_key_exists("Manifestation", $context) ? $context["Manifestation"] : (function () { throw new RuntimeError('Variable "Manifestation" does not exist.', 86, $this->source); })()), "getPrix", [], "any", false, false, false, 86), "html", null, true);
        echo "€</p>
                <br>
                <p>Date : ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Manifestation"]) || array_key_exists("Manifestation", $context) ? $context["Manifestation"] : (function () { throw new RuntimeError('Variable "Manifestation" does not exist.', 88, $this->source); })()), "getDate", [], "any", false, false, false, 88), "html", null, true);
        echo "</p>
                <br>
                <p>Lieu : ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Manifestation"]) || array_key_exists("Manifestation", $context) ? $context["Manifestation"] : (function () { throw new RuntimeError('Variable "Manifestation" does not exist.', 90, $this->source); })()), "getLieu", [], "any", false, false, false, 90), "getLieu", [], "any", false, false, false, 90), "html", null, true);
        echo "</p>
                <br>
                <div  class=\"info_reservation_bouton\">
                    <button>Reserver</button>
                </div>
            </article>
        </section>
<footer>
    <img src=";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/Logo_ville2.png"), "html", null, true);
        echo " alt=\"Logo_de_la_ville\" class=\"fluid_logo_footer\">
    <h5>2 rue Guillaume de Machault</h5>
    <br>
    <h5>51110 Reims</h5>
    <br>
    <h5>03 26 97 07 25</h5>
    <br>
    <h5>contact.culture@reims.com</h5>
    <br>
</footer>
</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "SAE301";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\" defer></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "manifestation/manifestation_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 14,  247 => 13,  234 => 10,  224 => 9,  205 => 5,  181 => 98,  170 => 90,  165 => 88,  160 => 86,  145 => 74,  138 => 70,  134 => 69,  130 => 68,  125 => 67,  110 => 55,  72 => 20,  66 => 16,  64 => 13,  61 => 12,  59 => 9,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}SAE301{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Feuille de style -->
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    {% endblock %}
    <!-- Fichiers js -->
    {% block javascripts %}
        <script src=\"{{ asset('assets/js/main.js') }}\" defer></script>
    {% endblock %}
</head>
<body>
<header>
    <nav class=\"desktop_nav\">
        <a href=\"../accueil\" class=\"logo_lien\"><img src={{asset('media/Logo_ville2.png')}} alt=\"Logo_de_la_ville\" class=\"fluid_logo_nav\"></a>
        <ul class=\"navbar\">
            <a href=\"../accueil\" style=\"margin-right: 50px;\">Accueil</a>
            <div style=\"margin-right: 50px;\">
                <li id=\"lien1\">Événement</li>
                <ul class=\"boite invisible\" id=\"liens1\">
                    <li class=\"sous-boite\"><a href=\"../manifestation\">Spectacle</a></li>
                    <li class=\"sous-boite\"><a href=\"../lieu\">Lieu</a></li>
                    <li class=\"sous-boite\"><a href=\"../infoPratique\">Info Pratique</a></li>
                </ul>
            </div>
            <div>
                <li id=\"lien2\">Compte</li>
                <ul class=\"boite invisible\" id=\"liens2\">
                    <li class=\"sous-boite\"><a href=\"../profil/\">Profil</a></li>
                    <li class=\"sous-boite\"><a href=\"../panier/\">Panier</a></li>
                    <li class=\"sous-boite\"><a href=\"\">Déconnexion</a></li>
                </ul>
            </div>
            </div>
    </nav>
    <div class=\"nav_responsive\">
        <nav id=\"mySidenav\" class=\"sidenav\">
            <a id=\"closeBtn\" href=\"#\" class=\"close\">×</a>
            <ul>
                <li class=\"li_nav\">
                    <a href=\"../accueil\">Accueil</a>
                    <a href=\"../profil\">Profil</a>
                    <a href=\"../manifestation\">Événement</a>
                    <a href=\"../panier\">Panier</a>
                    <a href=\"../\">Déconnexion</a>
                    <a href=\"../infoPratique\">Info pratique</a>
                </li>
            </ul>
        </nav>
        <img src={{asset('media/Logo_ville2.png')}} alt=\"Logo de la ville\" class=\"fluid_logo_nav\">
        <a href=\"#\" id=\"openBtn\">
            <span class=\"burger-icon\">
              <span></span>
              <span></span>
              <span></span>
            </span>
        </a>
    </div>
</header>
        <section class=\"reservation\">
            <article class=\"info_manif\">
                <img src={{ asset('media/') }}{{ Manifestation.getAffiche }} class=\"affiche_reservation\">
                <p>{{ Manifestation.GetGenre }}</p>
                <p>{{ Manifestation.GetTitre }}</p>
                <p>{{ Manifestation.getDescription }}</p>
            </article>
            <article class=\"info_reservation\">
                <div class=\"sous_info_reservation\">
                    <img src={{ asset('media/notice.png')}} alt=\"\" class=\"notice_info\">
                    <h3>Info pratique</h3>
                </div>
                <p>Accés libre : </p>
                <p>Accés handicapé : </p>
                <p>Sur réservation : </p>
                <p>Familial : </p>
                <p>Jeune public : </p>
                <br>
                <p>Organisateur : </p>
                <p>site web : </p>
                <br>
                <p>tarif : {{ Manifestation.getPrix }}€</p>
                <br>
                <p>Date : {{ Manifestation.getDate }}</p>
                <br>
                <p>Lieu : {{ Manifestation.getLieu.getLieu }}</p>
                <br>
                <div  class=\"info_reservation_bouton\">
                    <button>Reserver</button>
                </div>
            </article>
        </section>
<footer>
    <img src={{asset('media/Logo_ville2.png')}} alt=\"Logo_de_la_ville\" class=\"fluid_logo_footer\">
    <h5>2 rue Guillaume de Machault</h5>
    <br>
    <h5>51110 Reims</h5>
    <br>
    <h5>03 26 97 07 25</h5>
    <br>
    <h5>contact.culture@reims.com</h5>
    <br>
</footer>
</body>
</html>

", "manifestation/manifestation_detail.html.twig", "/var/www/SAE301/templates/manifestation/manifestation_detail.html.twig");
    }
}
