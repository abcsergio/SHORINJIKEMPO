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
class __TwigTemplate_79e57125070fb8ae0e51ae40e2e2a5fd extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil du Club De Shorinji Kempo de Gennevilliers";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
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
        return array (  304 => 216,  294 => 209,  258 => 176,  248 => 169,  218 => 142,  192 => 118,  168 => 96,  134 => 65,  108 => 42,  100 => 37,  92 => 32,  84 => 27,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "accueil/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\accueil\\index.html.twig");
    }
}
