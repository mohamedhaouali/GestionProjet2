<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_94c5338c04f005714f450542fdcca8be93ec26f1027da95d320dc79aa1856f02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_6c37b14111a63b983daa0148fd4d44b62e158bcde90aaf11afb707f2ac666619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c37b14111a63b983daa0148fd4d44b62e158bcde90aaf11afb707f2ac666619->enter($__internal_6c37b14111a63b983daa0148fd4d44b62e158bcde90aaf11afb707f2ac666619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c37b14111a63b983daa0148fd4d44b62e158bcde90aaf11afb707f2ac666619->leave($__internal_6c37b14111a63b983daa0148fd4d44b62e158bcde90aaf11afb707f2ac666619_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0b96693f5294d86013010367b741a650c3978cc3806811b6f0551d8ec4264d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b96693f5294d86013010367b741a650c3978cc3806811b6f0551d8ec4264d61->enter($__internal_0b96693f5294d86013010367b741a650c3978cc3806811b6f0551d8ec4264d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_0b96693f5294d86013010367b741a650c3978cc3806811b6f0551d8ec4264d61->leave($__internal_0b96693f5294d86013010367b741a650c3978cc3806811b6f0551d8ec4264d61_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
