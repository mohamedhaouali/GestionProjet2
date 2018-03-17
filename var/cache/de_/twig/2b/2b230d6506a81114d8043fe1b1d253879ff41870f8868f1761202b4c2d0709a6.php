<?php

/* @SonataAdmin/CRUD/show_datetime.html.twig */
class __TwigTemplate_9e443d9aa1291a9c8b40b8f421e7b2c84ab0ba6948abd58fa00c726c83446ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_datetime.html.twig", 12);
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
        $__internal_8ba519b4709ca5374e8aa48205f4bea99717ee87fbeadfbe6d9c717ef195fc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba519b4709ca5374e8aa48205f4bea99717ee87fbeadfbe6d9c717ef195fc2c->enter($__internal_8ba519b4709ca5374e8aa48205f4bea99717ee87fbeadfbe6d9c717ef195fc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba519b4709ca5374e8aa48205f4bea99717ee87fbeadfbe6d9c717ef195fc2c->leave($__internal_8ba519b4709ca5374e8aa48205f4bea99717ee87fbeadfbe6d9c717ef195fc2c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dfd1db54bfae2754b47a0a8ea65e4871d8d12af839c4767b48f79176ca470dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd1db54bfae2754b47a0a8ea65e4871d8d12af839c4767b48f79176ca470dcd->enter($__internal_dfd1db54bfae2754b47a0a8ea65e4871d8d12af839c4767b48f79176ca470dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_dfd1db54bfae2754b47a0a8ea65e4871d8d12af839c4767b48f79176ca470dcd->leave($__internal_dfd1db54bfae2754b47a0a8ea65e4871d8d12af839c4767b48f79176ca470dcd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
";
    }
}
