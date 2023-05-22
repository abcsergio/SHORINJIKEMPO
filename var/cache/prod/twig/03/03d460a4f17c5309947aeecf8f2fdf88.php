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
class __TwigTemplate_369a0713361edd61c54c83f91f98b1b7 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "historique/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Historique du club de Shorinji Kempo de Gennevilliers";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo "</h1>

            <br>
            

        
    


                    <div class=\"container\"> 

                                <div class=\"row\">
                                    <div class=\"col-lg-12 col-md-12 col-xs-12\">
                                        <div class=\"section-header text-center\">
                                            <div class=\"section-separator border-center\">
                                            ";
        // line 29
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
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
                                            <i class=\"fa fa-clock txt-pink\"></i>
                                            ";
        // line 44
        echo "                                            </i>
                                        </a>  
                                    </figure>
                                <div class=\"entry-header\">
                                    <h4 class=\"entry-title\">
                                        <a href=\"";
        // line 49
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
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                                        <i class=\"fa fa fa-phone txt-pink\">
                                        ";
        // line 87
        echo "                                        </i>
                                    </a>    
                                </figure>    
                            <div class=\"entry-header\">
                                <h4 class=\"entry-title\">
                                    <a href=\"";
        // line 92
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
        return "historique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 92,  156 => 87,  151 => 84,  113 => 49,  106 => 44,  101 => 41,  87 => 29,  69 => 12,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "historique/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\historique\\index.html.twig");
    }
}
