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

/* equipe/_form.html.twig */
class __TwigTemplate_373d73af88ac290bfee4d6b4996f31404f046aa561569efa4583ff368bc5726a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/_form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"author\" content=\"\" />
\t<meta name=\"robots\" content=\"\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Jobick : Job Admin Bootstrap 5 Template\" />
\t<meta property=\"og:title\" content=\"Jobick : Job Admin Bootstrap 5 Template\" />
\t<meta property=\"og:description\" content=\"Jobick : Job Admin Bootstrap 5 Template\" />
\t<meta property=\"og:image\" content=\"social-image.png\" />
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t
\t<!-- PAGE TITLE HERE -->
\t<title>Admin Dashboard</title>
\t
\t<!-- FAVICONS ICON -->
\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />
    <!-- Datatable -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Custom Stylesheet -->
\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-nice-select/css/nice-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
   <div id=\"preloader\">
\t\t<div class=\"lds-ripple\">
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
\t";
        // line 54
        $this->loadTemplate("base.html.twig", "equipe/_form.html.twig", 54)->display($context);
        // line 55
        echo "        <!--**********************************
            Sidebar end
        ***********************************-->
  <div class=\"content-body\">
            <div class=\"container-fluid\">
\t\t
                <!-- row -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t  <style>
\t\t\t\t\t\t\t\t\t\t\t.disabled {

\t\t\t\t\t\t\t\t\t\t\t\tpointer-events: none;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t  </style>
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "nomEquipe", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "form-label font-w600"], "label" => "Nom du l'equipe"]);
        echo "
                                       ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "nomEquipe", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control solid disabled", "placeholder" => "Name"]]);
        echo "
                                     
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "membres", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "form-label font-w600"], "label" => "Les membres"]);
        echo "
                                         ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "membres", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control solid disabled", "placeholder" => "Membre"]]);
        echo "
                                        
\t\t\t\t\t\t\t\t\t</div>
                  \t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "ptsExp", [], "any", false, false, false, 81), 'label', ["label_attr" => ["class" => "form-label font-w600"], "label" => "Point XP"]);
        echo "
                                         ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "ptsExp", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control solid", "placeholder" => "Point XP"]]);
        echo "
                                        
\t\t\t\t\t\t\t\t\t</div>
                  \t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "tournoisGagne", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "form-label font-w600"], "label" => "Tournois Gagne"]);
        echo "
                                         ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "tournoisGagne", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control solid", "placeholder" => "Tournois Gagne"]]);
        echo "
                                
\t\t\t\t\t\t\t\t\t</div>\t
              
                  \t
                  
\t\t\t\t\t\t\t<div class=\"card-footer text-end\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary me-3\">Close</a>
\t\t\t\t\t\t\t\t\t
                                    <button class=\"btn  btn-secondary \">";
        // line 97
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 97, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </div>
        <!--**********************************-->
 

  <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            <div class=\"copyright\">
                <p>Copyright © Designed &amp; Developed by <a href=\"https://dexignlab.com/\" target=\"_blank\">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Apex Chart -->
\t<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/apexchart/apexchart.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- Datatable -->
    <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins-init/datatables.init.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dlabnav-init.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>

    
";
        // line 160
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "equipe/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 160,  273 => 157,  269 => 156,  265 => 155,  261 => 154,  256 => 152,  251 => 150,  247 => 149,  241 => 146,  236 => 144,  232 => 143,  183 => 97,  170 => 87,  166 => 86,  159 => 82,  155 => 81,  148 => 77,  144 => 76,  137 => 72,  133 => 71,  129 => 70,  112 => 55,  110 => 54,  79 => 26,  75 => 25,  70 => 23,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"author\" content=\"\" />
\t<meta name=\"robots\" content=\"\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Jobick : Job Admin Bootstrap 5 Template\" />
\t<meta property=\"og:title\" content=\"Jobick : Job Admin Bootstrap 5 Template\" />
\t<meta property=\"og:description\" content=\"Jobick : Job Admin Bootstrap 5 Template\" />
\t<meta property=\"og:image\" content=\"social-image.png\" />
\t<meta name=\"format-detection\" content=\"telephone=no\">
\t
\t<!-- PAGE TITLE HERE -->
\t<title>Admin Dashboard</title>
\t
\t<!-- FAVICONS ICON -->
\t<link rel=\"shortcut icon\" type=\"image/png\" href=\"{{asset('images/favicon.png')}}\" />
    <!-- Datatable -->
    <link href=\"{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}\" rel=\"stylesheet\">
    <!-- Custom Stylesheet -->
\t<link href=\"{{asset('vendor/jquery-nice-select/css/nice-select.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
   <div id=\"preloader\">
\t\t<div class=\"lds-ripple\">
\t\t\t<div></div>
\t\t\t<div></div>
\t\t</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
\t{% include 'base.html.twig' %}
        <!--**********************************
            Sidebar end
        ***********************************-->
  <div class=\"content-body\">
            <div class=\"container-fluid\">
\t\t
                <!-- row -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t  <style>
\t\t\t\t\t\t\t\t\t\t\t.disabled {

\t\t\t\t\t\t\t\t\t\t\t\tpointer-events: none;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t  </style>
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.nomEquipe, \"Nom du l'equipe\", {'label_attr': {'class': 'form-label font-w600'}}) }}
                                       {{ form_widget(form.nomEquipe, {'attr': {'class': 'form-control solid disabled','placeholder':'Name'}}) }}
                                     
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t {{ form_label(form.membres, \"Les membres\", {'label_attr': {'class': 'form-label font-w600'}}) }}
                                         {{ form_widget(form.membres, {'attr': {'class': 'form-control solid disabled','placeholder':'Membre'}}) }}
                                        
\t\t\t\t\t\t\t\t\t</div>
                  \t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  {{ form_label(form.ptsExp, \"Point XP\", {'label_attr': {'class': 'form-label font-w600'}}) }}
                                         {{ form_widget(form.ptsExp, {'attr': {'class': 'form-control solid','placeholder':'Point XP'}}) }}
                                        
\t\t\t\t\t\t\t\t\t</div>
                  \t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t {{ form_label(form.tournoisGagne, \"Tournois Gagne\", {'label_attr': {'class': 'form-label font-w600'}}) }}
                                         {{ form_widget(form.tournoisGagne, {'attr': {'class': 'form-control solid','placeholder':'Tournois Gagne'}}) }}
                                
\t\t\t\t\t\t\t\t\t</div>\t
              
                  \t
                  
\t\t\t\t\t\t\t<div class=\"card-footer text-end\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary me-3\">Close</a>
\t\t\t\t\t\t\t\t\t
                                    <button class=\"btn  btn-secondary \">{{ button_label|default('Save') }}</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </div>
        <!--**********************************-->
 

  <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            <div class=\"copyright\">
                <p>Copyright © Designed &amp; Developed by <a href=\"https://dexignlab.com/\" target=\"_blank\">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src=\"{{asset('vendor/global/global.min.js')}}\"></script>
    <script src=\"{{asset('vendor/chart.js/Chart.bundle.min.js')}}\"></script>
\t<!-- Apex Chart -->
\t<script src=\"{{asset('vendor/apexchart/apexchart.js')}}\"></script>
\t
    <!-- Datatable -->
    <script src=\"{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('js/plugins-init/datatables.init.js')}}\"></script>

\t<script src=\"{{asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}\"></script>

    <script src=\"{{asset('js/custom.min.js')}}\"></script>
\t<script src=\"{{asset('js/dlabnav-init.js')}}\"></script>
\t<script src=\"{{asset('js/demo.js')}}\"></script>
    <script src=\"{{asset('js/styleSwitcher.js')}}\"></script>

    
{{ form_end(form) }}
", "equipe/_form.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\equipe\\_form.html.twig");
    }
}
