<?php

/* GestionProjetBundle:ModuleUsed:liste_employe.html.twig */
class __TwigTemplate_16d6e7ce480a5f43607a55d21aa6c432050228d098ef6daf9c4a8bb619bf1b65 extends Twig_Template
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
        $__internal_eefcdb4a1f80c4dae938b0076f6cc87ba6c3054af6f9e9a49e4e8c6425c7022d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefcdb4a1f80c4dae938b0076f6cc87ba6c3054af6f9e9a49e4e8c6425c7022d->enter($__internal_eefcdb4a1f80c4dae938b0076f6cc87ba6c3054af6f9e9a49e4e8c6425c7022d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionProjetBundle:ModuleUsed:liste_employe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eefcdb4a1f80c4dae938b0076f6cc87ba6c3054af6f9e9a49e4e8c6425c7022d->leave($__internal_eefcdb4a1f80c4dae938b0076f6cc87ba6c3054af6f9e9a49e4e8c6425c7022d_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_560d1f5a40ee486a0b6674dbdeb58e292207937b444b1ab50f8b88915ec8a933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560d1f5a40ee486a0b6674dbdeb58e292207937b444b1ab50f8b88915ec8a933->enter($__internal_560d1f5a40ee486a0b6674dbdeb58e292207937b444b1ab50f8b88915ec8a933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_560d1f5a40ee486a0b6674dbdeb58e292207937b444b1ab50f8b88915ec8a933->leave($__internal_560d1f5a40ee486a0b6674dbdeb58e292207937b444b1ab50f8b88915ec8a933_prof);

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
