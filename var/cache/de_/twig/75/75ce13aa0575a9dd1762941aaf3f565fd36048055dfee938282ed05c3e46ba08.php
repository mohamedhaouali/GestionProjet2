<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_eba4165e725426cdf7414afe00157de2b7bbf4c81bd769be8696658dd25dd963 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43e58af8049d8b0394b1653fb40bf3d1a9288b424657244b4363827e2d60d2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e58af8049d8b0394b1653fb40bf3d1a9288b424657244b4363827e2d60d2b8->enter($__internal_43e58af8049d8b0394b1653fb40bf3d1a9288b424657244b4363827e2d60d2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43e58af8049d8b0394b1653fb40bf3d1a9288b424657244b4363827e2d60d2b8->leave($__internal_43e58af8049d8b0394b1653fb40bf3d1a9288b424657244b4363827e2d60d2b8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f036221fdfcb0fb4409d1cca030e96847d03e90688579dc7027945192b2c5807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f036221fdfcb0fb4409d1cca030e96847d03e90688579dc7027945192b2c5807->enter($__internal_f036221fdfcb0fb4409d1cca030e96847d03e90688579dc7027945192b2c5807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f036221fdfcb0fb4409d1cca030e96847d03e90688579dc7027945192b2c5807->leave($__internal_f036221fdfcb0fb4409d1cca030e96847d03e90688579dc7027945192b2c5807_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
