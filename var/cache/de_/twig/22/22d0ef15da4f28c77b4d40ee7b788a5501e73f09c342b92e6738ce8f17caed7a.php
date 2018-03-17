<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_ce74d3781c8a945bc485d20fac4b49cfa4d4cc55d8f7bc554cd67a7315623dbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c279e41e2604ba9c4bc1a45ef5ae7ed19087b71caef8a6bcca579950cabdb9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c279e41e2604ba9c4bc1a45ef5ae7ed19087b71caef8a6bcca579950cabdb9e2->enter($__internal_c279e41e2604ba9c4bc1a45ef5ae7ed19087b71caef8a6bcca579950cabdb9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_c279e41e2604ba9c4bc1a45ef5ae7ed19087b71caef8a6bcca579950cabdb9e2->leave($__internal_c279e41e2604ba9c4bc1a45ef5ae7ed19087b71caef8a6bcca579950cabdb9e2_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_9a3eead087ab1f2b353bf2104b95eb2f3c8027989ba64d1d78af29fb48f17f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3eead087ab1f2b353bf2104b95eb2f3c8027989ba64d1d78af29fb48f17f63->enter($__internal_9a3eead087ab1f2b353bf2104b95eb2f3c8027989ba64d1d78af29fb48f17f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_9a3eead087ab1f2b353bf2104b95eb2f3c8027989ba64d1d78af29fb48f17f63->leave($__internal_9a3eead087ab1f2b353bf2104b95eb2f3c8027989ba64d1d78af29fb48f17f63_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_b36e254989415d899f6b7ad8ac6df8f19f14408836c29f5b0508bf8eb2cdc328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36e254989415d899f6b7ad8ac6df8f19f14408836c29f5b0508bf8eb2cdc328->enter($__internal_b36e254989415d899f6b7ad8ac6df8f19f14408836c29f5b0508bf8eb2cdc328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_b36e254989415d899f6b7ad8ac6df8f19f14408836c29f5b0508bf8eb2cdc328->leave($__internal_b36e254989415d899f6b7ad8ac6df8f19f14408836c29f5b0508bf8eb2cdc328_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
";
    }
}
