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
class __TwigTemplate_2a3324d0a9af3c000895867bce745807be2d5e328576b04f2d38b8f7e40c1180 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

        <!-- Latest compiled and minified font-awsome css -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
        
        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

        <!-- Popper JS -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>

        <!-- Latest compiled JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
            
        <title>Tunisian BIDS | ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"/\">Tunisian-bids</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
    
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item ml-3\">
                        <a class=\"nav-link\" href=\"/aboutus\">About <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item dropdown ml-3\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"categoriesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Categories
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"categoriesDropdown\">
                            <a class=\"dropdown-item\" href=\"/products/info\">Informatique</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/electro\">Eléctroménager</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/maison\">Maisons</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/tels\">Téléphonie</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/tv\">Télévisions</a>                            
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/cams\">Appareil photo et caméras</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/sport\">Articles de sport</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/auto\">Auto & Moto</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/autre\">Autres</a>                        
                        </div>
                    </li>
                    <form class=\"form-inline my-2 my-lg-0 ml-5\">
                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Recherche rapide\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"><i class=\"fas fa-search\"></i> Rechercher</button>
                    </form>
                </ul>                
                ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) {
            // line 73
            echo "                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown mr-5\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"rounded-circle\" style=\"width: 30px;  height:30px\" src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "imageFile"), "html", null, true);
            echo "\"></img>
                            ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "prenom", [], "any", false, false, false, 77), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "nom", [], "any", false, false, false, 77), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"/user/";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
            echo "\">Mon profile</a>
                            <a class=\"dropdown-item\" href=\"/my/products\">Mes produit</a>
                            <a class=\"dropdown-item\" href=\"/my/bids\">Mes bids</a>
                            <a class=\"dropdown-item\" href=\"/my/wishlist\">Ma liste d'envie</a>
                            <a class=\"dropdown-item\" href=\"/my/messages\">Mes messages</a>
                            <a class=\"dropdown-item\" href=\"/user/modify\">Paramètres</a>
                            <a class=\"dropdown-item\" href=\"/help\">Aide</a>
                        <div class=\"dropdown-divider\"></div>
                            ";
            // line 88
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 89
                echo "                                <p class=\"text-center text-danger\">ADMIN TAB</p>
                                <a class=\"dropdown-item\" href=\"/admin/products\">Liste produit</a>
                                <a class=\"dropdown-item\" href=\"/admin/users\">Liste Users</a>
                            ";
            }
            // line 93
            echo "                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                        </div>
                    </li>
                </ul>
                ";
        } else {
            // line 99
            echo "                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mr-5\">
                        <a href=\"/login\" class=\"nav-link\">Connexion</a>
                    </li>
                    <li class=\"nav-item mr-5\">
                        <a href=\"/register\" class=\"nav-link\">Créer un compte</a>
                    </li>
                </ul>
                ";
        }
        // line 108
        echo "            </div>
        </nav>
        ";
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "        <br><br><br><br><br><br><br><br><br><br>
<footer class=\"page-footer font-small mt-5 \" style=\"color: white\">
    <div class=\"container text-center text-md-left\">
        <div class=\"row text-center text-md-left mt-3 pb-3\">
            <div class=\"col-md-6 col-lg-3 col-xl-3 mx-auto mt-3\">
                <h6 class=\"text-uppercase mb-4 font-weight-bold\" style=\"color: white;\">Covoiturage</h6>
                <p>Dans le cadre de la matière \"développement WEB\", ont a été invité à réaliser un mini-projet de développement d'un site web dynamique
                    avec BOOTSTRAP et PHP dans le cadre de blog de covoiturage entre étudiants et la CoronaVirus</p>
            </div>
            <hr class=\"w-100 clearfix d-md-none\">
            <div class=\"col-md-6 col-lg-3 col-xl-3 mx-auto mt-3\">
                <h6 class=\"text-uppercase mb-4 font-weight-bold\">Contact</h6>
                <p><i class=\"fas fa-home mr-3\"></i> Sousse, TN</p>
                <p><i class=\"fas fa-envelope mr-3\"></i> khairi.slama@polytechnicien.tn</p>
                <p><i class=\"fas fa-phone mr-3\"></i> + 216 54 007 387</p>
                <p><i class=\"fas fa-university mr-3\"></i> Polytechnique de Sousse</p>
            </div>
        </div>
    </div>
</footer>
<div class=\"footer py-4\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-4 my-3 my-lg-0\">
                <a class=\"btn btn-dark btn-social mx-2\" href=\"https://twitter.com/khairislama\"><i class=\"fab fa-twitter\"></i></a><a
                    class=\"btn btn-dark btn-social mx-2\" href=\"https://www.facebook.com/khairi.slama/\"><i class=\"fab fa-facebook-f\"></i></a><a
                    class=\"btn btn-dark btn-social mx-2\" href=\"https://www.linkedin.com/in/khairi-slama-808514187/\"><i class=\"fab fa-linkedin-in\"></i></a>
            </div>
        </div>
    </div>
</div>
        ";
        // line 142
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 24
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "base title!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  294 => 142,  276 => 110,  258 => 26,  239 => 24,  227 => 143,  225 => 142,  192 => 111,  190 => 110,  186 => 108,  175 => 99,  167 => 93,  161 => 89,  159 => 88,  148 => 80,  140 => 77,  136 => 76,  131 => 73,  129 => 72,  82 => 27,  80 => 26,  75 => 24,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">

        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">

        <!-- Latest compiled and minified font-awsome css -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
        
        <!-- jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

        <!-- Popper JS -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>

        <!-- Latest compiled JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
            
        <title>Tunisian BIDS | {% block title %}base title!{% endblock %}</title>
        
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"/\">Tunisian-bids</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
    
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item ml-3\">
                        <a class=\"nav-link\" href=\"/aboutus\">About <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item dropdown ml-3\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"categoriesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Categories
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"categoriesDropdown\">
                            <a class=\"dropdown-item\" href=\"/products/info\">Informatique</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/electro\">Eléctroménager</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/maison\">Maisons</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/tels\">Téléphonie</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/tv\">Télévisions</a>                            
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/cams\">Appareil photo et caméras</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/sport\">Articles de sport</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/auto\">Auto & Moto</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/products/autre\">Autres</a>                        
                        </div>
                    </li>
                    <form class=\"form-inline my-2 my-lg-0 ml-5\">
                        <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Recherche rapide\" aria-label=\"Search\">
                        <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\"><i class=\"fas fa-search\"></i> Rechercher</button>
                    </form>
                </ul>                
                {% if app.user %}
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item dropdown mr-5\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img class=\"rounded-circle\" style=\"width: 30px;  height:30px\" src=\"{{ vich_uploader_asset(app.user , 'imageFile') }}\"></img>
                            {{ app.user.prenom }} {{ app.user.nom }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"userDropdown\">
                            <a class=\"dropdown-item\" href=\"/user/{{ app.user.id }}\">Mon profile</a>
                            <a class=\"dropdown-item\" href=\"/my/products\">Mes produit</a>
                            <a class=\"dropdown-item\" href=\"/my/bids\">Mes bids</a>
                            <a class=\"dropdown-item\" href=\"/my/wishlist\">Ma liste d'envie</a>
                            <a class=\"dropdown-item\" href=\"/my/messages\">Mes messages</a>
                            <a class=\"dropdown-item\" href=\"/user/modify\">Paramètres</a>
                            <a class=\"dropdown-item\" href=\"/help\">Aide</a>
                        <div class=\"dropdown-divider\"></div>
                            {% if is_granted('ROLE_ADMIN') %}
                                <p class=\"text-center text-danger\">ADMIN TAB</p>
                                <a class=\"dropdown-item\" href=\"/admin/products\">Liste produit</a>
                                <a class=\"dropdown-item\" href=\"/admin/users\">Liste Users</a>
                            {% endif %}
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"/logout\">Deconnexion</a>
                        </div>
                    </li>
                </ul>
                {% else %}
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mr-5\">
                        <a href=\"/login\" class=\"nav-link\">Connexion</a>
                    </li>
                    <li class=\"nav-item mr-5\">
                        <a href=\"/register\" class=\"nav-link\">Créer un compte</a>
                    </li>
                </ul>
                {% endif %}
            </div>
        </nav>
        {% block body %}{% endblock %}
        <br><br><br><br><br><br><br><br><br><br>
<footer class=\"page-footer font-small mt-5 \" style=\"color: white\">
    <div class=\"container text-center text-md-left\">
        <div class=\"row text-center text-md-left mt-3 pb-3\">
            <div class=\"col-md-6 col-lg-3 col-xl-3 mx-auto mt-3\">
                <h6 class=\"text-uppercase mb-4 font-weight-bold\" style=\"color: white;\">Covoiturage</h6>
                <p>Dans le cadre de la matière \"développement WEB\", ont a été invité à réaliser un mini-projet de développement d'un site web dynamique
                    avec BOOTSTRAP et PHP dans le cadre de blog de covoiturage entre étudiants et la CoronaVirus</p>
            </div>
            <hr class=\"w-100 clearfix d-md-none\">
            <div class=\"col-md-6 col-lg-3 col-xl-3 mx-auto mt-3\">
                <h6 class=\"text-uppercase mb-4 font-weight-bold\">Contact</h6>
                <p><i class=\"fas fa-home mr-3\"></i> Sousse, TN</p>
                <p><i class=\"fas fa-envelope mr-3\"></i> khairi.slama@polytechnicien.tn</p>
                <p><i class=\"fas fa-phone mr-3\"></i> + 216 54 007 387</p>
                <p><i class=\"fas fa-university mr-3\"></i> Polytechnique de Sousse</p>
            </div>
        </div>
    </div>
</footer>
<div class=\"footer py-4\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-4 my-3 my-lg-0\">
                <a class=\"btn btn-dark btn-social mx-2\" href=\"https://twitter.com/khairislama\"><i class=\"fab fa-twitter\"></i></a><a
                    class=\"btn btn-dark btn-social mx-2\" href=\"https://www.facebook.com/khairi.slama/\"><i class=\"fab fa-facebook-f\"></i></a><a
                    class=\"btn btn-dark btn-social mx-2\" href=\"https://www.linkedin.com/in/khairi-slama-808514187/\"><i class=\"fab fa-linkedin-in\"></i></a>
            </div>
        </div>
    </div>
</div>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/khairislama/Documents/Studies/4EME INFORMATIQUE/web/polyauction/templates/base.html.twig");
    }
}
