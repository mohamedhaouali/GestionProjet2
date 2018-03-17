<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_91d962345016cf6b299839e6419614e5dba71d4c6eb92e77f156964584f9f439 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6bbef984f6d8c2f2c18680f7ae4111a802ca8de0695c517d9e48bbe2dd7754a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bbef984f6d8c2f2c18680f7ae4111a802ca8de0695c517d9e48bbe2dd7754a->enter($__internal_d6bbef984f6d8c2f2c18680f7ae4111a802ca8de0695c517d9e48bbe2dd7754a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6bbef984f6d8c2f2c18680f7ae4111a802ca8de0695c517d9e48bbe2dd7754a->leave($__internal_d6bbef984f6d8c2f2c18680f7ae4111a802ca8de0695c517d9e48bbe2dd7754a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8dc86ba0dcbe479c929bfceb90f5655fa42bb8887e79331874b9872443f5448b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc86ba0dcbe479c929bfceb90f5655fa42bb8887e79331874b9872443f5448b->enter($__internal_8dc86ba0dcbe479c929bfceb90f5655fa42bb8887e79331874b9872443f5448b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8dc86ba0dcbe479c929bfceb90f5655fa42bb8887e79331874b9872443f5448b->leave($__internal_8dc86ba0dcbe479c929bfceb90f5655fa42bb8887e79331874b9872443f5448b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
