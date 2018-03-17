<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_dff8181a57952a9e919e61a233f04cc3d64e0c93ebcda1c85f675b7cf996ad62 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af9dbffad39dddfd57e7703dcd41087dba821592e0b6bf4d6db39369a5978084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af9dbffad39dddfd57e7703dcd41087dba821592e0b6bf4d6db39369a5978084->enter($__internal_af9dbffad39dddfd57e7703dcd41087dba821592e0b6bf4d6db39369a5978084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af9dbffad39dddfd57e7703dcd41087dba821592e0b6bf4d6db39369a5978084->leave($__internal_af9dbffad39dddfd57e7703dcd41087dba821592e0b6bf4d6db39369a5978084_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_249f89f41ff7ef4a09a35133d66e1f404dfbdf5957aea2bb51c3899ebf7129b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249f89f41ff7ef4a09a35133d66e1f404dfbdf5957aea2bb51c3899ebf7129b5->enter($__internal_249f89f41ff7ef4a09a35133d66e1f404dfbdf5957aea2bb51c3899ebf7129b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_249f89f41ff7ef4a09a35133d66e1f404dfbdf5957aea2bb51c3899ebf7129b5->leave($__internal_249f89f41ff7ef4a09a35133d66e1f404dfbdf5957aea2bb51c3899ebf7129b5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
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
