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

/* product/userProducts.html.twig */
class __TwigTemplate_8f6f1ea6faeb56d070c328361698e33548f7a807162343b3e3c8dc99f20ddb4d extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/userProducts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/userProducts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/userProducts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User products";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <section id=\"header\" class=\"jumbotron text-center\">
        <h3 class=\"display-3 pt-0 text-info kiki\">Parcourir tous les produits de ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "prenom", [], "any", false, false, false, 9), "html", null, true);
        echo "</h3>
        <hr class=\"my-3\">
        <p class=\"lead text-light kiki\" style=\"font-weight:600 \"><strong>vous avez des produits que vous n'utiliser plus ou vous <br>
        voulez les vendre en echère! Tunisian-bids met à votre disposition le meilleur systèm d'enchère <br>
        disponible. il suffit simplement de bien détailler le produit et mettre un prix de départ <br>
        et on s'occupe du reste pour vous</strong></p>
        <a class=\"btn btn-primary btn-lg\" href=\"/product/add\">Proposer un nouveau produit ></a>
    </section>

    ";
        // line 18
        if ((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "    <div class=\"row\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 21
                echo "    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "status", [], "any", false, false, false, 21), "verified"))) {
                    // line 22
                    echo "        <div class=\"col-4\">
            <div class=\"card\">
                <a href=\"/product/";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 24), "html", null, true);
                    echo "\"> 
                    <img style=\"height:300px\" 
                        class=\"img-fluid img-thumbnail rounded\" 
                        src=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["p"], "imageFile"), "html", null, true);
                    echo "\">
                    </img> 
                </a>            
                <div class=\"card-body\">
                    ";
                    // line 31
                    if ((-1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 31)), 28))) {
                        // line 32
                        echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                        // line 33
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 33), "html", null, true);
                        echo "
                    </span>
                    ";
                    } else {
                        // line 36
                        echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                        // line 37
                        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 37), 0, 28), "html", null, true);
                        echo "...
                    </span>
                    ";
                    }
                    // line 40
                    echo "                    <br>
                    <span class=\"bold\">";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 41), "html", null, true);
                    echo " TND
                        <a href=\"/product/";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 42), "html", null, true);
                    echo "\" 
                            class=\"float-right\">Voir plus..>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        ";
                }
                // line 50
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "    </div>
    ";
        } else {
            // line 53
            echo "    <div class=\"text-center display-4\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "prenom", [], "any", false, false, false, 53), "html", null, true);
            echo " n'a aucun produit en cours d'enchère</div>
    ";
        }
        // line 55
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/userProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 55,  182 => 53,  178 => 51,  172 => 50,  161 => 42,  157 => 41,  154 => 40,  148 => 37,  145 => 36,  139 => 33,  136 => 32,  134 => 31,  127 => 27,  121 => 24,  117 => 22,  114 => 21,  110 => 20,  107 => 19,  105 => 18,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User products{% endblock %}

{% block body %}

<div class=\"container\">
    <section id=\"header\" class=\"jumbotron text-center\">
        <h3 class=\"display-3 pt-0 text-info kiki\">Parcourir tous les produits de {{user.prenom}}</h3>
        <hr class=\"my-3\">
        <p class=\"lead text-light kiki\" style=\"font-weight:600 \"><strong>vous avez des produits que vous n'utiliser plus ou vous <br>
        voulez les vendre en echère! Tunisian-bids met à votre disposition le meilleur systèm d'enchère <br>
        disponible. il suffit simplement de bien détailler le produit et mettre un prix de départ <br>
        et on s'occupe du reste pour vous</strong></p>
        <a class=\"btn btn-primary btn-lg\" href=\"/product/add\">Proposer un nouveau produit ></a>
    </section>

    {% if products %}
    <div class=\"row\">
    {% for p in products %}
    {% if p.status=='verified' %}
        <div class=\"col-4\">
            <div class=\"card\">
                <a href=\"/product/{{ p.id }}\"> 
                    <img style=\"height:300px\" 
                        class=\"img-fluid img-thumbnail rounded\" 
                        src=\"{{ vich_uploader_asset(p, 'imageFile') }}\">
                    </img> 
                </a>            
                <div class=\"card-body\">
                    {% if p.name|length < 28 %}
                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">{{ p.name }}
                    </span>
                    {% else %}
                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">{{ p.name[0:28] }}...
                    </span>
                    {% endif %}
                    <br>
                    <span class=\"bold\">{{ p.price }} TND
                        <a href=\"/product/{{p.id}}\" 
                            class=\"float-right\">Voir plus..>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        {% endif %}
        {% endfor %}
    </div>
    {% else %}
    <div class=\"text-center display-4\">{{ user.prenom }} n'a aucun produit en cours d'enchère</div>
    {% endif %}
</div>
{% endblock %}
", "product/userProducts.html.twig", "/home/khairislama/Documents/Studies/4EME INFORMATIQUE/web/polyauction/templates/product/userProducts.html.twig");
    }
}
