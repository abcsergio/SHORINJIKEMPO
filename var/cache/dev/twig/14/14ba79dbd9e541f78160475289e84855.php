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

/* admin/actualite/gestionActualite.html.twig */
class __TwigTemplate_ef62f7a2dc3e1a6bb8ed23f503456635 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actualite/gestionActualite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/actualite/gestionActualite.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "admin/actualite/gestionActualite.html.twig", 1);
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

        echo "Gestion des actualites du Club de Shorinji Kempo de Gennevilliers";
        
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
        echo "


<img src=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/shorinjiKempo_blanc.png"), "html", null, true);
        echo " width = \"100%\">
<a href='";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_actualite_add");
        echo "' >Ajouter une nouvelle actualité</a>

<table class=\"table text-center \">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">Id</th>
      <th scope=\"col\">titre</th>
      ";
        // line 18
        echo "      <th scope=\"col\">photo</th>
      
      
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
    </tr>
  </thead>

  <tbody>

    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 30
            echo "
        <tr>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titre", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            ";
            // line 35
            echo "           
            <td><img class=\"img-thumbnail\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/article/" . twig_get_attribute($this->env, $this->source, $context["actualite"], "photo", [], "any", false, false, false, 36))), "html", null, true);
            echo "\" style=\"max-height:100px\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titre", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
            </td>
           
            
           
            <td>
                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_actualite_details", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"> <i class=\"fas fa-eye mx-1 text-primary\"></i></a>
              </td> 
              <td>   
                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_actualite_update", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\"> <i class=\"fas fa-edit mx-1 text-success\"></i></a>
              </td>
              <td>
                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_actualite_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" onclick=\"return confirm('êtes vous sûr de vouloir supprimer l\\'actualité ?')\"><i class=\"fas fa-trash mx-1 text-danger\"></i></a>
            </td>  
            
            
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
  </tbody>
</table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/actualite/gestionActualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 55,  162 => 48,  156 => 45,  150 => 42,  139 => 36,  136 => 35,  132 => 33,  128 => 32,  124 => 30,  120 => 29,  107 => 18,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}Gestion des actualites du Club de Shorinji Kempo de Gennevilliers{% endblock %}

{% block content %}



<img src={{asset('photos/autre/shorinjiKempo_blanc.png')}} width = \"100%\">
<a href='{{ path('admin_app_actualite_add') }}' >Ajouter une nouvelle actualité</a>

<table class=\"table text-center \">
  <thead class=\"thead-dark\">
    <tr>
      <th scope=\"col\">Id</th>
      <th scope=\"col\">titre</th>
      {# <th scope=\"col\">description</th>  #}
      <th scope=\"col\">photo</th>
      
      
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
      <th scope=\"col\"></th>
    </tr>
  </thead>

  <tbody>

    {% for actualite in actualites %}

        <tr>
            <td>{{ actualite.id }}</td>
            <td>{{ actualite.titre }}</td>
            {# <td>{{ actualite.description | slice(0,100)}}...</td> #}
           
            <td><img class=\"img-thumbnail\" src=\"{{ asset('photos/article/' ~ actualite.photo) }}\" style=\"max-height:100px\" alt=\"{{ actualite.titre }}\">
            </td>
           
            
           
            <td>
                <a href=\"{{ path('admin_app_actualite_details', {id: actualite.id}) }}\"> <i class=\"fas fa-eye mx-1 text-primary\"></i></a>
              </td> 
              <td>   
                <a href=\"{{ path('admin_app_actualite_update', {id: actualite.id}) }}\"> <i class=\"fas fa-edit mx-1 text-success\"></i></a>
              </td>
              <td>
                <a href=\"{{ path('admin_app_actualite_delete', {id: actualite.id}) }}\" onclick=\"return confirm('êtes vous sûr de vouloir supprimer l\\'actualité ?')\"><i class=\"fas fa-trash mx-1 text-danger\"></i></a>
            </td>  
            
            
        </tr>

    {% endfor %}

  </tbody>
</table>

{% endblock %}", "admin/actualite/gestionActualite.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\admin\\actualite\\gestionActualite.html.twig");
    }
}
