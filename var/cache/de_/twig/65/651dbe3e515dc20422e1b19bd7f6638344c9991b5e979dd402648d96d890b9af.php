<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_60e984483c51e3b080ca841da53fdd412a1c4ec47fd4ada409a3ac6be08fff61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
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
        $__internal_186429a6fa47ef20a13aace4aca4b2ff7888fa57759b94441d94100fef11d979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186429a6fa47ef20a13aace4aca4b2ff7888fa57759b94441d94100fef11d979->enter($__internal_186429a6fa47ef20a13aace4aca4b2ff7888fa57759b94441d94100fef11d979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_186429a6fa47ef20a13aace4aca4b2ff7888fa57759b94441d94100fef11d979->leave($__internal_186429a6fa47ef20a13aace4aca4b2ff7888fa57759b94441d94100fef11d979_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a88ca4190e396973d3ba429b5a6d6889f4a7e134bb39bf518be6d025b10a90b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88ca4190e396973d3ba429b5a6d6889f4a7e134bb39bf518be6d025b10a90b1->enter($__internal_a88ca4190e396973d3ba429b5a6d6889f4a7e134bb39bf518be6d025b10a90b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a88ca4190e396973d3ba429b5a6d6889f4a7e134bb39bf518be6d025b10a90b1->leave($__internal_a88ca4190e396973d3ba429b5a6d6889f4a7e134bb39bf518be6d025b10a90b1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
";
    }
}
