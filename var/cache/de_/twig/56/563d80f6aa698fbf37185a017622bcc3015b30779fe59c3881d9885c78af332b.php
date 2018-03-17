<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_10413fbffd33721275dc7db3964f484e0b9e670911dd068b89e4a1a0395d3969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cb5b97aa7c485acd9e5207f056fbb428fe4cfb2f58da873c8df047c9acfa64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb5b97aa7c485acd9e5207f056fbb428fe4cfb2f58da873c8df047c9acfa64c->enter($__internal_5cb5b97aa7c485acd9e5207f056fbb428fe4cfb2f58da873c8df047c9acfa64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb5b97aa7c485acd9e5207f056fbb428fe4cfb2f58da873c8df047c9acfa64c->leave($__internal_5cb5b97aa7c485acd9e5207f056fbb428fe4cfb2f58da873c8df047c9acfa64c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3f307d973681cbf335aa70ddd03ee541ab6eb26d5f718793ed6cbbe9c37b597d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f307d973681cbf335aa70ddd03ee541ab6eb26d5f718793ed6cbbe9c37b597d->enter($__internal_3f307d973681cbf335aa70ddd03ee541ab6eb26d5f718793ed6cbbe9c37b597d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_3f307d973681cbf335aa70ddd03ee541ab6eb26d5f718793ed6cbbe9c37b597d->leave($__internal_3f307d973681cbf335aa70ddd03ee541ab6eb26d5f718793ed6cbbe9c37b597d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
