<?php

/* @Front/projet/new.html.twig */
class __TwigTemplate_d96cc2dbc115ab646b3663787557095297e6f3aae249c00c9540ae35d24b2485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Front/projet/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22ef93473de261df0579e51dd404b43f78d7921999646ca214672c8987b2976c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ef93473de261df0579e51dd404b43f78d7921999646ca214672c8987b2976c->enter($__internal_22ef93473de261df0579e51dd404b43f78d7921999646ca214672c8987b2976c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/projet/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22ef93473de261df0579e51dd404b43f78d7921999646ca214672c8987b2976c->leave($__internal_22ef93473de261df0579e51dd404b43f78d7921999646ca214672c8987b2976c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1641503a704122ce7f4e9054fb96f1575c22c27eb9f865f5fce82fe26ffe709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1641503a704122ce7f4e9054fb96f1575c22c27eb9f865f5fce82fe26ffe709->enter($__internal_e1641503a704122ce7f4e9054fb96f1575c22c27eb9f865f5fce82fe26ffe709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Projet creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projet_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e1641503a704122ce7f4e9054fb96f1575c22c27eb9f865f5fce82fe26ffe709->leave($__internal_e1641503a704122ce7f4e9054fb96f1575c22c27eb9f865f5fce82fe26ffe709_prof);

    }

    public function getTemplateName()
    {
        return "@Front/projet/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}
    <h1>Projet creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('projet_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
";
    }
}
