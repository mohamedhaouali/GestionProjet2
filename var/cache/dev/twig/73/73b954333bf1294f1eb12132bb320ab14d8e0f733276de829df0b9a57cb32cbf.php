<?php

/* FrontBundle:projet:index.html.twig */
class __TwigTemplate_ba866e1ec5d251ac909b510666f48c6b1ef2bba1d9eb358e841b487a6a35ac0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:projet:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382d67e30ddf28f775d4b9a580a4390255d6156847a3f4b6312ceff24d98d682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382d67e30ddf28f775d4b9a580a4390255d6156847a3f4b6312ceff24d98d682->enter($__internal_382d67e30ddf28f775d4b9a580a4390255d6156847a3f4b6312ceff24d98d682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:projet:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382d67e30ddf28f775d4b9a580a4390255d6156847a3f4b6312ceff24d98d682->leave($__internal_382d67e30ddf28f775d4b9a580a4390255d6156847a3f4b6312ceff24d98d682_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f089a712f5d4dc427dd7a5c258af519854d500ce4b2ac7032be6410c405ecd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f089a712f5d4dc427dd7a5c258af519854d500ce4b2ac7032be6410c405ecd30->enter($__internal_f089a712f5d4dc427dd7a5c258af519854d500ce4b2ac7032be6410c405ecd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('nav', $context, $blocks);
        // line 30
        echo "            

    <h1>Projet list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Datedebut</th>
                <th>Cout</th>
                 <th>employe</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 47
            echo "            <tr>
                <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            if ($this->getAttribute($context["projet"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "cout", array()), "html", null, true);
            echo "</td>
                
                <td>  ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["projet"], "employe", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 54
                echo "                
                    
                    ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nom", array()), "html", null, true);
                echo "
                    
                    <br>
                    
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_show", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_edit", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_f089a712f5d4dc427dd7a5c258af519854d500ce4b2ac7032be6410c405ecd30->leave($__internal_f089a712f5d4dc427dd7a5c258af519854d500ce4b2ac7032be6410c405ecd30_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_08da0fd860977edc72e9f0443e24cb2b95622c9f917123858499f0d57b5157b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08da0fd860977edc72e9f0443e24cb2b95622c9f917123858499f0d57b5157b7->enter($__internal_08da0fd860977edc72e9f0443e24cb2b95622c9f917123858499f0d57b5157b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "      <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">Dashboard</a></li>
            <li><a href=\"#\">Settings</a></li>
            <li><a href=\"#\">Profile</a></li>
            <li><a href=\"#\">Help</a></li>
          </ul>
          <form class=\"navbar-form navbar-right\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
          </form>
        </div>
      </div>
    </nav>       

";
        
        $__internal_08da0fd860977edc72e9f0443e24cb2b95622c9f917123858499f0d57b5157b7->leave($__internal_08da0fd860977edc72e9f0443e24cb2b95622c9f917123858499f0d57b5157b7_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 5,  150 => 4,  139 => 79,  132 => 74,  120 => 68,  114 => 65,  108 => 61,  97 => 56,  93 => 54,  89 => 53,  84 => 51,  78 => 50,  74 => 49,  68 => 48,  65 => 47,  61 => 46,  43 => 30,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
{% block nav %}
      <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container-fluid\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Project name</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"#\">Dashboard</a></li>
            <li><a href=\"#\">Settings</a></li>
            <li><a href=\"#\">Profile</a></li>
            <li><a href=\"#\">Help</a></li>
          </ul>
          <form class=\"navbar-form navbar-right\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search...\">
          </form>
        </div>
      </div>
    </nav>       

{% endblock %}            

    <h1>Projet list</h1>

    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Datedebut</th>
                <th>Cout</th>
                 <th>employe</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for projet in projets %}
            <tr>
                <td><a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">{{ projet.id }}</a></td>
                <td>{{ projet.nom }}</td>
                <td>{% if projet.dateDebut %}{{ projet.dateDebut|date('Y-m-d') }}{% endif %}</td>
                <td>{{ projet.cout }}</td>
                
                <td>  {% for e in projet.employe %}
                
                    
                    {{ e.nom }}
                    
                    <br>
                    
                     {% endfor %}
                
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('projet_show', { 'id': projet.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('projet_edit', { 'id': projet.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('projet_new') }}\">Create a new entry</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
