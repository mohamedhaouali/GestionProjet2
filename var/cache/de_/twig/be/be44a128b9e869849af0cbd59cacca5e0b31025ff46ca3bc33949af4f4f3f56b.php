<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_0b61716449419127e0026c874dc3e9bf68dc29526abd78fc1d38f826ffc7db80 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95c3e1414b16e7f0d2a7b2411c9e2feefb4d4a98f017f656942da5329f336455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c3e1414b16e7f0d2a7b2411c9e2feefb4d4a98f017f656942da5329f336455->enter($__internal_95c3e1414b16e7f0d2a7b2411c9e2feefb4d4a98f017f656942da5329f336455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95c3e1414b16e7f0d2a7b2411c9e2feefb4d4a98f017f656942da5329f336455->leave($__internal_95c3e1414b16e7f0d2a7b2411c9e2feefb4d4a98f017f656942da5329f336455_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e085dbc9126d429c3f7a1d30a82cab06888f9cb954f4811ee30ca03d67011227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e085dbc9126d429c3f7a1d30a82cab06888f9cb954f4811ee30ca03d67011227->enter($__internal_e085dbc9126d429c3f7a1d30a82cab06888f9cb954f4811ee30ca03d67011227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e085dbc9126d429c3f7a1d30a82cab06888f9cb954f4811ee30ca03d67011227->leave($__internal_e085dbc9126d429c3f7a1d30a82cab06888f9cb954f4811ee30ca03d67011227_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
