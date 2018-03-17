<?php

/* GestionProjetBundle:ModuleUsed:liste_employe.html.twig */
class __TwigTemplate_dddf18a9c5ccd8d8bdcfec0225b32e70eccc957dd28f92a02d1b64193f72c4aa extends Twig_Template
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
        $__internal_cc0efd004a99af1d082787a5be85d17b91baaa096c6c684e2a8abae8d0c06ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0efd004a99af1d082787a5be85d17b91baaa096c6c684e2a8abae8d0c06ee5->enter($__internal_cc0efd004a99af1d082787a5be85d17b91baaa096c6c684e2a8abae8d0c06ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionProjetBundle:ModuleUsed:liste_employe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0efd004a99af1d082787a5be85d17b91baaa096c6c684e2a8abae8d0c06ee5->leave($__internal_cc0efd004a99af1d082787a5be85d17b91baaa096c6c684e2a8abae8d0c06ee5_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_6cf8790448e5680ae4ca318d9c25f627cc27234819160a5cce30f34f94736707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf8790448e5680ae4ca318d9c25f627cc27234819160a5cce30f34f94736707->enter($__internal_6cf8790448e5680ae4ca318d9c25f627cc27234819160a5cce30f34f94736707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_6cf8790448e5680ae4ca318d9c25f627cc27234819160a5cce30f34f94736707->leave($__internal_6cf8790448e5680ae4ca318d9c25f627cc27234819160a5cce30f34f94736707_prof);

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
