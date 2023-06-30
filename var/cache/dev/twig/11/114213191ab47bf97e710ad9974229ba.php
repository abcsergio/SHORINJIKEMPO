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

/* mentions/index.html.twig */
class __TwigTemplate_203fc8e66e2ad001eafd945414ee6ac3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mentions/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "mentions/index.html.twig", 1);
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

        echo "Mentions légales";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"mentions\">
            <h1>MENTIONS LEGALES</h1>
             <br>
            <p>Conformément aux dispositions des articles 6-III et 19 de la loi n° 2004-575 du 21 Juin 2004 pour la confiance dans l'économie numérique, dite L.C.E.N, nous portons à la connaissance des utilisateurs et visiteurs du site : www.shorinjikempogennevilliers.fr les informations suivantes :</p>
            <p>EDITEUR
             <br>
                Le site www.shorinjikempo-gennevilliers.fr est la propriété exclusive de Shorinji Kempo Club de Gennevilliers, qui l'édite.
            </p>

            <p>
            <strong>SHORINJI KEMPO CLUB DE GENNEVILLIERS</strong>
             <br>
                ASSOCIATION immatriculée à la préfecture des Hauts-de-Seine sous le numéro 17026249
            </p>

            <p>
            Hameau de Flegny
             <br>
                77320 Saint-Martin-des-Champs
            </p>        
               
            

            <p>Adresse de courier électronique : shorinjikempogennevilliers@gmail.com</p>
            <p>Directeur de la publication : <strong>Serge Cristina</strong>
             <br>
            Email : serge.cristina26@gmail.com
            </p> 
                    
            <strong>HEBERGEMENT</strong>
             <br>
            <p>Le site est hébergé par :
             <br>
            <strong>O2Switch</strong>
             <br>
                         
            222 bld Gustave Flaubert, 63000 Clermont-Ferrand
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "mentions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Mentions légales{% endblock %}

{% block content %}
<div class=\"mentions\">
            <h1>MENTIONS LEGALES</h1>
             <br>
            <p>Conformément aux dispositions des articles 6-III et 19 de la loi n° 2004-575 du 21 Juin 2004 pour la confiance dans l'économie numérique, dite L.C.E.N, nous portons à la connaissance des utilisateurs et visiteurs du site : www.shorinjikempogennevilliers.fr les informations suivantes :</p>
            <p>EDITEUR
             <br>
                Le site www.shorinjikempo-gennevilliers.fr est la propriété exclusive de Shorinji Kempo Club de Gennevilliers, qui l'édite.
            </p>

            <p>
            <strong>SHORINJI KEMPO CLUB DE GENNEVILLIERS</strong>
             <br>
                ASSOCIATION immatriculée à la préfecture des Hauts-de-Seine sous le numéro 17026249
            </p>

            <p>
            Hameau de Flegny
             <br>
                77320 Saint-Martin-des-Champs
            </p>        
               
            

            <p>Adresse de courier électronique : shorinjikempogennevilliers@gmail.com</p>
            <p>Directeur de la publication : <strong>Serge Cristina</strong>
             <br>
            Email : serge.cristina26@gmail.com
            </p> 
                    
            <strong>HEBERGEMENT</strong>
             <br>
            <p>Le site est hébergé par :
             <br>
            <strong>O2Switch</strong>
             <br>
                         
            222 bld Gustave Flaubert, 63000 Clermont-Ferrand
{% endblock %}
", "mentions/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\mentions\\index.html.twig");
    }
}
