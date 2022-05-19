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

/* tournois/front.html.twig */
class __TwigTemplate_a8231bc975b031a4a62761c419519359b0d8800b5d8f828ac30cac95f6b921d0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/front.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "tournois/front.html.twig", 1);
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

        echo "Tournois index";
        
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

<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-countdown/dist/jquery.countdown.mind1f1.js?v=2.2.0"), "html", null, true);
        echo "\"></script>
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
<li class=\"breadcrumb-item active\" aria-current=\"page\">eSports Tournaments</li>
</ol>
</nav>

";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tournois"]) || array_key_exists("tournois", $context) ? $context["tournois"] : (function () { throw new RuntimeError('Variable "tournois" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
            // line 36
            echo "
<div class=\"row vgap\" data-sr=\"tournaments\" data-sr-interval=\"100\" data-sr-duration=\"1000\" data-sr-distance=\"20\">
<div class=\"col-12 col-lg-6\" data-sr-item=\"tournaments\">
<div class=\"cyberpress-tournament\">
<h2 class=\"cyberpress-tournament-title h4\">
<a href=\"esports-single-tournament.html\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "nomTournois", [], "any", false, false, false, 41), "html", null, true);
            echo "</a>
<p id=\"demo\"></p>
</h2>
<ul class=\"cyberpress-tournament-info\">
<li>
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M16 2V6M8 2V6M3 10H21M5 4H19C20.1046 4 21 4.89543 21 6V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V6C3 4.89543 3.89543 4 5 4Z\" />
</svg>";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["tournoi"], "dateTournois", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "dateTournois", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
</li>
<li>
<a href=\"#\" class=\"cyberpress-game-inline-link\">
<img src=\"assets/images/esports/game-dota-2.svg\" alt=\"\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "platforme", [], "any", false, false, false, 52), "html", null, true);
            echo "</a>
</li>
<li><svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M20 12V22M20 12H12M20 12H22M20 22H4M20 22H12M4 22V12M4 22H12M4 12H12M4 12H2M2 7H22M2 7V12M2 7H7.5M22 7V12M22 7H12M22 7H16.5M22 12H12M2 12H12M12 22V12M12 7H7.5M12 7C12 7 11 2 7.5 2C6.83696 2 6.20107 2.26339 5.73223 2.73223C5.26339 3.20107 5 3.83696 5 4.5C5 5.16304 5.26339 5.79893 5.73223 6.26777C6.20107 6.73661 6.83696 7 7.5 7M12 7H16.5M12 7C12 7 13 2 16.5 2C17.163 2 17.7989 2.26339 18.2678 2.73223C18.7366 3.20107 19 3.83696 19 4.5C19 5.16304 18.7366 5.79893 18.2678 6.26777C17.7989 6.73661 17.163 7 16.5 7M12 7V12\" />
</svg>\$";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "recompense", [], "any", false, false, false, 56), "html", null, true);
            echo "

<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participer", ["id" => twig_get_attribute($this->env, $this->source, $context["tournoi"], "id", [], "any", false, false, false, 58), "id2" => 27]), "html", null, true);
            echo "\"><button>participer</button></a>
<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("participants", ["id" => twig_get_attribute($this->env, $this->source, $context["tournoi"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"><button>participants</button></a>

<div class=\"container mpl-box-md\">

<div class=\"mpl-countdown h4\" data-end=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "dateTournois", [], "any", false, false, false, 63), "Y-m-d"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "timeT", [], "any", false, false, false, 63), "H:i:s"), "html", null, true);
            echo "\" data-timezone=\"Tunis\"></div>
</div>


<script>
            \$('.mpl-countdown').each(function()
            {
                const \$this = \$(this);
                const tz = \$this.attr('data-timezone');
                let end = \$this.attr('data-end');
                end = moment.tz(end, tz).toDate();
                \$this.countdown(end, function(event)
                {
                    \$this.html(event.strftime(['<div class=\"mpl-countdown-item\">',
                     '<span>Days</span>', '<span><span>%D</span></span>', '</div>',
                      '<div class=\"mpl-countdown-item\">', '<span>Hours</span>', 
                      '<span><span>%H</span></span>', '</div>',
                       '<div class=\"mpl-countdown-item\">',
                       '<span>Minutes</span>', '<span><span>%M</span></span>', 
                       '</div>', '<div class=\"mpl-countdown-item\">', '<span>Seconds</span>',
                        '<span><span>%S</span></span>', '</div>'].join('')));
                });
            });
        </script>


</ul>
</div>
</div>
</div>
<br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournoi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tournois/front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 95,  174 => 63,  167 => 59,  163 => 58,  158 => 56,  151 => 52,  144 => 48,  134 => 41,  127 => 36,  123 => 35,  105 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Tournois index{% endblock %}

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

<script src=\"{{asset('vendor/jquery-countdown/dist/jquery.countdown.mind1f1.js?v=2.2.0')}}\"></script>
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
<li class=\"breadcrumb-item active\" aria-current=\"page\">eSports Tournaments</li>
</ol>
</nav>

{% for tournoi in tournois %}

<div class=\"row vgap\" data-sr=\"tournaments\" data-sr-interval=\"100\" data-sr-duration=\"1000\" data-sr-distance=\"20\">
<div class=\"col-12 col-lg-6\" data-sr-item=\"tournaments\">
<div class=\"cyberpress-tournament\">
<h2 class=\"cyberpress-tournament-title h4\">
<a href=\"esports-single-tournament.html\">{{tournoi.nomTournois}}</a>
<p id=\"demo\"></p>
</h2>
<ul class=\"cyberpress-tournament-info\">
<li>
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M16 2V6M8 2V6M3 10H21M5 4H19C20.1046 4 21 4.89543 21 6V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V6C3 4.89543 3.89543 4 5 4Z\" />
</svg>{{ tournoi.dateTournois ? tournoi.dateTournois|date('Y-m-d') : '' }}
</li>
<li>
<a href=\"#\" class=\"cyberpress-game-inline-link\">
<img src=\"assets/images/esports/game-dota-2.svg\" alt=\"\">{{ tournoi.platforme }}</a>
</li>
<li><svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M20 12V22M20 12H12M20 12H22M20 22H4M20 22H12M4 22V12M4 22H12M4 12H12M4 12H2M2 7H22M2 7V12M2 7H7.5M22 7V12M22 7H12M22 7H16.5M22 12H12M2 12H12M12 22V12M12 7H7.5M12 7C12 7 11 2 7.5 2C6.83696 2 6.20107 2.26339 5.73223 2.73223C5.26339 3.20107 5 3.83696 5 4.5C5 5.16304 5.26339 5.79893 5.73223 6.26777C6.20107 6.73661 6.83696 7 7.5 7M12 7H16.5M12 7C12 7 13 2 16.5 2C17.163 2 17.7989 2.26339 18.2678 2.73223C18.7366 3.20107 19 3.83696 19 4.5C19 5.16304 18.7366 5.79893 18.2678 6.26777C17.7989 6.73661 17.163 7 16.5 7M12 7V12\" />
</svg>\${{ tournoi.recompense }}

<a href=\"{{ path('participer', {'id': tournoi.id,'id2':27}) }}\"><button>participer</button></a>
<a href=\"{{ path('participants', {'id': tournoi.id}) }}\"><button>participants</button></a>

<div class=\"container mpl-box-md\">

<div class=\"mpl-countdown h4\" data-end=\"{{tournoi.dateTournois|date('Y-m-d') }} {{tournoi.timeT|date('H:i:s')}}\" data-timezone=\"Tunis\"></div>
</div>


<script>
            \$('.mpl-countdown').each(function()
            {
                const \$this = \$(this);
                const tz = \$this.attr('data-timezone');
                let end = \$this.attr('data-end');
                end = moment.tz(end, tz).toDate();
                \$this.countdown(end, function(event)
                {
                    \$this.html(event.strftime(['<div class=\"mpl-countdown-item\">',
                     '<span>Days</span>', '<span><span>%D</span></span>', '</div>',
                      '<div class=\"mpl-countdown-item\">', '<span>Hours</span>', 
                      '<span><span>%H</span></span>', '</div>',
                       '<div class=\"mpl-countdown-item\">',
                       '<span>Minutes</span>', '<span><span>%M</span></span>', 
                       '</div>', '<div class=\"mpl-countdown-item\">', '<span>Seconds</span>',
                        '<span><span>%S</span></span>', '</div>'].join('')));
                });
            });
        </script>


</ul>
</div>
</div>
</div>
<br>
{% endfor %}
</body>
</html>
{% endblock %}
", "tournois/front.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\tournois\\front.html.twig");
    }
}
