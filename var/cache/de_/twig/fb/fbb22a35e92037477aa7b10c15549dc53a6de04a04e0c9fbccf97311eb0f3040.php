<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_108c0bc3f43dd3ed05ddfe990eb7a92ed20c1dd21e82cbe68aec33bdcf69e01d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_446613fba82cea42303e2b8e487ff98f6ea24dbbb4e4471d9470a7013dfa1bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446613fba82cea42303e2b8e487ff98f6ea24dbbb4e4471d9470a7013dfa1bc5->enter($__internal_446613fba82cea42303e2b8e487ff98f6ea24dbbb4e4471d9470a7013dfa1bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_446613fba82cea42303e2b8e487ff98f6ea24dbbb4e4471d9470a7013dfa1bc5->leave($__internal_446613fba82cea42303e2b8e487ff98f6ea24dbbb4e4471d9470a7013dfa1bc5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4a520ff828d43f1324c96ad8da4b85e78fa062548f54cdc4e3c195fe4ed5b951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a520ff828d43f1324c96ad8da4b85e78fa062548f54cdc4e3c195fe4ed5b951->enter($__internal_4a520ff828d43f1324c96ad8da4b85e78fa062548f54cdc4e3c195fe4ed5b951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4a520ff828d43f1324c96ad8da4b85e78fa062548f54cdc4e3c195fe4ed5b951->leave($__internal_4a520ff828d43f1324c96ad8da4b85e78fa062548f54cdc4e3c195fe4ed5b951_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
