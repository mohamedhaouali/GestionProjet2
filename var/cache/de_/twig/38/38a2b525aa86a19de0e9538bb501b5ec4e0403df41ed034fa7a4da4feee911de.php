<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_5b35b078607e8de738c2c01137f98381f44db5cb5f2b59be19691689263c19b7 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b9f5be8e5d5d750b4b193a98f8e07b0e3c7afdb3902e43f0d012a0690247012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9f5be8e5d5d750b4b193a98f8e07b0e3c7afdb3902e43f0d012a0690247012->enter($__internal_4b9f5be8e5d5d750b4b193a98f8e07b0e3c7afdb3902e43f0d012a0690247012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b9f5be8e5d5d750b4b193a98f8e07b0e3c7afdb3902e43f0d012a0690247012->leave($__internal_4b9f5be8e5d5d750b4b193a98f8e07b0e3c7afdb3902e43f0d012a0690247012_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4c2c5641200a9583c0e4a191e467bb87a0d62311efbaf64c21620b291bdabb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2c5641200a9583c0e4a191e467bb87a0d62311efbaf64c21620b291bdabb61->enter($__internal_4c2c5641200a9583c0e4a191e467bb87a0d62311efbaf64c21620b291bdabb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_4c2c5641200a9583c0e4a191e467bb87a0d62311efbaf64c21620b291bdabb61->leave($__internal_4c2c5641200a9583c0e4a191e467bb87a0d62311efbaf64c21620b291bdabb61_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}
