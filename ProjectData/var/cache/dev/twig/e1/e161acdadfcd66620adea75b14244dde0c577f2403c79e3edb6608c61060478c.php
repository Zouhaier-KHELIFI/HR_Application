<?php

/* @App/Security/login_content.html.twig */
class __TwigTemplate_93424a7d7a5791c90aec1d44993c6291c9f76a5ac5b9ae9aa9f72967e04c6502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div class=\"card-header bg-transparent pb-5\">
    <div class=\"text-muted text-center mt-2 mb-4\">
        <small>Sign up with</small>
    </div>
    <div class=\"text-center\">
        <a href=\"#\" class=\"btn btn-neutral btn-icon mr-4\">
            <span class=\"btn-inner--icon\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icons/common/github.svg"), "html", null, true);
        echo "\"></span>
            <span class=\"btn-inner--text\">Github</span>
        </a>
        <a href=\"#\" class=\"btn btn-neutral btn-icon\">
            <span class=\"btn-inner--icon\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/icons/common/google.svg"), "html", null, true);
        echo "\"></span>
            <span class=\"btn-inner--text\">Google</span>
        </a>
    </div>
</div>
<div class=\"card-body px-lg-5 py-lg-5\">
    <div class=\"text-center text-muted mb-4\">
        <small>Or sign up with credentials</small>
    </div>

    <form action=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 27
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 28
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\"/>
        ";
        }
        // line 30
        echo "        <div class=\"form-group\">
            <div class=\"input-group input-group-alternative mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"ni ni-hat-3\"></i></span>
                </div>
                <input type=\"text\"  class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"
                       autocomplete=\"username\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"input-group input-group-alternative mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"ni ni-key-25\"></i></span>
                </div>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"
                       autocomplete=\"current-password\"/>
            </div>
        </div>
        <div class=\"row my-4\">
            <div class=\"col-12\">

                <div class=\"custom-control custom-control-alternative custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" >
                    <label class=\"custom-control-label\" for=\"customCheckRegister\">
                        <span class=\"text-muted\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</span>
                    </label>
                </div>
            </div>
        </div>
        <div class=\"text-center\">
            <input type=\"submit\" class=\"btn btn-primary mt-4\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
        </div>
    </form>
</div>


</form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 60,  105 => 54,  83 => 35,  76 => 30,  70 => 28,  68 => 27,  64 => 26,  51 => 16,  44 => 12,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"card-header bg-transparent pb-5\">
    <div class=\"text-muted text-center mt-2 mb-4\">
        <small>Sign up with</small>
    </div>
    <div class=\"text-center\">
        <a href=\"#\" class=\"btn btn-neutral btn-icon mr-4\">
            <span class=\"btn-inner--icon\"><img src=\"{{ asset('assets/img/icons/common/github.svg') }}\"></span>
            <span class=\"btn-inner--text\">Github</span>
        </a>
        <a href=\"#\" class=\"btn btn-neutral btn-icon\">
            <span class=\"btn-inner--icon\"><img src=\"{{ asset('assets/img/icons/common/google.svg') }}\"></span>
            <span class=\"btn-inner--text\">Google</span>
        </a>
    </div>
</div>
<div class=\"card-body px-lg-5 py-lg-5\">
    <div class=\"text-center text-muted mb-4\">
        <small>Or sign up with credentials</small>
    </div>

    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
        {% endif %}
        <div class=\"form-group\">
            <div class=\"input-group input-group-alternative mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"ni ni-hat-3\"></i></span>
                </div>
                <input type=\"text\"  class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"
                       autocomplete=\"username\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"input-group input-group-alternative mb-3\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\"><i class=\"ni ni-key-25\"></i></span>
                </div>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"
                       autocomplete=\"current-password\"/>
            </div>
        </div>
        <div class=\"row my-4\">
            <div class=\"col-12\">

                <div class=\"custom-control custom-control-alternative custom-checkbox\">
                    <input type=\"checkbox\" class=\"custom-control-input\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" >
                    <label class=\"custom-control-label\" for=\"customCheckRegister\">
                        <span class=\"text-muted\">{{ 'security.login.remember_me'|trans }}</span>
                    </label>
                </div>
            </div>
        </div>
        <div class=\"text-center\">
            <input type=\"submit\" class=\"btn btn-primary mt-4\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"/>
        </div>
    </form>
</div>


</form>
", "@App/Security/login_content.html.twig", "C:\\Users\\khlifi\\Desktop\\symfony\\HR\\ProjectData\\src\\AppBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
