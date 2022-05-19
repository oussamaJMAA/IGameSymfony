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

/* equipe/afficheFront.html.twig */
class __TwigTemplate_75a16301f2cc30d888af7be1fe7295966066e253c89c43bd740989ae3ad9c3b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/afficheFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/afficheFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "equipe/afficheFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Team";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"content-wrap\">
<div class=\"mpl-navbar-mobile-overlay\"></div>
<div>
<section class=\"mpl-banner mpl-banner-top mpl-banner-parallax\">
<div class=\"mpl-image\" data-speed=\"0.8\">
<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/dark/banner-bg.html"), "html", null, true);
        echo "\" alt=\"\" class=\"jarallax-img\">
</div>
<div class=\"mpl-banner-content mpl-box-sm\">
<div class=\"container\">
<div class=\"row justify-content-center\">
<div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
<div class=\"container mpl-box-md\">
<table class=\"table mb-60\">
<thead>
<tr>
<th scope=\"col\">#</th>
<th scope=\"col\">Nom Equipe</th>
<th scope=\"col\">Membres</th>
<th scope=\"col\">Point XP</th>
<th scope=\"col\">Tournois Gagne</th>
</tr>
</thead>
<tbody>

";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipes"]) || array_key_exists("equipes", $context) ? $context["equipes"] : (function () { throw new RuntimeError('Variable "equipes" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 33
            echo "<tr>
";
            // line 34
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "nomEquipe", [], "any", false, false, false, 34), "roukaia"))) {
                // line 35
                echo "<th scope=\"row\">1</th>
<td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "nomEquipe", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
<td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "membres", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
<td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "ptsExp", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
<td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "tournoisGagne", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
</tr>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "equipe/afficheFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 43,  144 => 39,  140 => 38,  136 => 37,  132 => 36,  129 => 35,  127 => 34,  124 => 33,  120 => 32,  98 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Team{% endblock %}

{% block body %}
{{parent()}}

<div class=\"content-wrap\">
<div class=\"mpl-navbar-mobile-overlay\"></div>
<div>
<section class=\"mpl-banner mpl-banner-top mpl-banner-parallax\">
<div class=\"mpl-image\" data-speed=\"0.8\">
<img src=\"{{asset('assets/images/dark/banner-bg.html')}}\" alt=\"\" class=\"jarallax-img\">
</div>
<div class=\"mpl-banner-content mpl-box-sm\">
<div class=\"container\">
<div class=\"row justify-content-center\">
<div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
<div class=\"container mpl-box-md\">
<table class=\"table mb-60\">
<thead>
<tr>
<th scope=\"col\">#</th>
<th scope=\"col\">Nom Equipe</th>
<th scope=\"col\">Membres</th>
<th scope=\"col\">Point XP</th>
<th scope=\"col\">Tournois Gagne</th>
</tr>
</thead>
<tbody>

{% for e in equipes %}
<tr>
{% if e.nomEquipe ==\"roukaia\" %}
<th scope=\"row\">1</th>
<td>{{e.nomEquipe}}</td>
<td>{{e.membres}}</td>
<td>{{e.ptsExp}}</td>
<td>{{e.tournoisGagne}}</td>
</tr>
{% endif %}
{% endfor %}
</tbody>
</table>

{% endblock %}
", "equipe/afficheFront.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\equipe\\afficheFront.html.twig");
    }
}
