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

/* article/allArticles.html.twig */
class __TwigTemplate_e5e748bfa3575457257352744aaa555c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/allArticles.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "article/allArticles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tous les articles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"row mt-5\">
            
            <div class=\"col-md-2 justify-content-center pt-4\">
                <ul class=\"list-group\">
                    <a class=\"text-decoration-none\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles");
        echo "\"> <li class=\"list-group-item btn btn-primary text-center\">Tous les Articles</li> </a>  

                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 13
            echo "                    <a class=\"text-decoration-none\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"> <li class=\"list-group-item btn btn-primary text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 13), "html", null, true);
            echo "</li> </a> 
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  

                </ul>
            </div>
            
            <div class=\"col-md-10 justify-content-center text-center\">
                <h4>liste des articles </h4>
                    ";
        // line 21
        if ( !twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 24
                echo "                            <div class=\"row justify-content-center\" >
                                <div class=\"col card mb-3 \" style=\"max-width: 800px;\">
                                    <div class=\"row g-0\">
                                        <div class=\"col-md-6 text-center\">
                                            <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/article/" . twig_get_attribute($this->env, $this->source, $context["article"], "photo", [], "any", false, false, false, 28))), "html", null, true);
                echo "\" class=\"img-fluid rounded-start\"
                                                alt=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"card-body text-center\">
                                                <h4 class=\"card-title\"><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 33), "html", null, true);
                echo " </a></h4>
                                                <h6>pays : ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 34), "nom", [], "any", false, false, false, 34), "html", null, true);
                echo " </h6>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
                        ";
        } else {
            // line 45
            echo "                    <div class=\"alert alert-warning mt-5\"><p>cette catégorie est pour l'instant sans articles</p></div>
                    ";
        }
        // line 47
        echo "            </div>
        </div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/allArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 47,  159 => 45,  155 => 43,  140 => 34,  134 => 33,  127 => 29,  123 => 28,  117 => 24,  113 => 23,  110 => 22,  108 => 21,  99 => 14,  88 => 13,  84 => 12,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Tous les articles{% endblock %}

{% block content %}
<div class=\"row mt-5\">
            
            <div class=\"col-md-2 justify-content-center pt-4\">
                <ul class=\"list-group\">
                    <a class=\"text-decoration-none\" href=\"{{ path('app_articles') }}\"> <li class=\"list-group-item btn btn-primary text-center\">Tous les Articles</li> </a>  

                    {% for categorie in categories %}
                    <a class=\"text-decoration-none\" href=\"{{ path('app_articles_categorie', {slug: categorie.slug}) }}\"> <li class=\"list-group-item btn btn-primary text-center\">{{ categorie.nom }}</li> </a> 
                    {% endfor %}  

                </ul>
            </div>
            
            <div class=\"col-md-10 justify-content-center text-center\">
                <h4>liste des articles </h4>
                    {% if articles is not empty %}

                        {% for article in articles %}
                            <div class=\"row justify-content-center\" >
                                <div class=\"col card mb-3 \" style=\"max-width: 800px;\">
                                    <div class=\"row g-0\">
                                        <div class=\"col-md-6 text-center\">
                                            <img src=\"{{ asset('photos/article/' ~ article.photo) }}\" class=\"img-fluid rounded-start\"
                                                alt=\"{{ article.titre }}\">
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"card-body text-center\">
                                                <h4 class=\"card-title\"><a href=\"{{ path('app_article_show', {id: article.id}) }}\"> {{ article.titre }} </a></h4>
                                                <h6>pays : {{ article.categorie.nom }} </h6>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                
                        {% endfor %}

                        {% else %}
                    <div class=\"alert alert-warning mt-5\"><p>cette catégorie est pour l'instant sans articles</p></div>
                    {% endif %}
            </div>
        </div>


{% endblock %}

", "article/allArticles.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\article\\allArticles.html.twig");
    }
}
