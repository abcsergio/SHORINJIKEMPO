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

/* home/index.html.twig */
class __TwigTemplate_52fe2de6a1f8c31ebaffa0ab382e79a6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"text-center mb-5\">
";
        // line 8
        echo "<h1>Voici nos derniers articles</h1>
</div> 

<div class=\"justify-content-center\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "<div class=\"row justify-content-center\">
    <div class=\"col card mb-3 \" style=\"max-width: 800px;\">
        <div class=\"row g-0\">
            <div class=\"col-md-6 text-center\">
                <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/article/" . twig_get_attribute($this->env, $this->source, $context["article"], "photo", [], "any", false, false, false, 17))), "html", null, true);
            echo "\" class=\"img-fluid rounded-start\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
            </div>
            <div class=\"col-md-6\">
                <div class=\"card-body text-center\">
                    <h4 class=\"card-title\">
                        <a class=\"text-decoration-none text-success\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
                    </h4>
                    
                    
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
        // line 32
        echo "</div> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  102 => 22,  92 => 17,  86 => 13,  82 => 12,  76 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block content %}
<div class=\"text-center mb-5\">
{# <h1>Bienvenue dans le club de Shorinji Kempo de Gennevilliers</h1> #}
<h1>Voici nos derniers articles</h1>
</div> 

<div class=\"justify-content-center\">
{% for article in articles %}
<div class=\"row justify-content-center\">
    <div class=\"col card mb-3 \" style=\"max-width: 800px;\">
        <div class=\"row g-0\">
            <div class=\"col-md-6 text-center\">
                <img src=\"{{ asset('photos/article/' ~ article.photo) }}\" class=\"img-fluid rounded-start\" alt=\"{{ article.titre }}\">
            </div>
            <div class=\"col-md-6\">
                <div class=\"card-body text-center\">
                    <h4 class=\"card-title\">
                        <a class=\"text-decoration-none text-success\" href=\"{{ path('app_article_show', {id: article.id}) }}\">{{ article.titre }}</a>
                    </h4>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
{% endfor %}
</div> 
{% endblock %}

", "home/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\home\\index.html.twig");
    }
}
