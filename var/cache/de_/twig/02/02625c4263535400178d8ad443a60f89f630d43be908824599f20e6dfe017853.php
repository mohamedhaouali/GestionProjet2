<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_7ff1a0e283160464d842373f4e33195d2c37ed66024cc0a3c74764e0ff3bb64c extends Twig_Template
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
        $__internal_07502b860577be5d570eece7d957317a758156c818c1d0e08b3c0eb8b7ae7090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07502b860577be5d570eece7d957317a758156c818c1d0e08b3c0eb8b7ae7090->enter($__internal_07502b860577be5d570eece7d957317a758156c818c1d0e08b3c0eb8b7ae7090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

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
        
        $__internal_07502b860577be5d570eece7d957317a758156c818c1d0e08b3c0eb8b7ae7090->leave($__internal_07502b860577be5d570eece7d957317a758156c818c1d0e08b3c0eb8b7ae7090_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_92b30f22355afcbb2dcd16266be6a6ca18e4c12607033844cb9328925f9af947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b30f22355afcbb2dcd16266be6a6ca18e4c12607033844cb9328925f9af947->enter($__internal_92b30f22355afcbb2dcd16266be6a6ca18e4c12607033844cb9328925f9af947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_92b30f22355afcbb2dcd16266be6a6ca18e4c12607033844cb9328925f9af947->leave($__internal_92b30f22355afcbb2dcd16266be6a6ca18e4c12607033844cb9328925f9af947_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_11cb4b71ca1e1e16fb78f2fe84213a548f86b545e3fb8bd6d1b7ce1260d48502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cb4b71ca1e1e16fb78f2fe84213a548f86b545e3fb8bd6d1b7ce1260d48502->enter($__internal_11cb4b71ca1e1e16fb78f2fe84213a548f86b545e3fb8bd6d1b7ce1260d48502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_11cb4b71ca1e1e16fb78f2fe84213a548f86b545e3fb8bd6d1b7ce1260d48502->leave($__internal_11cb4b71ca1e1e16fb78f2fe84213a548f86b545e3fb8bd6d1b7ce1260d48502_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
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
