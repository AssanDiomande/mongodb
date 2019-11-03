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

/* user/index.html.twig */
class __TwigTemplate_f42b8c228254f15ac050cdfc72991de8277f65f63147bd03d3d2c10ec55c246f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'link' => [$this, 'block_link'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/user/index.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <body>
    ";
        // line 9
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "        <h4 class=\"text-danger\" style=\"text-align: center\">Vous n'avez pas les droits nécessaires pour gerer les utilisateurs</h4>
    ";
        }
        // line 12
        echo "    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
            <th>Status</th>
            ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "                <th>Action 1</th>
                <th>Action 2</th>
            ";
        }
        // line 23
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "lastname", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "firstname", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["f"], "isAdmin", [], "any", false, false, false, 31) == true)) {
                // line 32
                echo "                    <td>admin</td>
                ";
            } else {
                // line 34
                echo "                    <td>utilisateur</td>
                ";
            }
            // line 36
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 37
                echo "                    <td>
                        <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_update", ["id" => twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier un utilisateur</a>
                    </td>
                ";
            }
            // line 41
            echo "                ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 42
                echo "                    <td>
                        <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\"class=\"btn btn-danger\">Supprimer un utilisateur</a>
                    </td>
                ";
            }
            // line 46
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
     <div class=\"bottom\">
        ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 52
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_add");
            echo "\" class=\"btn btn-primary\">Ajouter un utilisateur</a>
        ";
        }
        // line 54
        echo "    </div>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 54,  189 => 52,  187 => 51,  182 => 48,  175 => 46,  169 => 43,  166 => 42,  163 => 41,  157 => 38,  154 => 37,  151 => 36,  147 => 34,  143 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 28,  126 => 27,  122 => 26,  117 => 23,  112 => 20,  110 => 19,  101 => 12,  97 => 10,  95 => 9,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block link %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/user/index.css') }}\">
{% endblock %}

{% block body %}
    <body>
    {% if not(is_granted('ROLE_ADMIN')) %}
        <h4 class=\"text-danger\" style=\"text-align: center\">Vous n'avez pas les droits nécessaires pour gerer les utilisateurs</h4>
    {% endif %}
    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Mail</th>
            <th>Status</th>
            {% if is_granted('ROLE_ADMIN') %}
                <th>Action 1</th>
                <th>Action 2</th>
            {% endif %}
        </tr>
        </thead>
        <tbody>
        {% for f in form %}
            <tr>
                <td>{{ f.lastname }}</td>
                <td>{{ f.firstname }}</td>
                <td>{{ f.email }}</td>
                {% if f.isAdmin == true %}
                    <td>admin</td>
                {% else %}
                    <td>utilisateur</td>
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                    <td>
                        <a href=\"{{ path('app_user_update',{id:f.id}) }}\" class=\"btn btn-info\">Modifier un utilisateur</a>
                    </td>
                {% endif %}
                {% if is_granted('ROLE_ADMIN') %}
                    <td>
                        <a href=\"{{ path('app_user_delete',{id:f.id}) }}\"class=\"btn btn-danger\">Supprimer un utilisateur</a>
                    </td>
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>
     <div class=\"bottom\">
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('app_user_add') }}\" class=\"btn btn-primary\">Ajouter un utilisateur</a>
        {% endif %}
    </div>
    </body>
{% endblock %}", "user/index.html.twig", "/var/www/html/mongodb/templates/user/index.html.twig");
    }
}
