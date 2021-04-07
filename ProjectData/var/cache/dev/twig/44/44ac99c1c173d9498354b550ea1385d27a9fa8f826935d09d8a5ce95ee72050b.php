<?php

/* AppBundle::HomeLayout.html.twig */
class __TwigTemplate_ce71208085b325a26b2b3d23b18602fba36eea8cd1553a18fe815d9f7751face extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'css' => array($this, 'block_css'),
            'contentheader' => array($this, 'block_contentheader'),
            'contentbody' => array($this, 'block_contentbody'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::HomeLayout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::HomeLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Start your development with a Dashboard for Bootstrap 4.\">
    <meta name=\"author\" content=\"Creative Tim\">
    <title>";
        // line 10
        $this->displayBlock('pagetitle', $context, $blocks);
        echo "</title>
    <!-- Favicon -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/brand/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/png\">
    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    ";
        // line 15
        $this->displayBlock('css', $context, $blocks);
        // line 22
        echo "
</head>

<body>

";
        // line 27
        $context["general_routes"] = array("Event" => array("icon" => "ni-planet", "route" => "/event"), "Absence" => array("icon" => "ni-ui-04", "route" => "/absence"), "Jobs" => array("icon" => "ni-briefcase-24", "route" => "/offre"), "Team" => array("icon" => "ni-spaceship", "route" => "/rating"), "Demands" => array("icon" => "ni-folder-17", "route" => "/demand"));
        // line 35
        echo "<!-- Sidenav -->
<nav class=\"navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white\" id=\"sidenav-main\">
    <div class=\"container-fluid\">
        <!-- Toggler -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#sidenav-collapse-main\"
                aria-controls=\"sidenav-main\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <!-- Brand -->
        <a class=\"navbar-brand pt-0\" href=\"/user/update_user\">
            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/brand/blue.png"), "html", null, true);
        echo "\" class=\"navbar-brand-img\" alt=\"...\">
        </a>
        <!-- User -->
        <ul class=\"nav align-items-center d-md-none\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link nav-link-icon\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                   aria-expanded=\"false\">
                    <i class=\"ni ni-bell-55\"></i>
                </a>
                <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\"
                     aria-labelledby=\"navbar-default_dropdown_1\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                   aria-expanded=\"false\">
                    <div class=\"media align-items-center\">
              <span class=\"avatar avatar-sm rounded-circle\">
                <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/theme/team-1-800x800.jpg"), "html", null, true);
        echo "\" alt=\"eee\">
              </span>
                    </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                    <div class=\" dropdown-header noti-title\">
                        <h6 class=\"text-overflow m-0\">Welcome!</h6>
                    </div>

                    <div class=\"dropdown-divider\"></div>
                    <a href=\"/logout\" class=\"dropdown-item\">
                        <i class=\"ni ni-user-run\"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class=\"collapse navbar-collapse\" id=\"sidenav-collapse-main\">
            <!-- Collapse header -->
            <div class=\"navbar-collapse-header d-md-none\">
                <div class=\"row\">
                    <div class=\"col-6 collapse-brand\">
                        <a href=\"/\">
                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/brand/blue.png"), "html", null, true);
        echo "\">
                        </a>
                    </div>
                    <div class=\"col-6 collapse-close\">
                        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\"
                                data-target=\"#sidenav-collapse-main\" aria-controls=\"sidenav-main\" aria-expanded=\"false\"
                                aria-label=\"Toggle sidenav\">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class=\"mt-4 mb-3 d-md-none\">
                <div class=\"input-group input-group-rounded input-group-merge\">
                    <input type=\"search\" class=\"form-control form-control-rounded form-control-prepended\"
                           placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-search\"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class=\"navbar-nav\">
                ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["general_routes"] ?? $this->getContext($context, "general_routes")));
        foreach ($context['_seq'] as $context["slug"] => $context["item"]) {
            // line 119
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "route", array()), "html", null, true);
            echo "\">
                            <i class=\"ni ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo " text-primary\"></i> ";
            echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "            </ul>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class=\"main-content\">

    <!-- Top navbar -->
    <nav class=\"navbar navbar-top navbar-expand-md navbar-dark\" id=\"navbar-main\">
        <div class=\"container-fluid\">
            <!-- Brand -->
            <a class=\"h4 mb-0 text-white text-uppercase d-none d-lg-inline-block\" href=\"/\"></a>
            <!-- Form -->
            <form class=\"navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto\">
                <div class=\"form-group mb-0\">
                    <div class=\"input-group input-group-alternative\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                        </div>
                        <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
                    </div>
                </div>
            </form>
            <!-- User -->
            <ul class=\"navbar-nav align-items-center d-none d-md-flex\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                       aria-expanded=\"false\">
                        <div class=\"media align-items-center\">
                <span class=\"avatar avatar-sm rounded-circle\">
                  <img alt=\"Image placeholder\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/theme/team-4-800x800.jpg"), "html", null, true);
        echo " \">
                </span>
                            <div class=\"media-body ml-2 d-none d-lg-block\">
                                <span class=\"mb-0 text-sm  font-weight-bold\">Jessica Jones</span>
                            </div>
                        </div>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                        <div class=\" dropdown-header noti-title\">
                            <h6 class=\"text-overflow m-0\">Welcome!</h6>
                        </div>
                        <a href=\"/examples/profile\" class=\"dropdown-item\">
                            <i class=\"ni ni-single-02\"></i>
                            <span>My profile</span>
                        </a>
                        <a href=\"/examples/profile\" class=\"dropdown-item\">
                            <i class=\"ni ni-settings-gear-65\"></i>
                            <span>Settings</span>
                        </a>
                        <a href=\"/examples/profile\" class=\"dropdown-item\">
                            <i class=\"ni ni-calendar-grid-58\"></i>
                            <span>Activity</span>
                        </a>
                        <a href=\"/examples/profile\" class=\"dropdown-item\">
                            <i class=\"ni ni-support-16\"></i>
                            <span>Support</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#!\" class=\"dropdown-item\">
                            <i class=\"ni ni-user-run\"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    ";
        // line 193
        $this->displayBlock('contentheader', $context, $blocks);
        // line 195
        echo "    ";
        $this->displayBlock('contentbody', $context, $blocks);
        // line 198
        echo "</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- Argon JS -->
<script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/argon.js?v=1.0.0"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/pusher-js/dist/web/pusher.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/bootstrap-notify/bootstrap-notify.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>

<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('e59775b63526c7a39ddf', {
        cluster: 'eu',
        forceTLS: true
    });

    var channel = pusher.subscribe('event-notifier');
    channel.bind('event-update', data => {
        console.log(JSON.stringify(data));
        // message
        // link
        var text = \"Nouveau evenement <strong> \" + data['message'] +
            \"</strong><br/><a href='\" + data['link'] +
            \"'>Cliquer ici pour plus de détails </a>\";
        \$.notify({
            icon: \"tim-icons icon-bell-55\",
            message: text

        }, {
            type: \"warning\",
            timer: 8000,
            placement: {
                from: 'top',
                align: 'right'
            }
        });

    });
    \$(document).ready(function() {
        \$('.select2').select2();
    });
</script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        echo "HR Manager";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 16
        echo "        <!-- Icons -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/nucleo/css/nucleo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Argon CSS -->
        <link type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/argon.css?v=1.0.0"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 194
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 195
    public function block_contentbody($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentbody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentbody"));

        // line 196
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::HomeLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 196,  404 => 195,  394 => 194,  385 => 193,  373 => 20,  368 => 18,  364 => 17,  361 => 16,  352 => 15,  334 => 10,  283 => 207,  279 => 206,  275 => 205,  271 => 204,  266 => 202,  262 => 201,  257 => 198,  254 => 195,  252 => 193,  211 => 155,  179 => 125,  167 => 121,  163 => 120,  160 => 119,  156 => 118,  126 => 91,  99 => 67,  74 => 45,  62 => 35,  60 => 27,  53 => 22,  51 => 15,  45 => 12,  40 => 10,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Start your development with a Dashboard for Bootstrap 4.\">
    <meta name=\"author\" content=\"Creative Tim\">
    <title>{% block pagetitle %}HR Manager{% endblock %}</title>
    <!-- Favicon -->
    <link href=\"{{ asset('assets/img/brand/favicon.png') }}\" rel=\"icon\" type=\"image/png\">
    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    {% block css %}
        <!-- Icons -->
        <link href=\"{{ asset('assets/vendor/nucleo/css/nucleo.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\">
        <!-- Argon CSS -->
        <link type=\"text/css\" href=\"{{ asset('assets/css/argon.css?v=1.0.0') }}\" rel=\"stylesheet\">
    {% endblock %}

</head>

<body>

{% set general_routes = {
    \"Event\" : {'icon' : 'ni-planet', 'route' : '/event'},
    \"Absence\" : {'icon' : 'ni-ui-04', 'route' : '/absence'},
    \"Jobs\" : {'icon' : 'ni-briefcase-24', 'route' : '/offre'},
    \"Team\" : {'icon' : 'ni-spaceship', 'route' : '/rating'},
    \"Demands\" : {'icon' : 'ni-folder-17', 'route' : '/demand'},

} %}
<!-- Sidenav -->
<nav class=\"navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white\" id=\"sidenav-main\">
    <div class=\"container-fluid\">
        <!-- Toggler -->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#sidenav-collapse-main\"
                aria-controls=\"sidenav-main\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <!-- Brand -->
        <a class=\"navbar-brand pt-0\" href=\"/user/update_user\">
            <img src=\"{{ asset('assets/img/brand/blue.png') }}\" class=\"navbar-brand-img\" alt=\"...\">
        </a>
        <!-- User -->
        <ul class=\"nav align-items-center d-md-none\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link nav-link-icon\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                   aria-expanded=\"false\">
                    <i class=\"ni ni-bell-55\"></i>
                </a>
                <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\"
                     aria-labelledby=\"navbar-default_dropdown_1\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                   aria-expanded=\"false\">
                    <div class=\"media align-items-center\">
              <span class=\"avatar avatar-sm rounded-circle\">
                <img src=\"{{ asset('assets/img/theme/team-1-800x800.jpg') }}\" alt=\"eee\">
              </span>
                    </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                    <div class=\" dropdown-header noti-title\">
                        <h6 class=\"text-overflow m-0\">Welcome!</h6>
                    </div>

                    <div class=\"dropdown-divider\"></div>
                    <a href=\"/logout\" class=\"dropdown-item\">
                        <i class=\"ni ni-user-run\"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class=\"collapse navbar-collapse\" id=\"sidenav-collapse-main\">
            <!-- Collapse header -->
            <div class=\"navbar-collapse-header d-md-none\">
                <div class=\"row\">
                    <div class=\"col-6 collapse-brand\">
                        <a href=\"/\">
                            <img src=\"{{ asset('assets/img/brand/blue.png') }}\">
                        </a>
                    </div>
                    <div class=\"col-6 collapse-close\">
                        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\"
                                data-target=\"#sidenav-collapse-main\" aria-controls=\"sidenav-main\" aria-expanded=\"false\"
                                aria-label=\"Toggle sidenav\">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class=\"mt-4 mb-3 d-md-none\">
                <div class=\"input-group input-group-rounded input-group-merge\">
                    <input type=\"search\" class=\"form-control form-control-rounded form-control-prepended\"
                           placeholder=\"Search\" aria-label=\"Search\">
                    <div class=\"input-group-prepend\">
                        <div class=\"input-group-text\">
                            <span class=\"fa fa-search\"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class=\"navbar-nav\">
                {% for slug, item in general_routes %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ item.route }}\">
                            <i class=\"ni {{ item.icon }} text-primary\"></i> {{ slug }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
</nav>
<!-- Main content -->
<div class=\"main-content\">

    <!-- Top navbar -->
    <nav class=\"navbar navbar-top navbar-expand-md navbar-dark\" id=\"navbar-main\">
        <div class=\"container-fluid\">
            <!-- Brand -->
            <a class=\"h4 mb-0 text-white text-uppercase d-none d-lg-inline-block\" href=\"/\"></a>
            <!-- Form -->
            <form class=\"navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto\">
                <div class=\"form-group mb-0\">
                    <div class=\"input-group input-group-alternative\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span>
                        </div>
                        <input class=\"form-control\" placeholder=\"Search\" type=\"text\">
                    </div>
                </div>
            </form>
            <!-- User -->
            <ul class=\"navbar-nav align-items-center d-none d-md-flex\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                       aria-expanded=\"false\">
                        <div class=\"media align-items-center\">
                <span class=\"avatar avatar-sm rounded-circle\">
                  <img alt=\"Image placeholder\" src=\"{{ asset('assets/img/theme/team-4-800x800.jpg') }} \">
                </span>
                            <div class=\"media-body ml-2 d-none d-lg-block\">
                                <span class=\"mb-0 text-sm  font-weight-bold\">Jessica Jones</span>
                            </div>
                        </div>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
                        <div class=\" dropdown-header noti-title\">
                            <h6 class=\"text-overflow m-0\">Welcome!</h6>
                        </div>
                        <a href=\"/examples/profile\" class=\"dropdown-item\">
                            <i class=\"ni ni-single-02\"></i>
                            <span>My profile</span>
                        </a>
                        <a href=\"/examples/profile\" class=\"dropdown-item\">
                            <i class=\"ni ni-settings-gear-65\"></i>
                            <span>Settings</span>
                        </a>
                        <a href=\"/examples/profile\" class=\"dropdown-item\">
                            <i class=\"ni ni-calendar-grid-58\"></i>
                            <span>Activity</span>
                        </a>
                        <a href=\"/examples/profile\" class=\"dropdown-item\">
                            <i class=\"ni ni-support-16\"></i>
                            <span>Support</span>
                        </a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"#!\" class=\"dropdown-item\">
                            <i class=\"ni ni-user-run\"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    {% block contentheader %}
    {% endblock %}
    {% block contentbody %}

    {% endblock %}
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
<!-- Argon JS -->
<script src=\"{{ asset('assets/js/argon.js?v=1.0.0') }}\"></script>
<script src=\"{{ asset('node_modules/pusher-js/dist/web/pusher.min.js') }}\"></script>
<script src=\"{{ asset('node_modules/bootstrap-notify/bootstrap-notify.min.js') }}\"></script>
<script src=\"{{ asset('node_modules/select2/dist/js/select2.full.min.js') }}\"></script>

<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('e59775b63526c7a39ddf', {
        cluster: 'eu',
        forceTLS: true
    });

    var channel = pusher.subscribe('event-notifier');
    channel.bind('event-update', data => {
        console.log(JSON.stringify(data));
        // message
        // link
        var text = \"Nouveau evenement <strong> \" + data['message'] +
            \"</strong><br/><a href='\" + data['link'] +
            \"'>Cliquer ici pour plus de détails </a>\";
        \$.notify({
            icon: \"tim-icons icon-bell-55\",
            message: text

        }, {
            type: \"warning\",
            timer: 8000,
            placement: {
                from: 'top',
                align: 'right'
            }
        });

    });
    \$(document).ready(function() {
        \$('.select2').select2();
    });
</script>
</body>

</html>", "AppBundle::HomeLayout.html.twig", "C:\\Users\\khlifi\\Desktop\\symfony\\HR\\ProjectData\\src\\AppBundle/Resources/views/HomeLayout.html.twig");
    }
}
