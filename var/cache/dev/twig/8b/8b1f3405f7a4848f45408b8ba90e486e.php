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

/* base.html.twig */
class __TwigTemplate_6bc9a9867b96688b2dc37173756fa065 extends Template
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
            'h2' => [$this, 'block_h2'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        <!-- Fichiers js -->
        ";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
    <header>
        <nav class=\"desktop_nav\">
            <a href=\"./accueil\" class=\"logo_lien\"><img src=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/Logo_ville2.png"), "html", null, true);
        echo " alt=\"Logo_de_la_ville\" class=\"fluid_logo_nav\"></a>
            <ul class=\"navbar\">
                <a href=\"./accueil\" style=\"margin-right: 50px;\">Accueil</a>
                <div style=\"margin-right: 50px;\">
                    <li id=\"lien1\">Événement</li>
                    <ul class=\"boite invisible\" id=\"liens1\">
                        <li class=\"sous-boite\"><a href=\"./manifestation\">Spectacle</a></li>
                        <li class=\"sous-boite\"><a href=\"./lieu\">Lieu</a></li>
                        <li class=\"sous-boite\"><a href=\"./infoPratique\">Info Pratique</a></li>
                    </ul>
                </div>
                <div>
                    <li id=\"lien2\">Compte</li>
                    <ul class=\"boite invisible\" id=\"liens2\">
                        <li class=\"sous-boite\"><a href=\"./profil/\">Profil</a></li>
                        <li class=\"sous-boite\"><a href=\"./panier/\">Panier</a></li>
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
                        <a href=\"./accueil\">Accueil</a>
                        <a href=\"./profil\">Profil</a>
                        <a href=\"./manifestation\">Événement</a>
                        <a href=\"./panier\">Panier</a>
                        <a href=\"./\">Déconnexion</a>
                        <a href=\"./infoPratique\">Info pratique</a>
                    </li>
                </ul>
            </nav>
            <img src=";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/Logo_ville2.png"), "html", null, true);
        echo " alt=\"Logo_de_la_ville\" class=\"fluid_logo_nav\">
            <a href=\"#\" id=\"openBtn\">
            <span class=\"burger-icon\">
              <span></span>
              <span></span>
              <span></span>
            </span>
            </a>
        </div>
    </header>
    <main>
    <h2>";
        // line 67
        $this->displayBlock('h2', $context, $blocks);
        echo "</h2>
        ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "    </main>
    <footer>
        <img src=";
        // line 73
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
        echo "            <link rel=\"stylesheet\" href=\"";
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
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\" defer></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scriptgeneral.js"), "html", null, true);
        echo "\" defer></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_h2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        echo "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 69
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 69,  247 => 68,  228 => 67,  216 => 15,  211 => 14,  201 => 13,  188 => 10,  178 => 9,  159 => 5,  136 => 73,  132 => 71,  130 => 68,  126 => 67,  112 => 56,  74 => 21,  68 => 17,  66 => 13,  63 => 12,  61 => 9,  54 => 5,  48 => 1,);
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
            <script src=\"{{ asset('assets/js/scriptgeneral.js') }}\" defer></script>
        {% endblock %}
    </head>
    <body>
    <header>
        <nav class=\"desktop_nav\">
            <a href=\"./accueil\" class=\"logo_lien\"><img src={{asset('media/Logo_ville2.png')}} alt=\"Logo_de_la_ville\" class=\"fluid_logo_nav\"></a>
            <ul class=\"navbar\">
                <a href=\"./accueil\" style=\"margin-right: 50px;\">Accueil</a>
                <div style=\"margin-right: 50px;\">
                    <li id=\"lien1\">Événement</li>
                    <ul class=\"boite invisible\" id=\"liens1\">
                        <li class=\"sous-boite\"><a href=\"./manifestation\">Spectacle</a></li>
                        <li class=\"sous-boite\"><a href=\"./lieu\">Lieu</a></li>
                        <li class=\"sous-boite\"><a href=\"./infoPratique\">Info Pratique</a></li>
                    </ul>
                </div>
                <div>
                    <li id=\"lien2\">Compte</li>
                    <ul class=\"boite invisible\" id=\"liens2\">
                        <li class=\"sous-boite\"><a href=\"./profil/\">Profil</a></li>
                        <li class=\"sous-boite\"><a href=\"./panier/\">Panier</a></li>
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
                        <a href=\"./accueil\">Accueil</a>
                        <a href=\"./profil\">Profil</a>
                        <a href=\"./manifestation\">Événement</a>
                        <a href=\"./panier\">Panier</a>
                        <a href=\"./\">Déconnexion</a>
                        <a href=\"./infoPratique\">Info pratique</a>
                    </li>
                </ul>
            </nav>
            <img src={{asset('media/Logo_ville2.png')}} alt=\"Logo_de_la_ville\" class=\"fluid_logo_nav\">
            <a href=\"#\" id=\"openBtn\">
            <span class=\"burger-icon\">
              <span></span>
              <span></span>
              <span></span>
            </span>
            </a>
        </div>
    </header>
    <main>
    <h2>{% block h2 %}Accueil{% endblock %}</h2>
        {% block content %}

        {% endblock %}
    </main>
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
", "base.html.twig", "/var/www/SAE301/templates/base.html.twig");
    }
}
