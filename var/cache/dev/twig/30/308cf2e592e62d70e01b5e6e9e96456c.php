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

/* admin/layout.html.twig */
class __TwigTemplate_f8e9b801fffb18d1de84b3ac3f280331 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>CityInLink - Bootstrap Admin Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
<!-- Libraries Stylesheet -->
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/dashmin-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/dashmin-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<!-- Customized Bootstrap Stylesheet -->
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/dashmin-1.0.0/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Template Stylesheet -->
<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/dashmin-1.0.0/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body>
    <div class=\"container-xxl position-relative bg-white d-flex p-0\">

        <!-- Sidebar Start -->
        <div class=\"sidebar pe-4 pb-3\">
            <nav class=\"navbar bg-light navbar-light\">
                <a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
                    <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>CityInLink</h3>
                </a>
                <div class=\"d-flex align-items-center ms-4 mb-4\">
                    <div class=\"position-relative\">
                        <img class=\"rounded-circle\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/333426696_739644077571070_31937414749283894_n.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                        <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
                    </div>
                    <div class=\"ms-3\">
                        <h6 class=\"mb-0\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "fullName", [], "any", false, false, false, 46), "html", null, true);
        echo "</h6>
                        <span>Admin</span>
                    </div>
                </div>
                 
                <div class=\"navbar-nav w-100\">
                    <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
        echo "\" class=\"nav-item nav-link\"><i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Gestions</a>
                        <div class=\"dropdown-menu bg-transparent border-0\">
                            <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\" class=\"dropdown-item\">Gestion Users</a>
                          
                        </div>
                    </div>
                   

                    <a href=\"chart.html\" class=\"nav-item nav-link\"><i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\"><i class=\"far fa-file-alt me-2\"></i>Pages</a>
                        <div class=\"dropdown-menu bg-transparent border-0\">
                            <a href=\"signin.html\" class=\"dropdown-item\">Sign In</a>
                            <a href=\"signup.html\" class=\"dropdown-item\">Sign Up</a>
                            <a href=\"404.html\" class=\"dropdown-item active\">404 Error</a>
                            <a href=\"blank.html\" class=\"dropdown-item\">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class=\"content\">
            <!-- Navbar Start -->
            <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
                <a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
                    <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
                </a>
                <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                    <i class=\"fa fa-bars\"></i>
                </a>

                <div class=\"navbar-nav align-items-center ms-auto\">
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Message</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Notificatin</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <img class=\"rounded-circle me-lg-2\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/333426696_739644077571070_31937414749283894_n.jpg"), "html", null, true);
        echo "\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <span class=\"d-none d-lg-inline-flex\">";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "fullName", [], "any", false, false, false, 156), "html", null, true);
        echo "</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_index");
        echo "\" class=\"dropdown-item\">My Profile</a>
                            <a href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parameter_index");
        echo "\" class=\"dropdown-item\">Settings</a>
                            <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
        echo "\" class=\"dropdown-item\">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            
 ";
        // line 170
        $this->displayBlock('body', $context, $blocks);
        // line 171
        echo "




            <!-- Footer Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light rounded-top p-4\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                            &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                            Designed By <a href=\"https://htmlcodex.com\">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/chart/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 170
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 170,  313 => 208,  309 => 207,  305 => 206,  301 => 205,  297 => 204,  293 => 203,  289 => 202,  256 => 171,  254 => 170,  242 => 161,  238 => 160,  234 => 159,  228 => 156,  224 => 155,  122 => 56,  115 => 52,  106 => 46,  99 => 42,  81 => 27,  75 => 24,  69 => 21,  65 => 20,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>CityInLink - Bootstrap Admin Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
<!-- Libraries Stylesheet -->
<link href=\"{{ asset('BackOffice/dashmin-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">
<link href=\"{{ asset('BackOffice/dashmin-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\" />

<!-- Customized Bootstrap Stylesheet -->
<link href=\"{{ asset('BackOffice/dashmin-1.0.0/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

<!-- Template Stylesheet -->
<link href=\"{{ asset('BackOffice/dashmin-1.0.0/css/style.css') }}\" rel=\"stylesheet\">

</head>

<body>
    <div class=\"container-xxl position-relative bg-white d-flex p-0\">

        <!-- Sidebar Start -->
        <div class=\"sidebar pe-4 pb-3\">
            <nav class=\"navbar bg-light navbar-light\">
                <a href=\"index.html\" class=\"navbar-brand mx-4 mb-3\">
                    <h3 class=\"text-primary\"><i class=\"fa fa-hashtag me-2\"></i>CityInLink</h3>
                </a>
                <div class=\"d-flex align-items-center ms-4 mb-4\">
                    <div class=\"position-relative\">
                        <img class=\"rounded-circle\" src=\"{{ asset('uploads/images/333426696_739644077571070_31937414749283894_n.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                        <div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
                    </div>
                    <div class=\"ms-3\">
                        <h6 class=\"mb-0\">{{ app.user.fullName }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                 
                <div class=\"navbar-nav w-100\">
                    <a href=\"{{ path('admin_dashboard_index') }}\" class=\"nav-item nav-link\"><i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa fa-laptop me-2\"></i>Gestions</a>
                        <div class=\"dropdown-menu bg-transparent border-0\">
                            <a href=\"{{ path('admin_user_index') }}\" class=\"dropdown-item\">Gestion Users</a>
                          
                        </div>
                    </div>
                   

                    <a href=\"chart.html\" class=\"nav-item nav-link\"><i class=\"fa fa-chart-bar me-2\"></i>Charts</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle active\" data-bs-toggle=\"dropdown\"><i class=\"far fa-file-alt me-2\"></i>Pages</a>
                        <div class=\"dropdown-menu bg-transparent border-0\">
                            <a href=\"signin.html\" class=\"dropdown-item\">Sign In</a>
                            <a href=\"signup.html\" class=\"dropdown-item\">Sign Up</a>
                            <a href=\"404.html\" class=\"dropdown-item active\">404 Error</a>
                            <a href=\"blank.html\" class=\"dropdown-item\">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class=\"content\">
            <!-- Navbar Start -->
            <nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
                <a href=\"index.html\" class=\"navbar-brand d-flex d-lg-none me-4\">
                    <h2 class=\"text-primary mb-0\"><i class=\"fa fa-hashtag\"></i></h2>
                </a>
                <a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
                    <i class=\"fa fa-bars\"></i>
                </a>

                <div class=\"navbar-nav align-items-center ms-auto\">
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Message</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"rounded-circle\" src=\"img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
                                    <div class=\"ms-2\">
                                        <h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell me-lg-2\"></i>
                            <span class=\"d-none d-lg-inline-flex\">Notificatin</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item\">
                                <h6 class=\"fw-normal mb-0\">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class=\"dropdown-divider\">
                            <a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                            <img class=\"rounded-circle me-lg-2\" src=\"{{ asset('uploads/images/333426696_739644077571070_31937414749283894_n.jpg')}}\" alt=\"\" style=\"width: 40px; height: 40px;\">
                            <span class=\"d-none d-lg-inline-flex\">{{ app.user.fullName }}</span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
                            <a href=\"{{ path('admin_account_index') }}\" class=\"dropdown-item\">My Profile</a>
                            <a href=\"{{ path('admin_parameter_index') }}\" class=\"dropdown-item\">Settings</a>
                            <a href=\"{{ logout_path('main') }}\" class=\"dropdown-item\">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            
 {% block body %}{% endblock %}





            <!-- Footer Start -->
            <div class=\"container-fluid pt-4 px-4\">
                <div class=\"bg-light rounded-top p-4\">
                    <div class=\"row\">
                        <div class=\"col-12 col-sm-6 text-center text-sm-start\">
                            &copy; <a href=\"#\">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class=\"col-12 col-sm-6 text-center text-sm-end\">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                            Designed By <a href=\"https://htmlcodex.com\">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('lib/chart/chart.min.js') }}\"></script>
    <script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
    <script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
    <script src=\"{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>

    <!-- Template Javascript -->
    <script src=\"js/main.js\"></script>
</body>

</html>", "admin/layout.html.twig", "C:\\Users\\Malik\\Desktop\\User-Crud-Symfony5\\templates\\admin\\layout.html.twig");
    }
}
