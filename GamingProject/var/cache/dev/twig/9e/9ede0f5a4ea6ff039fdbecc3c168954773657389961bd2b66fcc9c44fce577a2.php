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

/* equipe/ajoutEquipe.html.twig */
class __TwigTemplate_5bfd2ec4fee53b7578c0677c221ee117d31cd06acff0f44c4d9312270131f1ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/ajoutEquipe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/ajoutEquipe.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "equipe/ajoutEquipe.html.twig", 1);
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

        echo "Create Team";
        
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
<div class=\"mpl-sign-form\" data-sr=\"sign\" data-sr-interval=\"100\" data-sr-duration=\"1000\" data-sr-distance=\"20\">
<h1 data-sr-item=\"sign\">Create Team</h1>
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<div class=\"row hgap-xs vgap-sm\">



<div class=\"col-12\" data-sr-item=\"sign\">
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nomEquipe", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom Equipe"]]);
        echo "
 <span class=\"form-control-bg\"></span>
  ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nomEquipe", [], "any", false, false, false, 29), 'errors');
        echo "
</div>



<div class=\"col-12\" data-sr-item=\"sign\">
 ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "membres", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Membres"]]);
        echo "
 <span class=\"form-control-bg\"></span>
  ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "membres", [], "any", false, false, false, 37), 'errors');
        echo "
</div>

<div class=\"col-12\" data-sr-item=\"sign\">
 ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "ptsExp", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "hidden" => "true"]]);
        echo "

</div>

<div class=\"col-12\" data-sr-item=\"sign\">
 ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "tournoisGagne", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "hidden" => "true"]]);
        echo "

</div>

<div class=\"col-12\" data-sr-item=\"sign\">
<div class=\"form-check\">
<input class=\"form-check-input\" type=\"checkbox\" id=\"signup_agreement\" name=\"signup_agreement\"><label class=\"form-check-label\" for=\"signup_agreement\">I have read and agree to the <a href=\"#\">terms and conditions.</a></label>
</div>
</div>
<div class=\"col-12\" data-sr-item=\"sign\">
<button type=\"submit\" class=\"btn btn-md btn-block\">";
        // line 56
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 56, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

</div>
";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "equipe/ajoutEquipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 59,  165 => 56,  152 => 46,  144 => 41,  137 => 37,  132 => 35,  123 => 29,  118 => 27,  109 => 21,  98 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}Create Team{% endblock %}

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
<div class=\"mpl-sign-form\" data-sr=\"sign\" data-sr-interval=\"100\" data-sr-duration=\"1000\" data-sr-distance=\"20\">
<h1 data-sr-item=\"sign\">Create Team</h1>
{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
<div class=\"row hgap-xs vgap-sm\">



<div class=\"col-12\" data-sr-item=\"sign\">
{{ form_widget(form.nomEquipe, {'attr': {'class': 'form-control','placeholder':'Nom Equipe'}}) }}
 <span class=\"form-control-bg\"></span>
  {{form_errors(form.nomEquipe)}}
</div>



<div class=\"col-12\" data-sr-item=\"sign\">
 {{form_widget(form.membres, {'attr': {'class': 'form-control','placeholder':'Membres'}}) }}
 <span class=\"form-control-bg\"></span>
  {{form_errors(form.membres)}}
</div>

<div class=\"col-12\" data-sr-item=\"sign\">
 {{form_widget(form.ptsExp, {'attr': {'class': 'form-control','hidden':'true'}}) }}

</div>

<div class=\"col-12\" data-sr-item=\"sign\">
 {{form_widget(form.tournoisGagne, {'attr': {'class': 'form-control','hidden':'true'}}) }}

</div>

<div class=\"col-12\" data-sr-item=\"sign\">
<div class=\"form-check\">
<input class=\"form-check-input\" type=\"checkbox\" id=\"signup_agreement\" name=\"signup_agreement\"><label class=\"form-check-label\" for=\"signup_agreement\">I have read and agree to the <a href=\"#\">terms and conditions.</a></label>
</div>
</div>
<div class=\"col-12\" data-sr-item=\"sign\">
<button type=\"submit\" class=\"btn btn-md btn-block\">{{ button_label|default('Save') }}</button>

</div>
{{ form_end(form) }}

{% endblock %}
", "equipe/ajoutEquipe.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\equipe\\ajoutEquipe.html.twig");
    }
}
