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

/* tournois/participants.html.twig */
class __TwigTemplate_364879bfc5df8c7cd50633b588e8fdc6d3461b0ca2141b07e9d8b78b9a4010ed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/participants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/participants.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "tournois/participants.html.twig", 1);
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

        echo "Participants";
        
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


<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>Tournaments</title>
<meta name=\"description\" content=\"MonsterPlay - Superpower for Gaming Websites\">
<meta name=\"keywords\" content=\"gaming, game, esports, community, template, html, bootstrap, webpack\">
<meta name=\"author\" content=\"nK\">
<link rel=\"icon\" type=\"image/png\" href=\"assets/images/favicon.png\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


</head>
<body>
<br>
<div class=\"mpl-box-md\">
<div class=\"container\">
<div class=\"row hgap-lg vgap-lg\">
<div class=\"col-lg mpl-content\">
<nav aria-label=\"breadcrumb\">
<ol class=\"breadcrumb\">
<li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
<li class=\"breadcrumb-item active\" aria-current=\"page\">Participants</li>
</ol>
</nav>


";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["participants"]) || array_key_exists("participants", $context) ? $context["participants"] : (function () { throw new RuntimeError('Variable "participants" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 37
            echo "<div class=\"row vgap\" data-sr=\"tournaments\" data-sr-interval=\"100\" data-sr-duration=\"1000\" data-sr-distance=\"20\">
<div class=\"col-12 col-lg-6\" data-sr-item=\"tournaments\">
<div class=\"cyberpress-tournament\">
<ul class=\"cyberpress-tournament-info\">
<li>
<a href=\"#\" class=\"cyberpress-game-inline-link\">
<img src=\"assets/images/esports/game-dota-2.svg\" alt=\"\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "equipeNom", [], "any", false, false, false, 43), "html", null, true);
            echo "</a>
</li>






</ul>
</div>
</div>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tournois/participants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 57,  133 => 43,  125 => 37,  121 => 36,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Participants{% endblock %}

{% block body %}
{{parent()}}


<html lang=\"en\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>Tournaments</title>
<meta name=\"description\" content=\"MonsterPlay - Superpower for Gaming Websites\">
<meta name=\"keywords\" content=\"gaming, game, esports, community, template, html, bootstrap, webpack\">
<meta name=\"author\" content=\"nK\">
<link rel=\"icon\" type=\"image/png\" href=\"assets/images/favicon.png\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">


</head>
<body>
<br>
<div class=\"mpl-box-md\">
<div class=\"container\">
<div class=\"row hgap-lg vgap-lg\">
<div class=\"col-lg mpl-content\">
<nav aria-label=\"breadcrumb\">
<ol class=\"breadcrumb\">
<li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
<li class=\"breadcrumb-item active\" aria-current=\"page\">Participants</li>
</ol>
</nav>


{% for p in participants %}
<div class=\"row vgap\" data-sr=\"tournaments\" data-sr-interval=\"100\" data-sr-duration=\"1000\" data-sr-distance=\"20\">
<div class=\"col-12 col-lg-6\" data-sr-item=\"tournaments\">
<div class=\"cyberpress-tournament\">
<ul class=\"cyberpress-tournament-info\">
<li>
<a href=\"#\" class=\"cyberpress-game-inline-link\">
<img src=\"assets/images/esports/game-dota-2.svg\" alt=\"\">{{ p.equipeNom}}</a>
</li>






</ul>
</div>
</div>
</div>
<br>
{% endfor %}
</body>
</html>
{% endblock %}
", "tournois/participants.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\tournois\\participants.html.twig");
    }
}
