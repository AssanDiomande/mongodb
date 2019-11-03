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

/* nav.html.twig */
class __TwigTemplate_f55f4820f40dd7c8dddf69aaac32061899ee36be05025d758f834bdfc29dd9d3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark justify-content-between\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item \">
            <a class=\"nav-link navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_read");
        echo "\">Site web</a>
        </li>
        <li class=\"nav-item\">
            ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "                <a class=\"nav-link navbar-right\">Connecté en tant qu'administrateur</a>
            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 10
            echo "                <a class=\"nav-link\">Connecté en tant qu'utilisateur</a>
            ";
        } else {
            // line 12
            echo "                <a class=\"nav-link\">Non connecté</a>
            ";
        }
        // line 14
        echo "        </li>
        <li class=\"navbar-nav\">
            ";
        // line 16
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 17
            echo "                <a class=\"nav-link\" href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_logout");
            echo "> Se deconnecter </a>
            ";
        }
        // line 19
        echo "        </li>
    </ul>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  74 => 17,  72 => 16,  68 => 14,  64 => 12,  60 => 10,  56 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark justify-content-between\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item \">
            <a class=\"nav-link navbar-brand\" href=\"{{ path('app_user_read') }}\">Site web</a>
        </li>
        <li class=\"nav-item\">
            {% if is_granted('ROLE_ADMIN') %}
                <a class=\"nav-link navbar-right\">Connecté en tant qu'administrateur</a>
            {% elseif is_granted('ROLE_USER') %}
                <a class=\"nav-link\">Connecté en tant qu'utilisateur</a>
            {% else %}
                <a class=\"nav-link\">Non connecté</a>
            {% endif %}
        </li>
        <li class=\"navbar-nav\">
            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_USER') %}
                <a class=\"nav-link\" href={{ path('app_user_logout') }}> Se deconnecter </a>
            {% endif %}
        </li>
    </ul>
</nav>", "nav.html.twig", "/var/www/html/mongodb/templates/nav.html.twig");
    }
}
