<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_f6ea7d433d56f67d3b6a40ab29f1d34412e321392541d8f43e227f2829cf4ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
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
        $__internal_7dc696c9efd53dd51058af8bfaf39acf9b57477d2440d6b2918246d70725bc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc696c9efd53dd51058af8bfaf39acf9b57477d2440d6b2918246d70725bc5b->enter($__internal_7dc696c9efd53dd51058af8bfaf39acf9b57477d2440d6b2918246d70725bc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc696c9efd53dd51058af8bfaf39acf9b57477d2440d6b2918246d70725bc5b->leave($__internal_7dc696c9efd53dd51058af8bfaf39acf9b57477d2440d6b2918246d70725bc5b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cd0cb42b6c14837ca5eb4c440293a1fb7de919a42367948a4d80fa1056341204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0cb42b6c14837ca5eb4c440293a1fb7de919a42367948a4d80fa1056341204->enter($__internal_cd0cb42b6c14837ca5eb4c440293a1fb7de919a42367948a4d80fa1056341204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_cd0cb42b6c14837ca5eb4c440293a1fb7de919a42367948a4d80fa1056341204->leave($__internal_cd0cb42b6c14837ca5eb4c440293a1fb7de919a42367948a4d80fa1056341204_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
