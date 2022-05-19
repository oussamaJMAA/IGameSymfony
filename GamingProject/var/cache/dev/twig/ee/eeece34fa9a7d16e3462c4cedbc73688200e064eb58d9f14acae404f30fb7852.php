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

/* tournois/_form.html.twig */
class __TwigTemplate_b4c5105573786eab1cd9120b1e81132adb04ff72352f475bca9bdb88ae7070cd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/_form.html.twig"));

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
        $this->loadTemplate("base.html.twig", "tournois/_form.html.twig", 54)->display($context);
        // line 55
        echo "        <!--**********************************
            Sidebar end
        ***********************************-->
  <div class=\"content-body\">
            <div class=\"container-fluid\">
\t\t\t\t
\t\t\t
                <!-- row -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "nomTournois", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "form-label font-w600"], "label" => "Nom Tournois"]);
        echo "
                                       ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "nomTournois", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control solid", "placeholder" => "Nom Tournois"]]);
        echo "
                                     
\t\t\t\t\t\t\t\t\t</div>
                                    
                  
                  \t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "recompense", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "form-label font-w600"], "label" => "Recompense"]);
        echo "
                                         ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "recompense", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control solid", "placeholder" => "Recompense"]]);
        echo "
                                   ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "recompense", [], "any", false, false, false, 75), 'errors', ["attr" => ["class" => "form-control solid"]]);
        echo "      
\t\t\t\t\t\t\t\t\t</div>\t
                                    
                  <div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "dateTournois", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "form-label font-w600"], "label" => "Date Tournois"]);
        echo "
       ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "dateTournois", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control form_datetime solid", "placeholder" => "date Tournois"]]);
        echo "
                                      
\t\t\t\t\t\t\t\t\t</div>
                  
                   
                   <div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "ptsXp", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "form-label font-w600"], "label" => "Points XP"]);
        echo "
                                         ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "ptsXp", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control solid", "placeholder" => "PTS XP"]]);
        echo "
                                      
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t <div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "timeT", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "form-label font-w600"], "label" => "Time"]);
        echo "
                                         ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "timeT", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "select"]]);
        echo "
                                      
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"card-footer text-end\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary me-3\">Close</a>
\t\t\t\t\t\t\t\t\t
                                    <button class=\"btn  btn-secondary \">";
        // line 101
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 101, $this->source); })()), "Save")) : ("Save")), "html", null, true);
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
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Apex Chart -->
\t<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/apexchart/apexchart.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- Datatable -->
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins-init/datatables.init.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dlabnav-init.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>

    
";
        // line 164
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tournois/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 164,  286 => 161,  282 => 160,  278 => 159,  274 => 158,  269 => 156,  264 => 154,  260 => 153,  254 => 150,  249 => 148,  245 => 147,  196 => 101,  185 => 93,  181 => 92,  173 => 87,  169 => 86,  160 => 80,  156 => 79,  149 => 75,  145 => 74,  141 => 73,  132 => 67,  128 => 66,  124 => 65,  112 => 55,  110 => 54,  79 => 26,  75 => 25,  70 => 23,  65 => 21,  43 => 1,);
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
\t\t\t\t
\t\t\t
                <!-- row -->
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
\t\t\t\t\t\t\t\t\t\t{{ form_label(form.nomTournois, \"Nom Tournois\", {'label_attr': {'class': 'form-label font-w600'}}) }}
                                       {{ form_widget(form.nomTournois, {'attr': {'class': 'form-control solid','placeholder':'Nom Tournois'}}) }}
                                     
\t\t\t\t\t\t\t\t\t</div>
                                    
                  
                  \t<div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  {{ form_label(form.recompense, \"Recompense\", {'label_attr': {'class': 'form-label font-w600'}}) }}
                                         {{ form_widget(form.recompense, {'attr': {'class': 'form-control solid','placeholder':'Recompense'}}) }}
                                   {{ form_errors(form.recompense, {'attr': {'class': 'form-control solid'}}) }}      
\t\t\t\t\t\t\t\t\t</div>\t
                                    
                  <div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  {{ form_label(form.dateTournois, \"Date Tournois\", {'label_attr': {'class': 'form-label font-w600'}}) }}
       {{ form_widget(form.dateTournois, {'attr': {'class': 'form-control form_datetime solid','placeholder':'date Tournois'}}) }}
                                      
\t\t\t\t\t\t\t\t\t</div>
                  
                   
                   <div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  {{ form_label(form.ptsXp, \"Points XP\", {'label_attr': {'class': 'form-label font-w600'}}) }}
                                         {{ form_widget(form.ptsXp, {'attr': {'class': 'form-control solid','placeholder':'PTS XP'}}) }}
                                      
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t <div class=\"col-xl-6  col-md-6 mb-4\">
\t\t\t\t\t\t\t\t\t  {{ form_label(form.timeT, \"Time\", {'label_attr': {'class': 'form-label font-w600'}}) }}
                                         {{ form_widget(form.timeT, {'attr': {'class': 'select'}}) }}
                                      
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
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
", "tournois/_form.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\tournois\\_form.html.twig");
    }
}
