<?php

/* FrontBundle:projet:new.html.twig */
class __TwigTemplate_4f53851d0497ea7d449b51a3ca5df8257407b0af63dc715cfeb93024c21667c3 extends Twig_Template
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
        $__internal_463d112308a094142106a1e9c1c731f01796222dfc2de357ee7bba0c2b9f144e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463d112308a094142106a1e9c1c731f01796222dfc2de357ee7bba0c2b9f144e->enter($__internal_463d112308a094142106a1e9c1c731f01796222dfc2de357ee7bba0c2b9f144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:projet:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_463d112308a094142106a1e9c1c731f01796222dfc2de357ee7bba0c2b9f144e->leave($__internal_463d112308a094142106a1e9c1c731f01796222dfc2de357ee7bba0c2b9f144e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9728628aa83ac4249150e75236a116acb79a6b1d9fbcf79faf83c8612a54cfde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9728628aa83ac4249150e75236a116acb79a6b1d9fbcf79faf83c8612a54cfde->enter($__internal_9728628aa83ac4249150e75236a116acb79a6b1d9fbcf79faf83c8612a54cfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9728628aa83ac4249150e75236a116acb79a6b1d9fbcf79faf83c8612a54cfde->leave($__internal_9728628aa83ac4249150e75236a116acb79a6b1d9fbcf79faf83c8612a54cfde_prof);

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
