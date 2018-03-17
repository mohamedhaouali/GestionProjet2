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
        $__internal_aa6eddf28e99ced954c781a9a5477c8f27715bbdc81301d0be32c4cc5c55496b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6eddf28e99ced954c781a9a5477c8f27715bbdc81301d0be32c4cc5c55496b->enter($__internal_aa6eddf28e99ced954c781a9a5477c8f27715bbdc81301d0be32c4cc5c55496b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionProjetBundle:ModuleUsed:liste_employe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa6eddf28e99ced954c781a9a5477c8f27715bbdc81301d0be32c4cc5c55496b->leave($__internal_aa6eddf28e99ced954c781a9a5477c8f27715bbdc81301d0be32c4cc5c55496b_prof);

    }

    // line 2
    public function block_field($context, array $blocks = array())
    {
        $__internal_caed5507d52bd26f7cefaa5381d71d611f283c4cde4d677ca72174f5b5bfb488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caed5507d52bd26f7cefaa5381d71d611f283c4cde4d677ca72174f5b5bfb488->enter($__internal_caed5507d52bd26f7cefaa5381d71d611f283c4cde4d677ca72174f5b5bfb488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_caed5507d52bd26f7cefaa5381d71d611f283c4cde4d677ca72174f5b5bfb488->leave($__internal_caed5507d52bd26f7cefaa5381d71d611f283c4cde4d677ca72174f5b5bfb488_prof);

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
