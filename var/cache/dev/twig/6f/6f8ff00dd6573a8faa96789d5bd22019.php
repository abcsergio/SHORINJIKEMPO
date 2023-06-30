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
class __TwigTemplate_61ac00dbfa7e2237d6dcf62ad5c497a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/article/gestionArticle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/article/gestionArticle.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "admin/article/gestionArticle.html.twig", 1);
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

        echo "Gestion des articles du Club de Shorinji Kempo de Gennevilliers";
        
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
        echo "<img src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/shorinjiKempo_blanc.png"), "html", null, true);
        echo " width = \"100%\">
<a href='";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_add");
        echo "' >Ajouter un nouvel article</a>

<table class=\"table text-center \">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">Id</th>
      <th scope=\"col\">titre</th>
      ";
        // line 15
        echo "      <th scope=\"col\">photo</th>
      
      ";
        // line 18
        echo "      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "
        <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            ";
            // line 31
            echo "           
            <td><img class=\"img-thumbnail\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/article/" . twig_get_attribute($this->env, $this->source, $context["article"], "photo", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" style=\"max-height:100px\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
            </td>
           
            
            ";
            // line 37
            echo "              <td>
                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_details", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"> <i class=\"fas fa-eye mx-1 text-primary\"></i></a>
              </td>
              <td>
              <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_update", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\"> <i class=\"fas fa-edit mx-1 text-success\"></i></a>
              </td>
              <td>
              <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" onclick=\"return confirm('êtes vous sûr de vouloir supprimer l\\'article ?')\"><i class=\"fas fa-trash mx-1 text-danger\"></i></a>
              </td>  
            
           
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
  </tbody>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  172 => 51,  159 => 44,  153 => 41,  147 => 38,  144 => 37,  135 => 32,  132 => 31,  128 => 29,  124 => 28,  120 => 26,  116 => 25,  107 => 18,  103 => 15,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Gestion des articles du Club de Shorinji Kempo de Gennevilliers{% endblock %}

{% block content %}
<img src={{asset('photos/autre/shorinjiKempo_blanc.png')}} width = \"100%\">
<a href='{{ path('admin_app_article_add') }}' >Ajouter un nouvel article</a>

<table class=\"table text-center \">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">Id</th>
      <th scope=\"col\">titre</th>
      {# <th scope=\"col\">description</th>  #}
      <th scope=\"col\">photo</th>
      
      {# <th scope=\"col\">categorie</th> #}
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
    </tr>
  </thead>
  <tbody>

    {% for article in articles %}

        <tr>
            <td>{{ article.id }}</td>
            <td>{{ article.titre }}</td>
            {# <td>{{ article.description | slice(0,100)}}...</td> #}
           
            <td><img class=\"img-thumbnail\" src=\"{{ asset('photos/article/' ~ article.photo) }}\" style=\"max-height:100px\" alt=\"{{ article.titre }}\">
            </td>
           
            
            {# <td>{{ article.categorie.nom }}</td> #}
              <td>
                <a href=\"{{ path('admin_app_article_details', {id: article.id}) }}\"> <i class=\"fas fa-eye mx-1 text-primary\"></i></a>
              </td>
              <td>
              <a href=\"{{ path('admin_app_article_update', {id: article.id}) }}\"> <i class=\"fas fa-edit mx-1 text-success\"></i></a>
              </td>
              <td>
              <a href=\"{{ path('admin_app_article_delete', {id: article.id}) }}\" onclick=\"return confirm('êtes vous sûr de vouloir supprimer l\\'article ?')\"><i class=\"fas fa-trash mx-1 text-danger\"></i></a>
              </td>  
            
           
        </tr>

    {% endfor %}

  </tbody>
</table>

{% endblock %}", "admin/article/gestionArticle.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\admin\\article\\gestionArticle.html.twig");
    }
}
