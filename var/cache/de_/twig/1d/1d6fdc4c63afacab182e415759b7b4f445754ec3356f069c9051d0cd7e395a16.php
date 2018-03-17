<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_be091f08471d862f9f28b77a2781d5507f9e378024e876faa8581e10831f2372 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_e156b715969a2f624f2fa12a8a69efbc38cddcdf95daa71196173f83d1d4ad80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e156b715969a2f624f2fa12a8a69efbc38cddcdf95daa71196173f83d1d4ad80->enter($__internal_e156b715969a2f624f2fa12a8a69efbc38cddcdf95daa71196173f83d1d4ad80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e156b715969a2f624f2fa12a8a69efbc38cddcdf95daa71196173f83d1d4ad80->leave($__internal_e156b715969a2f624f2fa12a8a69efbc38cddcdf95daa71196173f83d1d4ad80_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c8804c51954e851b8b983a4c4b14973aa36283dcaa024d368fd30d8c6c398def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8804c51954e851b8b983a4c4b14973aa36283dcaa024d368fd30d8c6c398def->enter($__internal_c8804c51954e851b8b983a4c4b14973aa36283dcaa024d368fd30d8c6c398def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_c8804c51954e851b8b983a4c4b14973aa36283dcaa024d368fd30d8c6c398def->leave($__internal_c8804c51954e851b8b983a4c4b14973aa36283dcaa024d368fd30d8c6c398def_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
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
