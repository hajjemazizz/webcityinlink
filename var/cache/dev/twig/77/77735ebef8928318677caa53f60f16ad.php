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

/* admin/sidebar.html.twig */
class __TwigTemplate_fad925ddad3290b007aa32654e8cb0a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("partials/_macro.html.twig", "admin/sidebar.html.twig", 1)->unwrap();
        // line 2
        yield "
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Blog</div>
    </a>

    <hr class=\"sidebar-divider my-0\">

    ";
        // line 19
        yield "
    <hr class=\"sidebar-divider my-0\">

        ";
        // line 23
        yield "                                                                ";
        // line 24
        yield "        ";
        // line 25
        yield "
            ";
        // line 48
        yield "
        ";
        // line 50
        yield "

     <li class=\"nav-item ";
        // line 52
        yield CoreExtension::callMacro($macros["macros"], "macro_is_active", ["admin_user"], 52, $context, $this->getSourceContext());
        yield "\">
        <a class=\"nav-link\" href=\"";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        yield "\">
            <i class=\"fas fa-user\"></i>
            <span>Utilisateurs</span>
        </a>
    </li> 

    <hr class=\"sidebar-divider d-none d-md-block\">

    <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/sidebar.html.twig";
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
        return array (  82 => 53,  78 => 52,  74 => 50,  71 => 48,  68 => 25,  66 => 24,  64 => 23,  59 => 19,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"partials/_macro.html.twig\" as macros %}

<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Blog</div>
    </a>

    <hr class=\"sidebar-divider my-0\">

    {# <li class=\"nav-item {{ macros.is_active('admin_dashboard') }}\">
        <a class=\"nav-link\" href=\"{{ path('admin_dashboard_index') }}\">
            <i class=\"fas fa-fw fa-tachometer-alt\"></i>
            <span>Tableau de bord</span>
        </a>
    </li> #}

    <hr class=\"sidebar-divider my-0\">

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                                {# ITEM COLLAPSED #}
        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

            {# <div class=\"sidebar-heading\">
                Addons
            </div>

            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
                    <i class=\"fas fa-fw fa-folder\"></i>
                    <span>Pages</span>
                </a>
                <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
                    <div class=\"bg-white py-2 collapse-inner rounded\">
                        <h6 class=\"collapse-header\">Login Screens:</h6>
                        <a class=\"collapse-item\" href=\"login.html\">Login</a>
                        <a class=\"collapse-item\" href=\"register.html\">Register</a>
                        <a class=\"collapse-item\" href=\"forgot-password.html\">Forgot Password</a>
                        <div class=\"collapse-divider\"></div>
                        <h6 class=\"collapse-header\">Other Pages:</h6>
                        <a class=\"collapse-item\" href=\"404.html\">404 Page</a>
                        <a class=\"collapse-item\" href=\"blank.html\">Blank Page</a>
                    </div>
                </div>
            </li> #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}


     <li class=\"nav-item {{ macros.is_active('admin_user') }}\">
        <a class=\"nav-link\" href=\"{{ path('admin_user_index') }}\">
            <i class=\"fas fa-user\"></i>
            <span>Utilisateurs</span>
        </a>
    </li> 

    <hr class=\"sidebar-divider d-none d-md-block\">

    <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

</ul>
", "admin/sidebar.html.twig", "C:\\Users\\azizh\\Desktop\\Cityinlink\\templates\\admin\\sidebar.html.twig");
    }
}
