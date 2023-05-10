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

/* article/show.html.twig */
class __TwigTemplate_b3511498d19d2e67a05ab5d2c580fa88 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "titre", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "<div class=\"row div-show-produit d-flex justify-content-center align-items-center\">
    <div class=\"col-md-10\">
        <div class=\"card\">
            <div class=\"row mb-5\">
                <div class=\"col-md-6\">
                    <div class=\"images p-3\">
                        <div class=\"text-center p-4\"> <img id=\"img-fluid\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("photos/article/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "photo", [], "any", false, false, false, 14))), "html", null, true);
        echo "\" width=\"250\" /> </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product p-4\">
                        ";
        // line 24
        echo "                        <div class=\"mt-4 mb-3\">

                            <h5 class=\"text-uppercase\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), "html", null, true);
        echo " </h5>
                           
                        </div>
                    </div>
                    <p class=\"about\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                           
                    <div class=\"cart mt-4 align-items-center text-center\"> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  96 => 26,  92 => 24,  84 => 14,  76 => 8,  69 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block title %}
{{ article.titre }}
{% endblock %}

{% block content %}
<div class=\"row div-show-produit d-flex justify-content-center align-items-center\">
    <div class=\"col-md-10\">
        <div class=\"card\">
            <div class=\"row mb-5\">
                <div class=\"col-md-6\">
                    <div class=\"images p-3\">
                        <div class=\"text-center p-4\"> <img id=\"img-fluid\" src=\"{{ asset('photos/article/' ~ article.photo ) }}\" width=\"250\" /> </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"product p-4\">
                        {# <div class=\"d-flex justify-content-between align-items-center\">
                            <div class=\"d-flex align-items-center\"> <i class=\"fa fa-long-arrow-left\"></i> <span
                                    class=\"ml-1\">Back</span> </div> 
                                <i class=\"fa fa-shopping-cart text-muted\"></i>
                        </div> #}
                        <div class=\"mt-4 mb-3\">

                            <h5 class=\"text-uppercase\">{{ article.titre }} </h5>
                           
                        </div>
                    </div>
                    <p class=\"about\">{{ article.description }}</p>
                           
                    <div class=\"cart mt-4 align-items-center text-center\"> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "article/show.html.twig", "C:\\Users\\denis\\Desktop\\SymfonyStage\\ShorinjiKempo2\\templates\\article\\show.html.twig");
    }
}
