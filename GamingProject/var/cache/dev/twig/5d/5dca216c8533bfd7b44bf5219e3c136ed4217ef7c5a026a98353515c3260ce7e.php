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

/* tournois/bracket.html.twig */
class __TwigTemplate_1bc8742e9ec9d250eecc11f46ca1601e71dad820d214fcfb339febddde381773 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/bracket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/bracket.html.twig"));

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

";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 289
        echo "   

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
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Apex Chart -->
\t<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/apexchart/apexchart.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- Datatable -->
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins-init/datatables.init.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dlabnav-init.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "

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
        $this->loadTemplate("base.html.twig", "tournois/bracket.html.twig", 55)->display($context);
        // line 56
        echo "        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class=\"content-body\">
            <div class=\"container-fluid\">
\t\t\t\t
\t\t\t
                <!-- row -->


                <div class=\"row\">

\t\t\t\t\t<div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Live Tournaments</h4>
                            </div>
                       

<style>
.abc{
border-radius:50%;
}
.round {
  float: left;
}
.round.r-of-4 {
  
}
.round.r-of-2 {
  margin-top: 25px;
}
.bracket-game {
  max-width: 125px;
  margin: 10px 0;
}
.player {
  min-width: 100px;
  border: 1px solid #AAA;
  padding-left: 10px;
}
.player.top {
  border-radius: 3px 3px 0 0;
}
.player.bot {
  border-radius: 0 0 3px 3px;
}
.player .score {
  display: inline;
  float: right;
  border-left: 1px solid #AAA;
  padding-left: 10px;
  padding-right: 10px;
  background: #EEE;
}
.player.win {
  background-color: #B8F2B8;
}
.player.loss {
  background-color: #F2B8B8;
}
.connectors {
  float: left;
  min-width: 35px;
}
.connectors.r-of-2 .top-line {
  position: relative;
  top: 30px;
  width: 17px;
  border: 1px solid #AAA;
}
.connectors.r-of-2 .bottom-line {
  position: relative;
  top: 81px;
  width: 17px;
  border: 1px solid #AAA;
}
.connectors.r-of-2 .vert-line {
  position: relative;
  top: 26px;
  left: -16px;
  height: 55px;
  border-right: 2px solid #AAA;
}
.connectors.r-of-2 .next-line {
  position: relative;
  top: -4px;
  left: 17px;
  width: 17px;
  border: 1px solid #AAA;
}
.clear {
  clear: both;


}

</style>

<script>


function winner1() {
  document.getElementById(\"player1\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"player2\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"finally1\").innerHTML=document.getElementById(\"p1\").textContent;
}

function winner2() {
  document.getElementById(\"player1\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"player2\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"finally1\").innerHTML=document.getElementById(\"p2\").textContent;
}

function winner3() {
  document.getElementById(\"player3\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"player4\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"finally2\").innerHTML=document.getElementById(\"p3\").textContent;
  
}
function winner4() {
  document.getElementById(\"player3\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"player4\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"finally2\").innerHTML=document.getElementById(\"p4\").textContent;
}
function winner_finally1() {
  document.getElementById(\"finally1\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"finally2\").style.backgroundColor=\"#F2B8B8\"
 
}

function winner_finally2() {
  document.getElementById(\"finally1\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"finally2\").style.backgroundColor=\"#B8F2B8\"
 
}
</script>

        <div class=\"content-body\">
<div class=\"round r-of-4\">


  <div class=\"bracket-game\">
  ";
        // line 203
        $context["tab"] = (isset($context["participation"]) || array_key_exists("participation", $context) ? $context["participation"] : (function () { throw new RuntimeError('Variable "participation" does not exist.', 203, $this->source); })());
        // line 204
        echo "

  ";
        // line 206
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 206, $this->source); })())), 4))) {
            // line 207
            echo "    <div class=\"player top\" id=\"player1\">
     <button onclick=\"winner1()\" class=\"abc\">O</button>
  
      <label id=\"p1\">";
            // line 210
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 210, $this->source); })()), 0, [], "array", false, false, false, 210), "|"), "html", null, true);
            echo "</label>
   
    </div>



    <div class=\"player bot\" id=\"player2\">
    <button onclick=\"winner2()\" class=\"abc\">O</button>
      <label id=\"p2\">";
            // line 218
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 218, $this->source); })()), 1, [], "array", false, false, false, 218), "|"), "html", null, true);
            echo "</label>
     
    </div>
  </div>




  <div class=\"bracket-game cont\">
   <div class=\"player top\" id=\"player3\">
     <button onclick=\"winner3()\" class=\"abc\">O</button>
  
      <label id=\"p3\">";
            // line 230
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 230, $this->source); })()), 2, [], "array", false, false, false, 230), "|"), "html", null, true);
            echo "</label>
     
    </div>



    <div class=\"player bot\" id=\"player4\">
     <button onclick=\"winner4()\" class=\"abc\">O</button>
     <label id=\"p4\">";
            // line 238
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 238, $this->source); })()), 3, [], "array", false, false, false, 238), "|"), "html", null, true);
            echo "</label>
      
    </div>
  </div>

</div>



<div class=\"connectors r-of-2\">
  <div class=\"top-line\"></div>
  <div class=\"clear\"></div>
  <div class=\"bottom-line\"></div>
  <div class=\"clear\"></div>
  <div class=\"vert-line\"></div>
  <div class=\"clear\"></div>
  <div class=\"next-line\"></div>
  <div class=\"clear\"></div>
</div>




<div class=\"round r-of-2\">


  <div class=\"bracket-game\">
    <div class=\"player top\">
    <button onclick=\"winner_finally1()\" class=\"abc\">O</button>
     <label id=\"finally1\"></label>
     
    </div>



    <div class=\"player bot\">
    <button onclick=\"winner_finally2()\" class=\"abc\">O</button>
      <label id=\"finally2\"></label>
      
    </div>


 ";
        } else {
            // line 281
            echo "<h4>Tournament isnt ready to be live</h4>
";
        }
        // line 283
        echo "
  </div>
 
</div>
 </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tournois/bracket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 283,  465 => 281,  419 => 238,  408 => 230,  393 => 218,  382 => 210,  377 => 207,  375 => 206,  371 => 204,  369 => 203,  220 => 56,  218 => 55,  192 => 31,  182 => 30,  169 => 340,  165 => 339,  161 => 338,  157 => 337,  152 => 335,  147 => 333,  143 => 332,  137 => 329,  132 => 327,  128 => 326,  89 => 289,  87 => 30,  80 => 26,  76 => 25,  71 => 23,  66 => 21,  44 => 1,);
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

{% block body %}


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
            <div class=\"container-fluid\">
\t\t\t\t
\t\t\t
                <!-- row -->


                <div class=\"row\">

\t\t\t\t\t<div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Live Tournaments</h4>
                            </div>
                       

<style>
.abc{
border-radius:50%;
}
.round {
  float: left;
}
.round.r-of-4 {
  
}
.round.r-of-2 {
  margin-top: 25px;
}
.bracket-game {
  max-width: 125px;
  margin: 10px 0;
}
.player {
  min-width: 100px;
  border: 1px solid #AAA;
  padding-left: 10px;
}
.player.top {
  border-radius: 3px 3px 0 0;
}
.player.bot {
  border-radius: 0 0 3px 3px;
}
.player .score {
  display: inline;
  float: right;
  border-left: 1px solid #AAA;
  padding-left: 10px;
  padding-right: 10px;
  background: #EEE;
}
.player.win {
  background-color: #B8F2B8;
}
.player.loss {
  background-color: #F2B8B8;
}
.connectors {
  float: left;
  min-width: 35px;
}
.connectors.r-of-2 .top-line {
  position: relative;
  top: 30px;
  width: 17px;
  border: 1px solid #AAA;
}
.connectors.r-of-2 .bottom-line {
  position: relative;
  top: 81px;
  width: 17px;
  border: 1px solid #AAA;
}
.connectors.r-of-2 .vert-line {
  position: relative;
  top: 26px;
  left: -16px;
  height: 55px;
  border-right: 2px solid #AAA;
}
.connectors.r-of-2 .next-line {
  position: relative;
  top: -4px;
  left: 17px;
  width: 17px;
  border: 1px solid #AAA;
}
.clear {
  clear: both;


}

</style>

<script>


function winner1() {
  document.getElementById(\"player1\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"player2\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"finally1\").innerHTML=document.getElementById(\"p1\").textContent;
}

function winner2() {
  document.getElementById(\"player1\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"player2\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"finally1\").innerHTML=document.getElementById(\"p2\").textContent;
}

function winner3() {
  document.getElementById(\"player3\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"player4\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"finally2\").innerHTML=document.getElementById(\"p3\").textContent;
  
}
function winner4() {
  document.getElementById(\"player3\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"player4\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"finally2\").innerHTML=document.getElementById(\"p4\").textContent;
}
function winner_finally1() {
  document.getElementById(\"finally1\").style.backgroundColor=\"#B8F2B8\"
  document.getElementById(\"finally2\").style.backgroundColor=\"#F2B8B8\"
 
}

function winner_finally2() {
  document.getElementById(\"finally1\").style.backgroundColor=\"#F2B8B8\"
  document.getElementById(\"finally2\").style.backgroundColor=\"#B8F2B8\"
 
}
</script>

        <div class=\"content-body\">
<div class=\"round r-of-4\">


  <div class=\"bracket-game\">
  {% set tab = participation %}


  {% if tab|length == 4 %}
    <div class=\"player top\" id=\"player1\">
     <button onclick=\"winner1()\" class=\"abc\">O</button>
  
      <label id=\"p1\">{{tab[0]|join('|')}}</label>
   
    </div>



    <div class=\"player bot\" id=\"player2\">
    <button onclick=\"winner2()\" class=\"abc\">O</button>
      <label id=\"p2\">{{tab[1]|join('|')}}</label>
     
    </div>
  </div>




  <div class=\"bracket-game cont\">
   <div class=\"player top\" id=\"player3\">
     <button onclick=\"winner3()\" class=\"abc\">O</button>
  
      <label id=\"p3\">{{tab[2]|join('|')}}</label>
     
    </div>



    <div class=\"player bot\" id=\"player4\">
     <button onclick=\"winner4()\" class=\"abc\">O</button>
     <label id=\"p4\">{{tab[3]|join('|')}}</label>
      
    </div>
  </div>

</div>



<div class=\"connectors r-of-2\">
  <div class=\"top-line\"></div>
  <div class=\"clear\"></div>
  <div class=\"bottom-line\"></div>
  <div class=\"clear\"></div>
  <div class=\"vert-line\"></div>
  <div class=\"clear\"></div>
  <div class=\"next-line\"></div>
  <div class=\"clear\"></div>
</div>




<div class=\"round r-of-2\">


  <div class=\"bracket-game\">
    <div class=\"player top\">
    <button onclick=\"winner_finally1()\" class=\"abc\">O</button>
     <label id=\"finally1\"></label>
     
    </div>



    <div class=\"player bot\">
    <button onclick=\"winner_finally2()\" class=\"abc\">O</button>
      <label id=\"finally2\"></label>
      
    </div>


 {% else %}
<h4>Tournament isnt ready to be live</h4>
{% endif %}

  </div>
 
</div>
 </div>
{% endblock %}
   

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
</body>
</html>", "tournois/bracket.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\tournois\\bracket.html.twig");
    }
}
