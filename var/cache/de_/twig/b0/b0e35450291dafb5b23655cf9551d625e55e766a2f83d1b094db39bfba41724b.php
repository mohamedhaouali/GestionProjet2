<?php

/* FrontBundle:projet:new.html.twig */
class __TwigTemplate_438ecdcb1cbda613061937a09e042deda2e8d106aa84ca5a15c508253da9dce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontBundle:projet:new.html.twig", 1);
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
        $__internal_62f281e7256c45541e40a9c81bcfe31cc009f26801b84c3bf5596b7c44ae8ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f281e7256c45541e40a9c81bcfe31cc009f26801b84c3bf5596b7c44ae8ca1->enter($__internal_62f281e7256c45541e40a9c81bcfe31cc009f26801b84c3bf5596b7c44ae8ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:projet:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f281e7256c45541e40a9c81bcfe31cc009f26801b84c3bf5596b7c44ae8ca1->leave($__internal_62f281e7256c45541e40a9c81bcfe31cc009f26801b84c3bf5596b7c44ae8ca1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab546de8c62a137abc75f67711ed31f0c765681efd82c3b4bcb574f7627da767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab546de8c62a137abc75f67711ed31f0c765681efd82c3b4bcb574f7627da767->enter($__internal_ab546de8c62a137abc75f67711ed31f0c765681efd82c3b4bcb574f7627da767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ab546de8c62a137abc75f67711ed31f0c765681efd82c3b4bcb574f7627da767->leave($__internal_ab546de8c62a137abc75f67711ed31f0c765681efd82c3b4bcb574f7627da767_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:projet:new.html.twig";
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
