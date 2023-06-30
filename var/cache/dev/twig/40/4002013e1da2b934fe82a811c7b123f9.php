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

/* contact/index.html.twig */
class __TwigTemplate_a3ea92e4f9bae5f4f4fcacf7c3e2051a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "contact/index.html.twig", 1);
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

        echo "Page de Contact du Club de Shorinji Kempo de Gennevilliers";
        
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
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/logo_rouge-gris-noir_fond-clair.png"), "html", null, true);
        echo " width = \"20%\">
        
    </div>

    <hr>
    
    



        <h1 class=\"title\">Contactez-nous</h1>

            <div>
                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new RuntimeError('Variable "formulaire" does not exist.', 23, $this->source); })()), 'form');
        echo "
            </div>
    
    <br>
    <br>
    
    <h5>Pour tout renseignement complémentaire, vous pouvez aussi joindre :</h5>
        <ul>
        <li>José Jimenez, président : 06.13.25.80.72</li>
        <li>Julien Delord, professeur : 00.00.00.00.00</li>
        </ul>

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
        // line 51
        echo "                </div>
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
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
                            <i class=\"fa fa-clock txt-pink\"></i>
                            ";
        // line 65
        echo "                            </i>
                        </a>  
                    </figure>
                <div class=\"entry-header\">
                    <h4 class=\"entry-title\">
                        <a href=\"";
        // line 70
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
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                        <i class=\"fa fa fa-phone txt-pink\">
                        ";
        // line 108
        echo "                        </i>
                    </a>    
                </figure>    
            <div class=\"entry-header\">
                <h4 class=\"entry-title\">
                    <a href=\"";
        // line 113
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
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 113,  207 => 108,  202 => 105,  164 => 70,  157 => 65,  152 => 62,  139 => 51,  110 => 23,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Page de Contact du Club de Shorinji Kempo de Gennevilliers{% endblock %}

{% block content %}

<div class=\"example-wrapper\">
<div class=\"cont\">

        <img src={{asset('photos/autre/logo_rouge-gris-noir_fond-clair.png')}} width = \"20%\">
        
    </div>

    <hr>
    
    



        <h1 class=\"title\">Contactez-nous</h1>

            <div>
                {{ form(formulaire) }}
            </div>
    
    <br>
    <br>
    
    <h5>Pour tout renseignement complémentaire, vous pouvez aussi joindre :</h5>
        <ul>
        <li>José Jimenez, président : 06.13.25.80.72</li>
        <li>Julien Delord, professeur : 00.00.00.00.00</li>
        </ul>

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




{% endblock %}
", "contact/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\contact\\index.html.twig");
    }
}
