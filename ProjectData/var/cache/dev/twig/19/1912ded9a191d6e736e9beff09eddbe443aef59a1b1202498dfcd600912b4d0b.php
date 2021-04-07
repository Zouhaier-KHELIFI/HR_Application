<?php

/* @App/WelcomeLayout.html.twig */
class __TwigTemplate_a5b7317eb8d34e6de6d7e086f57a8556ace6ece7420f003c8eca2740b998479c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripto' => array($this, 'block_javascripto'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/WelcomeLayout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/WelcomeLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"Start your development with a Dashboard for Bootstrap 4.\">
    <meta name=\"author\" content=\"Creative Tim\">
    <title>Welcome to HR</title>
    <!-- Favicon -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/brand/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\" type=\"image/png\">
    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    <!-- Icons -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/nucleo/css/nucleo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/select2/dist/css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Argon CSS -->
    <link type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/argon.css?v=1.0.0"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"bg-default\">
<div class=\"main-content\">
    <!-- Navbar -->
    <nav class=\"navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark\">
        <div class=\"container px-4\">
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/brand/white.png"), "html", null, true);
        echo "\"/>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-main\"
                    aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-main\">
                <!-- Collapse header -->
                <div class=\"navbar-collapse-header d-md-none\">
                    <div class=\"row\">
                        <div class=\"col-6 collapse-brand\">
                            <a href=\"/\">
                                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/brand/blue.png"), "html", null, true);
        echo "\">
                            </a>
                        </div>
                        <div class=\"col-6 collapse-close\">
                            <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\"
                                    data-target=\"#navbar-collapse-main\" aria-controls=\"sidenav-main\"
                                    aria-expanded=\"false\" aria-label=\"Toggle sidenav\">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Navbar items -->
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-icon\" href=\"/\">
                            <i class=\"ni ni-circle-08\"></i>
                            <span class=\"nav-link-inner--text\">Register</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-icon\" href=\"/\">
                            <i class=\"ni ni-key-25\"></i>
                            <span class=\"nav-link-inner--text\">Login</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <div class=\"header bg-gradient-primary py-7 py-lg-8\">
        <div class=\"container\">
            <div class=\"header-body text-center mb-7\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5 col-md-6\">
                        <h1 class=\"text-white\">Welcome!</h1>
                        <p class=\"text-lead text-light\">Sign in and have the greatest HR management experience.</p>

                        <div>
                            ";
        // line 81
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 82
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                <a href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            ";
        } else {
            // line 87
            echo "                                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 89
        echo "                        </div>

                        ";
        // line 91
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 92
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 93
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 94
                    echo "                                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                        ";
                    // line 95
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                        ";
        }
        // line 100
        echo "                    </div>
                </div>
            </div>
        </div>
        <div class=\"separator separator-bottom separator-skew zindex-100\">
            <svg x=\"0\" y=\"0\" viewBox=\"0 0 2560 100\" preserveAspectRatio=\"none\" version=\"1.1\"
                 xmlns=\"http://www.w3.org/2000/svg\">
                <polygon class=\"fill-default\" points=\"2560 0 2560 100 0 100\"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class=\"container mt--8 pb-5\">
        <!-- Table -->
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8\">
                <div class=\"card bg-secondary shadow border-0\">
                    ";
        // line 117
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 120
        echo "                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class=\"py-5\">
    <div class=\"container\">
        ";
        // line 129
        echo "        ";
        // line 130
        echo "        ";
        // line 131
        echo "        ";
        // line 132
        echo "        ";
        // line 133
        echo "        ";
        // line 134
        echo "        ";
        // line 135
        echo "        ";
        // line 136
        echo "        ";
        // line 137
        echo "        ";
        // line 138
        echo "        ";
        // line 139
        echo "        ";
        // line 140
        echo "        ";
        // line 141
        echo "        ";
        // line 142
        echo "        ";
        // line 143
        echo "        ";
        // line 144
        echo "        ";
        // line 145
        echo "        ";
        // line 146
        echo "        ";
        // line 147
        echo "        ";
        // line 148
        echo "        ";
        // line 149
        echo "        ";
        // line 150
        echo "        ";
        // line 151
        echo "    </div>
</footer>
<!-- Argon Scripts -->
<!-- Core -->
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<!-- Argon JS -->
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/argon.js?v=1.0.0"), "html", null, true);
        echo "\"></script>

<script >
    \$(\".datepicker\").datepicker();
    \$(\".select2\").select2();
</script>
";
        // line 166
        $this->displayBlock('javascripto', $context, $blocks);
        // line 168
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 118
        echo "
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_javascripto($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripto"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripto"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/WelcomeLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 166,  324 => 118,  315 => 117,  303 => 168,  301 => 166,  292 => 160,  287 => 158,  283 => 157,  279 => 156,  275 => 155,  269 => 151,  267 => 150,  265 => 149,  263 => 148,  261 => 147,  259 => 146,  257 => 145,  255 => 144,  253 => 143,  251 => 142,  249 => 141,  247 => 140,  245 => 139,  243 => 138,  241 => 137,  239 => 136,  237 => 135,  235 => 134,  233 => 133,  231 => 132,  229 => 131,  227 => 130,  225 => 129,  215 => 120,  213 => 117,  194 => 100,  191 => 99,  185 => 98,  176 => 95,  171 => 94,  166 => 93,  161 => 92,  159 => 91,  155 => 89,  147 => 87,  141 => 84,  137 => 83,  132 => 82,  130 => 81,  86 => 40,  71 => 28,  59 => 19,  54 => 17,  50 => 16,  46 => 15,  39 => 11,  27 => 1,);
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
    <title>Welcome to HR</title>
    <!-- Favicon -->
    <link href=\"{{ asset('assets/img/brand/favicon.png') }}\" rel=\"icon\" type=\"image/png\">
    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
    <!-- Icons -->
    <link href=\"{{ asset('assets/vendor/nucleo/css/nucleo.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('node_modules/select2/dist/css/select2.css') }}\" rel=\"stylesheet\">
    <!-- Argon CSS -->
    <link type=\"text/css\" href=\"{{ asset('assets/css/argon.css?v=1.0.0') }}\" rel=\"stylesheet\">
</head>

<body class=\"bg-default\">
<div class=\"main-content\">
    <!-- Navbar -->
    <nav class=\"navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark\">
        <div class=\"container px-4\">
            <a class=\"navbar-brand\" href=\"/\">
                <img src=\"{{ asset('assets/img/brand/white.png') }}\"/>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-main\"
                    aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-main\">
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
                                    data-target=\"#navbar-collapse-main\" aria-controls=\"sidenav-main\"
                                    aria-expanded=\"false\" aria-label=\"Toggle sidenav\">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Navbar items -->
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-icon\" href=\"/\">
                            <i class=\"ni ni-circle-08\"></i>
                            <span class=\"nav-link-inner--text\">Register</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link nav-link-icon\" href=\"/\">
                            <i class=\"ni ni-key-25\"></i>
                            <span class=\"nav-link-inner--text\">Login</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <div class=\"header bg-gradient-primary py-7 py-lg-8\">
        <div class=\"container\">
            <div class=\"header-body text-center mb-7\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-5 col-md-6\">
                        <h1 class=\"text-white\">Welcome!</h1>
                        <p class=\"text-lead text-light\">Sign in and have the greatest HR management experience.</p>

                        <div>
                            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                                </a>
                            {% else %}
                                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
                            {% endif %}
                        </div>

                        {% if app.request.hasPreviousSession %}
                            {% for type, messages in app.session.flashbag.all() %}
                                {% for message in messages %}
                                    <div class=\"flash-{{ type }}\">
                                        {{ message }}
                                    </div>
                                {% endfor %}
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"separator separator-bottom separator-skew zindex-100\">
            <svg x=\"0\" y=\"0\" viewBox=\"0 0 2560 100\" preserveAspectRatio=\"none\" version=\"1.1\"
                 xmlns=\"http://www.w3.org/2000/svg\">
                <polygon class=\"fill-default\" points=\"2560 0 2560 100 0 100\"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class=\"container mt--8 pb-5\">
        <!-- Table -->
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-8\">
                <div class=\"card bg-secondary shadow border-0\">
                    {% block fos_user_content %}

                    {% endblock %}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class=\"py-5\">
    <div class=\"container\">
        {#<div class=\"row align-items-center justify-content-xl-between\">#}
        {#<div class=\"col-xl-6\">#}
        {#<div class=\"copyright text-center text-xl-left text-muted\">#}
        {#&copy; 2018 <a href=\"https://www.creative-tim.com\" class=\"font-weight-bold ml-1\" target=\"_blank\">Creative Tim</a>#}
        {#</div>#}
        {#</div>#}
        {#<div class=\"col-xl-6\">#}
        {#<ul class=\"nav nav-footer justify-content-center justify-content-xl-end\">#}
        {#<li class=\"nav-item\">#}
        {#<a href=\"https://www.creative-tim.com\" class=\"nav-link\" target=\"_blank\">Creative Tim</a>#}
        {#</li>#}
        {#<li class=\"nav-item\">#}
        {#<a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link\" target=\"_blank\">About Us</a>#}
        {#</li>#}
        {#<li class=\"nav-item\">#}
        {#<a href=\"http://blog.creative-tim.com\" class=\"nav-link\" target=\"_blank\">Blog</a>#}
        {#</li>#}
        {#<li class=\"nav-item\">#}
        {#<a href=\"https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md\" class=\"nav-link\" target=\"_blank\">MIT License</a>#}
        {#</li>#}
        {#</ul>#}
        {#</div>#}
        {#</div>#}
    </div>
</footer>
<!-- Argon Scripts -->
<!-- Core -->
<script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('node_modules/select2/dist/js/select2.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}\"></script>
<!-- Argon JS -->
<script src=\"{{ asset('assets/js/argon.js?v=1.0.0') }}\"></script>

<script >
    \$(\".datepicker\").datepicker();
    \$(\".select2\").select2();
</script>
{% block javascripto %}
{% endblock %}
</body>

</html>", "@App/WelcomeLayout.html.twig", "C:\\Users\\khlifi\\Desktop\\symfony\\HR\\ProjectData\\src\\AppBundle\\Resources\\views\\WelcomeLayout.html.twig");
    }
}
