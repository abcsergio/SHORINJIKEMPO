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

/* accueil/index.html.twig */
class __TwigTemplate_ed2f7989633736d955e16ffc92fb65a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "accueil/index.html.twig", 1);
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

        echo "Accueil du Club De Shorinji Kempo de Gennevilliers";
        
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


<div class=\"example-wrapper\">
    <div class=\"cont\">


    <img src=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/logo_rouge-gris-noir_fond-clair.png"), "html", null, true);
        echo " width = \"20%\" alt=\"logo Shorinji Kempo\">
    <hr>
<h1 class=\"title\">L'Art Martial </h1>
        
        


                

                    <div id=\"carouselExampleAutoplaying\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                                
                                    <div class=\"carousel-item active\">
                                        <div class=\"inner4\">
                                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/salle12Couleur.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"entraînement aux techniques de Shorinji Kempo\">
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <div class=\"inner4\">
                                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/salle14Couleur.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"entraînement aux techniques de Shorinji Kempo\">
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <div class=\"inner4\">
                                        <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/salle15Couleur.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"entraînement aux techniques de Shorinji Kempo\">
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <div class=\"inner4\">
                                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/salle17Couleur.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"entraînement aux techniques de Shorinji Kempo\">
                                        </div>
                                    </div>
                                   
                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                
    </div>
    <br>
    <br>



    
 
    <h1 class=\"title\"> ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</h1>

    <br>


    <div class=\"justify-content-center\">
    
            <h5>Historique</h5>

                <br>
        
             <p>
                Le Shorinji Kempo a été fondé en 1947, au Japon, sous le nom de Nippon Seito Hoppa Shorinji Kempo, par Doshin So, dit Kaiso (le fondateur).
             </p>
                </br>
            <p>
                En 1946, à son retour d’un long séjour en Chine, où, après avoir reçu l’enseignement de différentes écoles d’arts martiaux, il est passé maître dans l’art du Shorinji Giwamonken, Kaiso retrouve son Japon natal, détruit par la guerre, soumis au chaos et à la violence d’une jeunesse désenchantée.
            </p>
                <br>
            <p>        
                Soucieux de pacifier cette société, en permettant à chaque individu d’œuvrer pour un monde meilleur, il commence à enseigner sa philosophie, héritée du bouddhisme zen. Ainsi, il fondera, en 1951, le Kongo Zen Sohonzan, dont le Shorinji Kempo constitue l’enseignement principal.
            </p>
                <br>
            <p>            
                Avec des techniques issues de traditions japonaises et chinoises qu’il remanie et organise en un système cohérent, il crée une nouvelle discipline. De cette entreprise naîtra, en 1953, la fédération japonaise de Shorinji Kempo.
            </p>

            <br>
            <br>
          
        <div class=\"inner4\">
            <img src=";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/salle1Couleur.jpg"), "html", null, true);
        echo " width = \"100%\" alt=\"salle de cours\"> 
        </div>   

            <br>
            <br>
            <br>
           

            <h5>Qu'est-ce que le <strong><i>Shorinji Kempo</i></strong> et quels sont ses bienfaits ?</h5> 
                
                <br>

                <ul class=\"ulaccueil\">
                    <li>Budo (Art martial traditionnel japonais), <i>Bu</i> signifie \"combat\" et <i>do</i> signifie \"voie\"</li>
                    <li>Budo de self-défense, par l'utilisation de l'esquive, le dégagement, la saisie, la projection</li>
                    <li>Amélioration de la condition physique</li>
                    <li>Développement de l'esprit</li>
                    <li>Philosophie active basée sur le principe \"vivons moitié pour nous même, moitié pour les autres\"</li>
                    <li>Bien-être</li>
                    <li>Mixte et accessible à tous</li>
                </ul>
                ";
        // line 118
        echo "
           
                <hr>
                    <br>
            
   

            <h5>Les 3 techniques du <strong><i>Shorinji Kempo</i></strong></h5>
                <br>
                <p>
                
                <p><strong>Goho</strong> est l'application du principe dur du <i>Kongo Zen</i>, qui comprend les esquives ainsi que les parades et toutes les techniques de frappes, que ce soit avec les pieds ou les poings.</p>
                
                <br>
                <p><strong>Juho</strong> est l'application du principe souple du <i>Kongo Zen</i>, qui comprend les techniques de dégagement ou de blocage, ainsi que les techniques de projection et d'immobilisation au sol.</p>
                <br>
                <p><strong>Seiho</strong> est la partie de l'enseignement qui regroupe des techniques de remise en forme et de relaxation qui portent sur les points vitaux et sur la maîtrise de la respiration.</p>

            
            <hr>
            <br>

            <h5>Les grades au <strong><i>Shorinji Kempo</i></strong></h5>
                <div class=\"inner4\">
                    <img src=";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/a.jpg"), "html", null, true);
        echo " width = \"100%\"> 
                </div>
               
                <br>
                <br>
                <br>
                <br>
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
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
                                        <i class=\"fa fa-clock txt-pink\">
                                        </i>                   
                                    </a>  
                                </figure>
                                <div class=\"entry-header\">
                                    <h4 class=\"entry-title\">
                                        <a href=\"";
        // line 176
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
                                    <a href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">
                                        <i class=\"fa fa-location-arrow txt-pink\">
                                        </i>
                                    </a>
                                </figure>  
                                <div class=\"entry-header\">
                                    <h4 class=\"entry-title\">
                                        <a href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">Adresse</a>   
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
                                    <a href=\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                                        <i class=\"fa fa fa-phone txt-pink\">                       
                                         </i>
                                    </a>    
                                </figure>    
                            <div class=\"entry-header\">
                                <h4 class=\"entry-title\">
                                    <a href=\"";
        // line 216
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

       
    
</div> 


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 216,  324 => 209,  288 => 176,  278 => 169,  248 => 142,  222 => 118,  198 => 96,  164 => 65,  138 => 42,  130 => 37,  122 => 32,  114 => 27,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Accueil du Club De Shorinji Kempo de Gennevilliers{% endblock %}

{% block content %}



<div class=\"example-wrapper\">
    <div class=\"cont\">


    <img src={{asset('photos/autre/logo_rouge-gris-noir_fond-clair.png')}} width = \"20%\" alt=\"logo Shorinji Kempo\">
    <hr>
<h1 class=\"title\">L'Art Martial </h1>
        
        


                

                    <div id=\"carouselExampleAutoplaying\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                                
                                    <div class=\"carousel-item active\">
                                        <div class=\"inner4\">
                                        <img src=\"{{asset('photos/autre/salle12Couleur.jpg')}}\" class=\"d-block w-100\" alt=\"entraînement aux techniques de Shorinji Kempo\">
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <div class=\"inner4\">
                                        <img src=\"{{asset('photos/autre/salle14Couleur.jpg')}}\" class=\"d-block w-100\" alt=\"entraînement aux techniques de Shorinji Kempo\">
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <div class=\"inner4\">
                                        <img src=\"{{asset('photos/autre/salle15Couleur.jpg')}}\" class=\"d-block w-100\" alt=\"entraînement aux techniques de Shorinji Kempo\">
                                        </div>
                                    </div>
                                    <div class=\"carousel-item\">
                                        <div class=\"inner4\">
                                        <img src=\"{{asset('photos/autre/salle17Couleur.jpg')}}\" class=\"d-block w-100\" alt=\"entraînement aux techniques de Shorinji Kempo\">
                                        </div>
                                    </div>
                                   
                        </div>
                        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"prev\">
                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Previous</span>
                        </button>
                        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleAutoplaying\" data-bs-slide=\"next\">
                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                            <span class=\"visually-hidden\">Next</span>
                        </button>
                    </div>
                
    </div>
    <br>
    <br>



    
 
    <h1 class=\"title\"> {{ controller_name }}</h1>

    <br>


    <div class=\"justify-content-center\">
    
            <h5>Historique</h5>

                <br>
        
             <p>
                Le Shorinji Kempo a été fondé en 1947, au Japon, sous le nom de Nippon Seito Hoppa Shorinji Kempo, par Doshin So, dit Kaiso (le fondateur).
             </p>
                </br>
            <p>
                En 1946, à son retour d’un long séjour en Chine, où, après avoir reçu l’enseignement de différentes écoles d’arts martiaux, il est passé maître dans l’art du Shorinji Giwamonken, Kaiso retrouve son Japon natal, détruit par la guerre, soumis au chaos et à la violence d’une jeunesse désenchantée.
            </p>
                <br>
            <p>        
                Soucieux de pacifier cette société, en permettant à chaque individu d’œuvrer pour un monde meilleur, il commence à enseigner sa philosophie, héritée du bouddhisme zen. Ainsi, il fondera, en 1951, le Kongo Zen Sohonzan, dont le Shorinji Kempo constitue l’enseignement principal.
            </p>
                <br>
            <p>            
                Avec des techniques issues de traditions japonaises et chinoises qu’il remanie et organise en un système cohérent, il crée une nouvelle discipline. De cette entreprise naîtra, en 1953, la fédération japonaise de Shorinji Kempo.
            </p>

            <br>
            <br>
          
        <div class=\"inner4\">
            <img src={{asset('photos/autre/salle1Couleur.jpg')}} width = \"100%\" alt=\"salle de cours\"> 
        </div>   

            <br>
            <br>
            <br>
           

            <h5>Qu'est-ce que le <strong><i>Shorinji Kempo</i></strong> et quels sont ses bienfaits ?</h5> 
                
                <br>

                <ul class=\"ulaccueil\">
                    <li>Budo (Art martial traditionnel japonais), <i>Bu</i> signifie \"combat\" et <i>do</i> signifie \"voie\"</li>
                    <li>Budo de self-défense, par l'utilisation de l'esquive, le dégagement, la saisie, la projection</li>
                    <li>Amélioration de la condition physique</li>
                    <li>Développement de l'esprit</li>
                    <li>Philosophie active basée sur le principe \"vivons moitié pour nous même, moitié pour les autres\"</li>
                    <li>Bien-être</li>
                    <li>Mixte et accessible à tous</li>
                </ul>
                {# <img src={{asset('photos/autre/budo.png')}} width = \"100%\">  #}

           
                <hr>
                    <br>
            
   

            <h5>Les 3 techniques du <strong><i>Shorinji Kempo</i></strong></h5>
                <br>
                <p>
                
                <p><strong>Goho</strong> est l'application du principe dur du <i>Kongo Zen</i>, qui comprend les esquives ainsi que les parades et toutes les techniques de frappes, que ce soit avec les pieds ou les poings.</p>
                
                <br>
                <p><strong>Juho</strong> est l'application du principe souple du <i>Kongo Zen</i>, qui comprend les techniques de dégagement ou de blocage, ainsi que les techniques de projection et d'immobilisation au sol.</p>
                <br>
                <p><strong>Seiho</strong> est la partie de l'enseignement qui regroupe des techniques de remise en forme et de relaxation qui portent sur les points vitaux et sur la maîtrise de la respiration.</p>

            
            <hr>
            <br>

            <h5>Les grades au <strong><i>Shorinji Kempo</i></strong></h5>
                <div class=\"inner4\">
                    <img src={{asset('photos/autre/a.jpg')}} width = \"100%\"> 
                </div>
               
                <br>
                <br>
                <br>
                <br>
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
                                    <a href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">
                                        <i class=\"fa fa-location-arrow txt-pink\">
                                        </i>
                                    </a>
                                </figure>  
                                <div class=\"entry-header\">
                                    <h4 class=\"entry-title\">
                                        <a href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">Adresse</a>   
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
                                    <a href=\"{{ path('app_contact') }}\">
                                        <i class=\"fa fa fa-phone txt-pink\">                       
                                         </i>
                                    </a>    
                                </figure>    
                            <div class=\"entry-header\">
                                <h4 class=\"entry-title\">
                                    <a href=\"{{ path('app_contact') }}\">Contact</a> 
                                </h4>
                            </div>  
                            <div class=\"entry-content\">
                                <p>shorinjikempogennevilliers@gmail.com </br>01.41.47.00.85</p>
                            </div>        
                        </div> 
                    </div>  
                </div>               

       
    
</div> 


{% endblock %}", "accueil/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\accueil\\index.html.twig");
    }
}
