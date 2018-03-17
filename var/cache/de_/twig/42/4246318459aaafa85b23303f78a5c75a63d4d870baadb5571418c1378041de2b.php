<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_6e9c677373a5778b7204c9d868f1aa4db01cfaf99e527cb9d87b6fda3ab0d254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcb77313070ebb2ad2659f14876ea5d295ab07fc886f8f2c73fded7357d96af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb77313070ebb2ad2659f14876ea5d295ab07fc886f8f2c73fded7357d96af1->enter($__internal_bcb77313070ebb2ad2659f14876ea5d295ab07fc886f8f2c73fded7357d96af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb77313070ebb2ad2659f14876ea5d295ab07fc886f8f2c73fded7357d96af1->leave($__internal_bcb77313070ebb2ad2659f14876ea5d295ab07fc886f8f2c73fded7357d96af1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ca057aadada9218c3d48cfe3fc8752b7e221784a3a98ab95c6a011c5393e0c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca057aadada9218c3d48cfe3fc8752b7e221784a3a98ab95c6a011c5393e0c63->enter($__internal_ca057aadada9218c3d48cfe3fc8752b7e221784a3a98ab95c6a011c5393e0c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_ca057aadada9218c3d48cfe3fc8752b7e221784a3a98ab95c6a011c5393e0c63->leave($__internal_ca057aadada9218c3d48cfe3fc8752b7e221784a3a98ab95c6a011c5393e0c63_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

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
