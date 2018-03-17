<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_2e35c271ace0ca7a1372ad12d298651555d29f3e63b97052a0adbd4c8da841a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
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
        $__internal_4c768d3b788cc14ef242e800886287ee63138b7b7e7b0129f48bdaab870d1301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c768d3b788cc14ef242e800886287ee63138b7b7e7b0129f48bdaab870d1301->enter($__internal_4c768d3b788cc14ef242e800886287ee63138b7b7e7b0129f48bdaab870d1301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c768d3b788cc14ef242e800886287ee63138b7b7e7b0129f48bdaab870d1301->leave($__internal_4c768d3b788cc14ef242e800886287ee63138b7b7e7b0129f48bdaab870d1301_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f9bfb797d0b732fbf3b1d731b78abb1fb86c03b8a6f7a64ccdebff6596a862b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9bfb797d0b732fbf3b1d731b78abb1fb86c03b8a6f7a64ccdebff6596a862b7->enter($__internal_f9bfb797d0b732fbf3b1d731b78abb1fb86c03b8a6f7a64ccdebff6596a862b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_f9bfb797d0b732fbf3b1d731b78abb1fb86c03b8a6f7a64ccdebff6596a862b7->leave($__internal_f9bfb797d0b732fbf3b1d731b78abb1fb86c03b8a6f7a64ccdebff6596a862b7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}
