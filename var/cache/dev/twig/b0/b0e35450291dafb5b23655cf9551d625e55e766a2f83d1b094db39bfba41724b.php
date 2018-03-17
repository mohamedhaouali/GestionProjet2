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
        $__internal_5d89ca58ad9290d704d06f4279014284216ce0fb73d6103d4e769d3501312d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d89ca58ad9290d704d06f4279014284216ce0fb73d6103d4e769d3501312d6a->enter($__internal_5d89ca58ad9290d704d06f4279014284216ce0fb73d6103d4e769d3501312d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:projet:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d89ca58ad9290d704d06f4279014284216ce0fb73d6103d4e769d3501312d6a->leave($__internal_5d89ca58ad9290d704d06f4279014284216ce0fb73d6103d4e769d3501312d6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cba5136672f6c90a59a6c5095b9865523d223bdd3344e5254a9122056bfb7851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba5136672f6c90a59a6c5095b9865523d223bdd3344e5254a9122056bfb7851->enter($__internal_cba5136672f6c90a59a6c5095b9865523d223bdd3344e5254a9122056bfb7851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cba5136672f6c90a59a6c5095b9865523d223bdd3344e5254a9122056bfb7851->leave($__internal_cba5136672f6c90a59a6c5095b9865523d223bdd3344e5254a9122056bfb7851_prof);

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
