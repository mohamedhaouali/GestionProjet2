<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_d06eb4ad9ab073337bc0b9bdc8e9c0255c2738cec1b235e892923ab8b0830eca extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acb6d732591d7b5fdc0d8dbf8e6177b1e1defe3ab262ccf0187cbaef827de04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb6d732591d7b5fdc0d8dbf8e6177b1e1defe3ab262ccf0187cbaef827de04e->enter($__internal_acb6d732591d7b5fdc0d8dbf8e6177b1e1defe3ab262ccf0187cbaef827de04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acb6d732591d7b5fdc0d8dbf8e6177b1e1defe3ab262ccf0187cbaef827de04e->leave($__internal_acb6d732591d7b5fdc0d8dbf8e6177b1e1defe3ab262ccf0187cbaef827de04e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_82fb3eac440efeeedb6fbc35f762d3fa5c54531792336d383e6eeb4d31996593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82fb3eac440efeeedb6fbc35f762d3fa5c54531792336d383e6eeb4d31996593->enter($__internal_82fb3eac440efeeedb6fbc35f762d3fa5c54531792336d383e6eeb4d31996593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_82fb3eac440efeeedb6fbc35f762d3fa5c54531792336d383e6eeb4d31996593->leave($__internal_82fb3eac440efeeedb6fbc35f762d3fa5c54531792336d383e6eeb4d31996593_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
