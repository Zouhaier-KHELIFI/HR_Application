<?php

/* AppBundle:DemandsForms:DemandListing.html.twig */
class __TwigTemplate_9aba1b0770e078abb45acd89f7298751bf5beadc9ac1b0f2f03c7fd13eb0ad35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/HomeLayout.html.twig", "AppBundle:DemandsForms:DemandListing.html.twig", 1);
        $this->blocks = array(
            'contentheader' => array($this, 'block_contentheader'),
            'contentbody' => array($this, 'block_contentbody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@App/HomeLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:DemandsForms:DemandListing.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:DemandsForms:DemandListing.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 3
        echo "    <div class=\"header pb-8 pt-5 pt-lg-8 d-flex align-items-center\"
         style=\"min-height: 600px; background-image: url(";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../assets/img/theme/profile-cover.jpg"), "html", null, true);
        echo "); background-size: cover; background-position: center top;\">
        <!-- Mask -->
        <span class=\"mask bg-gradient-default opacity-8\"></span>
        <!-- Header container -->
        <div class=\"container-fluid d-flex align-items-center\">
            <div class=\"row\">
                <div class=\"col-lg-10 col-md-10\">
                    <h1 class=\"display-4 text-white\">Welcome to Demand Submit Form</h1>
                    <p class=\"text-white mt-0 mb-5\">Here are your previous Requests.</p>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demandeditor");
        echo "\" class=\"btn btn-info\">Submit new Demand</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_contentbody($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentbody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentbody"));

        // line 20
        echo "    <div class=\"container-fluid mt--7\">

        <div class=\"row\">
            <div class=\"col-xl-4 order-xl-2 mb-5 mb-xl-0\">
                <div class=\"card card-profile shadow\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-3 order-lg-2\">
                            <div class=\"card-profile-image\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../assets/img/theme/team-4-800x800.jpg"), "html", null, true);
        echo "\"
                                         class=\"rounded-circle\">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"#\" class=\"btn btn-sm btn-info mr-4\">Connect</a>
                            <a href=\"#\" class=\"btn btn-sm btn-default float-right\">Message</a>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pt-md-4\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"card-profile-stats d-flex justify-content-center mt-md-5\">
                                    <div>
                                        <span class=\"heading\">22</span>
                                        <span class=\"description\">Friends</span>
                                    </div>
                                    <div>
                                        <span class=\"heading\">10</span>
                                        <span class=\"description\">Photos</span>
                                    </div>
                                    <div>
                                        <span class=\"heading\">89</span>
                                        <span class=\"description\">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3>
                                Jessica Jones<span
                                        class=\"font-weight-light\">, ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, "now"), "diff", array(0 => twig_date_converter($this->env, "2014-1-3")), "method"), "format", array(0 => "%y "), "method"), "html", null, true);
        echo " </span>
                            </h3>
                            <div class=\"h5 font-weight-300\">
                                <i class=\"ni location_pin mr-2\"></i>Bucharest, Romania
                            </div>
                            <div class=\"h5 mt-4\">
                                <i class=\"ni business_briefcase-24 mr-2\"></i>Solution Manager - Creative Tim Officer
                            </div>
                            <div>
                                <i class=\"ni education_hat mr-2\"></i>University of Computer Science
                            </div>
                            <hr class=\"my-4\"/>
                            <p>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo ".</p>
                            <a href=\"#\">Show more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-8 order-xl-1\">
                <div class=\"card bg-secondary shadow\">
                    <div class=\"card-header bg-white border-0\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <h3 class=\"mb-0\">My Submissions</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["demands"] ?? $this->getContext($context, "demands")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 93
            echo "
                            ";
            // line 94
            if (($this->getAttribute($this->getAttribute($context["item"], "getEmployeEmetteur", array(), "method"), "getId", array(), "method") == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 95
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demandeditor", array("demande" => $this->getAttribute($context["item"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                                   class=\"alert alert-default fade show list-group-item list-group-item-action \"
                                   role=\"alert\">
                                    <span class=\"alert-inner--text\"><strong>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getSujet", array(), "method"), "html", null, true);
                echo "
                                            !</strong> ";
                // line 99
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($context["item"], "getId", array(), "method")) > 50)) ? (($this->getAttribute($this->getAttribute($context["item"], "getDescription", array(), "method"), "slice", array(0 => 0, 1 => 50), "method") . "...")) : ($this->getAttribute($context["item"], "getDescription", array(), "method"))), "html", null, true);
                echo "
                                        !</span>
                                </a>
                            ";
            }
            // line 103
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:DemandsForms:DemandListing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 104,  200 => 103,  193 => 99,  189 => 98,  182 => 95,  180 => 94,  177 => 93,  173 => 92,  153 => 75,  138 => 63,  101 => 29,  90 => 20,  81 => 19,  65 => 13,  53 => 4,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@App/HomeLayout.html.twig\" %}
{% block contentheader %}
    <div class=\"header pb-8 pt-5 pt-lg-8 d-flex align-items-center\"
         style=\"min-height: 600px; background-image: url({{ asset('../assets/img/theme/profile-cover.jpg') }}); background-size: cover; background-position: center top;\">
        <!-- Mask -->
        <span class=\"mask bg-gradient-default opacity-8\"></span>
        <!-- Header container -->
        <div class=\"container-fluid d-flex align-items-center\">
            <div class=\"row\">
                <div class=\"col-lg-10 col-md-10\">
                    <h1 class=\"display-4 text-white\">Welcome to Demand Submit Form</h1>
                    <p class=\"text-white mt-0 mb-5\">Here are your previous Requests.</p>
                    <a href=\"{{ path('demandeditor') }}\" class=\"btn btn-info\">Submit new Demand</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block contentbody %}
    <div class=\"container-fluid mt--7\">

        <div class=\"row\">
            <div class=\"col-xl-4 order-xl-2 mb-5 mb-xl-0\">
                <div class=\"card card-profile shadow\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-3 order-lg-2\">
                            <div class=\"card-profile-image\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('../assets/img/theme/team-4-800x800.jpg') }}\"
                                         class=\"rounded-circle\">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"#\" class=\"btn btn-sm btn-info mr-4\">Connect</a>
                            <a href=\"#\" class=\"btn btn-sm btn-default float-right\">Message</a>
                        </div>
                    </div>
                    <div class=\"card-body pt-0 pt-md-4\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"card-profile-stats d-flex justify-content-center mt-md-5\">
                                    <div>
                                        <span class=\"heading\">22</span>
                                        <span class=\"description\">Friends</span>
                                    </div>
                                    <div>
                                        <span class=\"heading\">10</span>
                                        <span class=\"description\">Photos</span>
                                    </div>
                                    <div>
                                        <span class=\"heading\">89</span>
                                        <span class=\"description\">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <h3>
                                Jessica Jones<span
                                        class=\"font-weight-light\">, {{ date('now').diff((date('2014-1-3'))).format('%y ') }} </span>
                            </h3>
                            <div class=\"h5 font-weight-300\">
                                <i class=\"ni location_pin mr-2\"></i>Bucharest, Romania
                            </div>
                            <div class=\"h5 mt-4\">
                                <i class=\"ni business_briefcase-24 mr-2\"></i>Solution Manager - Creative Tim Officer
                            </div>
                            <div>
                                <i class=\"ni education_hat mr-2\"></i>University of Computer Science
                            </div>
                            <hr class=\"my-4\"/>
                            <p>{{ app.user.username }}.</p>
                            <a href=\"#\">Show more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-xl-8 order-xl-1\">
                <div class=\"card bg-secondary shadow\">
                    <div class=\"card-header bg-white border-0\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-8\">
                                <h3 class=\"mb-0\">My Submissions</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        {% for item in demands %}

                            {% if item.getEmployeEmetteur().getId() == app.user.id %}
                                <a href=\"{{ path('demandeditor', {'demande': item.getId()}) }}\"
                                   class=\"alert alert-default fade show list-group-item list-group-item-action \"
                                   role=\"alert\">
                                    <span class=\"alert-inner--text\"><strong>{{ item.getSujet() }}
                                            !</strong> {{ item.getId()|length > 50 ? item.getDescription().slice(0, 50) ~ '...' : item.getDescription() }}
                                        !</span>
                                </a>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "AppBundle:DemandsForms:DemandListing.html.twig", "C:\\Users\\khlifi\\Desktop\\symfony\\HR\\ProjectData\\src\\AppBundle/Resources/views/DemandsForms/DemandListing.html.twig");
    }
}
