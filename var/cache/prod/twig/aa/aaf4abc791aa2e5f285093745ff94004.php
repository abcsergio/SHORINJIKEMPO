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

/* professeur/index.html.twig */
class __TwigTemplate_d71ae1ae299ac89332e943714de4f1b0 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "professeur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Les professeurs et le président du Club de Shorinji Kempo de Gennevilliers";
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
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/autre/logo_rouge-gris-noir_fond-clair.png"), "html", null, true);
        echo " width = \"20%\">
    </div>
    <br>
        <hr>
    <h1 class=\"title\"> Les Professeurs de Shorinji Kempo à Gennevilliers";
        // line 13
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo "</h1>

            <br>
            

        <div class=\"justify-content-center\">
            <h2>Julien Delord <i>(Professeur principal)</i></h2>

             


                <p>
                    4ème DAN, élève de José Jimenez
                </p>
                    <div class=\"inner\">
                        <img src=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/professeur/Julien4.jpg"), "html", null, true);
        echo " width = \"100%\" alt=\"portrait de Julien Delord\">
                        
                    </div>    
        </div>
            <br>
            <br>
            <br>

    <div class=\"justify-content-center\">
        <h2>Jamaa Abidar <i>(Professeur assistant)</i></h2>
            <p>
                1ère DAN
            </p>
    
                <div class=\"inner\">
                    <img src=";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/professeur/prof2.jpg"), "html", null, true);
        echo " width = \"100%\" alt=\"portrait de Jamaa Abidar\">
                </div>    
    </div>
            <br>
            <br>
            <br>

    <div class=\"justify-content-center\">
        <h2>José Jimenez <i>(Président, Coordinateur)</i></h2>
            
            <p>
                7ème DAN, élève de M.Najhi, 6ème DAN et assistant de Maître Aosaka, 9ème DAN
            </p>
    
                <div class=\"inner\">
                    <img src=";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("photos/professeur/jose1.jpg"), "html", null, true);
        echo " width = \"100%\" alt=\"portrait de José Jimenez\">
                </div>    
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
        // line 79
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
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_informations");
        echo "\">
                                            <i class=\"fa fa-clock txt-pink\"></i>
                                            ";
        // line 93
        echo "                                            </i>
                                        </a>  
                                    </figure>
                                <div class=\"entry-header\">
                                    <h4 class=\"entry-title\">
                                        <a href=\"";
        // line 98
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
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">
                                        <i class=\"fa fa fa-phone txt-pink\">
                                        ";
        // line 136
        echo "                                        </i>
                                    </a>    
                                </figure>    
                            <div class=\"entry-header\">
                                <h4 class=\"entry-title\">
                                    <a href=\"";
        // line 141
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
        return "professeur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 141,  214 => 136,  209 => 133,  171 => 98,  164 => 93,  159 => 90,  146 => 79,  124 => 58,  106 => 43,  88 => 28,  70 => 13,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "professeur/index.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\professeur\\index.html.twig");
    }
}
