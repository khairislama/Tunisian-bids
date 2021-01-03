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

/* product/myproduct.html.twig */
class __TwigTemplate_adb4d1df9c5933272dba8532386d7bc529b54144437817ed701d9de9aaaa0812 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/myproduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/myproduct.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/myproduct.html.twig", 1);
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

        echo "vos produits";
        
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
        <h3 class=\"display-3 pt-0 text-info kiki\">Parcourir tous vos produits</h3>
        <hr class=\"my-3\">
        <p class=\"lead text-light kiki\" style=\"font-weight:600 \"><strong>vous avez des produits que vous n'utiliser plus ou vous <br>
        voulez les vendre en echère! Tunisian-bids met à votre disposition le meilleur systèm d'enchère <br>
        disponible. il suffit simplement de bien détailler le produit et mettre un prix de départ <br>
        et on s'occupe du reste pour vous</strong></p>
        <a class=\"btn btn-primary btn-lg\" href=\"/product/add\">Proposer un nouveau produit ></a>
    </section>



    <br><h3 class=\"text-success\">Les produits vérifiers</h3><hr><br>
    <div class=\"row\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "status", [], "any", false, false, false, 23), "verified"))) {
                // line 24
                echo "        <div class=\"col-4\">
            <div class=\"card\">
                <a href=\"/product/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\"> 
                    <img style=\"height:300px\" 
                        class=\"img-fluid img-thumbnail rounded\" 
                        src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["p"], "imageFile"), "html", null, true);
                echo "\">
                    </img> 
                </a>            
                <div class=\"card-body\">
                    ";
                // line 33
                if ((-1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 33)), 28))) {
                    // line 34
                    echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "
                    </span>
                    ";
                } else {
                    // line 38
                    echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                    // line 39
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 39), 0, 28), "html", null, true);
                    echo "...
                    </span>
                    ";
                }
                // line 42
                echo "                    <br>
                    <span class=\"bold\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 43), "html", null, true);
                echo " TND
                        <a href=\"/product/";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\" 
                            class=\"float-right\">Voir plus..>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    ";
            }
            // line 52
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>


    <br><br><h3 class=\"text-warning\">En attende de demande</h3><hr><br><br>
    <div class=\"row\">
    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 59
            echo "    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "status", [], "any", false, false, false, 59), "demande"))) {
                // line 60
                echo "        <div class=\"col-4\">
            <div class=\"card\">
                <a href=\"/product/";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 62), "html", null, true);
                echo "\"> 
                    <img style=\"height:300px\" 
                        class=\"img-fluid img-thumbnail rounded\" 
                        src=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["p"], "imageFile"), "html", null, true);
                echo "\">
                    </img> 
                </a>            
            <div class=\"card-body\">
                ";
                // line 69
                if ((-1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 69)), 28))) {
                    // line 70
                    echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 71), "html", null, true);
                    echo "
                    </span>
                    ";
                } else {
                    // line 74
                    echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                    // line 75
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 75), 0, 28), "html", null, true);
                    echo "...
                    </span>
                    ";
                }
                // line 78
                echo "                <br>
                <span class=\"bold\">";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 79), "html", null, true);
                echo " TND
                    <a href=\"/product/";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 80), "html", null, true);
                echo "\" 
                            class=\"float-right\">Voir plus..>
                    </a>
                </span>
            </div>
            </div>
        </div>
    ";
            }
            // line 88
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </div>

    
    <br><br><h3 class=\"text-danger\">Les produits non vérifies</h3><hr><br><br>
    <div class=\"row\">
    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 95
            echo "    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["p"], "status", [], "any", false, false, false, 95), "notverified"))) {
                // line 96
                echo "        <div class=\"col-4\">
            <div class=\"card\">
                <a href=\"/product/";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 98), "html", null, true);
                echo "\"> 
                    <img style=\"height:300px\" 
                        class=\"img-fluid img-thumbnail rounded\" 
                        src=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["p"], "imageFile"), "html", null, true);
                echo "\">
                    </img> 
                </a>            
                <div class=\"card-body\">
                    ";
                // line 105
                if ((-1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 105)), 28))) {
                    // line 106
                    echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                    // line 107
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 107), "html", null, true);
                    echo "
                    </span>
                    ";
                } else {
                    // line 110
                    echo "                    <span style=\"font-size: 18px; font-weight: 600\" 
                        class=\"bold\">";
                    // line 111
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 111), 0, 28), "html", null, true);
                    echo "...
                    </span>
                    ";
                }
                // line 114
                echo "                    <br>
                    <span class=\"bold\">";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 115), "html", null, true);
                echo " TND
                        <a href=\"/product/";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 116), "html", null, true);
                echo "\" 
                            class=\"float-right\">Voir plus..>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    ";
            }
            // line 124
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/myproduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 125,  318 => 124,  307 => 116,  303 => 115,  300 => 114,  294 => 111,  291 => 110,  285 => 107,  282 => 106,  280 => 105,  273 => 101,  267 => 98,  263 => 96,  260 => 95,  256 => 94,  249 => 89,  243 => 88,  232 => 80,  228 => 79,  225 => 78,  219 => 75,  216 => 74,  210 => 71,  207 => 70,  205 => 69,  198 => 65,  192 => 62,  188 => 60,  185 => 59,  181 => 58,  174 => 53,  168 => 52,  157 => 44,  153 => 43,  150 => 42,  144 => 39,  141 => 38,  135 => 35,  132 => 34,  130 => 33,  123 => 29,  117 => 26,  113 => 24,  110 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}vos produits{% endblock %}

{% block body %}

<div class=\"container\">
    <section id=\"header\" class=\"jumbotron text-center\">
        <h3 class=\"display-3 pt-0 text-info kiki\">Parcourir tous vos produits</h3>
        <hr class=\"my-3\">
        <p class=\"lead text-light kiki\" style=\"font-weight:600 \"><strong>vous avez des produits que vous n'utiliser plus ou vous <br>
        voulez les vendre en echère! Tunisian-bids met à votre disposition le meilleur systèm d'enchère <br>
        disponible. il suffit simplement de bien détailler le produit et mettre un prix de départ <br>
        et on s'occupe du reste pour vous</strong></p>
        <a class=\"btn btn-primary btn-lg\" href=\"/product/add\">Proposer un nouveau produit ></a>
    </section>



    <br><h3 class=\"text-success\">Les produits vérifiers</h3><hr><br>
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


    <br><br><h3 class=\"text-warning\">En attende de demande</h3><hr><br><br>
    <div class=\"row\">
    {% for p in products %}
    {% if p.status=='demande' %}
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

    
    <br><br><h3 class=\"text-danger\">Les produits non vérifies</h3><hr><br><br>
    <div class=\"row\">
    {% for p in products %}
    {% if p.status=='notverified' %}
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
</div>
{% endblock %}
", "product/myproduct.html.twig", "/home/khairislama/Documents/Studies/4EME INFORMATIQUE/web/polyauction/templates/product/myproduct.html.twig");
    }
}
