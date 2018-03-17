<?php

/* GestionProjetBundle:ModuleUsed:liste_employe.html.twig */
class __TwigTemplate_43757355898196a4ba8e6619c2c2338737eeba0e7a0eba8fa724dcc6b8736673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "GestionProjetBundle:ModuleUsed:liste_employe.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : null), "employe", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 4
            echo "
    <div> 
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "nom", array()), "html", null, true);
            echo "
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "prenom", array()), "html", null, true);
            echo "
    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "       
";
    }

    public function getTemplateName()
    {
        return "GestionProjetBundle:ModuleUsed:liste_employe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  43 => 7,  39 => 6,  35 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}
{% block field %}
{% for d in object.employe %}

    <div> 
        {{ d.nom}}
        {{ d.prenom}}
    </div>
        {% endfor %}
       
{% endblock %}";
    }
}
