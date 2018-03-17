<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_e83385837bca7d0406590ac2afb06060deceb74046f651a7ff06e3d34b499a9e extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3bbbce27bc028eeca824abe18c957bcd697102f586531332388701f71d27aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bbbce27bc028eeca824abe18c957bcd697102f586531332388701f71d27aa1->enter($__internal_b3bbbce27bc028eeca824abe18c957bcd697102f586531332388701f71d27aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3bbbce27bc028eeca824abe18c957bcd697102f586531332388701f71d27aa1->leave($__internal_b3bbbce27bc028eeca824abe18c957bcd697102f586531332388701f71d27aa1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_08d31feca964401d68736e012f87b46a0647cc1d0aedbfdc3b384d5941a167d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d31feca964401d68736e012f87b46a0647cc1d0aedbfdc3b384d5941a167d7->enter($__internal_08d31feca964401d68736e012f87b46a0647cc1d0aedbfdc3b384d5941a167d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_08d31feca964401d68736e012f87b46a0647cc1d0aedbfdc3b384d5941a167d7->leave($__internal_08d31feca964401d68736e012f87b46a0647cc1d0aedbfdc3b384d5941a167d7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
