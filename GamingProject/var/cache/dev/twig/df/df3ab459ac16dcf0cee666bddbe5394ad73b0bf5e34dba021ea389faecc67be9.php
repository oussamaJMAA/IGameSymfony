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

/* base.html.twig */
class __TwigTemplate_5b89607dacd2911d66f250a71786280b5acf3db1e14bbebc71d04fa1922c2ff2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<div class=\"nav-header\">
            <a href=\"index.html\" class=\"brand-logo\">
\t\t\t\t<svg class=\"logo-abbr\" xmlns=\"http://www.w3.org/2000/svg\" width=\"62.074\" height=\"65.771\" viewBox=\"0 0 62.074 65.771\">
\t\t\t\t  <g id=\"search_11_\" data-name=\"search (11)\" transform=\"translate(12.731 12.199)\">
\t\t\t\t\t<rect class=\"rect-primary-rect\" id=\"Rectangle_1\" data-name=\"Rectangle 1\" width=\"60\" height=\"60\" rx=\"30\" transform=\"translate(-10.657 -12.199)\" fill=\"#f73a0b\"/>
\t\t\t\t\t<path id=\"Path_2001\" data-name=\"Path 2001\" d=\"M32.7,5.18a17.687,17.687,0,0,0-25.8,24.176l-19.8,21.76a1.145,1.145,0,0,0,0,1.62,1.142,1.142,0,0,0,.81.336,1.142,1.142,0,0,0,.81-.336l19.8-21.76a17.687,17.687,0,0,0,29.357-13.29A17.57,17.57,0,0,0,32.7,5.18Zm-1.62,23.392A15.395,15.395,0,0,1,9.312,6.8,15.395,15.395,0,1,1,31.083,28.572Zm0,0\" transform=\"translate(1 0)\" fill=\"#fff\" stroke=\"#fff\" stroke-width=\"1\"/>
\t\t\t\t\t<path id=\"Path_2002\" data-name=\"Path 2002\" d=\"M192.859,115.547a4.523,4.523,0,0,0,.7-2.415v-2.284a4.55,4.55,0,0,0-9.1,0v2.284a4.523,4.523,0,0,0,.7,2.415,4.954,4.954,0,0,0-3.708,4.788v1.623a2.4,2.4,0,0,0,2.4,2.4h10.323a2.4,2.4,0,0,0,2.4-2.4v-1.623a4.954,4.954,0,0,0-3.708-4.788Zm-6.114-4.7a2.259,2.259,0,0,1,4.518,0v2.284a2.259,2.259,0,1,1-4.518,0Zm7.53,11.111a.11.11,0,0,1-.11.11H183.843a.11.11,0,0,1-.11-.11v-1.623a2.656,2.656,0,0,1,2.653-2.653h5.237a2.656,2.656,0,0,1,2.653,2.653Zm0,0\" transform=\"translate(-168.591 -98.178)\" fill=\"#fff\" stroke=\"#fff\" stroke-width=\"1\"/>
\t\t\t\t  </g>
\t\t\t\t</svg>



\t\t\t\t<svg class=\"brand-title\" xmlns=\"http://www.w3.org/2000/svg\" width=\"134.01\" height=\"48.365\" viewBox=\"0 0 134.01 48.365\">
\t\t\t\t  <g id=\"Group_38\" data-name=\"Group 38\" transform=\"translate(-133.99 -40.635)\">
\t\t\t\t\t<text id=\"Job_Admin_Dashboard\" data-name=\"Job Admin Dashboard\" transform=\"translate(134 85)\" fill=\"#787878\" font-size=\"12\" font-family=\"Poppins-Light, Poppins\" font-weight=\"300\"><tspan x=\"0\" y=\"0\">Job Admin Dashboard</tspan></text>
\t\t\t\t\t<path id=\"Path_1948\" data-name=\"Path 1948\" d=\"M.36,6.616a1.661,1.661,0,0,0,1.094-.422,1.287,1.287,0,0,0,.5-1.016V-11.738H7.52L7.551,5.271A8.16,8.16,0,0,1,6.91,8.789a4.074,4.074,0,0,1-2.2,1.985,11.542,11.542,0,0,1-4.346.657ZM17.651,9.68A7.316,7.316,0,0,1,13.7,8.617a7.008,7.008,0,0,1-2.626-2.97,9.786,9.786,0,0,1-.922-4.315,9.276,9.276,0,0,1,.907-4.174,6.935,6.935,0,0,1,2.6-2.877,7.438,7.438,0,0,1,4-1.047,7.607,7.607,0,0,1,4.018,1.032,6.8,6.8,0,0,1,2.611,2.861,9.349,9.349,0,0,1,.907,4.205,9.759,9.759,0,0,1-.922,4.33,6.993,6.993,0,0,1-2.642,2.955A7.4,7.4,0,0,1,17.651,9.68Zm0-4.565a1.753,1.753,0,0,0,1.438-.954,5.2,5.2,0,0,0,.625-2.83,4.8,4.8,0,0,0-.594-2.626,1.73,1.73,0,0,0-1.47-.907,1.694,1.694,0,0,0-1.454.907,4.908,4.908,0,0,0-.578,2.626,5.309,5.309,0,0,0,.61,2.83A1.718,1.718,0,0,0,17.651,5.115Zm17.478,4.6q-2.345,0-5.972-.375L27.75,9.18V-12.238h5.44V-6.11q.25-.094.844-.3a6.64,6.64,0,0,1,1.079-.281,6.807,6.807,0,0,1,1.079-.078,5.75,5.75,0,0,1,4.737,1.939q1.579,1.939,1.579,6.285,0,4.377-1.767,6.316T35.129,9.711Zm-.594-4.878a2.3,2.3,0,0,0,1.876-.719A4.131,4.131,0,0,0,37,1.551Q37-1.92,34.754-1.92q-.719,0-1.563.063v6.6A10.43,10.43,0,0,0,34.535,4.834ZM45.134-6.36h5.44V9.274h-5.44Zm.031-6.222h5.44V-7.36h-5.44ZM59.611,9.68a5.9,5.9,0,0,1-4.909-2q-1.595-2-1.595-6.222a12.451,12.451,0,0,1,.844-5.143A4.635,4.635,0,0,1,56.3-6.125a9.87,9.87,0,0,1,3.846-.641,13.2,13.2,0,0,1,2.095.188q1.157.188,3.033.625L65.145-1.7q-2.908-.219-3.627-.219a4.459,4.459,0,0,0-1.845.3,1.565,1.565,0,0,0-.844.985,6.976,6.976,0,0,0-.219,2A7.45,7.45,0,0,0,58.845,3.5a1.625,1.625,0,0,0,.86,1.032,4.362,4.362,0,0,0,1.813.3l3.6-.219L65.27,8.9A27.641,27.641,0,0,1,59.611,9.68Zm8.473-21.918h5.44V-.325l1.032-.406L76.714-6.36H82.78L79.4,1.207,83,9.274H76.9L74.744,3.958l-1.219.406V9.274h-5.44Z\" transform=\"translate(133.63 53.217)\" fill=\"#464646\"/>
\t\t\t\t  </g>
\t\t\t\t</svg>

            </a>
            <div class=\"nav-control\">
                <div class=\"hamburger\">
                    <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
\t\t
\t\t<!--**********************************
            Chat box start
        ***********************************-->
\t\t<div class=\"chatbox\">
\t\t\t<div class=\"chatbox-close\"></div>
\t\t\t<div class=\"custom-tab-1\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#notes\">Notes</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#alerts\">Alerts</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#chat\">Chat</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane fade active show\" id=\"chat\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box\">
\t\t\t\t\t\t\t<div class=\"card-header chat-list-header text-center\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect fill=\"#000000\" x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"/><rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) \" x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"/></g></svg></a>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Chat List</h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Show All</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body contacts_body p-0 dlab-scroll  \" id=\"DLAB_W_Contacts_Body\">
\t\t\t\t\t\t\t\t<ul class=\"contacts\">
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">A</li>
\t\t\t\t\t\t\t\t\t<li class=\"active dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Archie Parker</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Kalid is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Alfie Mason</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Taherah left 7 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/3.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>AharlieKane</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sami is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/4.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Athan Jacoby</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nargis left 30 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">B</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/5.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Bashid Samim</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Rashid left 50 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Breddie Ronan</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Kalid is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Ceorge Carson</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Taherah left 7 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">D</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/3.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Darry Parker</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sami is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/4.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Denry Hunter</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nargis left 30 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">J</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/5.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Jack Ronan</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Rashid left 50 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Jacob Tucker</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Kalid is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>James Logan</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Taherah left 7 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/3.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Joshua Weston</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sami is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">O</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/4.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Oliver Acker</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nargis left 30 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/5.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Oscar Weston</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Rashid left 50 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card chat dlab-chat-history-box d-none\">
\t\t\t\t\t\t\t<div class=\"card-header chat-list-header text-center\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dlab-chat-history-back\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><polygon points=\"0 0 24 0 24 24 0 24\"/><rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) \" x=\"14\" y=\"7\" width=\"2\" height=\"10\" rx=\"1\"/><path d=\"M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) \"/></g></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Chat with Khelesh</h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-success\">Online</p>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg></a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\"><i class=\"fa fa-user-circle text-primary me-2\"></i> View profile</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\"><i class=\"fa fa-users text-primary me-2\"></i> Add to btn-close friends</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\"><i class=\"fa fa-plus text-primary me-2\"></i> Add to group</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\"><i class=\"fa fa-ban text-primary me-2\"></i> Block</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body msg_card_body dlab-scroll\" id=\"DLAB_W_Contacts_Body3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tHi, how are you samim?
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">8:40 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tHi Khalid i am good tnx how about you?
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">8:55 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tI am good too, thank you for your chat template
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:00 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tYou are welcome
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">9:05 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tI am looking for your next templates
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:07 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tOk, thank you have a good day
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">9:10 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tBye, see you
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:12 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tHi, how are you samim?
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">8:40 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tHi Khalid i am good tnx how about you?
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">8:55 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tI am good too, thank you for your chat template
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:00 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tYou are welcome
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">9:05 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tI am looking for your next templates
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:07 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tOk, thank you have a good day
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">9:10 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tBye, see you
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:12 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer type_msg\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Type your message...\"></textarea>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-location-arrow\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"alerts\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card mb-sm-3 mb-md-0 contacts_card\">
\t\t\t\t\t\t\t<div class=\"card-header chat-list-header text-center\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg></a>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Notications</h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Show All</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/><path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/></g></svg></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body contacts_body p-0 dlab-scroll\" id=\"DLAB_W_Contacts_Body1\">
\t\t\t\t\t\t\t\t<ul class=\"contacts\">
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">SEVER STATUS</li>
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont primary\">KK</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>David Nester Birthday</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-primary\">Today</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">SOCIAL</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont success\">RU</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Perfection Simplified</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Jame Smith commented on your status</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">SEVER STATUS</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont primary\">AU</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>AharlieKane</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sami is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont info\">MO</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Athan Jacoby</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nargis left 30 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"notes\">
\t\t\t\t\t\t<div class=\"card mb-sm-3 mb-md-0 note_card\">
\t\t\t\t\t\t\t<div class=\"card-header chat-list-header text-center\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect fill=\"#000000\" x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"/><rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) \" x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"/></g></svg></a>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Notes</h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Add New Nots</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/><path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/></g></svg></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body contacts_body p-0 dlab-scroll\" id=\"DLAB_W_Contacts_Body2\">
\t\t\t\t\t\t\t\t<ul class=\"contacts\">
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>New order placed..</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>10 Aug 2020</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-xs sharp\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Youtube, a video-sharing website..</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>10 Aug 2020</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-xs sharp\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>john just buy your product..</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>10 Aug 2020</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-xs sharp\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Athan Jacoby</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>10 Aug 2020</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-xs sharp\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--**********************************
            Chat box End
        ***********************************-->


\t\t
\t\t
        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">
            <div class=\"header-content\">
                <nav class=\"navbar navbar-expand\">
                    <div class=\"collapse navbar-collapse justify-content-between\">
                        <div class=\"header-left\">
\t\t\t\t\t\t\t<div class=\"dashboard_bar\">
                                Table-Datatable
                            </div>
\t\t\t\t\t\t\t<div class=\"nav-item d-flex align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"input-group search-area\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><a href=\"javascript:void(0)\"><i class=\"flaticon-381-search-2\"></i></a></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"plus-icon\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><i class=\"fas fa-plus\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                        <ul class=\"navbar-nav header-right\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown notification_dropdown\">
                                <a class=\"nav-link bell-link \" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"22.871\" viewBox=\"0 0 24 22.871\">
\t\t\t\t\t\t\t\t  <g  data-name=\"Layer 2\" transform=\"translate(-2 -2)\">
\t\t\t\t\t\t\t\t\t<path id=\"Path_9\" data-name=\"Path 9\" d=\"M23.268,2H4.73A2.733,2.733,0,0,0,2,4.73V17.471A2.733,2.733,0,0,0,4.73,20.2a.911.911,0,0,1,.91.91v1.94a1.82,1.82,0,0,0,2.83,1.514l6.317-4.212a.9.9,0,0,1,.5-.153h4.436a2.742,2.742,0,0,0,2.633-2L25.9,5.462A2.735,2.735,0,0,0,23.268,2Zm.879,2.978-3.539,12.74a.915.915,0,0,1-.88.663H15.292a2.718,2.718,0,0,0-1.514.459L7.46,23.051v-1.94a2.733,2.733,0,0,0-2.73-2.73.911.911,0,0,1-.91-.91V4.73a.911.911,0,0,1,.91-.91H23.268a.914.914,0,0,1,.879,1.158Z\" transform=\"translate(0 0)\"/>
\t\t\t\t\t\t\t\t\t<path id=\"Path_10\" data-name=\"Path 10\" d=\"M7.91,10.82h4.55a.91.91,0,1,0,0-1.82H7.91a.91.91,0,1,0,0,1.82Z\" transform=\"translate(-0.45 -0.63)\"/>
\t\t\t\t\t\t\t\t\t<path id=\"Path_11\" data-name=\"Path 11\" d=\"M16.1,13H7.91a.91.91,0,1,0,0,1.82H16.1a.91.91,0,1,0,0-1.82Z\" transform=\"translate(-0.45 -0.99)\"/>
\t\t\t\t\t\t\t\t  </g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<span class=\"badge light text-white bg-primary rounded-circle\">76</span>
                                </a>
\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t<li class=\"nav-item dropdown notification_dropdown\">
                                <a class=\"nav-link\" href=\"javascript:void(0);\" role=\"button\" data-bs-toggle=\"dropdown\">
                                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t  <g  data-name=\"Layer 2\" transform=\"translate(-2 -2)\">
\t\t\t\t\t\t\t\t\t\t<path id=\"Path_20\" data-name=\"Path 20\" d=\"M22.571,15.8V13.066a8.5,8.5,0,0,0-7.714-8.455V2.857a.857.857,0,0,0-1.714,0V4.611a8.5,8.5,0,0,0-7.714,8.455V15.8A4.293,4.293,0,0,0,2,20a2.574,2.574,0,0,0,2.571,2.571H9.8a4.286,4.286,0,0,0,8.4,0h5.23A2.574,2.574,0,0,0,26,20,4.293,4.293,0,0,0,22.571,15.8ZM7.143,13.066a6.789,6.789,0,0,1,6.78-6.78h.154a6.789,6.789,0,0,1,6.78,6.78v2.649H7.143ZM14,24.286a2.567,2.567,0,0,1-2.413-1.714h4.827A2.567,2.567,0,0,1,14,24.286Zm9.429-3.429H4.571A.858.858,0,0,1,3.714,20a2.574,2.574,0,0,1,2.571-2.571H21.714A2.574,2.574,0,0,1,24.286,20a.858.858,0,0,1-.857.857Z\"/>
\t\t\t\t\t\t\t\t\t  </g>
\t\t\t\t\t\t\t\t\t</svg>
                                    <span class=\"badge light text-white bg-primary rounded-circle\">4</span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <div id=\"DZ_W_Notification1\" class=\"widget-media dlab-scroll p-3\" style=\"height:380px;\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"image\" width=\"50\" src=\"images/avatar/1.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dr sultads Send you Photo</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tKG
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Resport created successfully</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Reminder : Treatment Time!</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t <li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"image\" width=\"50\" src=\"images/avatar/1.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dr sultads Send you Photo</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tKG
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Resport created successfully</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Reminder : Treatment Time!</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
                                    <a class=\"all-notification\" href=\"javascript:void(0);\">See all notifications <i class=\"ti-arrow-end\"></i></a>
                                </div>
                            </li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item dropdown notification_dropdown\">
                                <a class=\"nav-link \" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23.262\" height=\"24\" viewBox=\"0 0 23.262 24\">
\t\t\t\t\t\t\t\t\t  <g id=\"icon\" transform=\"translate(-1565 90)\">
\t\t\t\t\t\t\t\t\t\t<path id=\"setting_1_\" data-name=\"setting (1)\" d=\"M30.45,13.908l-1-.822a1.406,1.406,0,0,1,0-2.171l1-.822a1.869,1.869,0,0,0,.432-2.385L28.911,4.293a1.869,1.869,0,0,0-2.282-.818l-1.211.454a1.406,1.406,0,0,1-1.88-1.086l-.213-1.276A1.869,1.869,0,0,0,21.475,0H17.533a1.869,1.869,0,0,0-1.849,1.567L15.47,2.842a1.406,1.406,0,0,1-1.88,1.086l-1.211-.454a1.869,1.869,0,0,0-2.282.818L8.126,7.707a1.869,1.869,0,0,0,.432,2.385l1,.822a1.406,1.406,0,0,1,0,2.171l-1,.822a1.869,1.869,0,0,0-.432,2.385L10.1,19.707a1.869,1.869,0,0,0,2.282.818l1.211-.454a1.406,1.406,0,0,1,1.88,1.086l.213,1.276A1.869,1.869,0,0,0,17.533,24h3.943a1.869,1.869,0,0,0,1.849-1.567l.213-1.276a1.406,1.406,0,0,1,1.88-1.086l1.211.454a1.869,1.869,0,0,0,2.282-.818l1.972-3.415a1.869,1.869,0,0,0-.432-2.385ZM27.287,18.77l-1.211-.454a3.281,3.281,0,0,0-4.388,2.533l-.213,1.276H17.533l-.213-1.276a3.281,3.281,0,0,0-4.388-2.533l-1.211.454L9.75,15.355l1-.822a3.281,3.281,0,0,0,0-5.067l-1-.822L11.721,5.23l1.211.454A3.281,3.281,0,0,0,17.32,3.151l.213-1.276h3.943l.213,1.276a3.281,3.281,0,0,0,4.388,2.533l1.211-.454,1.972,3.414h0l-1,.822a3.281,3.281,0,0,0,0,5.067l1,.822ZM19.5,7.375A4.625,4.625,0,1,0,24.129,12,4.63,4.63,0,0,0,19.5,7.375Zm0,7.375A2.75,2.75,0,1,1,22.254,12,2.753,2.753,0,0,1,19.5,14.75Z\" transform=\"translate(1557.127 -90)\"/>
\t\t\t\t\t\t\t\t\t  </g>
\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\t<span class=\"badge light text-white bg-primary rounded-circle\">15</span>
                                </a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t<div id=\"DZ_W_TimeLine02\" class=\"widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370\">
                                    <ul class=\"timeline\">
                                        <li>
                                            <div class=\"timeline-badge primary\"></div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>10 minutes ago</span>
                                                <h6 class=\"mb-0\">Youtube, a video-sharing website, goes live <strong class=\"text-primary\">\$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge info\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">New order placed <strong class=\"text-info\">#XF-2356.</strong></h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge danger\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>30 minutes ago</span>
                                                <h6 class=\"mb-0\">john just buy your product <strong class=\"text-warning\">Sell \$250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge success\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>15 minutes ago</span>
                                                <h6 class=\"mb-0\">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge warning\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge dark\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown header-profile\">
                                <a class=\"nav-link\" href=\"javascript:void(0);\" role=\"button\" data-bs-toggle=\"dropdown\">
                                    <img src=\"images/profile/pic1.jpg\" width=\"20\" alt=\"\"/>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a href=\"app-profile.html\" class=\"dropdown-item ai-icon\">
                                        <svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-primary\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg>
                                        <span class=\"ms-2\">Profile </span>
                                    </a>
                                    <a href=\"email-inbox.html\" class=\"dropdown-item ai-icon\">
                                        <svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-success\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                                        <span class=\"ms-2\">Inbox </span>
                                    </a>
                                    <a href=\"page-error-404.html\" class=\"dropdown-item ai-icon\">
                                        <svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-danger\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
                                        <span class=\"ms-2\">Logout </span>
                                    </a>
                                </div>
                            </li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
                        </ul>
                    </div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"dlabnav\">
            <div class=\"dlabnav-scroll\">
\t\t\t\t<div class=\"dropdown header-profile2 \">
\t\t\t\t\t<a class=\"nav-link \" href=\"javascript:void(0);\"  role=\"button\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<div class=\"header-info2 d-flex align-items-center\">
\t\t\t\t\t\t\t<img src=\"images/profile/pic1.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center sidebar-info\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"font-w400 d-block\">Franklin Jr</span>
\t\t\t\t\t\t\t\t\t<small class=\"text-end font-w400\">Superadmin</small>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t<a href=\"app-profile.html\" class=\"dropdown-item ai-icon \">
\t\t\t\t\t\t\t<svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-primary\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg>
\t\t\t\t\t\t\t<span class=\"ms-2\">Profile </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"email-inbox.html\" class=\"dropdown-item ai-icon\">
\t\t\t\t\t\t\t<svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-success\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
\t\t\t\t\t\t\t<span class=\"ms-2\">Inbox </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"page-error-404.html\" class=\"dropdown-item ai-icon\">
\t\t\t\t\t\t\t<svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-danger\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
\t\t\t\t\t\t\t<span class=\"ms-2\">Logout </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"metismenu\" id=\"menu\">
                    <li><a href=\"";
        // line 787
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stat");
        echo "\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-025-dashboard\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Dashboard</span>
\t\t\t\t\t\t</a>
                     
                    </li>
\t\t\t\t\t<li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-093-waving\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Users</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"#\">All Users</a></li>
                            <li><a href=\"#\">Add Users</a></li>
 \t\t\t\t\t</ul>
                    </li>
                    <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"flaticon-050-info\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Tournaments</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 807
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_index");
        echo "\">All Tournaments</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 808
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois_new");
        echo "\">Add Tournaments</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 809
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_index");
        echo "\">Participations</a></li>
\t\t\t\t\t\t\t
 </ul>
                    </li>


                    <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-041-graph\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Teams</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 820
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_index");
        echo "\">All Teams</a></li>
                         
                            <li><a href=\"";
        // line 822
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_participation_index");
        echo "\">Participations</a></li>
                       
                        </ul>
                    </li>


                    <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-086-star\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Bootstrap</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"ui-accordion.html\">Accordion</a></li>
                            <li><a href=\"ui-alert.html\">Alert</a></li>
                            <li><a href=\"ui-badge.html\">Badge</a></li>
                            <li><a href=\"ui-button.html\">Button</a></li>
                            <li><a href=\"ui-modal.html\">Modal</a></li>
                            <li><a href=\"ui-button-group.html\">Button Group</a></li>
                            <li><a href=\"ui-list-group.html\">List Group</a></li>
                            <li><a href=\"ui-card.html\">Cards</a></li>
                            <li><a href=\"ui-carousel.html\">Carousel</a></li>
                            <li><a href=\"ui-dropdown.html\">Dropdown</a></li>
                            <li><a href=\"ui-popover.html\">Popover</a></li>
                            <li><a href=\"ui-progressbar.html\">Progressbar</a></li>
                            <li><a href=\"ui-tab.html\">Tab</a></li>
                            <li><a href=\"ui-typography.html\">Typography</a></li>
                            <li><a href=\"ui-pagination.html\">Pagination</a></li>
                            <li><a href=\"ui-grid.html\">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-045-heart\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Plugins</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"uc-select2.html\">Select 2</a></li>
                            <li><a href=\"uc-nestable.html\">Nestedable</a></li>
                            <li><a href=\"uc-noui-slider.html\">Noui Slider</a></li>
                            <li><a href=\"uc-sweetalert.html\">Sweet Alert</a></li>
                            <li><a href=\"uc-toastr.html\">Toastr</a></li>
                            <li><a href=\"map-jqvmap.html\">Jqv Map</a></li>
\t\t\t\t\t\t\t<li><a href=\"uc-lightgallery.html\">Light Gallery</a></li>
                        </ul>
                    </li>
                    
                       
\t\t\t\t
\t\t\t</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  881 => 822,  876 => 820,  862 => 809,  858 => 808,  854 => 807,  831 => 787,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"nav-header\">
            <a href=\"index.html\" class=\"brand-logo\">
\t\t\t\t<svg class=\"logo-abbr\" xmlns=\"http://www.w3.org/2000/svg\" width=\"62.074\" height=\"65.771\" viewBox=\"0 0 62.074 65.771\">
\t\t\t\t  <g id=\"search_11_\" data-name=\"search (11)\" transform=\"translate(12.731 12.199)\">
\t\t\t\t\t<rect class=\"rect-primary-rect\" id=\"Rectangle_1\" data-name=\"Rectangle 1\" width=\"60\" height=\"60\" rx=\"30\" transform=\"translate(-10.657 -12.199)\" fill=\"#f73a0b\"/>
\t\t\t\t\t<path id=\"Path_2001\" data-name=\"Path 2001\" d=\"M32.7,5.18a17.687,17.687,0,0,0-25.8,24.176l-19.8,21.76a1.145,1.145,0,0,0,0,1.62,1.142,1.142,0,0,0,.81.336,1.142,1.142,0,0,0,.81-.336l19.8-21.76a17.687,17.687,0,0,0,29.357-13.29A17.57,17.57,0,0,0,32.7,5.18Zm-1.62,23.392A15.395,15.395,0,0,1,9.312,6.8,15.395,15.395,0,1,1,31.083,28.572Zm0,0\" transform=\"translate(1 0)\" fill=\"#fff\" stroke=\"#fff\" stroke-width=\"1\"/>
\t\t\t\t\t<path id=\"Path_2002\" data-name=\"Path 2002\" d=\"M192.859,115.547a4.523,4.523,0,0,0,.7-2.415v-2.284a4.55,4.55,0,0,0-9.1,0v2.284a4.523,4.523,0,0,0,.7,2.415,4.954,4.954,0,0,0-3.708,4.788v1.623a2.4,2.4,0,0,0,2.4,2.4h10.323a2.4,2.4,0,0,0,2.4-2.4v-1.623a4.954,4.954,0,0,0-3.708-4.788Zm-6.114-4.7a2.259,2.259,0,0,1,4.518,0v2.284a2.259,2.259,0,1,1-4.518,0Zm7.53,11.111a.11.11,0,0,1-.11.11H183.843a.11.11,0,0,1-.11-.11v-1.623a2.656,2.656,0,0,1,2.653-2.653h5.237a2.656,2.656,0,0,1,2.653,2.653Zm0,0\" transform=\"translate(-168.591 -98.178)\" fill=\"#fff\" stroke=\"#fff\" stroke-width=\"1\"/>
\t\t\t\t  </g>
\t\t\t\t</svg>



\t\t\t\t<svg class=\"brand-title\" xmlns=\"http://www.w3.org/2000/svg\" width=\"134.01\" height=\"48.365\" viewBox=\"0 0 134.01 48.365\">
\t\t\t\t  <g id=\"Group_38\" data-name=\"Group 38\" transform=\"translate(-133.99 -40.635)\">
\t\t\t\t\t<text id=\"Job_Admin_Dashboard\" data-name=\"Job Admin Dashboard\" transform=\"translate(134 85)\" fill=\"#787878\" font-size=\"12\" font-family=\"Poppins-Light, Poppins\" font-weight=\"300\"><tspan x=\"0\" y=\"0\">Job Admin Dashboard</tspan></text>
\t\t\t\t\t<path id=\"Path_1948\" data-name=\"Path 1948\" d=\"M.36,6.616a1.661,1.661,0,0,0,1.094-.422,1.287,1.287,0,0,0,.5-1.016V-11.738H7.52L7.551,5.271A8.16,8.16,0,0,1,6.91,8.789a4.074,4.074,0,0,1-2.2,1.985,11.542,11.542,0,0,1-4.346.657ZM17.651,9.68A7.316,7.316,0,0,1,13.7,8.617a7.008,7.008,0,0,1-2.626-2.97,9.786,9.786,0,0,1-.922-4.315,9.276,9.276,0,0,1,.907-4.174,6.935,6.935,0,0,1,2.6-2.877,7.438,7.438,0,0,1,4-1.047,7.607,7.607,0,0,1,4.018,1.032,6.8,6.8,0,0,1,2.611,2.861,9.349,9.349,0,0,1,.907,4.205,9.759,9.759,0,0,1-.922,4.33,6.993,6.993,0,0,1-2.642,2.955A7.4,7.4,0,0,1,17.651,9.68Zm0-4.565a1.753,1.753,0,0,0,1.438-.954,5.2,5.2,0,0,0,.625-2.83,4.8,4.8,0,0,0-.594-2.626,1.73,1.73,0,0,0-1.47-.907,1.694,1.694,0,0,0-1.454.907,4.908,4.908,0,0,0-.578,2.626,5.309,5.309,0,0,0,.61,2.83A1.718,1.718,0,0,0,17.651,5.115Zm17.478,4.6q-2.345,0-5.972-.375L27.75,9.18V-12.238h5.44V-6.11q.25-.094.844-.3a6.64,6.64,0,0,1,1.079-.281,6.807,6.807,0,0,1,1.079-.078,5.75,5.75,0,0,1,4.737,1.939q1.579,1.939,1.579,6.285,0,4.377-1.767,6.316T35.129,9.711Zm-.594-4.878a2.3,2.3,0,0,0,1.876-.719A4.131,4.131,0,0,0,37,1.551Q37-1.92,34.754-1.92q-.719,0-1.563.063v6.6A10.43,10.43,0,0,0,34.535,4.834ZM45.134-6.36h5.44V9.274h-5.44Zm.031-6.222h5.44V-7.36h-5.44ZM59.611,9.68a5.9,5.9,0,0,1-4.909-2q-1.595-2-1.595-6.222a12.451,12.451,0,0,1,.844-5.143A4.635,4.635,0,0,1,56.3-6.125a9.87,9.87,0,0,1,3.846-.641,13.2,13.2,0,0,1,2.095.188q1.157.188,3.033.625L65.145-1.7q-2.908-.219-3.627-.219a4.459,4.459,0,0,0-1.845.3,1.565,1.565,0,0,0-.844.985,6.976,6.976,0,0,0-.219,2A7.45,7.45,0,0,0,58.845,3.5a1.625,1.625,0,0,0,.86,1.032,4.362,4.362,0,0,0,1.813.3l3.6-.219L65.27,8.9A27.641,27.641,0,0,1,59.611,9.68Zm8.473-21.918h5.44V-.325l1.032-.406L76.714-6.36H82.78L79.4,1.207,83,9.274H76.9L74.744,3.958l-1.219.406V9.274h-5.44Z\" transform=\"translate(133.63 53.217)\" fill=\"#464646\"/>
\t\t\t\t  </g>
\t\t\t\t</svg>

            </a>
            <div class=\"nav-control\">
                <div class=\"hamburger\">
                    <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
\t\t
\t\t<!--**********************************
            Chat box start
        ***********************************-->
\t\t<div class=\"chatbox\">
\t\t\t<div class=\"chatbox-close\"></div>
\t\t\t<div class=\"custom-tab-1\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#notes\">Notes</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#alerts\">Alerts</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#chat\">Chat</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane fade active show\" id=\"chat\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box\">
\t\t\t\t\t\t\t<div class=\"card-header chat-list-header text-center\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect fill=\"#000000\" x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"/><rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) \" x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"/></g></svg></a>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Chat List</h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Show All</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body contacts_body p-0 dlab-scroll  \" id=\"DLAB_W_Contacts_Body\">
\t\t\t\t\t\t\t\t<ul class=\"contacts\">
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">A</li>
\t\t\t\t\t\t\t\t\t<li class=\"active dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Archie Parker</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Kalid is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Alfie Mason</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Taherah left 7 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/3.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>AharlieKane</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sami is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/4.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Athan Jacoby</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nargis left 30 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">B</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/5.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Bashid Samim</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Rashid left 50 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Breddie Ronan</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Kalid is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Ceorge Carson</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Taherah left 7 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">D</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/3.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Darry Parker</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sami is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/4.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Denry Hunter</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nargis left 30 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">J</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/5.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Jack Ronan</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Rashid left 50 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Jacob Tucker</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Kalid is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>James Logan</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Taherah left 7 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/3.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Joshua Weston</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sami is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">O</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/4.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Oliver Acker</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nargis left 30 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"dlab-chat-user\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/5.jpg\" class=\"rounded-circle user_img\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"online_icon offline\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Oscar Weston</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Rashid left 50 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card chat dlab-chat-history-box d-none\">
\t\t\t\t\t\t\t<div class=\"card-header chat-list-header text-center\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dlab-chat-history-back\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><polygon points=\"0 0 24 0 24 24 0 24\"/><rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) \" x=\"14\" y=\"7\" width=\"2\" height=\"10\" rx=\"1\"/><path d=\"M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z\" fill=\"#000000\" fill-rule=\"nonzero\" transform=\"translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) \"/></g></svg>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Chat with Khelesh</h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 text-success\">Online</p>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg></a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\"><i class=\"fa fa-user-circle text-primary me-2\"></i> View profile</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\"><i class=\"fa fa-users text-primary me-2\"></i> Add to btn-close friends</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\"><i class=\"fa fa-plus text-primary me-2\"></i> Add to group</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\"><i class=\"fa fa-ban text-primary me-2\"></i> Block</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body msg_card_body dlab-scroll\" id=\"DLAB_W_Contacts_Body3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tHi, how are you samim?
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">8:40 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tHi Khalid i am good tnx how about you?
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">8:55 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tI am good too, thank you for your chat template
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:00 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tYou are welcome
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">9:05 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tI am looking for your next templates
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:07 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tOk, thank you have a good day
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">9:10 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tBye, see you
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:12 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tHi, how are you samim?
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">8:40 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tHi Khalid i am good tnx how about you?
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">8:55 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tI am good too, thank you for your chat template
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:00 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tYou are welcome
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">9:05 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tI am looking for your next templates
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:07 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer_send\">
\t\t\t\t\t\t\t\t\t\tOk, thank you have a good day
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time_send\">9:10 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/2.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-start mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img_cont_msg\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/avatar/1.jpg\" class=\"rounded-circle user_img_msg\" alt=\"\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"msg_cotainer\">
\t\t\t\t\t\t\t\t\t\tBye, see you
\t\t\t\t\t\t\t\t\t\t<span class=\"msg_time\">9:12 AM, Today</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer type_msg\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Type your message...\"></textarea>
\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-location-arrow\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"alerts\" role=\"tabpanel\">
\t\t\t\t\t\t<div class=\"card mb-sm-3 mb-md-0 contacts_card\">
\t\t\t\t\t\t\t<div class=\"card-header chat-list-header text-center\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"/><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"/></g></svg></a>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Notications</h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Show All</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/><path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/></g></svg></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body contacts_body p-0 dlab-scroll\" id=\"DLAB_W_Contacts_Body1\">
\t\t\t\t\t\t\t\t<ul class=\"contacts\">
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">SEVER STATUS</li>
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont primary\">KK</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>David Nester Birthday</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-primary\">Today</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">SOCIAL</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont success\">RU</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Perfection Simplified</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Jame Smith commented on your status</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"name-first-letter\">SEVER STATUS</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont primary\">AU</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>AharlieKane</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Sami is online</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img_cont info\">MO</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Athan Jacoby</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Nargis left 30 mins ago</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-footer\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane fade\" id=\"notes\">
\t\t\t\t\t\t<div class=\"card mb-sm-3 mb-md-0 note_card\">
\t\t\t\t\t\t\t<div class=\"card-header chat-list-header text-center\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect fill=\"#000000\" x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"/><rect fill=\"#000000\" opacity=\"0.3\" transform=\"translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) \" x=\"4\" y=\"11\" width=\"16\" height=\"2\" rx=\"1\"/></g></svg></a>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Notes</h6>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Add New Nots</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"18px\" height=\"18px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"/><path d=\"M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z\" fill=\"#000000\" fill-rule=\"nonzero\" opacity=\"0.3\"/><path d=\"M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z\" fill=\"#000000\" fill-rule=\"nonzero\"/></g></svg></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-body contacts_body p-0 dlab-scroll\" id=\"DLAB_W_Contacts_Body2\">
\t\t\t\t\t\t\t\t<ul class=\"contacts\">
\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>New order placed..</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>10 Aug 2020</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-xs sharp\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Youtube, a video-sharing website..</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>10 Aug 2020</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-xs sharp\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>john just buy your product..</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>10 Aug 2020</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-xs sharp\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex bd-highlight\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Athan Jacoby</span>
\t\t\t\t\t\t\t\t\t\t\t\t<p>10 Aug 2020</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary btn-xs sharp me-1\"><i class=\"fas fa-pencil-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-danger btn-xs sharp\"><i class=\"fa fa-trash\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--**********************************
            Chat box End
        ***********************************-->


\t\t
\t\t
        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">
            <div class=\"header-content\">
                <nav class=\"navbar navbar-expand\">
                    <div class=\"collapse navbar-collapse justify-content-between\">
                        <div class=\"header-left\">
\t\t\t\t\t\t\t<div class=\"dashboard_bar\">
                                Table-Datatable
                            </div>
\t\t\t\t\t\t\t<div class=\"nav-item d-flex align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"input-group search-area\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><a href=\"javascript:void(0)\"><i class=\"flaticon-381-search-2\"></i></a></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"plus-icon\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\"><i class=\"fas fa-plus\"></i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                        <ul class=\"navbar-nav header-right\">
\t\t\t\t\t\t\t<li class=\"nav-item dropdown notification_dropdown\">
                                <a class=\"nav-link bell-link \" href=\"javascript:void(0);\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"22.871\" viewBox=\"0 0 24 22.871\">
\t\t\t\t\t\t\t\t  <g  data-name=\"Layer 2\" transform=\"translate(-2 -2)\">
\t\t\t\t\t\t\t\t\t<path id=\"Path_9\" data-name=\"Path 9\" d=\"M23.268,2H4.73A2.733,2.733,0,0,0,2,4.73V17.471A2.733,2.733,0,0,0,4.73,20.2a.911.911,0,0,1,.91.91v1.94a1.82,1.82,0,0,0,2.83,1.514l6.317-4.212a.9.9,0,0,1,.5-.153h4.436a2.742,2.742,0,0,0,2.633-2L25.9,5.462A2.735,2.735,0,0,0,23.268,2Zm.879,2.978-3.539,12.74a.915.915,0,0,1-.88.663H15.292a2.718,2.718,0,0,0-1.514.459L7.46,23.051v-1.94a2.733,2.733,0,0,0-2.73-2.73.911.911,0,0,1-.91-.91V4.73a.911.911,0,0,1,.91-.91H23.268a.914.914,0,0,1,.879,1.158Z\" transform=\"translate(0 0)\"/>
\t\t\t\t\t\t\t\t\t<path id=\"Path_10\" data-name=\"Path 10\" d=\"M7.91,10.82h4.55a.91.91,0,1,0,0-1.82H7.91a.91.91,0,1,0,0,1.82Z\" transform=\"translate(-0.45 -0.63)\"/>
\t\t\t\t\t\t\t\t\t<path id=\"Path_11\" data-name=\"Path 11\" d=\"M16.1,13H7.91a.91.91,0,1,0,0,1.82H16.1a.91.91,0,1,0,0-1.82Z\" transform=\"translate(-0.45 -0.99)\"/>
\t\t\t\t\t\t\t\t  </g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t<span class=\"badge light text-white bg-primary rounded-circle\">76</span>
                                </a>
\t\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t<li class=\"nav-item dropdown notification_dropdown\">
                                <a class=\"nav-link\" href=\"javascript:void(0);\" role=\"button\" data-bs-toggle=\"dropdown\">
                                  <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\">
\t\t\t\t\t\t\t\t\t  <g  data-name=\"Layer 2\" transform=\"translate(-2 -2)\">
\t\t\t\t\t\t\t\t\t\t<path id=\"Path_20\" data-name=\"Path 20\" d=\"M22.571,15.8V13.066a8.5,8.5,0,0,0-7.714-8.455V2.857a.857.857,0,0,0-1.714,0V4.611a8.5,8.5,0,0,0-7.714,8.455V15.8A4.293,4.293,0,0,0,2,20a2.574,2.574,0,0,0,2.571,2.571H9.8a4.286,4.286,0,0,0,8.4,0h5.23A2.574,2.574,0,0,0,26,20,4.293,4.293,0,0,0,22.571,15.8ZM7.143,13.066a6.789,6.789,0,0,1,6.78-6.78h.154a6.789,6.789,0,0,1,6.78,6.78v2.649H7.143ZM14,24.286a2.567,2.567,0,0,1-2.413-1.714h4.827A2.567,2.567,0,0,1,14,24.286Zm9.429-3.429H4.571A.858.858,0,0,1,3.714,20a2.574,2.574,0,0,1,2.571-2.571H21.714A2.574,2.574,0,0,1,24.286,20a.858.858,0,0,1-.857.857Z\"/>
\t\t\t\t\t\t\t\t\t  </g>
\t\t\t\t\t\t\t\t\t</svg>
                                    <span class=\"badge light text-white bg-primary rounded-circle\">4</span>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <div id=\"DZ_W_Notification1\" class=\"widget-media dlab-scroll p-3\" style=\"height:380px;\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"image\" width=\"50\" src=\"images/avatar/1.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dr sultads Send you Photo</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tKG
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Resport created successfully</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Reminder : Treatment Time!</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t <li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"image\" width=\"50\" src=\"images/avatar/1.jpg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dr sultads Send you Photo</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tKG
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Resport created successfully</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Reminder : Treatment Time!</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">29 July 2020 - 02:26 PM</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
                                    <a class=\"all-notification\" href=\"javascript:void(0);\">See all notifications <i class=\"ti-arrow-end\"></i></a>
                                </div>
                            </li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"nav-item dropdown notification_dropdown\">
                                <a class=\"nav-link \" href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"23.262\" height=\"24\" viewBox=\"0 0 23.262 24\">
\t\t\t\t\t\t\t\t\t  <g id=\"icon\" transform=\"translate(-1565 90)\">
\t\t\t\t\t\t\t\t\t\t<path id=\"setting_1_\" data-name=\"setting (1)\" d=\"M30.45,13.908l-1-.822a1.406,1.406,0,0,1,0-2.171l1-.822a1.869,1.869,0,0,0,.432-2.385L28.911,4.293a1.869,1.869,0,0,0-2.282-.818l-1.211.454a1.406,1.406,0,0,1-1.88-1.086l-.213-1.276A1.869,1.869,0,0,0,21.475,0H17.533a1.869,1.869,0,0,0-1.849,1.567L15.47,2.842a1.406,1.406,0,0,1-1.88,1.086l-1.211-.454a1.869,1.869,0,0,0-2.282.818L8.126,7.707a1.869,1.869,0,0,0,.432,2.385l1,.822a1.406,1.406,0,0,1,0,2.171l-1,.822a1.869,1.869,0,0,0-.432,2.385L10.1,19.707a1.869,1.869,0,0,0,2.282.818l1.211-.454a1.406,1.406,0,0,1,1.88,1.086l.213,1.276A1.869,1.869,0,0,0,17.533,24h3.943a1.869,1.869,0,0,0,1.849-1.567l.213-1.276a1.406,1.406,0,0,1,1.88-1.086l1.211.454a1.869,1.869,0,0,0,2.282-.818l1.972-3.415a1.869,1.869,0,0,0-.432-2.385ZM27.287,18.77l-1.211-.454a3.281,3.281,0,0,0-4.388,2.533l-.213,1.276H17.533l-.213-1.276a3.281,3.281,0,0,0-4.388-2.533l-1.211.454L9.75,15.355l1-.822a3.281,3.281,0,0,0,0-5.067l-1-.822L11.721,5.23l1.211.454A3.281,3.281,0,0,0,17.32,3.151l.213-1.276h3.943l.213,1.276a3.281,3.281,0,0,0,4.388,2.533l1.211-.454,1.972,3.414h0l-1,.822a3.281,3.281,0,0,0,0,5.067l1,.822ZM19.5,7.375A4.625,4.625,0,1,0,24.129,12,4.63,4.63,0,0,0,19.5,7.375Zm0,7.375A2.75,2.75,0,1,1,22.254,12,2.753,2.753,0,0,1,19.5,14.75Z\" transform=\"translate(1557.127 -90)\"/>
\t\t\t\t\t\t\t\t\t  </g>
\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\t<span class=\"badge light text-white bg-primary rounded-circle\">15</span>
                                </a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t<div id=\"DZ_W_TimeLine02\" class=\"widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370\">
                                    <ul class=\"timeline\">
                                        <li>
                                            <div class=\"timeline-badge primary\"></div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>10 minutes ago</span>
                                                <h6 class=\"mb-0\">Youtube, a video-sharing website, goes live <strong class=\"text-primary\">\$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge info\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">New order placed <strong class=\"text-info\">#XF-2356.</strong></h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge danger\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>30 minutes ago</span>
                                                <h6 class=\"mb-0\">john just buy your product <strong class=\"text-warning\">Sell \$250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge success\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>15 minutes ago</span>
                                                <h6 class=\"mb-0\">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge warning\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class=\"timeline-badge dark\">
                                            </div>
                                            <a class=\"timeline-panel text-muted\" href=\"javascript:void(0);\">
                                                <span>20 minutes ago</span>
                                                <h6 class=\"mb-0\">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item dropdown header-profile\">
                                <a class=\"nav-link\" href=\"javascript:void(0);\" role=\"button\" data-bs-toggle=\"dropdown\">
                                    <img src=\"images/profile/pic1.jpg\" width=\"20\" alt=\"\"/>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a href=\"app-profile.html\" class=\"dropdown-item ai-icon\">
                                        <svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-primary\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg>
                                        <span class=\"ms-2\">Profile </span>
                                    </a>
                                    <a href=\"email-inbox.html\" class=\"dropdown-item ai-icon\">
                                        <svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-success\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
                                        <span class=\"ms-2\">Inbox </span>
                                    </a>
                                    <a href=\"page-error-404.html\" class=\"dropdown-item ai-icon\">
                                        <svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-danger\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
                                        <span class=\"ms-2\">Logout </span>
                                    </a>
                                </div>
                            </li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
                        </ul>
                    </div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t</div>
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"dlabnav\">
            <div class=\"dlabnav-scroll\">
\t\t\t\t<div class=\"dropdown header-profile2 \">
\t\t\t\t\t<a class=\"nav-link \" href=\"javascript:void(0);\"  role=\"button\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<div class=\"header-info2 d-flex align-items-center\">
\t\t\t\t\t\t\t<img src=\"images/profile/pic1.jpg\" alt=\"\"/>
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center sidebar-info\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"font-w400 d-block\">Franklin Jr</span>
\t\t\t\t\t\t\t\t\t<small class=\"text-end font-w400\">Superadmin</small>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<i class=\"fas fa-chevron-down\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t<a href=\"app-profile.html\" class=\"dropdown-item ai-icon \">
\t\t\t\t\t\t\t<svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-primary\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2\"></path><circle cx=\"12\" cy=\"7\" r=\"4\"></circle></svg>
\t\t\t\t\t\t\t<span class=\"ms-2\">Profile </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"email-inbox.html\" class=\"dropdown-item ai-icon\">
\t\t\t\t\t\t\t<svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-success\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\"></path><polyline points=\"22,6 12,13 2,6\"></polyline></svg>
\t\t\t\t\t\t\t<span class=\"ms-2\">Inbox </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"page-error-404.html\" class=\"dropdown-item ai-icon\">
\t\t\t\t\t\t\t<svg  xmlns=\"http://www.w3.org/2000/svg\" class=\"text-danger\" width=\"18\" height=\"18\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4\"></path><polyline points=\"16 17 21 12 16 7\"></polyline><line x1=\"21\" y1=\"12\" x2=\"9\" y2=\"12\"></line></svg>
\t\t\t\t\t\t\t<span class=\"ms-2\">Logout </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"metismenu\" id=\"menu\">
                    <li><a href=\"{{path('stat')}}\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-025-dashboard\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Dashboard</span>
\t\t\t\t\t\t</a>
                     
                    </li>
\t\t\t\t\t<li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-093-waving\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Users</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"#\">All Users</a></li>
                            <li><a href=\"#\">Add Users</a></li>
 \t\t\t\t\t</ul>
                    </li>
                    <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"flaticon-050-info\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Tournaments</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{path('app_tournois_index')}}\">All Tournaments</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{path('app_tournois_new')}}\">Add Tournaments</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{path('app_participation_index')}}\">Participations</a></li>
\t\t\t\t\t\t\t
 </ul>
                    </li>


                    <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-041-graph\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Teams</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{path('app_equipe_index')}}\">All Teams</a></li>
                         
                            <li><a href=\"{{path('app_participation_index')}}\">Participations</a></li>
                       
                        </ul>
                    </li>


                    <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-086-star\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Bootstrap</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"ui-accordion.html\">Accordion</a></li>
                            <li><a href=\"ui-alert.html\">Alert</a></li>
                            <li><a href=\"ui-badge.html\">Badge</a></li>
                            <li><a href=\"ui-button.html\">Button</a></li>
                            <li><a href=\"ui-modal.html\">Modal</a></li>
                            <li><a href=\"ui-button-group.html\">Button Group</a></li>
                            <li><a href=\"ui-list-group.html\">List Group</a></li>
                            <li><a href=\"ui-card.html\">Cards</a></li>
                            <li><a href=\"ui-carousel.html\">Carousel</a></li>
                            <li><a href=\"ui-dropdown.html\">Dropdown</a></li>
                            <li><a href=\"ui-popover.html\">Popover</a></li>
                            <li><a href=\"ui-progressbar.html\">Progressbar</a></li>
                            <li><a href=\"ui-tab.html\">Tab</a></li>
                            <li><a href=\"ui-typography.html\">Typography</a></li>
                            <li><a href=\"ui-pagination.html\">Pagination</a></li>
                            <li><a href=\"ui-grid.html\">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class=\"has-arrow \" href=\"javascript:void()\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"flaticon-045-heart\"></i>
\t\t\t\t\t\t\t<span class=\"nav-text\">Plugins</span>
\t\t\t\t\t\t</a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"uc-select2.html\">Select 2</a></li>
                            <li><a href=\"uc-nestable.html\">Nestedable</a></li>
                            <li><a href=\"uc-noui-slider.html\">Noui Slider</a></li>
                            <li><a href=\"uc-sweetalert.html\">Sweet Alert</a></li>
                            <li><a href=\"uc-toastr.html\">Toastr</a></li>
                            <li><a href=\"map-jqvmap.html\">Jqv Map</a></li>
\t\t\t\t\t\t\t<li><a href=\"uc-lightgallery.html\">Light Gallery</a></li>
                        </ul>
                    </li>
                    
                       
\t\t\t\t
\t\t\t</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->", "base.html.twig", "C:\\Users\\rouka\\GamingProject\\templates\\base.html.twig");
    }
}
