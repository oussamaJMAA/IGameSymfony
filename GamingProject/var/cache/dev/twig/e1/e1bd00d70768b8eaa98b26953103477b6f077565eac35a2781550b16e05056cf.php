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

/* baseFront.html.twig */
class __TwigTemplate_68bcb7147dba574b829060b54f8fa35c82f864d3eeec00749a59fc44896fc15b extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
   
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"description\" content=\"MonsterPlay - Superpower for Gaming Websites\">
<meta name=\"keywords\" content=\"gaming, game, esports, community, template, html, bootstrap, webpack\">
<meta name=\"author\" content=\"nK\">

<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.png"), "html", null, true);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

 ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "</head>

<body>
";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 1090
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("use.typekit.net/vgd1cli.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.minc420.css?v=5.1.3"), "html", null, true);
        echo "\" />

<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min7316.css?v=6.8.2"), "html", null, true);
        echo "\" />

<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fancybox/dist/jquery.fancybox.min438f.css?v=3.5.7"), "html", null, true);
        echo "\" />

<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/slider-revolution/css/settings4ed6.css?v=5.4.8"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/slider-revolution/css/layers4ed6.css?v=5.4.8"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/slider-revolution/css/navigation4ed6.css?v=5.4.8"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/monsterplay.min9f1e.css?v=1.1.0"), "html", null, true);
        echo "\">



<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom9f1e.css?v=1.1.0"), "html", null, true);
        echo "\">


<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/dist/jquery.min45e0.js?v=3.6.0"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/preloader.min9f1e.js?v=1.1.0"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "<div class=\"mpl-preloader\">
<div class=\"mpl-preloader-content\">
<div class=\"mpl-preloader-title display-1 h1\">iGame!</div>
<div class=\"mpl-preloader-progress\">
<div></div>
</div>
</div>
</div>
<div class=\"mpl-preloader-bg\"></div>


<nav class=\"mpl-navbar-top mpl-navbar\">
<div class=\"mpl-navbar-mobile-overlay\"></div>
<div class=\"container mpl-navbar-container\">
<a href=\"#\" class=\"mpl-navbar-toggle\"></a>
<div class=\"mpl-navbar-brand\">
<a href=\"index.html\">
<img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        echo "\" alt=\"\">
</a>
</div>
<div class=\"mpl-navbar-content\">
<ul class=\"mpl-navbar-nav\">


<li>
<a href=\"dark-index.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\">Home</span>
</a>
</li>

<li class=\"mpl-dropdown\">
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Blog </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li class=\"mpl-dropdown\">
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Grid </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sidebar Right </span>
</a>
</li>
<li>
<a href=\"blog-grid-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sidebar Left </span>
</a>
</li>
<li>
<a href=\"blog-grid-no-sidebar.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> No Sidebar </span>
</a>
</li>
</ul>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"blog-list-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> List </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-list-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sidebar Right </span>
</a>
</li>
<li>
<a href=\"blog-list-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sidebar Left </span>
</a>
</li>
</ul>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"blog-post-gallery.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Single Post </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-post-gallery.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Gallery </span>
</a>
</li>
<li>
<a href=\"blog-post-carousel.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Carousel </span>
</a>
</li>
<li>
<a href=\"blog-post-simple.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Simple </span>
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Shop </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li class=\"mpl-dropdown\">
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Products List </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Right Sidebar </span>
</a>
</li>
<li>
<a href=\"shop-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Left Sidebar </span>
</a>
</li>
<li>
<a href=\"shop-no-sidebar.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> No Sidebar </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"shop-product.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Single Product </span>
</a>
</li>
<li>
<a href=\"cart.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Cart </span>
</a>
</li>
<li>
<a href=\"checkout.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Checkout </span>
</a>
</li>
</ul>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"esports-teams.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> eSports </span>
</a>
<div class=\"mpl-dropdown-menu\">
<div class=\"mpl-navbar-nav-mega\">
<ul role=\"menu\" class=\"mpl-navbar-nav\">
<li>
<a href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affiche_front");
        echo "\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Teams You're in</span>
</a>
</li>
<li>
<a href=\"";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_front");
        echo "\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Create Team</span>
</a>
</li>
<li>
<a href=\"";
        // line 216
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front");
        echo "\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Tournaments </span>
</a>
</li>

<li>
<a href=\"esports-games.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Games </span>
</a>
</li>
</ul>

</div>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"component-buttons.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Components </span>
</a>
<div class=\"mpl-dropdown-menu\">
<div class=\"mpl-navbar-nav-mega\">
<ul role=\"menu\" class=\"mpl-navbar-nav\">
<li>
<a href=\"component-buttons.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Buttons </span>
</a>
</li>
<li>
<a href=\"component-pagination.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Pagination </span>
</a>
</li>
<li>
<a href=\"component-page-pagination.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Page Pagination </span>
</a>
</li>
<li>
<a href=\"component-progress-bars.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Progress Bars </span>
</a>
</li>
<li>
<a href=\"component-accordion.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Accordion </span>
</a>
</li>
<li>
<a href=\"component-tabs.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Tabs </span>
</a>
</li>
<li>
<a href=\"component-features.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Features </span>
</a>
</li>
</ul>
<ul role=\"menu\" class=\"mpl-navbar-nav\">
<li>
<a href=\"component-reviews.html\" class=\"mpl-nav-link\">
 <span class=\"mpl-nav-link-name\"> Reviews </span>
</a>
</li>
<li>
<a href=\"component-pricing.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Pricing </span>
</a>
</li>
<li>
<a href=\"component-tables.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Tables </span>
</a>
</li>
<li>
<a href=\"component-badges.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Badges </span>
</a>
</li>
<li>
<a href=\"component-alerts.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Alerts </span>
</a>
</li>
<li>
<a href=\"component-breadcrumbs.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Breadcrumbs </span>
</a>
</li>
<li>
<a href=\"component-countdown.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Countdown </span>
</a>
</li>
</ul>
<ul role=\"menu\" class=\"mpl-navbar-nav\">
<li>
<a href=\"component-icon-box.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Icon Box </span>
</a>
</li>
<li>
<a href=\"component-number-box.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Number Box </span>
</a>
</li>
<li>
<a href=\"component-changelog.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Changelog </span>
</a>
</li>
<li>
<a href=\"component-modal.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Modal </span>
</a>
</li>
<li>
<a href=\"component-tooltips.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Tooltips </span>
</a>
</li>
<li>
<a href=\"component-popovers.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Popovers </span>
</a>
</li>
</ul>
</div>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"forums.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Pages </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li class=\"mpl-dropdown\">
<a href=\"forums.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Forum </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"forums.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Forums </span>
</a>
</li>
<li>
<a href=\"forums-topics.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Topics </span>
</a>
</li>
<li>
<a href=\"forums-single-topic.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Single Topic </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"sign-in.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sign In </span>
</a>
</li>
<li>
<a href=\"sign-up.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sign Up </span>
</a>
</li>
<li>
<a href=\"widgets.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Widgets </span>
</a>
</li>
<li>
<a href=\"coming-soon.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Coming Soon </span>
</a>
</li>
<li>
<a href=\"contact.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Contact Us </span>
</a>
</li>
<li>
<a href=\"search.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Search </span>
</a>
</li>
<li>
<a href=\"404.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> 404 </span>
</a>
</li>
<li>
<a href=\"blank.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Blank </span>
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class=\"mpl-navbar-nav mpl-navbar-right\">
<li class=\"mpl-dropdown\">
<a href=\"user-activity.html\" class=\"mpl-nav-link\" role=\"button\">
";
        // line 423
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 423, $this->source); })()), "user", [], "any", false, false, false, 423)) {
            // line 424
            echo "<span class=\"mpl-nav-link-name\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 424, $this->source); })()), "user", [], "any", false, false, false, 424), "username", [], "any", false, false, false, 424), "html", null, true);
            echo "<span class=\"badge badge-brand\">8</span>
</span>
</a>
";
        }
        // line 428
        echo "<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"user-activity.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Activity </span>
</a>
</li>
<li>
<a href=\"user-profile.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Profile </span>
</a>
</li>
<li>
<a href=\"user-messages.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Messages<span class=\"badge badge-brand\">8</span>
</span>
</a>
</li>
<li>
";
        // line 447
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 447, $this->source); })()), "user", [], "any", false, false, false, 447)) {
            // line 448
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_settings", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 448, $this->source); })()), "user", [], "any", false, false, false, 448), "id", [], "any", false, false, false, 448)]), "html", null, true);
            echo "\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Settings </span>
</a>
";
        }
        // line 452
        echo "</li>
<li>
";
        // line 454
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 454, $this->source); })()), "user", [], "any", false, false, false, 454)) {
            // line 455
            echo "<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Log Out </span>
</a>
";
        }
        // line 459
        echo "</li>
</ul>
</div>
</li>
<li>
<a class=\"mpl-nav-link\" href=\"#\" data-fancybox data-src=\"#popup-search\" data-touch=\"false\" data-small-btn=\"false\" data-toolbar=\"false\" data-close-existing=\"true\" data-auto-focus=\"true\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z\" />
</svg>
</a>
</li>
<li class=\"mpl-dropdown mpl-dropdown-cart\">
<a class=\"mpl-nav-link\" role=\"button\" href=\"#\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M1 1H5L7.68 14.39M7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6L7.68 14.39ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM21 21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21C19 20.4477 19.4477 20 20 20C20.5523 20 21 20.4477 21 21Z\" />
</svg>
</a>
<div class=\"mpl-dropdown-menu\">
<div class=\"row justify-content-between vgap\">
<div class=\"col-12\">
<table class=\"table mpl-table-shop mpl-table-shop-sm mpl-table-responsive mb-0\">
<tbody>
<tr class=\"mpl-table-product mpl-table-product-sm\">
<td class=\"mpl-table-image\">
<a href=\"shop-product.html\" class=\"mpl-table-product-image\">
<span class=\"mpl-image\">
<img src=\"assets/images/dark/product-260x200.jpg\" alt=\"\">
</span>
</a>
</td>
<td class=\"mpl-table-name\" data-title=\"Product\">
<a href=\"shop-product.html\" class=\"mpl-table-product-title h5\">Gamepad MPL</a>
<span class=\"mpl-price\"> \$120.00 </span>
</td>
<td class=\"mpl-table-remove\">
<a href=\"#\" class=\"mpl-table-product-remove\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M18 6L6 18M6 6L18 18\" />
</svg>
</a>
</td>
</tr>
<tr class=\"mpl-table-product mpl-table-product-sm\">
<td class=\"mpl-table-image\">
<a href=\"shop-product.html\" class=\"mpl-table-product-image\">
<span class=\"mpl-image\">
<img src=\"assets/images/dark/product-2-260x200.jpg\" alt=\"\">
</span>
</a>
</td>
<td class=\"mpl-table-name\" data-title=\"Product\">
<a href=\"shop-product.html\" class=\"mpl-table-product-title h5\">Headphones MPL</a>
<span class=\"mpl-price\"> \$84.99 </span>
</td>
<td class=\"mpl-table-remove\">
<a href=\"#\" class=\"mpl-table-product-remove\">
 <svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M18 6L6 18M6 6L18 18\" />
</svg>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<div class=\"col-12\">
<div class=\"d-flex justify-content-between h5 mb-0\">
<span>Subtotal:</span>
<span>\$204.99</span>
</div>
</div>
<div class=\"col-12\">
<div class=\"row hgap-xs vgap-xs\">
<div class=\"col\">
<a href=\"cart.html\" class=\"btn btn-block btn-default\">View cart</a>
</div>
<div class=\"col\">
<a href=\"checkout.html\" class=\"btn btn-block btn-default\">Checkout</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"mpl-dropdown mpl-dropdown-user\">
<a href=\"#\" class=\"mpl-nav-link\" role=\"button\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z\" />
</svg>
</a>
<div class=\"mpl-dropdown-menu\">
<form class=\"mpl-navbar-login-form\" action=\"#\" method=\"post\">
<div class=\"row hgap-sm vgap-sm align-items-center\">
<div class=\"col-12\">
<label for=\"nav_username\">Username:</label><input class=\"form-control form-control-sm\" type=\"text\" id=\"nav_username\" name=\"username\" placeholder=\"Username\"><span class=\"form-control-bg\"></span>
</div>
<div class=\"col-12\">
<label for=\"nav_password\">Password:</label><input class=\"form-control form-control-sm\" type=\"text\" id=\"nav_password\" name=\"password\" placeholder=\"Password\"><span class=\"form-control-bg\"></span>
</div>
<div class=\"col\">
<div class=\"form-check\">
<input class=\"form-check-input\" type=\"checkbox\" id=\"nav_rememberme\" name=\"rememberme\"><label class=\"form-check-label\" for=\"nav_rememberme\">Remember Me</label>
</div>
</div>
<div class=\"col-auto\">
<a href=\"#\" class=\"small\">Lost Password</a>
</div>
<div class=\"col-12\">
<a href=\"sign-in.html\" class=\"btn btn-block btn-default\">Log in</a>
</div>
<div class=\"col-12 small\"> Are you new? <a href=\"sign-up.html\">Sign Up</a>
</div>
</div>
</form>
</div>
</li>
</ul>
</div>
</div>
</nav>


<nav class=\"mpl-navbar mpl-navbar-mobile\">
<div class=\"mpl-navbar-container\">
<div class=\"mpl-navbar-head\">
<a href=\"index.html\" class=\"mpl-navbar-brand\">
<img src=\"assets/images/logo.svg\" alt=\"\">
</a>
<a href=\"#\" class=\"mpl-navbar-toggle\">
<span></span><span></span><span></span><span></span>
</a>
</div>
<div class=\"mpl-navbar-body\">
<ul class=\"mpl-navbar-nav\">
<li class=\"active\">
<a href=\"dark-index.html\" class=\"mpl-nav-link mpl-nav-link-collapse\" role=\"button\">
<span class=\"mpl-nav-link-name\">Demos</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li class=\"active\">
<a href=\"dark-index.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Main </span>
</a>
</li>
<li>
<a href=\"shooter-index.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Shooter </span>
</a>
</li>
<li>
<a href=\"gamer-index.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Gamer </span>
</a>
</li>
<li>
<a href=\"studio-index.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Studio </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Blog</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Grid</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sidebar Right </span>
</a>
</li>
<li>
<a href=\"blog-grid-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sidebar Left </span>
</a>
</li>
<li>
<a href=\"blog-grid-no-sidebar.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">No Sidebar </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"blog-list-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">List</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-list-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sidebar Right </span>
</a>
</li>
<li>
<a href=\"blog-list-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sidebar Left </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"blog-post-gallery.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Single Post</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-post-gallery.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Gallery </span>
</a>
</li>
<li>
<a href=\"blog-post-carousel.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Carousel </span>
</a>
</li>
<li>
 <a href=\"blog-post-simple.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Simple </span>
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</li>
<li>
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Shop</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Products List</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Right Sidebar </span>
</a>
</li>
<li>
<a href=\"shop-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Left Sidebar </span>
</a>
</li>
<li>
<a href=\"shop-no-sidebar.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">No Sidebar </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"shop-product.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Product </span>
</a>
</li>
<li>
<a href=\"cart.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Cart </span>
</a>
</li>
<li>
<a href=\"checkout.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Checkout </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"esports-teams.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">eSports</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"esports-teams.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Teams </span>
</a>
</li>
<li>
<a href=\"esports-players.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Players </span>
</a>
</li>
<li>
<a href=\"esports-tournaments.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Tournaments </span>
</a>
</li>
<li>
<a href=\"esports-matches.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Matches </span>
</a>
</li>
<li>
<a href=\"esports-games.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Games </span>
</a>
</li>
<li>
<a href=\"esports-single-team.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Team </span>
</a>
</li>
<li>
<a href=\"esports-single-player.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Player </span>
</a>
</li>
<li>
<a href=\"esports-single-tournament.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Tournament </span>
</a>
</li>
<li>
<a href=\"esports-single-match.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Match </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"component-buttons.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Components</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"component-buttons.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Buttons </span>
</a>
</li>
<li>
<a href=\"component-pagination.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Pagination </span>
</a>
</li>
<li>
 <a href=\"component-page-pagination.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Page Pagination </span>
</a>
</li>
<li>
<a href=\"component-progress-bars.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Progress Bars </span>
</a>
</li>
<li>
<a href=\"component-accordion.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Accordion </span>
</a>
</li>
<li>
<a href=\"component-tabs.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Tabs </span>
</a>
</li>
<li>
<a href=\"component-features.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Features </span>
</a>
</li>
<li>
<a href=\"component-reviews.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Reviews </span>
</a>
</li>
<li>
<a href=\"component-pricing.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Pricing </span>
</a>
</li>
<li>
<a href=\"component-tables.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Tables </span>
</a>
</li>
<li>
<a href=\"component-badges.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Badges </span>
</a>
</li>
<li>
<a href=\"component-alerts.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Alerts </span>
</a>
</li>
<li>
<a href=\"component-breadcrumbs.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Breadcrumbs </span>
</a>
</li>
<li>
<a href=\"component-countdown.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Countdown </span>
</a>
</li>
<li>
<a href=\"component-icon-box.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Icon Box </span>
</a>
</li>
 <li>
<a href=\"component-number-box.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Number Box </span>
</a>
</li>
<li>
<a href=\"component-changelog.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Changelog </span>
</a>
</li>
<li>
<a href=\"component-modal.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Modal </span>
</a>
</li>
<li>
<a href=\"component-tooltips.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Tooltips </span>
</a>
</li>
<li>
<a href=\"component-popovers.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Popovers </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"forums.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Pages</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"forums.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Forum</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"forums.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Forums </span>
</a>
</li>
<li>
<a href=\"forums-topics.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Topics </span>
</a>
</li>
<li>
<a href=\"forums-single-topic.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Topic </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"sign-in.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sign In </span>
</a>
</li>
 <li>
<a href=\"sign-up.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sign Up </span>
</a>
</li>
<li>
<a href=\"widgets.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Widgets </span>
</a>
</li>
<li>
<a href=\"coming-soon.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Coming Soon </span>
</a>
</li>
<li>
<a href=\"contact.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Contact Us </span>
</a>
</li>
<li>
<a href=\"search.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Search </span>
</a>
</li>
<li>
<a href=\"404.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">404 </span>
</a>
</li>
<li>
<a href=\"blank.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Blank </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"user-activity.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">s1mple<span class=\"badge badge-brand\">8</span></span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"user-activity.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Activity </span>
</a>
</li>
<li>
<a href=\"user-profile.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Profile </span>
</a>
</li>
<li>
<a href=\"user-messages.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Messages<span class=\"badge badge-brand\">8</span>
</span>
</a>
</li>
<li>
<a href=\"user-settings.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Settings </span>
</a>
</li>
<li>
<a href=\"sign-in.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Log Out </span>
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
<div class=\"mpl-navbar-footer\">
<ul class=\"mpl-navbar-nav\">
<li>
<a class=\"mpl-nav-link\" href=\"#\" data-fancybox data-src=\"#popup-search\" data-touch=\"false\" data-small-btn=\"false\" data-toolbar=\"false\" data-close-existing=\"true\" data-auto-focus=\"true\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z\" />
</svg>
</a>
</li>
<li>
<a class=\"mpl-nav-link\" href=\"#\" data-fancybox data-src=\"#popup-cart\" data-touch=\"false\" data-small-btn=\"false\" data-toolbar=\"false\" data-close-existing=\"true\" data-auto-focus=\"false\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M1 1H5L7.68 14.39M7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6L7.68 14.39ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM21 21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21C19 20.4477 19.4477 20 20 20C20.5523 20 21 20.4477 21 21Z\" />
</svg>
</a>
</li>
<li>
<a class=\"mpl-nav-link\" href=\"#\" data-fancybox data-src=\"#popup-signin\" data-touch=\"false\" data-small-btn=\"false\" data-toolbar=\"false\" data-close-existing=\"true\" data-auto-focus=\"true\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z\" />
</svg>
</a>
</li>
</ul>
</div>
</div>
</nav>





<script src=\"";
        // line 1051
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/object-fit-images/dist/ofi.mind3bb.js?v=3.2.4"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1053
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/%40popperjs/core/dist/umd/popper.min590d.js?v=2.11.0"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1055
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/scrollreveal/dist/scrollreveal.minbc3e.js?v=4.0.9"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1057
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/animejs/lib/anime.minf77b.js?v=3.2.1"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1059
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.minc420.js?v=5.1.3"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1061
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jarallax/dist/jarallax.min5fab.js?v=1.12.8"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1063
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min7316.js?v=6.8.2"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1065
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fancybox/dist/jquery.fancybox.min438f.js?v=3.5.7"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1067
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery-countdown/dist/jquery.countdown.mind1f1.js?v=2.2.0"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1069
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/moment/min/moment.min63eb.js?v=2.29.1"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1070
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/moment-timezone/builds/moment-timezone-with-data.minc112.js?v=0.5.34"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1072
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/slider-revolution/js/jquery.themepunch.tools.min4ed6.js?v=5.4.8"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1073
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/slider-revolution/js/jquery.themepunch.revolution.min4ed6.js?v=5.4.8"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1075
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/imagesloaded/imagesloaded.pkgd.mine781.js?v=4.1.4"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1077
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/dist/isotope.pkgd.minaf3e.js?v=3.0.6"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/ion-rangeslider/js/ion.rangeSlider.min7317.js?v=2.3.1"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1081
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.mine0a5.js?v=4.3.0"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1083
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-validator/dist/validator.minfb28.js?v=0.11.9"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1085
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/monsterplay.min9f1e.js?v=1.1.0"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 1086
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/monsterplay-init9f1e.js?v=1.1.0"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1327 => 1086,  1323 => 1085,  1318 => 1083,  1313 => 1081,  1308 => 1079,  1303 => 1077,  1298 => 1075,  1293 => 1073,  1289 => 1072,  1284 => 1070,  1280 => 1069,  1275 => 1067,  1270 => 1065,  1265 => 1063,  1260 => 1061,  1255 => 1059,  1250 => 1057,  1245 => 1055,  1240 => 1053,  1235 => 1051,  641 => 459,  633 => 455,  631 => 454,  627 => 452,  619 => 448,  617 => 447,  596 => 428,  588 => 424,  586 => 423,  376 => 216,  368 => 211,  360 => 206,  212 => 61,  193 => 44,  183 => 43,  171 => 38,  166 => 36,  160 => 33,  153 => 29,  148 => 27,  144 => 26,  140 => 25,  135 => 23,  130 => 21,  125 => 19,  119 => 17,  109 => 16,  90 => 8,  78 => 1090,  76 => 43,  71 => 40,  69 => 16,  63 => 13,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
   
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>{% block title %}Welcome!{% endblock %}</title>
<meta name=\"description\" content=\"MonsterPlay - Superpower for Gaming Websites\">
<meta name=\"keywords\" content=\"gaming, game, esports, community, template, html, bootstrap, webpack\">
<meta name=\"author\" content=\"nK\">

<link rel=\"icon\" type=\"image/png\" href=\"{{asset('assets/images/favicon.png')}}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

 {% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{asset('use.typekit.net/vgd1cli.css')}}\">

<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/bootstrap/dist/css/bootstrap.minc420.css?v=5.1.3')}}\" />

<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/swiper/swiper-bundle.min7316.css?v=6.8.2')}}\" />

<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/fancybox/dist/jquery.fancybox.min438f.css?v=3.5.7')}}\" />

<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/slider-revolution/css/settings4ed6.css?v=5.4.8')}}\">
<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/slider-revolution/css/layers4ed6.css?v=5.4.8')}}\">
<link rel=\"stylesheet\" href=\"{{asset('assets/vendor/slider-revolution/css/navigation4ed6.css?v=5.4.8')}}\">

<link rel=\"stylesheet\" href=\"{{asset('assets/css/monsterplay.min9f1e.css?v=1.1.0')}}\">



<link rel=\"stylesheet\" href=\"{{asset('assets/css/custom9f1e.css?v=1.1.0')}}\">


<script src=\"{{asset('assets/vendor/jquery/dist/jquery.min45e0.js?v=3.6.0')}}\"></script>

<script src=\"{{asset('assets/js/preloader.min9f1e.js?v=1.1.0')}}\"></script>
    {% endblock %}
</head>

<body>
{% block body %}
<div class=\"mpl-preloader\">
<div class=\"mpl-preloader-content\">
<div class=\"mpl-preloader-title display-1 h1\">iGame!</div>
<div class=\"mpl-preloader-progress\">
<div></div>
</div>
</div>
</div>
<div class=\"mpl-preloader-bg\"></div>


<nav class=\"mpl-navbar-top mpl-navbar\">
<div class=\"mpl-navbar-mobile-overlay\"></div>
<div class=\"container mpl-navbar-container\">
<a href=\"#\" class=\"mpl-navbar-toggle\"></a>
<div class=\"mpl-navbar-brand\">
<a href=\"index.html\">
<img src=\"{{asset('assets/images/logo.svg')}}\" alt=\"\">
</a>
</div>
<div class=\"mpl-navbar-content\">
<ul class=\"mpl-navbar-nav\">


<li>
<a href=\"dark-index.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\">Home</span>
</a>
</li>

<li class=\"mpl-dropdown\">
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Blog </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li class=\"mpl-dropdown\">
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Grid </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sidebar Right </span>
</a>
</li>
<li>
<a href=\"blog-grid-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sidebar Left </span>
</a>
</li>
<li>
<a href=\"blog-grid-no-sidebar.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> No Sidebar </span>
</a>
</li>
</ul>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"blog-list-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> List </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-list-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sidebar Right </span>
</a>
</li>
<li>
<a href=\"blog-list-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sidebar Left </span>
</a>
</li>
</ul>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"blog-post-gallery.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Single Post </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-post-gallery.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Gallery </span>
</a>
</li>
<li>
<a href=\"blog-post-carousel.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Carousel </span>
</a>
</li>
<li>
<a href=\"blog-post-simple.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Simple </span>
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Shop </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li class=\"mpl-dropdown\">
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Products List </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Right Sidebar </span>
</a>
</li>
<li>
<a href=\"shop-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Left Sidebar </span>
</a>
</li>
<li>
<a href=\"shop-no-sidebar.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> No Sidebar </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"shop-product.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Single Product </span>
</a>
</li>
<li>
<a href=\"cart.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Cart </span>
</a>
</li>
<li>
<a href=\"checkout.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Checkout </span>
</a>
</li>
</ul>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"esports-teams.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> eSports </span>
</a>
<div class=\"mpl-dropdown-menu\">
<div class=\"mpl-navbar-nav-mega\">
<ul role=\"menu\" class=\"mpl-navbar-nav\">
<li>
<a href=\"{{path('affiche_front')}}\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Teams You're in</span>
</a>
</li>
<li>
<a href=\"{{path('equipe_front')}}\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Create Team</span>
</a>
</li>
<li>
<a href=\"{{path('front')}}\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Tournaments </span>
</a>
</li>

<li>
<a href=\"esports-games.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Games </span>
</a>
</li>
</ul>

</div>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"component-buttons.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Components </span>
</a>
<div class=\"mpl-dropdown-menu\">
<div class=\"mpl-navbar-nav-mega\">
<ul role=\"menu\" class=\"mpl-navbar-nav\">
<li>
<a href=\"component-buttons.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Buttons </span>
</a>
</li>
<li>
<a href=\"component-pagination.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Pagination </span>
</a>
</li>
<li>
<a href=\"component-page-pagination.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Page Pagination </span>
</a>
</li>
<li>
<a href=\"component-progress-bars.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Progress Bars </span>
</a>
</li>
<li>
<a href=\"component-accordion.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Accordion </span>
</a>
</li>
<li>
<a href=\"component-tabs.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Tabs </span>
</a>
</li>
<li>
<a href=\"component-features.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Features </span>
</a>
</li>
</ul>
<ul role=\"menu\" class=\"mpl-navbar-nav\">
<li>
<a href=\"component-reviews.html\" class=\"mpl-nav-link\">
 <span class=\"mpl-nav-link-name\"> Reviews </span>
</a>
</li>
<li>
<a href=\"component-pricing.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Pricing </span>
</a>
</li>
<li>
<a href=\"component-tables.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Tables </span>
</a>
</li>
<li>
<a href=\"component-badges.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Badges </span>
</a>
</li>
<li>
<a href=\"component-alerts.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Alerts </span>
</a>
</li>
<li>
<a href=\"component-breadcrumbs.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Breadcrumbs </span>
</a>
</li>
<li>
<a href=\"component-countdown.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Countdown </span>
</a>
</li>
</ul>
<ul role=\"menu\" class=\"mpl-navbar-nav\">
<li>
<a href=\"component-icon-box.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Icon Box </span>
</a>
</li>
<li>
<a href=\"component-number-box.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Number Box </span>
</a>
</li>
<li>
<a href=\"component-changelog.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Changelog </span>
</a>
</li>
<li>
<a href=\"component-modal.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Modal </span>
</a>
</li>
<li>
<a href=\"component-tooltips.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Tooltips </span>
</a>
</li>
<li>
<a href=\"component-popovers.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Popovers </span>
</a>
</li>
</ul>
</div>
</div>
</li>
<li class=\"mpl-dropdown\">
<a href=\"forums.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Pages </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li class=\"mpl-dropdown\">
<a href=\"forums.html\" class=\"mpl-nav-link\" role=\"button\">
<span class=\"mpl-nav-link-name\"> Forum </span>
</a>
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"forums.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Forums </span>
</a>
</li>
<li>
<a href=\"forums-topics.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Topics </span>
</a>
</li>
<li>
<a href=\"forums-single-topic.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Single Topic </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"sign-in.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sign In </span>
</a>
</li>
<li>
<a href=\"sign-up.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Sign Up </span>
</a>
</li>
<li>
<a href=\"widgets.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Widgets </span>
</a>
</li>
<li>
<a href=\"coming-soon.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Coming Soon </span>
</a>
</li>
<li>
<a href=\"contact.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Contact Us </span>
</a>
</li>
<li>
<a href=\"search.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Search </span>
</a>
</li>
<li>
<a href=\"404.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> 404 </span>
</a>
</li>
<li>
<a href=\"blank.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Blank </span>
</a>
</li>
</ul>
</div>
</li>
</ul>
<ul class=\"mpl-navbar-nav mpl-navbar-right\">
<li class=\"mpl-dropdown\">
<a href=\"user-activity.html\" class=\"mpl-nav-link\" role=\"button\">
{% if app.user%}
<span class=\"mpl-nav-link-name\"> {{app.user.username}}<span class=\"badge badge-brand\">8</span>
</span>
</a>
{% endif %}
<div class=\"mpl-dropdown-menu\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"user-activity.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Activity </span>
</a>
</li>
<li>
<a href=\"user-profile.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Profile </span>
</a>
</li>
<li>
<a href=\"user-messages.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Messages<span class=\"badge badge-brand\">8</span>
</span>
</a>
</li>
<li>
{% if app.user %}
<a href=\"{{ path('app_user_settings', {'id': app.user.id}) }}\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Settings </span>
</a>
{% endif %}
</li>
<li>
{% if app.user %}
<a href=\"{{path('app_logout')}}\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\"> Log Out </span>
</a>
{% endif %}
</li>
</ul>
</div>
</li>
<li>
<a class=\"mpl-nav-link\" href=\"#\" data-fancybox data-src=\"#popup-search\" data-touch=\"false\" data-small-btn=\"false\" data-toolbar=\"false\" data-close-existing=\"true\" data-auto-focus=\"true\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z\" />
</svg>
</a>
</li>
<li class=\"mpl-dropdown mpl-dropdown-cart\">
<a class=\"mpl-nav-link\" role=\"button\" href=\"#\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M1 1H5L7.68 14.39M7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6L7.68 14.39ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM21 21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21C19 20.4477 19.4477 20 20 20C20.5523 20 21 20.4477 21 21Z\" />
</svg>
</a>
<div class=\"mpl-dropdown-menu\">
<div class=\"row justify-content-between vgap\">
<div class=\"col-12\">
<table class=\"table mpl-table-shop mpl-table-shop-sm mpl-table-responsive mb-0\">
<tbody>
<tr class=\"mpl-table-product mpl-table-product-sm\">
<td class=\"mpl-table-image\">
<a href=\"shop-product.html\" class=\"mpl-table-product-image\">
<span class=\"mpl-image\">
<img src=\"assets/images/dark/product-260x200.jpg\" alt=\"\">
</span>
</a>
</td>
<td class=\"mpl-table-name\" data-title=\"Product\">
<a href=\"shop-product.html\" class=\"mpl-table-product-title h5\">Gamepad MPL</a>
<span class=\"mpl-price\"> \$120.00 </span>
</td>
<td class=\"mpl-table-remove\">
<a href=\"#\" class=\"mpl-table-product-remove\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M18 6L6 18M6 6L18 18\" />
</svg>
</a>
</td>
</tr>
<tr class=\"mpl-table-product mpl-table-product-sm\">
<td class=\"mpl-table-image\">
<a href=\"shop-product.html\" class=\"mpl-table-product-image\">
<span class=\"mpl-image\">
<img src=\"assets/images/dark/product-2-260x200.jpg\" alt=\"\">
</span>
</a>
</td>
<td class=\"mpl-table-name\" data-title=\"Product\">
<a href=\"shop-product.html\" class=\"mpl-table-product-title h5\">Headphones MPL</a>
<span class=\"mpl-price\"> \$84.99 </span>
</td>
<td class=\"mpl-table-remove\">
<a href=\"#\" class=\"mpl-table-product-remove\">
 <svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M18 6L6 18M6 6L18 18\" />
</svg>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<div class=\"col-12\">
<div class=\"d-flex justify-content-between h5 mb-0\">
<span>Subtotal:</span>
<span>\$204.99</span>
</div>
</div>
<div class=\"col-12\">
<div class=\"row hgap-xs vgap-xs\">
<div class=\"col\">
<a href=\"cart.html\" class=\"btn btn-block btn-default\">View cart</a>
</div>
<div class=\"col\">
<a href=\"checkout.html\" class=\"btn btn-block btn-default\">Checkout</a>
</div>
</div>
</div>
</div>
</div>
</li>
<li class=\"mpl-dropdown mpl-dropdown-user\">
<a href=\"#\" class=\"mpl-nav-link\" role=\"button\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z\" />
</svg>
</a>
<div class=\"mpl-dropdown-menu\">
<form class=\"mpl-navbar-login-form\" action=\"#\" method=\"post\">
<div class=\"row hgap-sm vgap-sm align-items-center\">
<div class=\"col-12\">
<label for=\"nav_username\">Username:</label><input class=\"form-control form-control-sm\" type=\"text\" id=\"nav_username\" name=\"username\" placeholder=\"Username\"><span class=\"form-control-bg\"></span>
</div>
<div class=\"col-12\">
<label for=\"nav_password\">Password:</label><input class=\"form-control form-control-sm\" type=\"text\" id=\"nav_password\" name=\"password\" placeholder=\"Password\"><span class=\"form-control-bg\"></span>
</div>
<div class=\"col\">
<div class=\"form-check\">
<input class=\"form-check-input\" type=\"checkbox\" id=\"nav_rememberme\" name=\"rememberme\"><label class=\"form-check-label\" for=\"nav_rememberme\">Remember Me</label>
</div>
</div>
<div class=\"col-auto\">
<a href=\"#\" class=\"small\">Lost Password</a>
</div>
<div class=\"col-12\">
<a href=\"sign-in.html\" class=\"btn btn-block btn-default\">Log in</a>
</div>
<div class=\"col-12 small\"> Are you new? <a href=\"sign-up.html\">Sign Up</a>
</div>
</div>
</form>
</div>
</li>
</ul>
</div>
</div>
</nav>


<nav class=\"mpl-navbar mpl-navbar-mobile\">
<div class=\"mpl-navbar-container\">
<div class=\"mpl-navbar-head\">
<a href=\"index.html\" class=\"mpl-navbar-brand\">
<img src=\"assets/images/logo.svg\" alt=\"\">
</a>
<a href=\"#\" class=\"mpl-navbar-toggle\">
<span></span><span></span><span></span><span></span>
</a>
</div>
<div class=\"mpl-navbar-body\">
<ul class=\"mpl-navbar-nav\">
<li class=\"active\">
<a href=\"dark-index.html\" class=\"mpl-nav-link mpl-nav-link-collapse\" role=\"button\">
<span class=\"mpl-nav-link-name\">Demos</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li class=\"active\">
<a href=\"dark-index.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Main </span>
</a>
</li>
<li>
<a href=\"shooter-index.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Shooter </span>
</a>
</li>
<li>
<a href=\"gamer-index.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Gamer </span>
</a>
</li>
<li>
<a href=\"studio-index.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Studio </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Blog</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Grid</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-grid-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sidebar Right </span>
</a>
</li>
<li>
<a href=\"blog-grid-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sidebar Left </span>
</a>
</li>
<li>
<a href=\"blog-grid-no-sidebar.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">No Sidebar </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"blog-list-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">List</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-list-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sidebar Right </span>
</a>
</li>
<li>
<a href=\"blog-list-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sidebar Left </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"blog-post-gallery.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Single Post</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"blog-post-gallery.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Gallery </span>
</a>
</li>
<li>
<a href=\"blog-post-carousel.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Carousel </span>
</a>
</li>
<li>
 <a href=\"blog-post-simple.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Simple </span>
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</li>
<li>
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Shop</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Products List</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"shop-sidebar-right.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Right Sidebar </span>
</a>
</li>
<li>
<a href=\"shop-sidebar-left.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Left Sidebar </span>
</a>
</li>
<li>
<a href=\"shop-no-sidebar.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">No Sidebar </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"shop-product.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Product </span>
</a>
</li>
<li>
<a href=\"cart.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Cart </span>
</a>
</li>
<li>
<a href=\"checkout.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Checkout </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"esports-teams.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">eSports</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"esports-teams.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Teams </span>
</a>
</li>
<li>
<a href=\"esports-players.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Players </span>
</a>
</li>
<li>
<a href=\"esports-tournaments.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Tournaments </span>
</a>
</li>
<li>
<a href=\"esports-matches.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Matches </span>
</a>
</li>
<li>
<a href=\"esports-games.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Games </span>
</a>
</li>
<li>
<a href=\"esports-single-team.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Team </span>
</a>
</li>
<li>
<a href=\"esports-single-player.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Player </span>
</a>
</li>
<li>
<a href=\"esports-single-tournament.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Tournament </span>
</a>
</li>
<li>
<a href=\"esports-single-match.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Match </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"component-buttons.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Components</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"component-buttons.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Buttons </span>
</a>
</li>
<li>
<a href=\"component-pagination.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Pagination </span>
</a>
</li>
<li>
 <a href=\"component-page-pagination.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Page Pagination </span>
</a>
</li>
<li>
<a href=\"component-progress-bars.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Progress Bars </span>
</a>
</li>
<li>
<a href=\"component-accordion.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Accordion </span>
</a>
</li>
<li>
<a href=\"component-tabs.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Tabs </span>
</a>
</li>
<li>
<a href=\"component-features.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Features </span>
</a>
</li>
<li>
<a href=\"component-reviews.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Reviews </span>
</a>
</li>
<li>
<a href=\"component-pricing.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Pricing </span>
</a>
</li>
<li>
<a href=\"component-tables.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Tables </span>
</a>
</li>
<li>
<a href=\"component-badges.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Badges </span>
</a>
</li>
<li>
<a href=\"component-alerts.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Alerts </span>
</a>
</li>
<li>
<a href=\"component-breadcrumbs.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Breadcrumbs </span>
</a>
</li>
<li>
<a href=\"component-countdown.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Countdown </span>
</a>
</li>
<li>
<a href=\"component-icon-box.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Icon Box </span>
</a>
</li>
 <li>
<a href=\"component-number-box.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Number Box </span>
</a>
</li>
<li>
<a href=\"component-changelog.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Changelog </span>
</a>
</li>
<li>
<a href=\"component-modal.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Modal </span>
</a>
</li>
<li>
<a href=\"component-tooltips.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Tooltips </span>
</a>
</li>
<li>
<a href=\"component-popovers.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Popovers </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"forums.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Pages</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"forums.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">Forum</span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"forums.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Forums </span>
</a>
</li>
<li>
<a href=\"forums-topics.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Topics </span>
</a>
</li>
<li>
<a href=\"forums-single-topic.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Single Topic </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"sign-in.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sign In </span>
</a>
</li>
 <li>
<a href=\"sign-up.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Sign Up </span>
</a>
</li>
<li>
<a href=\"widgets.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Widgets </span>
</a>
</li>
<li>
<a href=\"coming-soon.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Coming Soon </span>
</a>
</li>
<li>
<a href=\"contact.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Contact Us </span>
</a>
</li>
<li>
<a href=\"search.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Search </span>
</a>
</li>
<li>
<a href=\"404.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">404 </span>
</a>
</li>
<li>
<a href=\"blank.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Blank </span>
</a>
</li>
</ul>
</div>
</li>
<li>
<a href=\"user-activity.html\" class=\"mpl-nav-link mpl-nav-link-collapse mpl-collapsed\" role=\"button\">
<span class=\"mpl-nav-link-name\">s1mple<span class=\"badge badge-brand\">8</span></span>
</a>
<div class=\"mpl-navbar-collapse collapse\">
<ul class=\"mpl-navbar-nav\">
<li>
<a href=\"user-activity.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Activity </span>
</a>
</li>
<li>
<a href=\"user-profile.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Profile </span>
</a>
</li>
<li>
<a href=\"user-messages.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Messages<span class=\"badge badge-brand\">8</span>
</span>
</a>
</li>
<li>
<a href=\"user-settings.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Settings </span>
</a>
</li>
<li>
<a href=\"sign-in.html\" class=\"mpl-nav-link\">
<span class=\"mpl-nav-link-name\">Log Out </span>
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
<div class=\"mpl-navbar-footer\">
<ul class=\"mpl-navbar-nav\">
<li>
<a class=\"mpl-nav-link\" href=\"#\" data-fancybox data-src=\"#popup-search\" data-touch=\"false\" data-small-btn=\"false\" data-toolbar=\"false\" data-close-existing=\"true\" data-auto-focus=\"true\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z\" />
</svg>
</a>
</li>
<li>
<a class=\"mpl-nav-link\" href=\"#\" data-fancybox data-src=\"#popup-cart\" data-touch=\"false\" data-small-btn=\"false\" data-toolbar=\"false\" data-close-existing=\"true\" data-auto-focus=\"false\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M1 1H5L7.68 14.39M7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6L7.68 14.39ZM10 21C10 21.5523 9.55228 22 9 22C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C9.55228 20 10 20.4477 10 21ZM21 21C21 21.5523 20.5523 22 20 22C19.4477 22 19 21.5523 19 21C19 20.4477 19.4477 20 20 20C20.5523 20 21 20.4477 21 21Z\" />
</svg>
</a>
</li>
<li>
<a class=\"mpl-nav-link\" href=\"#\" data-fancybox data-src=\"#popup-signin\" data-touch=\"false\" data-small-btn=\"false\" data-toolbar=\"false\" data-close-existing=\"true\" data-auto-focus=\"true\">
<svg class=\"icon\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z\" />
</svg>
</a>
</li>
</ul>
</div>
</div>
</nav>





<script src=\"{{asset('assets/vendor/object-fit-images/dist/ofi.mind3bb.js?v=3.2.4')}}\"></script>

<script src=\"{{asset('assets/vendor/%40popperjs/core/dist/umd/popper.min590d.js?v=2.11.0')}}\"></script>

<script src=\"{{asset('assets/vendor/scrollreveal/dist/scrollreveal.minbc3e.js?v=4.0.9')}}\"></script>

<script src=\"{{asset('assets/vendor/animejs/lib/anime.minf77b.js?v=3.2.1')}}\"></script>

<script src=\"{{asset('assets/vendor/bootstrap/dist/js/bootstrap.minc420.js?v=5.1.3')}}\"></script>

<script src=\"{{asset('assets/vendor/jarallax/dist/jarallax.min5fab.js?v=1.12.8')}}\"></script>

<script src=\"{{asset('assets/vendor/swiper/swiper-bundle.min7316.js?v=6.8.2')}}\"></script>

<script src=\"{{asset('assets/vendor/fancybox/dist/jquery.fancybox.min438f.js?v=3.5.7')}}\"></script>

<script src=\"{{asset('assets/vendor/jquery-countdown/dist/jquery.countdown.mind1f1.js?v=2.2.0')}}\"></script>

<script src=\"{{asset('assets/vendor/moment/min/moment.min63eb.js?v=2.29.1')}}\"></script>
<script src=\"{{asset('assets/vendor/moment-timezone/builds/moment-timezone-with-data.minc112.js?v=0.5.34')}}\"></script>

<script src=\"{{asset('assets/vendor/slider-revolution/js/jquery.themepunch.tools.min4ed6.js?v=5.4.8')}}\"></script>
<script src=\"{{asset('assets/vendor/slider-revolution/js/jquery.themepunch.revolution.min4ed6.js?v=5.4.8')}}\"></script>

<script src=\"{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.mine781.js?v=4.1.4')}}\"></script>

<script src=\"{{asset('assets/vendor/isotope-layout/dist/isotope.pkgd.minaf3e.js?v=3.0.6')}}\"></script>

<script src=\"{{asset('assets/vendor/ion-rangeslider/js/ion.rangeSlider.min7317.js?v=2.3.1')}}\"></script>

<script src=\"{{asset('assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.mine0a5.js?v=4.3.0')}}\"></script>

<script src=\"{{asset('assets/vendor/bootstrap-validator/dist/validator.minfb28.js?v=0.11.9')}}\"></script>

<script src=\"{{asset('assets/js/monsterplay.min9f1e.js?v=1.1.0')}}\"></script>
<script src=\"{{asset('assets/js/monsterplay-init9f1e.js?v=1.1.0')}}\"></script>


{% endblock %}
</body>

</html>", "baseFront.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\baseFront.html.twig");
    }
}
