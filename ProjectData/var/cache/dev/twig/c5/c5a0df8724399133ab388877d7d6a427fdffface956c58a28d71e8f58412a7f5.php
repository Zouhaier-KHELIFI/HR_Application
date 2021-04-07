<?php

/* @App/event/listevent.html.twig */
class __TwigTemplate_16aa3019bf9b65669c9daa37fd6f4b28b7bf0a25fbedefe8531110bbc387cdb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@App/HomeLayout.html.twig", "@App/event/listevent.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/event/listevent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/event/listevent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contentheader($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentheader"));

        // line 4
        echo "

    <div class=\"header pb-8 pt-5 pt-lg-8 d-flex align-items-center\"
         style=\"min-height: 600px; background-image: url(";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../assets/img/theme/profile-cover.jpg"), "html", null, true);
        echo "); background-size: cover; background-position: center top;\">
        <!-- Mask -->
        <span class=\"mask bg-gradient-default opacity-8\"></span>
        <!-- Header container -->
        <div class=\"container-fluid d-flex align-items-center\">
            <div class=\"row\">
                <div class=\"col-lg-7 col-md-10\">
                    <h1 class=\"display-2 text-white\">Events Lists </h1>
                    <p class=\"text-white mt-0 mb-5\">Here is the list of all Events...</p>
                    <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("departement_index");
        echo "\" class=\"btn btn-info\">Manage Teams</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_contentbody($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentbody"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentbody"));

        // line 23
        echo "
    <div class=\"container-fluid mt--7\">
        <!-- Table -->
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header border-0\">
                        <h3 class=\"mb-0\">Card tables</h3>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th scope=\"col\">Responsable_evennement</th>
                                <th scope=\"col\">Media_event</th>
                                <th scope=\"col\">Title</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">DateDepart</th>
                                <th scope=\"col\">DateFin</th>
                                <th scope=\"col\">Organisateur</th>
                                <th scope=\"col\">DescriptionOrganisateur</th>
                                <th scope=\"col\">Accompagnement</th>
                                <th scope=\"col\">Frais</th>
                                <th scope=\"col\">Transport</th>
                                <th scope=\"col\">LimitInscription</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["evennements"] ?? $this->getContext($context, "evennements")));
        foreach ($context['_seq'] as $context["_key"] => $context["ev"]) {
            // line 52
            echo "
                                <tr>

                                    <td> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "getResponsableEvennement", array(), "method"), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ev"], "getMediaEvent", array(), "method"), "getId", array(), "method"), "html", null, true);
            echo "   </td>
                                    <td> ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "id", array()), "html", null, true);
            echo "     </td>

                                    <th>

                                        ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "title", array()), "html", null, true);
            echo "
                                    </th>

                                    <td>

                                        ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "description", array()), "html", null, true);
            echo "

                                    </td>


                                    ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ev"], "dateDepart", array()), "m/d/y"), "html", null, true);
            echo "
                                    </td>
                                    <td>

                                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ev"], "dateFin", array()), "m/d/y"), "html", null, true);
            echo "
                                    </td>
                                    <td>

                                        ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "place", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>

                                        ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "organisateur", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>

                                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "descriptionOrganisateur", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>

                                        ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "accompagnement", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>

                                        ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "frais", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>

                                        ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "transport", array()), "html", null, true);
            echo "
                                    </td>
                                    <td>

                                        ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["ev"], "limitInscription", array()), "html", null, true);
            echo "
                                    </td>


                                </tr>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                            </tbody>
                        </table>
                    </div>
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
        return "@App/event/listevent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 110,  218 => 103,  211 => 99,  204 => 95,  197 => 91,  190 => 87,  183 => 83,  176 => 79,  169 => 75,  162 => 71,  154 => 66,  146 => 61,  139 => 57,  135 => 56,  131 => 55,  126 => 52,  122 => 51,  92 => 23,  83 => 22,  67 => 16,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
                <div class=\"col-lg-7 col-md-10\">
                    <h1 class=\"display-2 text-white\">Events Lists </h1>
                    <p class=\"text-white mt-0 mb-5\">Here is the list of all Events...</p>
                    <a href=\"{{ path('departement_index') }}\" class=\"btn btn-info\">Manage Teams</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block contentbody %}

    <div class=\"container-fluid mt--7\">
        <!-- Table -->
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card shadow\">
                    <div class=\"card-header border-0\">
                        <h3 class=\"mb-0\">Card tables</h3>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th scope=\"col\">Responsable_evennement</th>
                                <th scope=\"col\">Media_event</th>
                                <th scope=\"col\">Title</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">DateDepart</th>
                                <th scope=\"col\">DateFin</th>
                                <th scope=\"col\">Organisateur</th>
                                <th scope=\"col\">DescriptionOrganisateur</th>
                                <th scope=\"col\">Accompagnement</th>
                                <th scope=\"col\">Frais</th>
                                <th scope=\"col\">Transport</th>
                                <th scope=\"col\">LimitInscription</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for ev in evennements %}

                                <tr>

                                    <td> {{ ev.getResponsableEvennement() }} </td>
                                    <td> {{ ev.getMediaEvent().getId() }}   </td>
                                    <td> {{ ev.id }}     </td>

                                    <th>

                                        {{ ev.title }}
                                    </th>

                                    <td>

                                        {{ ev.description }}

                                    </td>


                                    {{ ev.dateDepart|date(\"m/d/y\") }}
                                    </td>
                                    <td>

                                        {{ ev.dateFin|date(\"m/d/y\") }}
                                    </td>
                                    <td>

                                        {{ ev.place }}
                                    </td>
                                    <td>

                                        {{ ev.organisateur }}
                                    </td>
                                    <td>

                                        {{ ev.descriptionOrganisateur }}
                                    </td>
                                    <td>

                                        {{ ev.accompagnement }}
                                    </td>
                                    <td>

                                        {{ ev.frais }}
                                    </td>
                                    <td>

                                        {{ ev.transport }}
                                    </td>
                                    <td>

                                        {{ ev.limitInscription }}
                                    </td>


                                </tr>

                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


{% endblock %}", "@App/event/listevent.html.twig", "C:\\Users\\khlifi\\Desktop\\symfony\\HR\\ProjectData\\src\\AppBundle\\Resources\\views\\event\\listevent.html.twig");
    }
}
