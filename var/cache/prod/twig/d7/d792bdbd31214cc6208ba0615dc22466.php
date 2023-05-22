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
class __TwigTemplate_86991045b92e27c54ee972a430ac9eb5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
\t\t\t\t\t\t\tClub
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
\t\t\t\t\t\t\tNews
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
        echo "\">Les 
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 230));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "error"], "method", false, false, false, 237));
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
    }

    // line 244
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 245
        echo "
\t\t\t";
        // line 246
        $this->displayBlock('final_js', $context, $blocks);
        // line 249
        echo "\t\t";
    }

    // line 246
    public function block_final_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 247
        echo "\t\t\t\t";
        // line 248
        echo "\t\t\t";
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
        return array (  428 => 248,  426 => 247,  422 => 246,  418 => 249,  416 => 246,  413 => 245,  409 => 244,  400 => 260,  388 => 250,  386 => 244,  382 => 242,  373 => 239,  370 => 238,  366 => 237,  362 => 235,  353 => 232,  350 => 231,  346 => 230,  320 => 206,  316 => 201,  304 => 192,  300 => 190,  297 => 189,  292 => 186,  285 => 182,  259 => 158,  256 => 157,  238 => 141,  229 => 135,  210 => 119,  200 => 112,  182 => 97,  172 => 90,  161 => 82,  146 => 70,  134 => 60,  124 => 53,  117 => 49,  109 => 44,  101 => 39,  93 => 34,  85 => 29,  76 => 22,  74 => 21,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\layout.html.twig");
    }
}
