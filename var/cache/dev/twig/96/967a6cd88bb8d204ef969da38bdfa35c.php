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

/* informations/index.html.twig */
class __TwigTemplate_bcde689ec489fab159f0795890665aa8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "informations/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "informations/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "informations/index.html.twig", 1);
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

        echo "Informations concernant l'inscription, les modalités et les rensignements à fournir au Club de Shorinji Kempo de Gennevilliers";
        
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
<div class=\"pic\">
<div class=\"example-wrapper\">
    <div class=\"cont\">
        <img src=";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/logo_rouge-gris-noir_fond-clair.png"), "html", null, true);
        echo " width = \"20%\">
        <hr>
    <h1 class=\"title\"> Inscriptions au Club";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>


            <br>
            <br>

";
        // line 20
        echo "                
            
                <div class=\"middle\">
                    <div class=\"justify-content-center\">
                        <h5>Lieu d'entraînement</h5>
                        <p>Gymnase Gustave Caillebotte, 7 rue Deslandes, 92230, Gennevilliers</p>
                            <div class=\"post text-center wow flipInx animated\" data-wow-delay=\".5s\"> 
                                <figure class=\"post-thumbnail\">
                                            <a href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">

                                            <div class=\"fa2\">
                                                <i class=\"fa fa-location-arrow txt-pink\">
                                            voir sur le plan
                                                </i>
                                            </div>

                                            </a>
                                </figure> 
                            </div>                                            
                    </div> 
                    
                    <br>
                  
                    

                    <div class=\"justify-content-center\">
                        <h5>Horaires des cours</h5>
                            
                       
                        <p>Lundi et Mercredi : 20h-22h </p>
                                                           
                    </div>

                    <br>
                    

                    <div class=\"justify-content-center\">
                        <h5>Pièces à fournir</h5>
                        
                               
                        <p>1 certificat médical d'aptitude à la pratique du <strong><i>Shorinji Kempo</i></strong></p>
                        <p>1 photo d'identité</p>
                        <p>1 demande de licence</p5>
                                
                    </div>

                    <br>
                    
                    

                    <div class=\"justify-content-center\">
                        <h5>Tarif</h5>
                           
                        
                        <h6> <strong> 180€</strong></h6>
                         
                        <p><i>Chèque à l'ordre du Shorinji Kempo club de Gennevilliers</i></p>          
                    </div>
                </div>

</div>      
";
        // line 82
        echo "                
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
        // line 99
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
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
                                            <i class=\"fa fa-clock txt-pink\"></i>
                                            ";
        // line 113
        echo "                                            </i>
                                        </a>  
                                    </figure>
                                <div class=\"entry-header\">
                                    <h4 class=\"entry-title\">
                                        <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">Horaires</a> 
                                    </h4> 
                                </div>
                                    <div class=\"entry-content\">
                                <p>lundi et mercredi </br> de 20h00 à 22h00 </p>
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
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                                        <i class=\"fa fa fa-phone txt-pink\">
                                        ";
        // line 156
        echo "                                        </i>
                                    </a>    
                                </figure>    
                            <div class=\"entry-header\">
                                <h4 class=\"entry-title\">
                                    <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact</a> 
                                </h4>
                            </div>  
                        <div class=\"entry-content\">
                            <p>shorinjikempogennevilliers@gmail.com </br>06.13.25.80.72</p>
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
        return "informations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 161,  257 => 156,  252 => 153,  214 => 118,  207 => 113,  202 => 110,  189 => 99,  172 => 82,  109 => 20,  99 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Informations concernant l'inscription, les modalités et les rensignements à fournir au Club de Shorinji Kempo de Gennevilliers{% endblock %}

{% block content %}

<div class=\"pic\">
<div class=\"example-wrapper\">
    <div class=\"cont\">
        <img src={{asset('photos/autre/logo_rouge-gris-noir_fond-clair.png')}} width = \"20%\">
        <hr>
    <h1 class=\"title\"> Inscriptions au Club{{ controller_name }}</h1>
    </div>


            <br>
            <br>

{# <div class=\"d-flex justify-content\">                 #}
                
            
                <div class=\"middle\">
                    <div class=\"justify-content-center\">
                        <h5>Lieu d'entraînement</h5>
                        <p>Gymnase Gustave Caillebotte, 7 rue Deslandes, 92230, Gennevilliers</p>
                            <div class=\"post text-center wow flipInx animated\" data-wow-delay=\".5s\"> 
                                <figure class=\"post-thumbnail\">
                                            <a href=\"https://goo.gl/maps/dMFQGnb9dSDSXSt77\" target=\"_blank\">

                                            <div class=\"fa2\">
                                                <i class=\"fa fa-location-arrow txt-pink\">
                                            voir sur le plan
                                                </i>
                                            </div>

                                            </a>
                                </figure> 
                            </div>                                            
                    </div> 
                    
                    <br>
                  
                    

                    <div class=\"justify-content-center\">
                        <h5>Horaires des cours</h5>
                            
                       
                        <p>Lundi et Mercredi : 20h-22h </p>
                                                           
                    </div>

                    <br>
                    

                    <div class=\"justify-content-center\">
                        <h5>Pièces à fournir</h5>
                        
                               
                        <p>1 certificat médical d'aptitude à la pratique du <strong><i>Shorinji Kempo</i></strong></p>
                        <p>1 photo d'identité</p>
                        <p>1 demande de licence</p5>
                                
                    </div>

                    <br>
                    
                    

                    <div class=\"justify-content-center\">
                        <h5>Tarif</h5>
                           
                        
                        <h6> <strong> 180€</strong></h6>
                         
                        <p><i>Chèque à l'ordre du Shorinji Kempo club de Gennevilliers</i></p>          
                    </div>
                </div>

</div>      
{# </div> #}
                
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
                                <p>lundi et mercredi </br> de 20h00 à 22h00 </p>
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
                            <p>shorinjikempogennevilliers@gmail.com </br>06.13.25.80.72</p>
                        </div>        
                    </div> 
                </div>  
            </div>   

</div>
{% endblock %}
", "informations/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\informations\\index.html.twig");
    }
}
