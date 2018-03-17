<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_2379dbfed81c22e3150609a1a0c6db764be5d59e4d10b2ce33f2d181c548cf81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e34033e9f93e5bb210df1b494a9f7b0a7f6480180c6d7af341addcad13cc590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e34033e9f93e5bb210df1b494a9f7b0a7f6480180c6d7af341addcad13cc590->enter($__internal_9e34033e9f93e5bb210df1b494a9f7b0a7f6480180c6d7af341addcad13cc590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_9e34033e9f93e5bb210df1b494a9f7b0a7f6480180c6d7af341addcad13cc590->leave($__internal_9e34033e9f93e5bb210df1b494a9f7b0a7f6480180c6d7af341addcad13cc590_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_790e63176d756bf1bad7bf8c7345425217a818ef7c6dec31f83bd46af3e9d701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790e63176d756bf1bad7bf8c7345425217a818ef7c6dec31f83bd46af3e9d701->enter($__internal_790e63176d756bf1bad7bf8c7345425217a818ef7c6dec31f83bd46af3e9d701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_790e63176d756bf1bad7bf8c7345425217a818ef7c6dec31f83bd46af3e9d701->leave($__internal_790e63176d756bf1bad7bf8c7345425217a818ef7c6dec31f83bd46af3e9d701_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_c8809078135c241a25f5ef6d6d148993d0a0bba8d53b30263d9aac8895f06d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8809078135c241a25f5ef6d6d148993d0a0bba8d53b30263d9aac8895f06d2d->enter($__internal_c8809078135c241a25f5ef6d6d148993d0a0bba8d53b30263d9aac8895f06d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_c8809078135c241a25f5ef6d6d148993d0a0bba8d53b30263d9aac8895f06d2d->leave($__internal_c8809078135c241a25f5ef6d6d148993d0a0bba8d53b30263d9aac8895f06d2d_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_b424575830a569a040226c5dce22187348584af39ecdbb12efffb3a1c852123b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b424575830a569a040226c5dce22187348584af39ecdbb12efffb3a1c852123b->enter($__internal_b424575830a569a040226c5dce22187348584af39ecdbb12efffb3a1c852123b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_b424575830a569a040226c5dce22187348584af39ecdbb12efffb3a1c852123b->leave($__internal_b424575830a569a040226c5dce22187348584af39ecdbb12efffb3a1c852123b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
";
    }
}
