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

/* admin/article/gestionArticle.html.twig */
class __TwigTemplate_ff7d71a729723a75b4a864a9cab50f3d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/article/gestionArticle.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "admin/article/gestionArticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion Articles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<a href='";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_add");
        echo "' >Ajouter un nouvel article</a>

<table class=\"table text-center \">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">Id</th>
      <th scope=\"col\">titre</th>
      <th scope=\"col\">description</th> 
      <th scope=\"col\">photo</th>
      
      <th scope=\"col\">Categorie</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>

    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "
        <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 27), 0, 50), "html", null, true);
            echo "...</td>
           
            <td><img class=\"img-thumbnail\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/article/" . twig_get_attribute($this->env, $this->source, $context["article"], "photo", [], "any", false, false, false, 29))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
            </td>
           
            
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 33), "nom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_details", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"> <i class=\"fas fa-eye mx-1 text-primary\"></i></a>
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_update", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"> <i class=\"fas fa-edit mx-1 text-success\"></i></a>
                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" onclick=\"return confirm('êtes vous sûr de vouloir supprimer l'article ?')\"> <i class=\"fas fa-trash mx-1 text-danger\"></i></a>
            </td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
  </tbody>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/article/gestionArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 42,  136 => 37,  132 => 36,  128 => 35,  123 => 33,  114 => 29,  109 => 27,  105 => 26,  101 => 25,  97 => 23,  93 => 22,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Gestion Articles{% endblock %}

{% block content %}
<a href='{{ path('admin_app_article_add') }}' >Ajouter un nouvel article</a>

<table class=\"table text-center \">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">Id</th>
      <th scope=\"col\">titre</th>
      <th scope=\"col\">description</th> 
      <th scope=\"col\">photo</th>
      
      <th scope=\"col\">Categorie</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>

    {% for article in articles %}

        <tr>
            <td>{{ article.id }}</td>
            <td>{{ article.titre }}</td>
            <td>{{ article.description | slice(0,50)}}...</td>
           
            <td><img class=\"img-thumbnail\" src=\"{{ asset('photos/article/' ~ article.photo) }}\" alt=\"{{ article.titre }}\">
            </td>
           
            
            <td>{{ article.categorie.nom }}</td>
            <td>
                <a href=\"{{ path('admin_app_article_details', {id: article.id}) }}\"> <i class=\"fas fa-eye mx-1 text-primary\"></i></a>
                <a href=\"{{ path('admin_app_article_update', {id: article.id}) }}\"> <i class=\"fas fa-edit mx-1 text-success\"></i></a>
                <a href=\"{{ path('admin_app_article_delete', {id: article.id}) }}\" onclick=\"return confirm('êtes vous sûr de vouloir supprimer l'article ?')\"> <i class=\"fas fa-trash mx-1 text-danger\"></i></a>
            </td>
        </tr>

    {% endfor %}

  </tbody>
</table>

{% endblock %}", "admin/article/gestionArticle.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\admin\\article\\gestionArticle.html.twig");
    }
}
