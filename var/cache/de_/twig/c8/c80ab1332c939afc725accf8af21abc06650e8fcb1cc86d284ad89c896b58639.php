<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_a9b2eec338618e063e3f459e8eee8310236fcbb03febcc690da5b688c125779c extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e7a8856795e909c2e37b98ad39ab28e4a1e8994fd39a49cd07a7641eea03996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7a8856795e909c2e37b98ad39ab28e4a1e8994fd39a49cd07a7641eea03996->enter($__internal_8e7a8856795e909c2e37b98ad39ab28e4a1e8994fd39a49cd07a7641eea03996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e7a8856795e909c2e37b98ad39ab28e4a1e8994fd39a49cd07a7641eea03996->leave($__internal_8e7a8856795e909c2e37b98ad39ab28e4a1e8994fd39a49cd07a7641eea03996_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2afaf69805e65b2894ec7dd0149c35d1828893928e74d8578b04dbb8236052fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afaf69805e65b2894ec7dd0149c35d1828893928e74d8578b04dbb8236052fc->enter($__internal_2afaf69805e65b2894ec7dd0149c35d1828893928e74d8578b04dbb8236052fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_2afaf69805e65b2894ec7dd0149c35d1828893928e74d8578b04dbb8236052fc->leave($__internal_2afaf69805e65b2894ec7dd0149c35d1828893928e74d8578b04dbb8236052fc_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
