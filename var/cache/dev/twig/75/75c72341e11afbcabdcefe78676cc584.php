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

/* admin/partials/topbar.html.twig */
class __TwigTemplate_eb154a0ddd3480bfc2fdf7ab92e15630 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/topbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/topbar.html.twig"));

        // line 1
        yield "<!-- Topbar -->
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbar\">

    <!-- Sidebar Toggle (Topbar) -->
    <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\">
        <i class=\"fa fa-bars\"></i>
    </button>

    ";
        // line 10
        yield "                                                            ";
        // line 11
        yield "    ";
        // line 12
        yield "
        ";
        // line 23
        yield "
    ";
        // line 25
        yield "
    <ul class=\"navbar-nav ml-auto\">

        ";
        // line 29
        yield "                                                        ";
        // line 30
        yield "        ";
        // line 31
        yield "
        ";
        // line 50
        yield "
        ";
        // line 52
        yield "
        ";
        // line 54
        yield "                                                        ";
        // line 55
        yield "        ";
        // line 56
        yield "         
            ";
        // line 103
        yield "
        ";
        // line 105
        yield "
        ";
        // line 107
        yield "                                                        ";
        // line 108
        yield "        ";
        // line 109
        yield "        
            ";
        // line 163
        yield "
        ";
        // line 165
        yield "
        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>";
        // line 171
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "fullName", [], "any", false, false, false, 171), "html", null, true);
        yield "</span>
                ";
        // line 173
        yield "            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_index");
        yield "\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parameter_index");
        yield "\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                ";
        // line 188
        yield "                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\"  href=\"";
        // line 189
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
        yield "\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
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
        return "admin/partials/topbar.html.twig";
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
        return array (  139 => 189,  136 => 188,  129 => 180,  122 => 176,  117 => 173,  113 => 171,  105 => 165,  102 => 163,  99 => 109,  97 => 108,  95 => 107,  92 => 105,  89 => 103,  86 => 56,  84 => 55,  82 => 54,  79 => 52,  76 => 50,  73 => 31,  71 => 30,  69 => 29,  64 => 25,  61 => 23,  58 => 12,  56 => 11,  54 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Topbar -->
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbar\">

    <!-- Sidebar Toggle (Topbar) -->
    <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\">
        <i class=\"fa fa-bars\"></i>
    </button>

    {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                            {# SEARCH BAR #}
    {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        {# <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
            <div class=\"input-group\">
                <input aria-describedby=\"basic-addon2\" aria-label=\"Search\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" type=\"text\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                    </button>
                </div>
            </div>
        </form> #}

    {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

    <ul class=\"navbar-nav ml-auto\">

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                        {# SEARCH BAR FOR MOBILE #}
        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        {# <li class=\"nav-item dropdown no-arrow d-sm-none\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"searchDropdown\" role=\"button\">
                <i class=\"fas fa-search fa-fw\"></i>
            </a>

            <div aria-labelledby=\"searchDropdown\" class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                    <div class=\"input-group\">
                        <input aria-describedby=\"basic-addon2\" aria-label=\"Search\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" type=\"text\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"button\">
                                <i class=\"fas fa-search fa-sm\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li> #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                        {# NOTIFICATIONS #}
        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
         
            {# <li class=\"nav-item dropdown no-arrow mx-1\">
                <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"alertsDropdown\" role=\"button\">
                    <i class=\"fas fa-bell fa-fw\"></i>
                    <span class=\"badge badge-danger badge-counter\">3+</span>
                </a>

                <div aria-labelledby=\"alertsDropdown\" class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                    <h6 class=\"dropdown-header\">
                        Alerts Center
                    </h6>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-primary\">
                                <i class=\"fas fa-file-alt text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 12, 2019</div>
                            <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-success\">
                                <i class=\"fas fa-donate text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 7, 2019</div>
                            \$290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"mr-3\">
                            <div class=\"icon-circle bg-warning\">
                                <i class=\"fas fa-exclamation-triangle text-white\"></i>
                            </div>
                        </div>
                        <div>
                            <div class=\"small text-gray-500\">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                </div>
            </li> #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
                                                        {# MESSAGES #}
        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}
        
            {# <li class=\"nav-item dropdown no-arrow mx-1\">
                <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"messagesDropdown\" role=\"button\">
                    <i class=\"fas fa-envelope fa-fw\"></i>
                    <span class=\"badge badge-danger badge-counter\">7</span>
                </a>
                
                <div aria-labelledby=\"messagesDropdown\" class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                    <h6 class=\"dropdown-header\">
                        Message Center
                    </h6>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"https://source.unsplash.com/fn_BT9fwg_E/60x60\">
                            <div class=\"status-indicator bg-success\"></div>
                        </div>
                        <div class=\"font-weight-bold\">
                            <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                            <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"https://source.unsplash.com/AU4VPcFN4LE/60x60\">
                            <div class=\"status-indicator\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">I have the photos that you ordered last month, how would you like them sent to you?</div>
                            <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"https://source.unsplash.com/CS2uCrpNzJY/60x60\">
                            <div class=\"status-indicator bg-warning\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                            <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                        <div class=\"dropdown-list-image mr-3\">
                            <img alt=\"\" class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\">
                            <div class=\"status-indicator bg-success\"></div>
                        </div>
                        <div>
                            <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                            <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                </div>
            </li> #}

        {# ------------------------------------------------------------------------------------------------------------------------------------------- #}

        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>{{ app.user.fullName }}</span>
                {# <img class=\"img-profile rounded-circle\" src=\"https://source.unsplash.com/QAB-WJcbgJk/60x60\"> #}
            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"{{ path('admin_account_index') }}\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"{{ path('admin_parameter_index') }}\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                {# <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Activity Log
                </a> #}
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\"  href=\"{{ logout_path('main') }}\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
", "admin/partials/topbar.html.twig", "C:\\Users\\azizh\\Desktop\\project final\\User-Crud-Symfony5\\User-Crud-Symfony5\\templates\\admin\\partials\\topbar.html.twig");
    }
}
