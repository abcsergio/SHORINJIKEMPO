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

/* base.html.twig */
class __TwigTemplate_f74d4d6559005f9837ea40fa18548e54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <title>SHORINJI KEMPO CLUB DE GENNEVILLIERS</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"SHORINJI KEMPO CLUB DE GENNEVILLIERS : spécialisé dans
         le Budo Shorinji Kempo, cours tous niveaux, tous les âges, apprentissages du Goho, Juho, Seiho.\">        
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 12
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "    </head>
    <body id=\"test\">
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "SHORINJI KEMPO CLUB DE GENNEVILLIERS";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Cormorant:wght@500&family=Dancing+Script&family=Gruppo&family=Libre+Baskerville&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100&family=Rubik:wght@300&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styleCss31.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\" ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65\" crossorigin=\"anonymous\">
        <link rel=\"icon\" href=\"photos/autre/favicon.ico\">
        ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
            
            

        ";
    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  110 => 24,  106 => 23,  97 => 17,  93 => 16,  88 => 13,  84 => 12,  77 => 5,  70 => 32,  68 => 31,  64 => 29,  62 => 23,  59 => 22,  56 => 12,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\base.html.twig");
    }
}
