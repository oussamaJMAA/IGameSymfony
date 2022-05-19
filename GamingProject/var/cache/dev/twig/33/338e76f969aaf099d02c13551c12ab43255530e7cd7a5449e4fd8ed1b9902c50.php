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

/* tournois/dashboard.html.twig */
class __TwigTemplate_c92855302ab6312eba8c92bc2d1f40400bffdf9c84c0936f9c5a78308c13293f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/dashboard.html.twig"));

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
\t

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
        // line 55
        $this->loadTemplate("base.html.twig", "tournois/dashboard.html.twig", 55)->display($context);
        // line 56
        echo "        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class=\"content-body\">
            <!-- row -->
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12 mt-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row shapreter-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">55</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Number of Users</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">55<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Deleted Messages</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-suitcase\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">55</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Recieved messages</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-suitcase\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">0</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Sent messages</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">555</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Deleted Accounts</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">44</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Clients</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 flex-wrap pb-0\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"fs-20 font-w600\">Tournament Dates</h4>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body pt-0 pb-3\">
                                 
\t\t\t\t\t\t\t\t\t\t<canvas id=\"barChart_1\"></canvas>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 flex-wrap pb-0\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"fs-20 font-w600\">Stats</h4>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body pt-0 pb-3\">
\t\t\t\t\t\t\t\t\t\t<div id=\"morris_donught\" class=\"chartBar\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 flex-wrap pb-0\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"fs-20 font-w600\">Stats</h4>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body pt-0 pb-3\">
\t\t\t\t\t\t\t\t\t\t<div id=\"morris_donught\" class=\"chartBar\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
        </div>
  ";
        // line 189
        $context["dates"] = [0 => (isset($context["n1"]) || array_key_exists("n1", $context) ? $context["n1"] : (function () { throw new RuntimeError('Variable "n1" does not exist.', 189, $this->source); })()), 1 => (isset($context["n2"]) || array_key_exists("n2", $context) ? $context["n2"] : (function () { throw new RuntimeError('Variable "n2" does not exist.', 189, $this->source); })()), 2 => (isset($context["n3"]) || array_key_exists("n3", $context) ? $context["n3"] : (function () { throw new RuntimeError('Variable "n3" does not exist.', 189, $this->source); })()), 3 => (isset($context["n4"]) || array_key_exists("n4", $context) ? $context["n4"] : (function () { throw new RuntimeError('Variable "n4" does not exist.', 189, $this->source); })()), 4 => (isset($context["n5"]) || array_key_exists("n5", $context) ? $context["n5"] : (function () { throw new RuntimeError('Variable "n5" does not exist.', 189, $this->source); })()), 5 => (isset($context["n6"]) || array_key_exists("n6", $context) ? $context["n6"] : (function () { throw new RuntimeError('Variable "n6" does not exist.', 189, $this->source); })()), 6 => (isset($context["n7"]) || array_key_exists("n7", $context) ? $context["n7"] : (function () { throw new RuntimeError('Variable "n7" does not exist.', 189, $this->source); })()), 7 => (isset($context["n8"]) || array_key_exists("n8", $context) ? $context["n8"] : (function () { throw new RuntimeError('Variable "n8" does not exist.', 189, $this->source); })()), 8 => (isset($context["n9"]) || array_key_exists("n9", $context) ? $context["n9"] : (function () { throw new RuntimeError('Variable "n9" does not exist.', 189, $this->source); })()), 9 => (isset($context["n10"]) || array_key_exists("n10", $context) ? $context["n10"] : (function () { throw new RuntimeError('Variable "n10" does not exist.', 189, $this->source); })()), 10 => (isset($context["n11"]) || array_key_exists("n11", $context) ? $context["n11"] : (function () { throw new RuntimeError('Variable "n11" does not exist.', 189, $this->source); })()), 11 => (isset($context["n12"]) || array_key_exists("n12", $context) ? $context["n12"] : (function () { throw new RuntimeError('Variable "n12" does not exist.', 189, $this->source); })())];
        // line 190
        echo "        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
\t\t
  <script type=\"text/javascript\">
  /*
    google.charts.load(\"current\", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    
    function drawChart() {
       
      var data = google.visualization.arrayToDataTable([

          
        [\"Element\", \"Participants\", { role: \"style\" } ],
    [\"ab\",5 , \"#FFB6C1\"],

      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: \"stringify\",
                         sourceColumn: 1,
                         type: \"string\",
                         role: \"annotation\" },
                       2]);

      var options = {
        title: \"Les Participants\",
        width: 500,
        height: 400,
        bar: {groupWidth: \"50%\"},
        legend: { position: \"none\" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById(\"columnchart_values\"));
      chart.draw(view, options);
  }*/

   var donutChart2 = function(){
\t\t\tMorris.Donut({
\t\t\t\telement: 'morris_donught2',
\t\t\t\tdata: [{
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Tournaments \\xa0 \\xa0\",
\t\t\t\t\tvalue: ";
        // line 231
        echo twig_escape_filter($this->env, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 231, $this->source); })()), "html", null, true);
        echo ",

\t\t\t\t}, {
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Teams \\xa0 \\xa0\",
\t\t\t\t\tvalue: ";
        // line 235
        echo twig_escape_filter($this->env, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 235, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t}, {
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Participations \\xa0 \\xa0\",
\t\t\t\t\tvalue: ";
        // line 238
        echo twig_escape_filter($this->env, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 238, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t}],
\t\t\t\tresize: true,
\t\t\t\tredraw: true,
\t\t\t\tcolors: [\"#FFB6C1\", '#FF0000', '#800080'],
\t\t\t\t//responsive:true,
\t\t\t\t
\t\t\t});
\t\t}
   var donutChart = function(){
\t\t\tMorris.Donut({
\t\t\t\telement: 'morris_donught',
\t\t\t\tdata: [{
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Tournaments \\xa0 \\xa0\",
\t\t\t\t\tvalue: ";
        // line 252
        echo twig_escape_filter($this->env, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 252, $this->source); })()), "html", null, true);
        echo ",

\t\t\t\t}, {
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Teams \\xa0 \\xa0\",
\t\t\t\t\tvalue: ";
        // line 256
        echo twig_escape_filter($this->env, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 256, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t}, {
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Participations \\xa0 \\xa0\",
\t\t\t\t\tvalue: ";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 259, $this->source); })()), "html", null, true);
        echo "
\t\t\t\t}],
\t\t\t\tresize: true,
\t\t\t\tredraw: true,
\t\t\t\tcolors: [\"#FFB6C1\", '#FF0000', '#800080'],
\t\t\t\t//responsive:true,
\t\t\t\t
\t\t\t});
\t\t}
\t\tvar barChart1 = function(){
\t\tif(jQuery('#barChart_1').length > 0 ){
\t\t\tconst barChart_1 = document.getElementById(\"barChart_1\").getContext('2d');
    
\t\t\tbarChart_1.height = 100;

\t\t\tnew Chart(barChart_1, {
\t\t\t\ttype: 'bar',
\t\t\t\tdata: {
\t\t\t\t\tdefaultFontFamily: 'Poppins',
\t\t\t\t\t\tlabels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\",\"Aug\",\"Sep\",\"Oct\",\"Nov\",\"Dec\"],
\t\t\t\t\tdatasets: [
\t\t\t\t\t\t{
\t\t\t\t\t\t\tlabel: \"tournois\",
\t\t\t\t\t\tdata: [";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["n1"]) || array_key_exists("n1", $context) ? $context["n1"] : (function () { throw new RuntimeError('Variable "n1" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["n2"]) || array_key_exists("n2", $context) ? $context["n2"] : (function () { throw new RuntimeError('Variable "n2" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["n3"]) || array_key_exists("n3", $context) ? $context["n3"] : (function () { throw new RuntimeError('Variable "n3" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["n4"]) || array_key_exists("n4", $context) ? $context["n4"] : (function () { throw new RuntimeError('Variable "n4" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["n5"]) || array_key_exists("n5", $context) ? $context["n5"] : (function () { throw new RuntimeError('Variable "n5" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["n6"]) || array_key_exists("n6", $context) ? $context["n6"] : (function () { throw new RuntimeError('Variable "n6" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["n7"]) || array_key_exists("n7", $context) ? $context["n7"] : (function () { throw new RuntimeError('Variable "n7" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["n8"]) || array_key_exists("n8", $context) ? $context["n8"] : (function () { throw new RuntimeError('Variable "n8" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["n9"]) || array_key_exists("n9", $context) ? $context["n9"] : (function () { throw new RuntimeError('Variable "n9" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["n10"]) || array_key_exists("n10", $context) ? $context["n10"] : (function () { throw new RuntimeError('Variable "n10" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["n11"]) || array_key_exists("n11", $context) ? $context["n11"] : (function () { throw new RuntimeError('Variable "n11" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["n12"]) || array_key_exists("n12", $context) ? $context["n12"] : (function () { throw new RuntimeError('Variable "n12" does not exist.', 282, $this->source); })()), "html", null, true);
        echo "],
\t\t\t\t\t\t\tborderColor: 'rgba(249, 58, 11, 1)',
\t\t\t\t\t\t\tborderWidth: \"0\",
\t\t\t\t\t\t\tbackgroundColor: 'rgba(249, 58, 11, 1)'
\t\t\t\t\t\t}
\t\t\t\t\t]
\t\t\t\t},
\t\t\t\toptions: {
\t\t\t\t\tlegend: false, 
\t\t\t\t\tscales: {
\t\t\t\t\t\t\t\t\tyAxes: [{
\t\t\t\t\t\t\tmax: ";
        // line 293
        echo twig_escape_filter($this->env, max((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 293, $this->source); })())), "html", null, true);
        echo ",
            min: 0,
\t\t\t\t\t\t\tticks: {
\t\t\t\t\t\t\t\tbeginAtZero: true,
\t\t\t\t\t\t\t\tstepSize: 1
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}],
\t\t\t\t\t\txAxes: [{
\t\t\t\t\t\t\t// Change here
\t\t\t\t\t\t\tbarPercentage: 0.5
\t\t\t\t\t\t}]
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t}
  </script>
<div id=\"columnchart_values\" style=\"width: 900px; height: 300px;\"></div>
        
    </div>

    <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Apex Chart -->
\t<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/apexchart/apexchart.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- Datatable -->
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins-init/datatables.init.js"), "html", null, true);
        echo "\"></script>
\t <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins-init/chartjs-init.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/statistics-page.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/peity/jquery.peity.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dlabnav-init.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins-init/morris-init.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "tournois/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 333,  485 => 332,  481 => 331,  477 => 330,  473 => 329,  469 => 328,  465 => 327,  461 => 326,  457 => 325,  453 => 324,  449 => 323,  445 => 322,  441 => 321,  437 => 320,  431 => 317,  426 => 315,  422 => 314,  398 => 293,  362 => 282,  336 => 259,  330 => 256,  323 => 252,  306 => 238,  300 => 235,  293 => 231,  250 => 190,  248 => 189,  113 => 56,  111 => 55,  79 => 26,  75 => 25,  70 => 23,  65 => 21,  43 => 1,);
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
\t

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

        <!--**********************************
            Content body start
        ***********************************-->
        <div class=\"content-body\">
            <!-- row -->
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xl-12 mt-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row shapreter-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-eye\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">55</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Number of Users</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-comments\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">55<h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Deleted Messages</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-suitcase\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">55</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Recieved messages</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-suitcase\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">0</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Sent messages</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">555</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Deleted Accounts</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-sm-4 col-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"static-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-phone-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"count\">44</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-14\">Clients</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 flex-wrap pb-0\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"fs-20 font-w600\">Tournament Dates</h4>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body pt-0 pb-3\">
                                 
\t\t\t\t\t\t\t\t\t\t<canvas id=\"barChart_1\"></canvas>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 flex-wrap pb-0\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"fs-20 font-w600\">Stats</h4>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body pt-0 pb-3\">
\t\t\t\t\t\t\t\t\t\t<div id=\"morris_donught\" class=\"chartBar\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header border-0 flex-wrap pb-0\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"fs-20 font-w600\">Stats</h4>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body pt-0 pb-3\">
\t\t\t\t\t\t\t\t\t\t<div id=\"morris_donught\" class=\"chartBar\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
        </div>
  {% set dates = [n1, n2, n3,n4, n5,n6,n7,n8,n9,n10,n11,n12] %}
        <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
\t\t
  <script type=\"text/javascript\">
  /*
    google.charts.load(\"current\", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    
    function drawChart() {
       
      var data = google.visualization.arrayToDataTable([

          
        [\"Element\", \"Participants\", { role: \"style\" } ],
    [\"ab\",5 , \"#FFB6C1\"],

      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: \"stringify\",
                         sourceColumn: 1,
                         type: \"string\",
                         role: \"annotation\" },
                       2]);

      var options = {
        title: \"Les Participants\",
        width: 500,
        height: 400,
        bar: {groupWidth: \"50%\"},
        legend: { position: \"none\" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById(\"columnchart_values\"));
      chart.draw(view, options);
  }*/

   var donutChart2 = function(){
\t\t\tMorris.Donut({
\t\t\t\telement: 'morris_donught2',
\t\t\t\tdata: [{
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Tournaments \\xa0 \\xa0\",
\t\t\t\t\tvalue: {{t}},

\t\t\t\t}, {
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Teams \\xa0 \\xa0\",
\t\t\t\t\tvalue: {{e}}
\t\t\t\t}, {
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Participations \\xa0 \\xa0\",
\t\t\t\t\tvalue: {{p}}
\t\t\t\t}],
\t\t\t\tresize: true,
\t\t\t\tredraw: true,
\t\t\t\tcolors: [\"#FFB6C1\", '#FF0000', '#800080'],
\t\t\t\t//responsive:true,
\t\t\t\t
\t\t\t});
\t\t}
   var donutChart = function(){
\t\t\tMorris.Donut({
\t\t\t\telement: 'morris_donught',
\t\t\t\tdata: [{
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Tournaments \\xa0 \\xa0\",
\t\t\t\t\tvalue: {{t}},

\t\t\t\t}, {
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Teams \\xa0 \\xa0\",
\t\t\t\t\tvalue: {{e}}
\t\t\t\t}, {
\t\t\t\t\tlabel: \"\\xa0 \\xa0 Participations \\xa0 \\xa0\",
\t\t\t\t\tvalue: {{p}}
\t\t\t\t}],
\t\t\t\tresize: true,
\t\t\t\tredraw: true,
\t\t\t\tcolors: [\"#FFB6C1\", '#FF0000', '#800080'],
\t\t\t\t//responsive:true,
\t\t\t\t
\t\t\t});
\t\t}
\t\tvar barChart1 = function(){
\t\tif(jQuery('#barChart_1').length > 0 ){
\t\t\tconst barChart_1 = document.getElementById(\"barChart_1\").getContext('2d');
    
\t\t\tbarChart_1.height = 100;

\t\t\tnew Chart(barChart_1, {
\t\t\t\ttype: 'bar',
\t\t\t\tdata: {
\t\t\t\t\tdefaultFontFamily: 'Poppins',
\t\t\t\t\t\tlabels: [\"Jan\", \"Feb\", \"Mar\", \"Apr\", \"May\", \"Jun\", \"Jul\",\"Aug\",\"Sep\",\"Oct\",\"Nov\",\"Dec\"],
\t\t\t\t\tdatasets: [
\t\t\t\t\t\t{
\t\t\t\t\t\t\tlabel: \"tournois\",
\t\t\t\t\t\tdata: [{{n1}}, {{n2}}, {{n3}},{{n4}}, {{n5}},{{n6}},{{n7}}, {{n8}},{{n9}},{{n10}},{{n11}},{{n12}}],
\t\t\t\t\t\t\tborderColor: 'rgba(249, 58, 11, 1)',
\t\t\t\t\t\t\tborderWidth: \"0\",
\t\t\t\t\t\t\tbackgroundColor: 'rgba(249, 58, 11, 1)'
\t\t\t\t\t\t}
\t\t\t\t\t]
\t\t\t\t},
\t\t\t\toptions: {
\t\t\t\t\tlegend: false, 
\t\t\t\t\tscales: {
\t\t\t\t\t\t\t\t\tyAxes: [{
\t\t\t\t\t\t\tmax: {{ max(dates) }},
            min: 0,
\t\t\t\t\t\t\tticks: {
\t\t\t\t\t\t\t\tbeginAtZero: true,
\t\t\t\t\t\t\t\tstepSize: 1
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}],
\t\t\t\t\t\txAxes: [{
\t\t\t\t\t\t\t// Change here
\t\t\t\t\t\t\tbarPercentage: 0.5
\t\t\t\t\t\t}]
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t}
\t}
  </script>
<div id=\"columnchart_values\" style=\"width: 900px; height: 300px;\"></div>
        
    </div>

    <script src=\"{{asset('vendor/global/global.min.js')}}\"></script>
    <script src=\"{{asset('vendor/chart.js/Chart.bundle.min.js')}}\"></script>
\t<!-- Apex Chart -->
\t<script src=\"{{asset('vendor/apexchart/apexchart.js')}}\"></script>
\t
    <!-- Datatable -->
    <script src=\"{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('js/plugins-init/datatables.init.js')}}\"></script>
\t <script src=\"{{asset('js/plugins-init/chartjs-init.js')}}\"></script>
\t<script src=\"{{asset('js/dashboard/statistics-page.js')}}\"></script>
\t<script src=\"{{asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}\"></script>
 <script src=\"{{asset('vendor/peity/jquery.peity.min.js')}}\"></script>
    <script src=\"{{asset('js/custom.min.js')}}\"></script>
\t<script src=\"{{asset('js/dlabnav-init.js')}}\"></script>
\t<script src=\"{{asset('js/demo.js')}}\"></script>
    <script src=\"{{asset('js/styleSwitcher.js')}}\"></script>
    <script src=\"{{asset('vendor/raphael/raphael.min.js')}}\"></script>
    <script src=\"{{asset('vendor/morris/morris.min.js')}}\"></script>
    <script src=\"{{asset('js/plugins-init/morris-init.js')}}\"></script>
\t<script src=\"{{asset('js/styleSwitcher.js')}}\"></script>
</body>
</html>", "tournois/dashboard.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\tournois\\dashboard.html.twig");
    }
}
