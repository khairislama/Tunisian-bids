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

/* product/index.html.twig */
class __TwigTemplate_24e9c290d37f5f93f91ec45075a60d3567229108aea3f888a7170e47cc9e0fdb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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

        echo "produits";
        
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
        <h3 class=\"display-3 pt-0 text-info kiki\">Parcourir les produits</h3>
        <hr class=\"my-3\">
        <p class=\"lead text-light kiki\" style=\"font-weight:600 \"><strong>vous avez des produits que vous n'utiliser plus ou vous <br>
        voulez les vendre en echère! Tunisian-bids met à votre disposition le meilleur systèm d'enchère <br>
        disponible. il suffit simplement de bien détailler le produit et mettre un prix de départ <br>
        et on s'occupe du reste pour vous</strong></p>
        <a class=\"btn btn-primary btn-lg\" href=\"/product/add\">Proposer un nouveau produit ></a>
    </section>
    ";
        // line 17
        if ((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "    <div class=\"row\">
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 20
                echo "    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "status", [], "any", false, false, false, 20), "verified"))) {
                    // line 21
                    echo "        <div class=\"col-4\">
            <div class=\"card\">
                <a href=\"/product/";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 23), "html", null, true);
                    echo "\"> 
                    <img style=\"height:300px\" 
                        class=\"img-fluid img-thumbnail\" 
                        src=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["p"], "imageFile"), "html", null, true);
                    echo "\">
                    </img> 
                </a>            
                <div class=\"card-body\">
                    ";
                    // line 30
                    if ((-1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 30)), 28))) {
                        // line 31
                        echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                        // line 32
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 32), "html", null, true);
                        echo "
                    </span>
                    ";
                    } else {
                        // line 35
                        echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                        // line 36
                        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 36), 0, 28), "html", null, true);
                        echo "...
                    </span>
                    ";
                    }
                    // line 39
                    echo "                    <br><hr>
                    <span>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 40), "html", null, true);
                    echo " TND 
                        <a href=\"/product/";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 41), "html", null, true);
                    echo "\" 
                            class=\"float-right\">Voir plus..>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    ";
                }
                // line 49
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    </div>
    ";
        } else {
            // line 52
            echo "    <div class=\"text-center display-4\">aucun produit en cours d'enchère</div>
    ";
        }
        // line 54
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 54,  178 => 52,  174 => 50,  168 => 49,  157 => 41,  153 => 40,  150 => 39,  144 => 36,  141 => 35,  135 => 32,  132 => 31,  130 => 30,  123 => 26,  117 => 23,  113 => 21,  110 => 20,  106 => 19,  103 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}produits{% endblock %}

{% block body %}

<div class=\"container\">
    <section id=\"header\" class=\"jumbotron text-center\">
        <h3 class=\"display-3 pt-0 text-info kiki\">Parcourir les produits</h3>
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
                        class=\"img-fluid img-thumbnail\" 
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
                    <br><hr>
                    <span>{{ p.price }} TND 
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
    <div class=\"text-center display-4\">aucun produit en cours d'enchère</div>
    {% endif %}
</div>
{% endblock %}
", "product/index.html.twig", "/home/khairislama/Documents/Studies/4EME INFORMATIQUE/web/polyauction/templates/product/index.html.twig");
    }
}
