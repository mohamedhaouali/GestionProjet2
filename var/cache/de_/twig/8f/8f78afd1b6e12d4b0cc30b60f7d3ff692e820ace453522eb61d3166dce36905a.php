<?php

/* @GestionProjet/ModuleUsed/liste_employe.html.twig */
class __TwigTemplate_dc114fa5a1202ebf0a1282a488e4682140c2ddb11745651c4b00e1cf22ca53a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "@GestionProjet/ModuleUsed/liste_employe.html.twig", 1);
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
        $__internal_982d0bd7a2268c70e7a31f0d6b6fa64eace48810073cbf3d4fe1f47f009eb56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982d0bd7a2268c70e7a31f0d6b6fa64eace48810073cbf3d4fe1f47f009eb56c->enter($__internal_982d0bd7a2268c70e7a31f0d6b6fa64eace48810073cbf3d4fe1f47f009eb56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestionProjet/ModuleUsed/liste_employe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_982d0bd7a2268c70e7a31f0d6b6fa64eace48810073cbf3d4fe1f47f009eb56c->leave($__internal_982d0bd7a2268c70e7a31f0d6b6fa64eace48810073cbf3d4fe1f47f009eb56c_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_cfeb9b8650d6aba00f83b807be31f328b1d0fed3658f552684ef31fddc325f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfeb9b8650d6aba00f83b807be31f328b1d0fed3658f552684ef31fddc325f1b->enter($__internal_cfeb9b8650d6aba00f83b807be31f328b1d0fed3658f552684ef31fddc325f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "employe", array()));
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
        
        $__internal_cfeb9b8650d6aba00f83b807be31f328b1d0fed3658f552684ef31fddc325f1b->leave($__internal_cfeb9b8650d6aba00f83b807be31f328b1d0fed3658f552684ef31fddc325f1b_prof);

    }

    public function getTemplateName()
    {
        return "@GestionProjet/ModuleUsed/liste_employe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  52 => 7,  48 => 6,  44 => 4,  40 => 3,  34 => 2,  11 => 1,);
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
