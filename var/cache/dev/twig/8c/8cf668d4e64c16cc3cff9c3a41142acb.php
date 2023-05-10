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

/* layout.html.twig */
class __TwigTemplate_713c8e91b68ee9fe521f22452424c910 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'final_js' => [$this, 'block_final_js'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<header>
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Shorinji Kempo Gennevilliers</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">News</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"\">Nos Professeurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles");
        echo "\">Articles</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t\t";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 36
            echo "\t\t\t\t\t\t";
        } else {
            // line 37
            echo "
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
        }
        // line 43
        echo "

\t\t\t\t\t\t";
        // line 48
        echo "
\t\t\t\t\t\t";
        // line 50
        echo "
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_add");
        echo "\">Ajout d'un
\t\t\t\t\t\t\t\t\t\t                            Article
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_categorie_add");
        echo "\">Ajout de
\t\t\t\t\t\t\t\t\t\t                            catégorie
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_categories");
        echo "\">Gestion de
\t\t\t\t\t\t\t\t\t\t                            catégorie
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_articles_gestion");
        echo "\">Gestion d'
\t\t\t\t\t\t\t\t\t\t                              article</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t";
        // line 79
        echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<h6>Welcome !</h6>


\t\t\t</div>
\t\t</nav>
\t</header>

\t<main class=\"container mb-5 mt-5\">

\t\t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 93
            echo "\t\t<div class=\"alert alert-success text-center\">
\t\t\t\t";
            // line 94
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "

\t\t";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 100
            echo "\t\t<div class=\"alert alert-danger text-center\">
\t\t\t\t";
            // line 101
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "

\t\t";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 112
        echo "\t</main>

\t<footer class=\"fixed-bottom bg-dark\">
\t\t<div class=\"text-center text-white\">
\t\t\t<p>&copy; tous droits reservés, ShorinjiKempo</p>
\t\t</div>
\t</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 106
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 107
        echo "
\t\t\t";
        // line 108
        $this->displayBlock('final_js', $context, $blocks);
        // line 111
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 108
    public function block_final_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_js"));

        // line 109
        echo "\t\t\t\t";
        // line 110
        echo "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 110,  269 => 109,  262 => 108,  255 => 111,  253 => 108,  250 => 107,  243 => 106,  229 => 112,  227 => 106,  223 => 104,  214 => 101,  211 => 100,  207 => 99,  203 => 97,  194 => 94,  191 => 93,  187 => 92,  172 => 79,  163 => 72,  155 => 67,  147 => 62,  139 => 57,  130 => 50,  127 => 48,  123 => 43,  116 => 39,  112 => 37,  109 => 36,  104 => 33,  98 => 30,  94 => 28,  91 => 27,  85 => 23,  76 => 17,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
\t<header>
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"#\">Shorinji Kempo Gennevilliers</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_home') }}\">News</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"\">Nos Professeurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_articles') }}\">Articles</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t{#si aucun user n'est connecté(authentifié), on affiche les boutons suivants#}
\t\t\t\t\t\t{% if not is_granted('IS_AUTHENTICATED_FULLY') %}

\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{#si un user est authentifié, on affiche uniquement le bouton de déconnexion#}
\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t{# <li class=\"nav-item text-right\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"\">panier</a>
\t\t\t\t\t\t</li> #}

\t\t\t\t\t\t{# {% if is_granted(\"IS_AUTHENTICATED_FULLY\") and is_granted(\"ROLE_ADMIN\") %} #}

\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_article_add') }}\">Ajout d'un
\t\t\t\t\t\t\t\t\t\t                            Article
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_categorie_add') }}\">Ajout de
\t\t\t\t\t\t\t\t\t\t                            catégorie
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_categories') }}\">Gestion de
\t\t\t\t\t\t\t\t\t\t                            catégorie
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_articles_gestion') }}\">Gestion d'
\t\t\t\t\t\t\t\t\t\t                              article</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t{# {% endif %} #}

\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<h6>Welcome !</h6>


\t\t\t</div>
\t\t</nav>
\t</header>

\t<main class=\"container mb-5 mt-5\">

\t\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success text-center\">
\t\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}


\t\t{% for message in app.flashes('error') %}
\t\t<div class=\"alert alert-danger text-center\">
\t\t\t\t{{ message }}
\t\t</div>
\t{% endfor %}


\t\t{% block content %}

\t\t\t{% block final_js %}
\t\t\t\t{# insertion des script propre à chaque page #}
\t\t\t{% endblock %}
\t\t{% endblock %}
\t</main>

\t<footer class=\"fixed-bottom bg-dark\">
\t\t<div class=\"text-center text-white\">
\t\t\t<p>&copy; tous droits reservés, ShorinjiKempo</p>
\t\t</div>
\t</footer>
{% endblock %}
", "layout.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\layout.html.twig");
    }
}
