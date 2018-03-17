<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_4541f6c430649ac390e943c8e9f4aad963f12c1930295a7daeb436e03c84c299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fed6e61f569ac184624d456d4af75c85c3b52799ef1d76a8c06666a661709160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed6e61f569ac184624d456d4af75c85c3b52799ef1d76a8c06666a661709160->enter($__internal_fed6e61f569ac184624d456d4af75c85c3b52799ef1d76a8c06666a661709160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fed6e61f569ac184624d456d4af75c85c3b52799ef1d76a8c06666a661709160->leave($__internal_fed6e61f569ac184624d456d4af75c85c3b52799ef1d76a8c06666a661709160_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_4d9445f170cc7b4e5eb150671832dda679b45b7c9c478c35ace74782bf2f9a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9445f170cc7b4e5eb150671832dda679b45b7c9c478c35ace74782bf2f9a83->enter($__internal_4d9445f170cc7b4e5eb150671832dda679b45b7c9c478c35ace74782bf2f9a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
";
        
        $__internal_4d9445f170cc7b4e5eb150671832dda679b45b7c9c478c35ace74782bf2f9a83->leave($__internal_4d9445f170cc7b4e5eb150671832dda679b45b7c9c478c35ace74782bf2f9a83_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_ba839a882ca8c3810aee56214947c543398ef52a509ef6107ca0e028fff3bf94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba839a882ca8c3810aee56214947c543398ef52a509ef6107ca0e028fff3bf94->enter($__internal_ba839a882ca8c3810aee56214947c543398ef52a509ef6107ca0e028fff3bf94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_ba839a882ca8c3810aee56214947c543398ef52a509ef6107ca0e028fff3bf94->leave($__internal_ba839a882ca8c3810aee56214947c543398ef52a509ef6107ca0e028fff3bf94_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_title %}
    {{ name|trans({}, admin.translationdomain) }}
{% endblock %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
";
    }
}
