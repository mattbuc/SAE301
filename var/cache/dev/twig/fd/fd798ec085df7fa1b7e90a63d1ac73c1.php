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

/* manifestation_detail/index.html.twig */
class __TwigTemplate_f46ef32fbd24cdd38030699bc40282da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manifestation_detail/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manifestation_detail/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "manifestation_detail/index.html.twig", 1);
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

        echo "Hello ManifestationDetailController!";
        
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
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "        <section class=\"reservation\">
            <article class=\"info_manif\">
                <img src=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/"), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Id"]) || array_key_exists("Id", $context) ? $context["Id"] : (function () { throw new RuntimeError('Variable "Id" does not exist.', 9, $this->source); })()), "getAffiche", [], "any", false, false, false, 9), "html", null, true);
        echo " class=\"affiche_reservation\">
                <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Id"]) || array_key_exists("Id", $context) ? $context["Id"] : (function () { throw new RuntimeError('Variable "Id" does not exist.', 10, $this->source); })()), "GetGenre", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
                <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Id"]) || array_key_exists("Id", $context) ? $context["Id"] : (function () { throw new RuntimeError('Variable "Id" does not exist.', 11, $this->source); })()), "GetTitre", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
                <p>Id.getDescription</p>
            </article>
            <article class=\"info_reservation\">
                <div class=\"sous_info_reservation\">
                    <img src=\"./image/notice.png\" alt=\"\" class=\"notice_info\">
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
                <p>tarif : </p>
                <br>
                <p>Date : </p>
                <br>
                <p>Lieu : </p>
                <br>
                <div  class=\"info_reservation_bouton\">
                    <button>Reserver</button>
                </div>
            </article>
        </section>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "manifestation_detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 11,  118 => 10,  113 => 9,  109 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ManifestationDetailController!{% endblock %}

{% block body %}
    {% block content %}
        <section class=\"reservation\">
            <article class=\"info_manif\">
                <img src={{ asset('media/') }}{{ Id.getAffiche }} class=\"affiche_reservation\">
                <p>{{ Id.GetGenre }}</p>
                <p>{{ Id.GetTitre }}</p>
                <p>Id.getDescription</p>
            </article>
            <article class=\"info_reservation\">
                <div class=\"sous_info_reservation\">
                    <img src=\"./image/notice.png\" alt=\"\" class=\"notice_info\">
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
                <p>tarif : </p>
                <br>
                <p>Date : </p>
                <br>
                <p>Lieu : </p>
                <br>
                <div  class=\"info_reservation_bouton\">
                    <button>Reserver</button>
                </div>
            </article>
        </section>
        {% endblock %}
{% endblock %}
", "manifestation_detail/index.html.twig", "/var/www/SAE301/templates/manifestation_detail/index.html.twig");
    }
}
