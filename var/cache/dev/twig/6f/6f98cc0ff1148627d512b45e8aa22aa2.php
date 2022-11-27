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

/* infoPratique/index.html.twig */
class __TwigTemplate_9086136e9f652d951fc5718385b7b836 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'h2' => [$this, 'block_h2'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "infoPratique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "infoPratique/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "infoPratique/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Info Pratique";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('h2', $context, $blocks);
        // line 7
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_h2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        echo "Info Pratique";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "        <div class=\"info_pratique\">
            <h1>Billeterie</h1>
            <p>Avant toute chose nous souhaitions vous mettre en garde contre les revendeurs frauduleux. Le Bataclan a rejoint l’initiative #fanpasgogo qui sensibilise le public à l’achat de billets illicites. Ces sites pratiquant le marché noir de billetterie nuisent aux spectateurs ainsi qu’à notre travail de diffuseur, et à l’image des producteurs de spectacle et des artistes. Soyez vigilants lorsque vous achetez un billet, et faites seulement confiance aux revendeurs officiels ! Nous déclinons toute responsabilité en cas d’invalidité du dit-billet.</p>
            <h5>RESERVATION</h5>
            <p>Nous ne disposons pas de billetterie physique ni téléphonique. Toute réservation se fait obligatoirement sur notre site internet. Pour les personnes en situation de handicap ; rendez-vous sur notre page spécifique !</p>
            <h5>IMPRESSION BILLET</h5>
            <p>Les codes-barres sont lisibles sur smartphone, il n’est pas obligatoire d’imprimer vos billets, à l’exception des impressions écran de billet. Toutefois assurez-vous d’avoir suffisamment de batterie.</p>
            <h5>VENTE AU GUICHET</h5>
            <p>Si le concert n’affiche pas complet, il vous sera possible d’acheter un billet pour l’événement du soir directement à l’entrée du Bataclan. Si le concert est complet, suivez nos réseaux sociaux, il arrive parfois aux producteurs de remettre en vente quelques places en vente au dernier moment. Vous serez alors avertis sur nos différents réseaux.</p>
            <h5>RETRAIT DES BILLETS </h5>
            <p>Les billets achetés dans les réseaux de billetterie Fnac, France Billet, Ticketmaster, Digitick et Ticketac ne peuvent pas être retirés au Bataclan. Les sites tels Billeréduc et Theatreonline fournissent à leurs clients des contremarques à échanger contre des billets au guichet du Bataclan une heure avant le début du spectacle. En cas de doute, le mode et lieu de retrait sont clairement précisés sur votre confirmation de commande.</p>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "infoPratique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 8,  123 => 7,  104 => 6,  93 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Info Pratique{% endblock %}

{% block body %}
    {% block h2 %}Info Pratique{% endblock %}
    {% block content %}
        <div class=\"info_pratique\">
            <h1>Billeterie</h1>
            <p>Avant toute chose nous souhaitions vous mettre en garde contre les revendeurs frauduleux. Le Bataclan a rejoint l’initiative #fanpasgogo qui sensibilise le public à l’achat de billets illicites. Ces sites pratiquant le marché noir de billetterie nuisent aux spectateurs ainsi qu’à notre travail de diffuseur, et à l’image des producteurs de spectacle et des artistes. Soyez vigilants lorsque vous achetez un billet, et faites seulement confiance aux revendeurs officiels ! Nous déclinons toute responsabilité en cas d’invalidité du dit-billet.</p>
            <h5>RESERVATION</h5>
            <p>Nous ne disposons pas de billetterie physique ni téléphonique. Toute réservation se fait obligatoirement sur notre site internet. Pour les personnes en situation de handicap ; rendez-vous sur notre page spécifique !</p>
            <h5>IMPRESSION BILLET</h5>
            <p>Les codes-barres sont lisibles sur smartphone, il n’est pas obligatoire d’imprimer vos billets, à l’exception des impressions écran de billet. Toutefois assurez-vous d’avoir suffisamment de batterie.</p>
            <h5>VENTE AU GUICHET</h5>
            <p>Si le concert n’affiche pas complet, il vous sera possible d’acheter un billet pour l’événement du soir directement à l’entrée du Bataclan. Si le concert est complet, suivez nos réseaux sociaux, il arrive parfois aux producteurs de remettre en vente quelques places en vente au dernier moment. Vous serez alors avertis sur nos différents réseaux.</p>
            <h5>RETRAIT DES BILLETS </h5>
            <p>Les billets achetés dans les réseaux de billetterie Fnac, France Billet, Ticketmaster, Digitick et Ticketac ne peuvent pas être retirés au Bataclan. Les sites tels Billeréduc et Theatreonline fournissent à leurs clients des contremarques à échanger contre des billets au guichet du Bataclan une heure avant le début du spectacle. En cas de doute, le mode et lieu de retrait sont clairement précisés sur votre confirmation de commande.</p>
        </div>
        {% endblock %}
{% endblock %}

", "infoPratique/index.html.twig", "/var/www/SAE301/templates/infoPratique/index.html.twig");
    }
}
