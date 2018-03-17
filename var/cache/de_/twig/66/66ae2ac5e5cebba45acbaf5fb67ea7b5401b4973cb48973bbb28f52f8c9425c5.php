<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_7ff8a062d3a415151e85e0c7ad5f47b9d27fa6b3d3962de53134645a9a8d3cc4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ca7fc3d092cf20c7fa97270016eba0150f0f0b11554e42d060f7fef6adebd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca7fc3d092cf20c7fa97270016eba0150f0f0b11554e42d060f7fef6adebd19->enter($__internal_2ca7fc3d092cf20c7fa97270016eba0150f0f0b11554e42d060f7fef6adebd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca7fc3d092cf20c7fa97270016eba0150f0f0b11554e42d060f7fef6adebd19->leave($__internal_2ca7fc3d092cf20c7fa97270016eba0150f0f0b11554e42d060f7fef6adebd19_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_050a63a27784de2c29f0985f0c4c35c0756dcc22a2b304709bb69c4614c31031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050a63a27784de2c29f0985f0c4c35c0756dcc22a2b304709bb69c4614c31031->enter($__internal_050a63a27784de2c29f0985f0c4c35c0756dcc22a2b304709bb69c4614c31031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_050a63a27784de2c29f0985f0c4c35c0756dcc22a2b304709bb69c4614c31031->leave($__internal_050a63a27784de2c29f0985f0c4c35c0756dcc22a2b304709bb69c4614c31031_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}
