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

/* home/index.html.twig */
class __TwigTemplate_ebf9d55454c3d5a7ae0a6cc63cdbf572 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/index.html.twig", 1);
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

        echo "Les dernières actualités du Club de Shorinji Kempo de Gennevilliers";
        
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
<div class=\"text-center mb-5\">
    <img src=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/logo_rouge-gris-noir_fond-clair.png"), "html", null, true);
        echo " width = \"20%\">

    <hr>
        <h1 class=\"title\">Voici nos dernières actualités</h1>
</div> 

<div class=\"justify-content-center\">
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 17
            echo "    <div class=\"row justify-content-center\">

    <div class=\"col card mb-3\" style=\"max-width:1200px\">
    
                <div class=\"row g-0\">
                    <div class=\"col-md-6 text-center\">
                            <div class=\"inner3\">
                                <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/article/" . twig_get_attribute($this->env, $this->source, $context["actualite"], "photo", [], "any", false, false, false, 24))), "html", null, true);
            echo "\" class=\"sizePhotoHome\" class=\"img-fluid rounded-start\"  alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titre", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                            </div>
                    </div>
                        <div class=\"col-md-6\">
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title\">
                                <h5 class=\"title\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "titre", [], "any", false, false, false, 30), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" ></a></h5>
                            <p>crée le : ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "dateDeCreation", [], "any", false, false, false, 31), " d/m/Y à H\\hi"), "html", null, true);
            echo "</p>
                             
                                   
                                   
                                <p class=\"text-decoration-none text-dark\" href=\"\" >";
            // line 35
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "description", [], "any", false, false, false, 35), 0, 400), "html", null, true);
            echo " </p>
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-primary card-link\">lire l'actu</a>
                                        
                                
                                </h4>           
                            </div> 
                        </div>               
                </div>
            </div>
       

    </div>    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        // line 68
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
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
                                                    <i class=\"fa fa-clock txt-pink\"></i>
                                                    ";
        // line 82
        echo "                                                    </i>
                                                </a>  
                                            </figure>
                                        <div class=\"entry-header\">
                                            <h4 class=\"entry-title\">
                                                <a href=\"";
        // line 87
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
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                                                    <i class=\"fa fa fa-phone txt-pink\">
                                                    ";
        // line 125
        echo "                                                    </i>
                                                </a>    
                                            </figure>    
                                        <div class=\"entry-header\">
                                            <h4 class=\"entry-title\">
                                                <a href=\"";
        // line 130
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
</div> 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 130,  250 => 125,  245 => 122,  207 => 87,  200 => 82,  195 => 79,  182 => 68,  162 => 48,  144 => 36,  140 => 35,  133 => 31,  127 => 30,  116 => 24,  107 => 17,  103 => 16,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Les dernières actualités du Club de Shorinji Kempo de Gennevilliers{% endblock %}

{% block content %}

<div class=\"example-wrapper\">
<div class=\"text-center mb-5\">
    <img src={{asset('photos/autre/logo_rouge-gris-noir_fond-clair.png')}} width = \"20%\">

    <hr>
        <h1 class=\"title\">Voici nos dernières actualités</h1>
</div> 

<div class=\"justify-content-center\">
{% for actualite in actualites %}
    <div class=\"row justify-content-center\">

    <div class=\"col card mb-3\" style=\"max-width:1200px\">
    
                <div class=\"row g-0\">
                    <div class=\"col-md-6 text-center\">
                            <div class=\"inner3\">
                                <img src=\"{{ asset('photos/article/' ~ actualite.photo) }}\" class=\"sizePhotoHome\" class=\"img-fluid rounded-start\"  alt=\"{{ actualite.titre }}\">
                            </div>
                    </div>
                        <div class=\"col-md-6\">
                            <div class=\"card-body text-center\">
                                <h4 class=\"card-title\">
                                <h5 class=\"title\">{{ actualite.titre}} <a href=\"{{ path('app_actualite_show' , {id: actualite.id} ) }}\" ></a></h5>
                            <p>crée le : {{ actualite.dateDeCreation | date ( \" d/m/Y \\à H\\\\hi\" ) }}</p>
                             
                                   
                                   
                                <p class=\"text-decoration-none text-dark\" href=\"\" >{{ actualite.description | slice(0,400) }} </p>
                                <a href=\"{{ path('app_actualite_show' , {id: actualite.id} ) }}\" class=\"btn btn-primary card-link\">lire l'actu</a>
                                        
                                
                                </h4>           
                            </div> 
                        </div>               
                </div>
            </div>
       

    </div>    
{% endfor %}





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
</div> 

{% endblock %}

", "home/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\home\\index.html.twig");
    }
}
