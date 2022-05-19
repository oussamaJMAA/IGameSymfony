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

/* tournois/index.html.twig */
class __TwigTemplate_c50533b6bee72fba58672a024147fada12cd40ee8baab8ae274108cc8aa01aef extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tournois/index.html.twig"));

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
        // line 203
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
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Apex Chart -->
\t<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/apexchart/apexchart.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- Datatable -->
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins-init/datatables.init.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dlabnav-init.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
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
        $this->loadTemplate("base.html.twig", "tournois/index.html.twig", 55)->display($context);
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
                                <h4 class=\"card-title\">Tournaments Datatable</h4>
                            </div>
                           <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table id=\"example5\" class=\"t\" style=\"min-width: 845px\">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                 <th>Id</th>
                <th>NomTournois</th>
                <th>Capacite</th>
                
                <th>Recompense</th>
                <th>DateTournois</th>
                <th>PtsXp</th>
                <th>TimeT</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"all\">
                                           ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tournois"]) || array_key_exists("tournois", $context) ? $context["tournois"] : (function () { throw new RuntimeError('Variable "tournois" does not exist.', 96, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tournoi"]) {
            // line 97
            echo "                                            <tr>
                                                <td><img class=\"rounded-circle\" width=\"35\" src=\"images/profile/small/pic1.jpg\" alt=\"\"></td>
                                             <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "nomTournois", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "capacite", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                
                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "recompense", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            ((twig_get_attribute($this->env, $this->source, $context["tournoi"], "dateTournois", [], "any", false, false, false, 104)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "dateTournois", [], "any", false, false, false, 104), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "ptsXp", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            ((twig_get_attribute($this->env, $this->source, $context["tournoi"], "timeT", [], "any", false, false, false, 106)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tournoi"], "timeT", [], "any", false, false, false, 106), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                                                <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["tournoi"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\" class=\"btn btn-primary shadow btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
            // line 111
            echo twig_include($this->env, $context, "tournois/_delete_form.html.twig");
            echo "
                                                         <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bracket", ["id" => twig_get_attribute($this->env, $this->source, $context["tournoi"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\" class=\"btn btn-primary shadow btn-xs sharp me-1\">L</a>
                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t\t
                                            </tr>
                                               
                                          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tournoi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        
                                             </tbody>
                                    <tbody id=\"search1\">
</tbody>

                                    </table>
                                  
                                   <button type=\"submit\" class=\"btn btn-primary\"><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tournois_pdf");
        echo "\"> Save as PDF </a></button>
                                </div>
                            </div>
                        </div>
                    </div>
\t\t\t\t\t
\t\t\t\t
\t\t\t\t</div>
            </div>
        </div>
             <script
src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
</script>


<script> \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est
                    envoyée */
                    url : \"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchTournaments");
        echo "\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'POST',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la
                    zone de recherche et sera placée après l’url */
                    data: {
                        'tournois' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le
                    nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$(\"#search1\").empty();

                            \$.each(JSON.parse(retour), function(i,obj) {
                              \t   var date = new Date(obj.dateTournois.timestamp * 1000);
                                date.setHours(date.getHours()-1);
                                var dateStr =
                                    date.getFullYear() + \"-\" +
                                    (\"00\" + (date.getMonth() + 1)).slice(-2) + \"-\" +
                                    (\"00\" + date.getDate()).slice(-2);
                                /*var timeTT = new Time(obj.timeT.timestamp * 1000);
timeTT.setHours(TimeTT.getHours()-1);
                                var time =   (\"00\" + timeTT.getHours()).slice(-2) + \":\" +
                                    (\"00\" + timeTT.getMinutes()).slice(-2) + \":\" +
                                    (\"00\" + timeTT.getSeconds()).slice(-2);
*/


                                \$(\"#all\").hide();
 \$(\"#search1\").append('<tr><td></td><td>'+obj.id+'</td>'+'<td>'+obj.nomTournois+'</td>'+'<td>'+obj.capacite+'</td>'+
 '<td>'+obj.recompense+'</td>'+'<td>'+dateStr+'</td>'+
 '<td>'+obj.ptsXp+'</td>'+'<td>'+obj.timeT+'</td>'+
 '<td>'+'<a href=\"edit/'+obj.id+'\" class=\"btn btn-primary shadow btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a></td>'+'</tr>');

                            });
                        }
                        else
                        {
                            \$(\"#all\").show();
                            \$(\"#search1\").empty();
                            \$(\"#search1\").fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
\t\t\t\t
</script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tournois/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 151,  354 => 126,  345 => 119,  324 => 112,  320 => 111,  315 => 109,  309 => 106,  305 => 105,  301 => 104,  297 => 103,  292 => 101,  288 => 100,  284 => 99,  280 => 97,  263 => 96,  221 => 56,  219 => 55,  193 => 31,  183 => 30,  170 => 255,  166 => 254,  162 => 253,  158 => 252,  153 => 250,  148 => 248,  144 => 247,  138 => 244,  133 => 242,  129 => 241,  89 => 203,  87 => 30,  80 => 26,  76 => 25,  71 => 23,  66 => 21,  44 => 1,);
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
                                <h4 class=\"card-title\">Tournaments Datatable</h4>
                            </div>
                           <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"Search\">
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table id=\"example5\" class=\"t\" style=\"min-width: 845px\">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                 <th>Id</th>
                <th>NomTournois</th>
                <th>Capacite</th>
                
                <th>Recompense</th>
                <th>DateTournois</th>
                <th>PtsXp</th>
                <th>TimeT</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"all\">
                                           {% for tournoi in tournois %}
                                            <tr>
                                                <td><img class=\"rounded-circle\" width=\"35\" src=\"images/profile/small/pic1.jpg\" alt=\"\"></td>
                                             <td>{{ tournoi.id }}</td>
                <td>{{ tournoi.nomTournois }}</td>
                <td>{{ tournoi.capacite }}</td>
                
                <td>{{ tournoi.recompense }}</td>
                <td>{{ tournoi.dateTournois ? tournoi.dateTournois|date('Y-m-d') : '' }}</td>
                <td>{{ tournoi.ptsXp }}</td>
                <td>{{ tournoi.timeT ? tournoi.timeT|date('H:i:s') : '' }}</td>
                                                <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_tournois_edit', {'id': tournoi.id}) }}\" class=\"btn btn-primary shadow btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t {{ include('tournois/_delete_form.html.twig') }}
                                                         <a href=\"{{ path('bracket', {'id': tournoi.id}) }}\" class=\"btn btn-primary shadow btn-xs sharp me-1\">L</a>
                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t\t
                                            </tr>
                                               
                                          {% endfor %}
        
                                             </tbody>
                                    <tbody id=\"search1\">
</tbody>

                                    </table>
                                  
                                   <button type=\"submit\" class=\"btn btn-primary\"><a href=\"{{path('tournois_pdf')}}\"> Save as PDF </a></button>
                                </div>
                            </div>
                        </div>
                    </div>
\t\t\t\t\t
\t\t\t\t
\t\t\t\t</div>
            </div>
        </div>
             <script
src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\">
</script>


<script> \$( document ).ready(function() {
            \$(\"#search\").keyup(function(e){
                /* La variable value va prendre la valeur insérer dans le champ de texte
                afin d’effectuer la recherche */
                var value = \$(this).val();
                /* Ajax est lancé lors du remplissage du champ texte dont l’id est
                « search » pour faire la recherche */
                \$.ajax({
                    /* l’url est une chaine de caractères contenant l’adresse où la requête est
                    envoyée */
                    url : \"{{ path('searchTournaments') }}\",
                    /* La méthode utilisée pour transférer les données est GET */
                    type : 'POST',
                    /*Ici search value va prendre la chaine entrée par un utilisateur dans la
                    zone de recherche et sera placée après l’url */
                    data: {
                        'tournois' : value
                    },
                    /*Cette fonction permet de vider le contenu du tableau pour recevoir le
                    nouveau contenu*/
                    success : function(retour){
                        if(retour){
                            \$(\"#search1\").empty();

                            \$.each(JSON.parse(retour), function(i,obj) {
                              \t   var date = new Date(obj.dateTournois.timestamp * 1000);
                                date.setHours(date.getHours()-1);
                                var dateStr =
                                    date.getFullYear() + \"-\" +
                                    (\"00\" + (date.getMonth() + 1)).slice(-2) + \"-\" +
                                    (\"00\" + date.getDate()).slice(-2);
                                /*var timeTT = new Time(obj.timeT.timestamp * 1000);
timeTT.setHours(TimeTT.getHours()-1);
                                var time =   (\"00\" + timeTT.getHours()).slice(-2) + \":\" +
                                    (\"00\" + timeTT.getMinutes()).slice(-2) + \":\" +
                                    (\"00\" + timeTT.getSeconds()).slice(-2);
*/


                                \$(\"#all\").hide();
 \$(\"#search1\").append('<tr><td></td><td>'+obj.id+'</td>'+'<td>'+obj.nomTournois+'</td>'+'<td>'+obj.capacite+'</td>'+
 '<td>'+obj.recompense+'</td>'+'<td>'+dateStr+'</td>'+
 '<td>'+obj.ptsXp+'</td>'+'<td>'+obj.timeT+'</td>'+
 '<td>'+'<a href=\"edit/'+obj.id+'\" class=\"btn btn-primary shadow btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a></td>'+'</tr>');

                            });
                        }
                        else
                        {
                            \$(\"#all\").show();
                            \$(\"#search1\").empty();
                            \$(\"#search1\").fadeIn('fast');
                        }
                    },
                });
                return false;
            });
        });
\t\t\t\t
</script>

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
</html>", "tournois/index.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\tournois\\index.html.twig");
    }
}
