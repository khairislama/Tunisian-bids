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

/* user/all.html.twig */
class __TwigTemplate_9a6c6bc6c417f05e658a0defffa9c9c50220c74b001cc530b969c534fb4e711c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/all.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/all.html.twig", 1);
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

        echo "Admin | users";
        
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
    <h1 class=\"text-center border-bottom border-dark\">All users</h1>
    
    <div class=\"row\">
        <div class=\"col-1\">
            <p class=\"text-center border-bottom border-dark\">ID</p>
        </div>
        <div class=\"col-2\">
            <p class=\"text-center border-bottom border-dark\">Prenom et nom</p>
        </div>
        <div class=\"col-5\">
            <p class=\"text-center border-bottom border-dark\">Email</p>
        </div>
        <div class=\"col-2\">
            <p class=\"text-center border-bottom border-dark\">Role</p>
        </div>
        <div class=\"col-2\">
            <p class=\"text-center border-bottom border-dark\">Supprimer</p>
        </div>
    <hr>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 28
            echo "        <div class=\"col-1\">
            <p class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-2\">            
            <a class=\"text-center\" href=\"/user/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "prenom", [], "any", false, false, false, 32), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</a> 
        </div>
        <div class=\"col-5\">
            <p>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-2\">
            ";
            // line 38
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 38), 0, [], "array", false, false, false, 38), "ROLE_ADMIN"))) {
                // line 39
                echo "                <p class=\"text-danger text-center\" style=\"font-weight: 600\" >ADMIN</p>
            ";
            } else {
                // line 41
                echo "                <p style=\"font-weight: 600\" class=\"text-center\">user</p>
            ";
            }
            // line 43
            echo "        </div>  
        <div class=\"col-2\">
            ";
            // line 45
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["u"], "roles", [], "any", false, false, false, 45), 0, [], "array", false, false, false, 45), "ROLE_USER"))) {
                // line 46
                echo "            <a href=\"/admin/user/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo "/ban\" class=\"text-danger text-center\">Supprimer</a>
            ";
            }
            // line 48
            echo "        </div>        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 50,  162 => 48,  156 => 46,  154 => 45,  150 => 43,  146 => 41,  142 => 39,  140 => 38,  134 => 35,  124 => 32,  118 => 29,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin | users{% endblock %}

{% block body %}

<div class=\"container\">
    <h1 class=\"text-center border-bottom border-dark\">All users</h1>
    
    <div class=\"row\">
        <div class=\"col-1\">
            <p class=\"text-center border-bottom border-dark\">ID</p>
        </div>
        <div class=\"col-2\">
            <p class=\"text-center border-bottom border-dark\">Prenom et nom</p>
        </div>
        <div class=\"col-5\">
            <p class=\"text-center border-bottom border-dark\">Email</p>
        </div>
        <div class=\"col-2\">
            <p class=\"text-center border-bottom border-dark\">Role</p>
        </div>
        <div class=\"col-2\">
            <p class=\"text-center border-bottom border-dark\">Supprimer</p>
        </div>
    <hr>
    {% for u in users %}
        <div class=\"col-1\">
            <p class=\"text-center\">{{ u.id }}</p>
        </div>
        <div class=\"col-2\">            
            <a class=\"text-center\" href=\"/user/{{ u.id }}\">{{ u.prenom }} {{ u.nom }}</a> 
        </div>
        <div class=\"col-5\">
            <p>{{ u.email }}</p>
        </div>
        <div class=\"col-2\">
            {% if u.roles[0]=='ROLE_ADMIN' %}
                <p class=\"text-danger text-center\" style=\"font-weight: 600\" >ADMIN</p>
            {% else %}
                <p style=\"font-weight: 600\" class=\"text-center\">user</p>
            {% endif %}
        </div>  
        <div class=\"col-2\">
            {% if u.roles[0]=='ROLE_USER' %}
            <a href=\"/admin/user/{{ u.id }}/ban\" class=\"text-danger text-center\">Supprimer</a>
            {% endif %}
        </div>        
    {% endfor %}
    </div>
</div>
{% endblock %}
", "user/all.html.twig", "/home/khairislama/Documents/Studies/4EME INFORMATIQUE/web/polyauction/templates/user/all.html.twig");
    }
}
