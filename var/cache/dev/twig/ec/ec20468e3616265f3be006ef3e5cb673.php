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

/* historique/index.html.twig */
class __TwigTemplate_a0f9f1134a24cfecf18e1df5ff2fbaac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "historique/index.html.twig", 1);
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

        echo "Historique du club de Shorinji Kempo de Gennevilliers";
        
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
    <h1 class=\"title\"> Historique du Club de Shorinji Kempo de Gennevilliers";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h1>

            <br>
            
                <div class=\"justify-content-center\">
                    <p>Le Shorinji Kempo est présent à Gennevilliers depuis le début des années 70 et le club fait
                        partie depuis lors, du rayonnement de cet art martial japonais dans la région nord-ouest de
                        Paris.</p>

                    <h2>Step by step</h2>

                        <p>Fondé en 1973 par Najhi Hassan, professeur 6 e dan, le club fait connaître le Shorinji Kempo –
                        récemment débarqué en France - au public de la région parisienne. En 1995 il est repris par un
                        de ses élèves, Christian Gilles, 6 e dan, qui deviendra ensuite professeur à Montpellier. C’est
                        ensuite José Jimenez, aujourd’hui 7 e dan de Shorinji Kempo, instructeur fédéral et professeur
                        au club de Clichy, qui reprend le club de Gennevilliers.
                        Elève de José Jimenez, Julien Delord, 4 e dan et ayant obtenu de bons résultats lors de
                        championnats nationaux et internationaux, est depuis 2015 le professeur du club.</p> 
                        
                    <h2>Un Club qui inspire</h2> 
                        
                        <p>Le club de Gennevilliers est à l’origine d’une véritable lignée gennevilloise. Plusieurs
                            professeurs et cadres de la fédération de renom sont issus de ce club, et plusieurs élèves, dont
                            le professeur actuel, sont multimédaillés à des championnats de France et d’Europe et ont
                            également obtenus de très bons résultats en championnats du monde.</p>

                            <br>

                        <p>Le club, situé au cœur d’une grande ville dynamique, a contribué à établir durablement le
                        Shorinji Kempo dans les Hauts de Seine. De plus, la présence de plusieurs clubs dans la régions
                        permet d’organiser des interclubs pour se retrouver et s’entraîner ensemble.</p>    
                        
                            <br>

                        <p>Depuis une dizaine d’années, le club est installé dans les locaux du gymnase Caillebotte, dans
                            une salle moderne et lumineuse équipée de miroirs. Des conditions idéales pour s’entraîner et
                            progresser, et se développer en harmonie, hommes et femmes de toutes générations.</p>        
                        
                        
                   
                </div>
        
    


                    <div class=\"container\"> 

                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-xs-12\">
                                        <div class=\"section-header text-center\">
                                            <div class=\"section-separator border-center\">
                                            ";
        // line 65
        echo "                                        </div>
                                        <hr>
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
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
                                            <i class=\"fa fa-clock txt-pink\"></i>
                                            ";
        // line 80
        echo "                                            </i>
                                        </a>  
                                    </figure>
                                <div class=\"entry-header\">
                                    <h4 class=\"entry-title\">
                                        <a href=\"";
        // line 85
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
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                                        <i class=\"fa fa fa-phone txt-pink\">
                                        ";
        // line 123
        echo "                                        </i>
                                    </a>    
                                </figure>    
                            <div class=\"entry-header\">
                                <h4 class=\"entry-title\">
                                    <a href=\"";
        // line 128
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
        return "historique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 128,  222 => 123,  217 => 120,  179 => 85,  172 => 80,  167 => 77,  153 => 65,  99 => 12,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Historique du club de Shorinji Kempo de Gennevilliers{% endblock %}

{% block content %}
<div class=\"example-wrapper\">
    <div class=\"cont\">
        <img src={{asset('photos/autre/logo_rouge-gris-noir_fond-clair.png')}} width = \"20%\">
    </div>
    <br>
        <hr>
    <h1 class=\"title\"> Historique du Club de Shorinji Kempo de Gennevilliers{{ controller_name }}</h1>

            <br>
            
                <div class=\"justify-content-center\">
                    <p>Le Shorinji Kempo est présent à Gennevilliers depuis le début des années 70 et le club fait
                        partie depuis lors, du rayonnement de cet art martial japonais dans la région nord-ouest de
                        Paris.</p>

                    <h2>Step by step</h2>

                        <p>Fondé en 1973 par Najhi Hassan, professeur 6 e dan, le club fait connaître le Shorinji Kempo –
                        récemment débarqué en France - au public de la région parisienne. En 1995 il est repris par un
                        de ses élèves, Christian Gilles, 6 e dan, qui deviendra ensuite professeur à Montpellier. C’est
                        ensuite José Jimenez, aujourd’hui 7 e dan de Shorinji Kempo, instructeur fédéral et professeur
                        au club de Clichy, qui reprend le club de Gennevilliers.
                        Elève de José Jimenez, Julien Delord, 4 e dan et ayant obtenu de bons résultats lors de
                        championnats nationaux et internationaux, est depuis 2015 le professeur du club.</p> 
                        
                    <h2>Un Club qui inspire</h2> 
                        
                        <p>Le club de Gennevilliers est à l’origine d’une véritable lignée gennevilloise. Plusieurs
                            professeurs et cadres de la fédération de renom sont issus de ce club, et plusieurs élèves, dont
                            le professeur actuel, sont multimédaillés à des championnats de France et d’Europe et ont
                            également obtenus de très bons résultats en championnats du monde.</p>

                            <br>

                        <p>Le club, situé au cœur d’une grande ville dynamique, a contribué à établir durablement le
                        Shorinji Kempo dans les Hauts de Seine. De plus, la présence de plusieurs clubs dans la régions
                        permet d’organiser des interclubs pour se retrouver et s’entraîner ensemble.</p>    
                        
                            <br>

                        <p>Depuis une dizaine d’années, le club est installé dans les locaux du gymnase Caillebotte, dans
                            une salle moderne et lumineuse équipée de miroirs. Des conditions idéales pour s’entraîner et
                            progresser, et se développer en harmonie, hommes et femmes de toutes générations.</p>        
                        
                        
                   
                </div>
        
    


                    <div class=\"container\"> 

                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-xs-12\">
                                        <div class=\"section-header text-center\">
                                            <div class=\"section-separator border-center\">
                                            {# ::before
                                            ::after     #}
                                        </div>
                                        <hr>
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
", "historique/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\historique\\index.html.twig");
    }
}
