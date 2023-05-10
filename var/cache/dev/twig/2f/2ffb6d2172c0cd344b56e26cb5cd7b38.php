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
class __TwigTemplate_b7a52b84c6e3be27f94d5fc92c9cb7e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/allArticles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/allArticles.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "article/allArticles.html.twig", 1);
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

        echo "Liste des articles récents et anciens du Club de Shorinji Kempo de Gennevilliers";
        
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
        echo "<div class=\"example-wrapper\">
        <div class=\"cont\">
            <img src=";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/logo_rouge-gris-noir_fond-clair.png"), "html", null, true);
        echo " width = \"20%\">
            <hr>
                <h1 class=\"title\"> Les articles de Shorinji Kempo à Gennevilliers</h1>
        </div>
        
        
            <div class=\"text-center\">
                <br>
        
            ";
        // line 29
        echo "    
            <nav class=\"navbar1\">
                <form class=\"container-fluid justify-content-start\">

                    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles");
        echo "\" class=\"btn btn-primary  btn-md\" type=\"button\" >Tous les Articles</a>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 35
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_categorie", ["slug" => twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-primary  btn-md\" type=\"button\" >
                            ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                </form>

                <br>
                
\t\t    </nav>

    


            <div class=\"row d-flex justify-content-center text-center\">

\t\t        ";
        // line 51
        if ( !twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 51, $this->source); })()))) {
            // line 52
            echo "

\t\t\t        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 54, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                echo " ";
                // line 55
                echo "\t\t\t\t        
                  
                    <div class=\"card m-2\" style=\"width: 22rem;\">
\t\t\t\t\t

\t\t\t\t\t        ";
                // line 60
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["article"], "photo", [], "any", false, false, false, 60))) {
                    // line 61
                    echo "\t\t\t\t\t\t        ";
                    // line 62
                    echo "                                <div class=\"inner\">
\t\t\t\t\t\t        <img src=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/article/" . twig_get_attribute($this->env, $this->source, $context["article"], "photo", [], "any", false, false, false, 63))), "html", null, true);
                    echo "\" class=\"sizePhotoHome2\" class=\"img-fluid rounded-start rounded-end \" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 63), "html", null, true);
                    echo "\">
                                </div>
\t\t\t\t\t        ";
                }
                // line 66
                echo "
                            <div class=\"card-body\">
                              

\t\t\t\t\t\t            <h5 class=\"card-title\">
\t\t\t\t\t\t\t        ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 71), "html", null, true);
                echo "
\t\t\t\t\t\t            </h5>

                                <p>crée le :";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateDeCreation", [], "any", false, false, false, 74), " d/m/Y à H\\hi"), "html", null, true);
                echo "</p>

                                    <h6>Catégorie : ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 76), "nom", [], "any", false, false, false, 76), "html", null, true);
                echo " </h6>

\t\t\t\t\t\t             <p class=\"card-text text-center\">
                 
\t\t\t\t\t\t\t        ";
                // line 80
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 80), 0, 300), "html", null, true);
                echo "
\t\t\t\t\t\t\t        ...</p>
\t\t\t\t\t\t            <a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"btn btn-primary card-link\">lire l'article</a>
\t\t\t\t\t            
                            </div>    

\t\t\t\t    </div>
                

\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "
                    ";
        } else {
            // line 92
            echo "                        <div class=\"alert alert-warning\">
                            <p>cette catégorie ne contient aucun article pour le moment</p>
                        </div>
                    ";
        }
        // line 96
        echo "\t        </div>

</div>













    
            ";
        // line 154
        echo "        
</div>
        
        </br>
        </br>
        </br>
        </br>
        <hr>

 


        <div class=\"container\"> 
                                                            
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-xs-12\">
                    <div class=\"section-header text-center\">
                        <div class=\"section-separator border-center\">
                                                            
                        </div>
                    <h5 class=\"section-subtitle\"> Rejoignez-nous </h5>
                            <h4 class=\"section-title\"> Gennevilliers Shorinji Kempo </h4>
                    </div>
                </div> 
            </div> 

            <div class=\"row\" id=\"service_content_section\">
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"post text-center wow flipInx animated\" data-wow-delay=\".5s\">
                        <figure class=\"post-thumbnail\">
                            <a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
                                <i class=\"fa fa-clock txt-pink\">
                                </i>                   
                            </a>  
                        </figure>
                        <div class=\"entry-header\">
                            <h4 class=\"entry-title\">
                                <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">Horaires</a> 
                            </h4> 
                        </div>
                        <div class=\"entry-content\">
                            <p>lundis et mercredis </br>adultes : de 20h00 à 22h00 </br> enfants : de 19h00 à 20h00</p>
                        </div>     
                    </div> 
                </div> 
                                                
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"post text-center wow flipInx animated\" data-wow-delay=\".5s\">
                        <figure class=\"post-thumbnail\">
                            <a  href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">
                                <i class=\"fa fa-location-arrow txt-pink\">
                                    
                                </i>
                            </a>
                        </figure>  
                        <div class=\"entry-header\">
                            <h4 class=\"entry-title\">
                                <a  href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">Adresse</a>   
                            </h4>  
                        </div> 
                        <div class=\"entry-content\">
                            <p>Gymnase Gustave Caillebotte </br>
                                19 rue Deslandes </br>
                                92230 Gennevilliers</p> 
                        </div> 
                    </div> 
                </div> 
    
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"post text-center wow flipInx animated\" data-wow-delay=\".5s\">
                        <figure class=\"post-thumbnail\">
                            <a  href=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                                <i class=\"fa fa fa-phone txt-pink\">                       
                                 </i>
                            </a>    
                        </figure>    
                    <div class=\"entry-header\">
                        <h4 class=\"entry-title\">
                            <a  href=\"";
        // line 232
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a> 
                        </h4>
                    </div>  
                    <div class=\"entry-content\">
                        <p>shorinjikempogennevilliers@gmail.com </br>01.41.47.00.85</p>
                    </div>        
                </div> 
            </div>  
        </div>   
                    
        
                      
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  341 => 232,  331 => 225,  294 => 191,  284 => 184,  252 => 154,  233 => 96,  227 => 92,  223 => 90,  209 => 82,  204 => 80,  197 => 76,  192 => 74,  186 => 71,  179 => 66,  171 => 63,  168 => 62,  166 => 61,  164 => 60,  157 => 55,  152 => 54,  148 => 52,  146 => 51,  132 => 39,  123 => 36,  118 => 35,  114 => 34,  110 => 33,  104 => 29,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Liste des articles récents et anciens du Club de Shorinji Kempo de Gennevilliers{% endblock %}

{% block content %}
<div class=\"example-wrapper\">
        <div class=\"cont\">
            <img src={{asset('photos/autre/logo_rouge-gris-noir_fond-clair.png')}} width = \"20%\">
            <hr>
                <h1 class=\"title\"> Les articles de Shorinji Kempo à Gennevilliers</h1>
        </div>
        
        
            <div class=\"text-center\">
                <br>
        
            {# <div class=\"col-md-2 justify-content-center pt-4 \">
                <ul class=\"list-group\"> 
        
                    <a class=\"d-flex align-items-start flex-column bd-highlight mb-3 text-decoration-none rounded\" href=\"{{ path('app_articles') }}\"> <li class=\"list-group-item btn btn-secondary text-center\"><strong>Tous les Articles</strong></li> </a>  
        
        
                    {% for categorie in categories %}
                        <a class=\"text-decoration-none rounded\" href=\"{{ path('app_articles_categorie', {slug: categorie.slug}) }}\"> <li class=\"list-group-item btn btn-primary text-center\">{{ categorie.nom }}</li></a> 
                    {% endfor %}  
            
                </ul>
            </div> #}
    
            <nav class=\"navbar1\">
                <form class=\"container-fluid justify-content-start\">

                    <a href=\"{{ path('app_articles') }}\" class=\"btn btn-primary  btn-md\" type=\"button\" >Tous les Articles</a>
                    {% for categorie in categories %}
                        <a href=\"{{ path('app_articles_categorie', {slug: categorie.slug}) }}\" class=\"btn btn-primary  btn-md\" type=\"button\" >
                            {{categorie.nom}}
                        </a>
                    {% endfor %}

                </form>

                <br>
                
\t\t    </nav>

    


            <div class=\"row d-flex justify-content-center text-center\">

\t\t        {% if  articles is not empty %}


\t\t\t        {% for article in articles | reverse %} {# reverse permet d'inverser l'ordre du résultat #}
\t\t\t\t        
                  
                    <div class=\"card m-2\" style=\"width: 22rem;\">
\t\t\t\t\t

\t\t\t\t\t        {% if article.photo is not null %}
\t\t\t\t\t\t        {# la fonction asset() va chercher dans le dossier public #}
                                <div class=\"inner\">
\t\t\t\t\t\t        <img src=\"{{ asset('photos/article/' ~ article.photo) }}\" class=\"sizePhotoHome2\" class=\"img-fluid rounded-start rounded-end \" alt=\"{{article.titre}}\">
                                </div>
\t\t\t\t\t        {% endif %}

                            <div class=\"card-body\">
                              

\t\t\t\t\t\t            <h5 class=\"card-title\">
\t\t\t\t\t\t\t        {{ article.titre }}
\t\t\t\t\t\t            </h5>

                                <p>crée le :{{ article.dateDeCreation | date(\" d/m/Y \\à H\\\\hi\") }}</p>

                                    <h6>Catégorie : {{ article.categorie.nom }} </h6>

\t\t\t\t\t\t             <p class=\"card-text text-center\">
                 
\t\t\t\t\t\t\t        {{ article.description | slice(0,300) }}
\t\t\t\t\t\t\t        ...</p>
\t\t\t\t\t\t            <a href=\"{{ path('app_article_show' , {id: article.id} ) }}\" class=\"btn btn-primary card-link\">lire l'article</a>
\t\t\t\t\t            
                            </div>    

\t\t\t\t    </div>
                

\t\t\t        {% endfor %}

                    {% else %}
                        <div class=\"alert alert-warning\">
                            <p>cette catégorie ne contient aucun article pour le moment</p>
                        </div>
                    {% endif %}
\t        </div>

</div>













    
            {# <div class=\"col-md-10 justify-content-center text-center\">
                <br>
            <h4><strong></strong> </h4>
                <br>
                <br>
                {% if articles is not empty %}
                
                {% for article in articles %}
                <div class=\"row justify-content-center\" >
                    <div class=\"col card mb-3 \" style=\"max-width: 1200px;\">
                        <div class=\"row g-1\">
                            <div class=\"col-md-6 text-center\">
                                <div class=\"inner\">
                                    <img src=\"{{ asset('photos/article/' ~ article.photo) }}\" class=\"img-fluid rounded-start\"  style=\"max-height:350px\" alt=\"{{ article.titre }}\">
                                </div>
                            </div>

                               
                                    <div class=\"col-md-6 \">
                                        <div class=\"card-body text-center\">
                                            <h4 class=\"card-title\"><a href=\"{{ path('app_article_show', {id: article.id}) }}\"> {{ article.titre }} </a></h4>
                                            <h6>Catégorie : {{ article.categorie.nom }} </h6>
                                            <h6> {{ article.description | slice(0,500) }} </h6>
                                                <br>

                                                <a href=\"{{ path('app_article_show' , {id: article.id} ) }}\" class=\"btn btn-primary card-link\">lire l'article</a>
                                        
                                        </div>
                                    </div>
                                 
                        </div>
                    </div>
                </div>  
                
            {% endfor %}
            
            {% else %}
                <div class=\"alert alert-warning mt-5\">
                    <p>cette catégorie est pour l'instant sans articles</p>
                </div>
            {% endif %} #}
        
</div>
        
        </br>
        </br>
        </br>
        </br>
        <hr>

 


        <div class=\"container\"> 
                                                            
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-12 col-xs-12\">
                    <div class=\"section-header text-center\">
                        <div class=\"section-separator border-center\">
                                                            
                        </div>
                    <h5 class=\"section-subtitle\"> Rejoignez-nous </h5>
                            <h4 class=\"section-title\"> Gennevilliers Shorinji Kempo </h4>
                    </div>
                </div> 
            </div> 

            <div class=\"row\" id=\"service_content_section\">
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"post text-center wow flipInx animated\" data-wow-delay=\".5s\">
                        <figure class=\"post-thumbnail\">
                            <a href=\"{{ path('app_informations') }}\">
                                <i class=\"fa fa-clock txt-pink\">
                                </i>                   
                            </a>  
                        </figure>
                        <div class=\"entry-header\">
                            <h4 class=\"entry-title\">
                                <a href=\"{{ path('app_informations') }}\">Horaires</a> 
                            </h4> 
                        </div>
                        <div class=\"entry-content\">
                            <p>lundis et mercredis </br>adultes : de 20h00 à 22h00 </br> enfants : de 19h00 à 20h00</p>
                        </div>     
                    </div> 
                </div> 
                                                
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"post text-center wow flipInx animated\" data-wow-delay=\".5s\">
                        <figure class=\"post-thumbnail\">
                            <a  href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">
                                <i class=\"fa fa-location-arrow txt-pink\">
                                    
                                </i>
                            </a>
                        </figure>  
                        <div class=\"entry-header\">
                            <h4 class=\"entry-title\">
                                <a  href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">Adresse</a>   
                            </h4>  
                        </div> 
                        <div class=\"entry-content\">
                            <p>Gymnase Gustave Caillebotte </br>
                                19 rue Deslandes </br>
                                92230 Gennevilliers</p> 
                        </div> 
                    </div> 
                </div> 
    
                <div class=\"col-md-4 col-sm-6 col-xs-12\">
                    <div class=\"post text-center wow flipInx animated\" data-wow-delay=\".5s\">
                        <figure class=\"post-thumbnail\">
                            <a  href=\"{{ path('app_contact') }}\">
                                <i class=\"fa fa fa-phone txt-pink\">                       
                                 </i>
                            </a>    
                        </figure>    
                    <div class=\"entry-header\">
                        <h4 class=\"entry-title\">
                            <a  href=\"{{ path('app_contact') }}\">Contact</a> 
                        </h4>
                    </div>  
                    <div class=\"entry-content\">
                        <p>shorinjikempogennevilliers@gmail.com </br>01.41.47.00.85</p>
                    </div>        
                </div> 
            </div>  
        </div>   
                    
        
                      
            {% endblock %}
            
            ", "article/allArticles.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\article\\allArticles.html.twig");
    }
}
