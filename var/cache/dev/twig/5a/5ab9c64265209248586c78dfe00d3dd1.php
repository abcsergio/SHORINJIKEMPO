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

/* admin/categorie/gestionCategorie.html.twig */
class __TwigTemplate_0d699b8e48d2352b6ecd5655ca3bc9e1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/gestionCategorie.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "admin/categorie/gestionCategorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " liste categorie admin ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1> Liste des categories</h1>
        <table class=\"table text-center\">
        <thead class=\"table-dark\">
            <tr>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            echo "    
                <tr>
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                   
                    <td>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_categorie_update", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t    <i class=\"fas fa-edit mx-1 text-success\"></i>
                        </a>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_categorie_delete", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\"  onClick=\"return confirm('êtes vous sûr de vouloir supprimer la catégorie ?')\" >
                            <i class=\"fas fa-trash mx-1 text-danger\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/categorie/gestionCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 29,  103 => 23,  97 => 20,  91 => 17,  84 => 15,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %} liste categorie admin {% endblock %}

{% block content %}
    <h1> Liste des categories</h1>
        <table class=\"table text-center\">
        <thead class=\"table-dark\">
            <tr>
                <th>Nom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {% for  categorie in categories %}    
                <tr>
                    <td>{{ categorie.nom }}</td>
                   
                    <td>
                        <a href=\"{{ path('admin_app_categorie_update', {slug: categorie.slug}) }}\">
\t\t\t\t\t\t    <i class=\"fas fa-edit mx-1 text-success\"></i>
                        </a>
                        <a href=\"{{ path('admin_app_categorie_delete', {slug: categorie.slug}) }}\"  onClick=\"return confirm('êtes vous sûr de vouloir supprimer la catégorie ?')\" >
                            <i class=\"fas fa-trash mx-1 text-danger\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}", "admin/categorie/gestionCategorie.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\admin\\categorie\\gestionCategorie.html.twig");
    }
}
