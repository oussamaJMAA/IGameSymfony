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

/* equipe/index.html.twig */
class __TwigTemplate_669aa7adf0c7b11520eea60768676f5b0dee7b1d5da830baf24bc45d92e5db72 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipe/index.html.twig"));

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
        $this->loadTemplate("base.html.twig", "equipe/index.html.twig", 54)->display($context);
        // line 55
        echo "        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class=\"content-body\">
            <div class=\"container-fluid\">
\t\t\t\t
\t\t\t\t
                <!-- row -->


                <div class=\"row\">

\t\t\t\t\t<div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Team Datatable</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table id=\"example3\" class=\"display\" style=\"min-width: 845px\">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Id</th>
                <th>NomEquipe</th>
                <th>Membres</th>
                <th>PtsExp</th>
                <th>TournoisGagne</th>
               
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipes"]) || array_key_exists("equipes", $context) ? $context["equipes"] : (function () { throw new RuntimeError('Variable "equipes" does not exist.', 92, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["equipe"]) {
            // line 93
            echo "                                            <tr>
                                                <td><img class=\"rounded-circle\" width=\"35\" src=\"images/profile/small/pic1.jpg\" alt=\"\"></td>
                                            <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "nomEquipe", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "membres", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "ptsExp", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipe"], "tournoisGagne", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                                                <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["equipe"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\" class=\"btn btn-primary shadow btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
            // line 104
            echo twig_include($this->env, $context, "equipe/_delete_form.html.twig");
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        
                                             </tbody>
                                    
                                    </table>
                                  
                                 <!--  <button type=\"submit\" class=\"btn btn-primary\"><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tournois_pdf");
        echo "\"> Save as PDF </a></button>-->
                                </div>
                            </div>
                        </div>
                    </div>
\t\t\t\t\t
\t\t\t\t
\t\t\t\t</div>
            </div>
        </div>
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
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/global/global.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chart.js/Chart.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Apex Chart -->
\t<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/apexchart/apexchart.js"), "html", null, true);
        echo "\"></script>
\t
    <!-- Datatable -->
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins-init/datatables.init.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery-nice-select/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dlabnav-init.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/styleSwitcher.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "equipe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 174,  311 => 173,  307 => 172,  303 => 171,  298 => 169,  293 => 167,  289 => 166,  283 => 163,  278 => 161,  274 => 160,  226 => 115,  219 => 110,  199 => 104,  194 => 102,  188 => 99,  184 => 98,  180 => 97,  176 => 96,  172 => 95,  168 => 93,  151 => 92,  112 => 55,  110 => 54,  79 => 26,  75 => 25,  70 => 23,  65 => 21,  43 => 1,);
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

        <!--**********************************
            Content body start
        ***********************************-->
        <div class=\"content-body\">
            <div class=\"container-fluid\">
\t\t\t\t
\t\t\t\t
                <!-- row -->


                <div class=\"row\">

\t\t\t\t\t<div class=\"col-12\">
                        <div class=\"card\">
                            <div class=\"card-header\">
                                <h4 class=\"card-title\">Team Datatable</h4>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"table-responsive\">
                                    <table id=\"example3\" class=\"display\" style=\"min-width: 845px\">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Id</th>
                <th>NomEquipe</th>
                <th>Membres</th>
                <th>PtsExp</th>
                <th>TournoisGagne</th>
               
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for equipe in equipes %}
                                            <tr>
                                                <td><img class=\"rounded-circle\" width=\"35\" src=\"images/profile/small/pic1.jpg\" alt=\"\"></td>
                                            <td>{{ equipe.id }}</td>
                <td>{{ equipe.nomEquipe }}</td>
                <td>{{ equipe.membres }}</td>
                <td>{{ equipe.ptsExp }}</td>
                <td>{{ equipe.tournoisGagne }}</td>
                                                <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_equipe_edit', {'id': equipe.id}) }}\" class=\"btn btn-primary shadow btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t {{ include('equipe/_delete_form.html.twig') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t\t
                                            </tr>
                                               
                                          {% endfor %}
        
                                             </tbody>
                                    
                                    </table>
                                  
                                 <!--  <button type=\"submit\" class=\"btn btn-primary\"><a href=\"{{path('tournois_pdf')}}\"> Save as PDF </a></button>-->
                                </div>
                            </div>
                        </div>
                    </div>
\t\t\t\t\t
\t\t\t\t
\t\t\t\t</div>
            </div>
        </div>
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
</html>", "equipe/index.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\equipe\\index.html.twig");
    }
}
