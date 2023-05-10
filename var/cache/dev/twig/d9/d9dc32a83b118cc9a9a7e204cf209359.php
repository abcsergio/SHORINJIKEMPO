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

/* cours/index.html.twig */
class __TwigTemplate_c47c26a45dd9c4d80fa9f48fdd568bfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "cours/index.html.twig", 1);
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

        echo "Les cours professionnels du Club de Shorinji Kempo de Gennevilliers";
        
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
        </div>
        <br>
            <hr>
    <h1 class=\"title\"> Les cours de Shorinji Kempo à Gennevilliers";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h1>
       
          <br>              
                                           
        <div class=\"justify-content-center\">
                <p>
                L'entrainement est à la fois mental et physique. Il développe l'attention, la concentration, l'énergie et l'endurance. A condition d'être assidu, chaque pratiquant peut évoluer à son rythme en s'efforçant toutefois d'être en phase avec le groupe. Le respect, la discipline et la collaboration entre partenaires sont essentiels.      
                </p>
                
        </div>

          <br>

        
        
        <br>

        <div class=\"justify-content-center\">
                <h5>
                La pratique du <i><strong>Shorinji Kempo</strong></i> a plusieurs composantes :
                </h5>

                <br>
                        
                <ul class=\"ulaccueil\">
                    <li><strong>Kihon</strong> (mouvements décomposés)</li>
                    <p>Tout comme un musicien doit travailler ses gammes, le <i>kenshi</i> doit répéter inlassablement les mouvements fondamentaux. Cette phase de l'entraînement consiste à effectuer ces mouvements individuellement en imitant au mieux le professeur. L'élève peut ainsi revoir ses bases, se corriger, se perfectionner et acquérir des automatismes avant de les mettre en application avec un partenaire</p>
                        <div>
                                <video src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/video2.mp4"), "html", null, true);
        echo "\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Kihon\">
                        </div> 

                        <br>

                    <li><strong>Hokei</strong> (kata)</li>
                    <p>Cette phase désigne des enchaînements codifiés qui constituent la forme canonique des attaques et des contre-attaques. Elle comprend les <i>kata</i> et les techniques offensives et défensives effectuées à deux, selon le principe Kumite Shutai</p>
                        <div>
                                <video src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/video12.mp4"), "html", null, true);
        echo "\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Hokei\">
                        </div>

                        <br>

                    <li><strong>Randori</strong> (combat libre)</li>
                    <p>Arbitré par un professeur, il consiste à appliquer les techniques apprises. La simulation d'un combat réel est indispensable pour un entraînement efficace. Le but du <i>Randori</i> n'est pas de vaincre mais de progresser avec son partenaire. le <i>Randori</i> permet d'acquérir réflexes, endurance et maîtrise de soi </p>
                        <div>
                                <video src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/video14.mp4"), "html", null, true);
        echo "\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Randori\">
                        </div>

                        <br>

                    <li><strong>Embu</strong> (combat démonstratif)</li>
                    <p>Préparé à l'avance, le <i>Embu</i> est présenté devant un jury qui l'évalue selon les critères formels (précision, rapidité, positionnement, énergie, esthétique). Sa préparation demande complicité, rigueur et persévérance</p>
                        <div>
                                <video src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/video16bis.mp4"), "html", null, true);
        echo "\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Embu\">
                        </div>

                        <br>

                    <li><strong>Chinkon</strong> (rituel)</li>
                    <p>Séance de méditation pendant laquelle les pratiquants récitent ensemble des <i>Seiku</i>, des <i>Seigan</i> et des <i>Shinjo</i>, sortes de maximes et principes qui constituent le cadre moral de l'art martial</p>
                        <div>
                                <video src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("videos/video15.mp4"), "html", null, true);
        echo "\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Chinkon\">
                        </div>    
                </ul>

                <br>
                <br>
        </div>                
                
        <div class=\"justify-content-center\">
                <h5>
                   La saison qui s'écoule de septembre à juin, comporte trois grandes phases progressives :
                </h5>   
                   <br>
                        <ol class=\"ulaccueil\">
                        <li>Intégration des nouveaux élèves et entraînement aux techniques fondamentales</li>     
                        <li>Entraînement par groupes de niveaux, afin de préparer d'éventuels examens</li>     
                        <li>Préparation de <i>embu</i> et entraînements au <i>randori</i> plus variés et plus intensifs</li>     
                </h5>        
                
        </div> 

        <br>
        <br>
        
        <div class=\"justify-content-center\">
                <p>
                A mesure qu'ils progressent, les élèves sont amenés à participer à l'encadrement du cours, à l'exemple des assistants du professeur. Cette dynamique d'enseignement, sur laquelle repose la tradition orale de l'art, permet à chacun de s'améliorer en apprenant à transmettre ses acquis.      
                </p>
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
                                            ";
        // line 118
        echo "                                        </div>
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
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
                                            <i class=\"fa fa-clock txt-pink\"></i>
                                            ";
        // line 132
        echo "                                            </i>
                                        </a>  
                                    </figure>
                                <div class=\"entry-header\">
                                    <h4 class=\"entry-title\">
                                        <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">Horaires</a> 
                                    </h4> 
                                </div>
                                    <div class=\"entry-content\">
                                        <p>Entrainements de 20h00 à 22h00 les lundis et mercredis</p>
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
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                                        <i class=\"fa fa fa-phone txt-pink\">
                                        ";
        // line 175
        echo "                                        </i>
                                    </a>    
                                </figure>    
                            <div class=\"entry-header\">
                                <h4 class=\"entry-title\">
                                    <a href=\"";
        // line 180
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
        return "cours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 180,  289 => 175,  284 => 172,  246 => 137,  239 => 132,  234 => 129,  221 => 118,  174 => 72,  163 => 64,  152 => 56,  141 => 48,  130 => 40,  99 => 12,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Les cours professionnels du Club de Shorinji Kempo de Gennevilliers{% endblock %}

{% block content %}
<div class=\"example-wrapper\">
        <div class=\"cont\">
                <img src={{asset('photos/autre/logo_rouge-gris-noir_fond-clair.png')}} width = \"20%\">
        </div>
        <br>
            <hr>
    <h1 class=\"title\"> Les cours de Shorinji Kempo à Gennevilliers{{ controller_name }}</h1>
       
          <br>              
                                           
        <div class=\"justify-content-center\">
                <p>
                L'entrainement est à la fois mental et physique. Il développe l'attention, la concentration, l'énergie et l'endurance. A condition d'être assidu, chaque pratiquant peut évoluer à son rythme en s'efforçant toutefois d'être en phase avec le groupe. Le respect, la discipline et la collaboration entre partenaires sont essentiels.      
                </p>
                
        </div>

          <br>

        
        
        <br>

        <div class=\"justify-content-center\">
                <h5>
                La pratique du <i><strong>Shorinji Kempo</strong></i> a plusieurs composantes :
                </h5>

                <br>
                        
                <ul class=\"ulaccueil\">
                    <li><strong>Kihon</strong> (mouvements décomposés)</li>
                    <p>Tout comme un musicien doit travailler ses gammes, le <i>kenshi</i> doit répéter inlassablement les mouvements fondamentaux. Cette phase de l'entraînement consiste à effectuer ces mouvements individuellement en imitant au mieux le professeur. L'élève peut ainsi revoir ses bases, se corriger, se perfectionner et acquérir des automatismes avant de les mettre en application avec un partenaire</p>
                        <div>
                                <video src=\"{{asset('videos/video2.mp4')}}\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Kihon\">
                        </div> 

                        <br>

                    <li><strong>Hokei</strong> (kata)</li>
                    <p>Cette phase désigne des enchaînements codifiés qui constituent la forme canonique des attaques et des contre-attaques. Elle comprend les <i>kata</i> et les techniques offensives et défensives effectuées à deux, selon le principe Kumite Shutai</p>
                        <div>
                                <video src=\"{{asset('videos/video12.mp4')}}\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Hokei\">
                        </div>

                        <br>

                    <li><strong>Randori</strong> (combat libre)</li>
                    <p>Arbitré par un professeur, il consiste à appliquer les techniques apprises. La simulation d'un combat réel est indispensable pour un entraînement efficace. Le but du <i>Randori</i> n'est pas de vaincre mais de progresser avec son partenaire. le <i>Randori</i> permet d'acquérir réflexes, endurance et maîtrise de soi </p>
                        <div>
                                <video src=\"{{asset('videos/video14.mp4')}}\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Randori\">
                        </div>

                        <br>

                    <li><strong>Embu</strong> (combat démonstratif)</li>
                    <p>Préparé à l'avance, le <i>Embu</i> est présenté devant un jury qui l'évalue selon les critères formels (précision, rapidité, positionnement, énergie, esthétique). Sa préparation demande complicité, rigueur et persévérance</p>
                        <div>
                                <video src=\"{{asset('videos/video16bis.mp4')}}\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Embu\">
                        </div>

                        <br>

                    <li><strong>Chinkon</strong> (rituel)</li>
                    <p>Séance de méditation pendant laquelle les pratiquants récitent ensemble des <i>Seiku</i>, des <i>Seigan</i> et des <i>Shinjo</i>, sortes de maximes et principes qui constituent le cadre moral de l'art martial</p>
                        <div>
                                <video src=\"{{asset('videos/video15.mp4')}}\" autoplay loop muted class=\"d-block w-100\" alt=\"vidéo sur les cours de Chinkon\">
                        </div>    
                </ul>

                <br>
                <br>
        </div>                
                
        <div class=\"justify-content-center\">
                <h5>
                   La saison qui s'écoule de septembre à juin, comporte trois grandes phases progressives :
                </h5>   
                   <br>
                        <ol class=\"ulaccueil\">
                        <li>Intégration des nouveaux élèves et entraînement aux techniques fondamentales</li>     
                        <li>Entraînement par groupes de niveaux, afin de préparer d'éventuels examens</li>     
                        <li>Préparation de <i>embu</i> et entraînements au <i>randori</i> plus variés et plus intensifs</li>     
                </h5>        
                
        </div> 

        <br>
        <br>
        
        <div class=\"justify-content-center\">
                <p>
                A mesure qu'ils progressent, les élèves sont amenés à participer à l'encadrement du cours, à l'exemple des assistants du professeur. Cette dynamique d'enseignement, sur laquelle repose la tradition orale de l'art, permet à chacun de s'améliorer en apprenant à transmettre ses acquis.      
                </p>
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
                                            {# ::before
                                            ::after     #}
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
                                            <i class=\"fa fa-clock txt-pink\"></i>
                                            {# ::before #}
                                            </i>
                                        </a>  
                                    </figure>
                                <div class=\"entry-header\">
                                    <h4 class=\"entry-title\">
                                        <a href=\"{{ path('app_informations') }}\">Horaires</a> 
                                    </h4> 
                                </div>
                                    <div class=\"entry-content\">
                                        <p>Entrainements de 20h00 à 22h00 les lundis et mercredis</p>
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
                                        {# ::before #}
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


{% endblock %}
", "cours/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\cours\\index.html.twig");
    }
}
