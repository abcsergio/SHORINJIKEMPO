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
class __TwigTemplate_bc1534d26bb7fd95fed1a702b6a3128f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<header>
\t<nav class=\"navbar navbar-expand-lg fixed-top navbar-dark bg-dark\">
\t<div class=\"container-fluid\">
<a class=\"navbar-brand\"><img src=";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/shorinjiKempo_blanc.png"), "html", null, true);
        echo " width = \"20%\">Club de Gennevilliers</a>

\t

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-1\">





\t\t\t\t\t";
        // line 21
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 22
            echo "
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_article_add");
            echo "\">Ajout d'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tarticles
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_categorie_add");
            echo "\">Ajout de
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatégories
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_actualite_add");
            echo "\">Ajout d'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tactualités
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_categories");
            echo "\">Gestion des
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatégories
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_articles_gestion");
            echo "\">Gestion des
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  articles</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_app_actualites_gestion");
            echo "\">Gestion des
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  actualités</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t";
        }
        // line 60
        echo "








\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Accueil</a>
\t\t\t\t\t\t</li>



\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tLe Club
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique");
        echo "\">
\t\t\t\t\t\t\t\tHistorique

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_professeur");
        echo "\">
\t\t\t\t\t\t\t\t\tLes professeurs

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours");
        echo "\">
\t\t\t\t\t\t\t\t\tLes cours
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>\t


\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tActualités
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t\t\t\t\tLes dernières actualités

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles");
        echo "\">Tous les 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tarticles
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tInfos
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>  
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
\t\t\t\t\t\t\t\t\tInscriptions
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>  
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>





\t\t\t\t\t\t


\t\t\t\t\t\t";
        // line 157
        echo "\t\t\t\t\t\t";
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 158
            echo "





\t\t\t\t\t\t










\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tAdministration
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"";
            // line 186
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 189
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 190
            echo "
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 192
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t";
        }
        // line 201
        echo "

\t\t\t\t\t\t";
        // line 206
        echo "
\t\t\t\t\t\t


\t\t\t\t\t\t

\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t


\t\t\t</div>
\t\t</nav>
\t</header>


\t<div class=\"mainpage\">
\t<main class=\"container mb-5 mt-5\">



\t

\t\t";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 230));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 231
            echo "\t\t<div class=\"alert alert-success text-center\">
\t\t\t\t";
            // line 232
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "

\t\t";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 237));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 238
            echo "\t\t<div class=\"alert alert-danger text-center\">
\t\t\t\t";
            // line 239
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "

\t\t";
        // line 244
        $this->displayBlock('content', $context, $blocks);
        // line 250
        echo "\t</main>
\t</div>

\t<footer class=\"bg-dark\">
\t\t<div class=\"text-center text-white\">
\t\t\t<div class=\"social\">
\t\t\t\t<a href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i>\t
\t\t\t\t<a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i>\t
\t\t\t\t<a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i>\t
\t\t\t</div>
\t\t<a href=\"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mentions");
        echo "\" target=\"\">Mentions légales</a>
\t\t<a class=\"pipe\">|</a>
\t\t<a href=\"https://shorinjikempo.fr/federation/\" target=\"_blank\">Fédération Française de Shorinji Kempo</a>
\t</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 244
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 245
        echo "
\t\t\t";
        // line 246
        $this->displayBlock('final_js', $context, $blocks);
        // line 249
        echo "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 246
    public function block_final_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "final_js"));

        // line 247
        echo "\t\t\t\t";
        // line 248
        echo "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  470 => 248,  468 => 247,  458 => 246,  448 => 249,  446 => 246,  443 => 245,  433 => 244,  418 => 260,  406 => 250,  404 => 244,  400 => 242,  391 => 239,  388 => 238,  384 => 237,  380 => 235,  371 => 232,  368 => 231,  364 => 230,  338 => 206,  334 => 201,  322 => 192,  318 => 190,  315 => 189,  310 => 186,  303 => 182,  277 => 158,  274 => 157,  256 => 141,  247 => 135,  228 => 119,  218 => 112,  200 => 97,  190 => 90,  179 => 82,  164 => 70,  152 => 60,  142 => 53,  135 => 49,  127 => 44,  119 => 39,  111 => 34,  103 => 29,  94 => 22,  92 => 21,  75 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<header>
\t<nav class=\"navbar navbar-expand-lg fixed-top navbar-dark bg-dark\">
\t<div class=\"container-fluid\">
<a class=\"navbar-brand\"><img src={{asset('photos/autre/shorinjiKempo_blanc.png')}} width = \"20%\">Club de Gennevilliers</a>

\t

\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t\t<ul class=\"navbar-nav ms-auto mb-2 mb-lg-1\">





\t\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_FULLY\") and is_granted(\"ROLE_ADMIN\") %}

\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_article_add') }}\">Ajout d'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tarticles
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_categorie_add') }}\">Ajout de
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatégories
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_actualite_add') }}\">Ajout d'
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tactualités
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_categories') }}\">Gestion des
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatégories
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_articles_gestion') }}\">Gestion des
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  articles</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_app_actualites_gestion') }}\">Gestion des
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  actualités</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t{% endif %}









\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" aria-current=\"page\" href=\"{{ path('app_accueil') }}\">Accueil</a>
\t\t\t\t\t\t</li>



\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tLe Club
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_historique') }}\">
\t\t\t\t\t\t\t\tHistorique

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_professeur') }}\">
\t\t\t\t\t\t\t\t\tLes professeurs

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_cours') }}\">
\t\t\t\t\t\t\t\t\tLes cours
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>\t


\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tActualités
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_home') }}\">
\t\t\t\t\t\t\t\t\tLes dernières actualités

\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_articles') }}\">Tous les 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tarticles
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tInfos
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>  
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_informations') }}\">
\t\t\t\t\t\t\t\t\tInscriptions
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>  
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_contact') }}\">
\t\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>





\t\t\t\t\t\t


\t\t\t\t\t\t{#si aucun user n'est connecté(authentifié), on affiche les boutons suivants#}
\t\t\t\t\t\t{% if not is_granted('IS_AUTHENTICATED_FULLY') %}






\t\t\t\t\t\t










\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\tAdministration
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"\" href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{#si un user est authentifié, on affiche uniquement le bouton de déconnexion#}
\t\t\t\t\t\t\t\t{% else %}

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t{% endif %}


\t\t\t\t\t\t{# <li class=\"nav-item text-right\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"\">panier</a>
\t\t\t\t\t\t</li> #}

\t\t\t\t\t\t


\t\t\t\t\t\t

\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t


\t\t\t</div>
\t\t</nav>
\t</header>


\t<div class=\"mainpage\">
\t<main class=\"container mb-5 mt-5\">



\t

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
\t</div>

\t<footer class=\"bg-dark\">
\t\t<div class=\"text-center text-white\">
\t\t\t<div class=\"social\">
\t\t\t\t<a href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i>\t
\t\t\t\t<a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i>\t
\t\t\t\t<a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i>\t
\t\t\t</div>
\t\t<a href=\"{{ path('app_mentions') }}\" target=\"\">Mentions légales</a>
\t\t<a class=\"pipe\">|</a>
\t\t<a href=\"https://shorinjikempo.fr/federation/\" target=\"_blank\">Fédération Française de Shorinji Kempo</a>
\t</footer>
{% endblock %}
", "layout.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\layout.html.twig");
    }
}
