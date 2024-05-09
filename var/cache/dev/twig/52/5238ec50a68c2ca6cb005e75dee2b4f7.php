<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_050b86d71feebc4c89e8ae20b27a2913 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 0
        yield "Connexion";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-10 col-lg-12 col-md-9\">
            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 d-none d-lg-block bg-login-image\" style=\"background: url('";
        // line 12
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/login.jpg"), "html", null, true);
        yield "'); background-size: cover;\"></div>
                        <div class=\"col-lg-6\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Connexion</h1>
                                </div>
                                ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            yield "                                    <div class=\"alert alert-danger\">Oups, email ou mot de passe invalide.</div>
                                ";
        }
        // line 21
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            yield "                                    <div class=\"container\">
                                        <div class=\"alert alert-";
            // line 23
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["label"], "html", null, true);
            yield "\">
                                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                yield "                                                <p>";
                yield $context["message"];
                yield "</p>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "                                <form class=\"user\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" method=\"post\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" value=\"";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                                    <div class=\"form-group\">
                                        <div class=\"custom-control custom-checkbox small\">
                                            <input type=\"checkbox\" name=\"_remember_me\" class=\"custom-control-input\" id=\"remember_me\" checked>
                                            <label class=\"custom-control-label\" for=\"remember_me\">Se souvenir de moi ?</label>
                                        </div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">Se connecter</button>

                                    ";
        // line 47
        yield "                                    ";
        // line 54
        yield "                                </form>
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forgot_password");
        yield "\">Mot de passe oublié ?</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        yield "\">S'inscrire ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  186 => 60,  180 => 57,  175 => 54,  173 => 47,  161 => 37,  153 => 32,  147 => 30,  139 => 27,  130 => 25,  126 => 24,  122 => 23,  119 => 22,  114 => 21,  110 => 19,  108 => 18,  99 => 12,  91 => 6,  81 => 5,  70 => 0,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title \"Connexion\" %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-10 col-lg-12 col-md-9\">
            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 d-none d-lg-block bg-login-image\" style=\"background: url('{{ asset('img/login.jpg') }}'); background-size: cover;\"></div>
                        <div class=\"col-lg-6\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Connexion</h1>
                                </div>
                                {% if error %}
                                    <div class=\"alert alert-danger\">Oups, email ou mot de passe invalide.</div>
                                {% endif %}
                                {% for label, messages in app.flashes %}
                                    <div class=\"container\">
                                        <div class=\"alert alert-{{ label }}\">
                                            {% for message in messages %}
                                                <p>{{ message | raw }}</p>
                                            {% endfor %}
                                        </div>
                                    </div>
                                {% endfor %}
                                <form class=\"user\" action=\"{{ path('login') }}\" method=\"post\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                    </div>
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                    <div class=\"form-group\">
                                        <div class=\"custom-control custom-checkbox small\">
                                            <input type=\"checkbox\" name=\"_remember_me\" class=\"custom-control-input\" id=\"remember_me\" checked>
                                            <label class=\"custom-control-label\" for=\"remember_me\">Se souvenir de moi ?</label>
                                        </div>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">Se connecter</button>

                                    {# Uncomment for facebook or google connection (not working yet) #}
                                    {# <hr>
                                    <a href=\"\" class=\"btn btn-google btn-user btn-block\">
                                        <i class=\"fab fa-google fa-fw\"></i> Login with Google
                                    </a>
                                    <a href=\"\" class=\"btn btn-facebook btn-user btn-block\">
                                        <i class=\"fab fa-facebook-f fa-fw\"></i> Login with Facebook
                                    </a> #}
                                </form>
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"{{ path('forgot_password') }}\">Mot de passe oublié ?</a>
                                </div>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"{{ path('registration') }}\">S'inscrire ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "security/login.html.twig", "C:\\Users\\Yosri Elhadj\\OneDrive - ESPRIT\\Bureau\\New folder (5)\\webcityinlink\\templates\\security\\login.html.twig");
    }
}
