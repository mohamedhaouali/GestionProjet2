<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_7eaad867533271a43ab2e5a51944f6127077ac2e91bfb0e6badccb4571fbf5ad extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfbfe82bb30d1f3e45f9e4bbc13f0a15740e2c652f36eae44bfa0be697703494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbfe82bb30d1f3e45f9e4bbc13f0a15740e2c652f36eae44bfa0be697703494->enter($__internal_cfbfe82bb30d1f3e45f9e4bbc13f0a15740e2c652f36eae44bfa0be697703494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbfe82bb30d1f3e45f9e4bbc13f0a15740e2c652f36eae44bfa0be697703494->leave($__internal_cfbfe82bb30d1f3e45f9e4bbc13f0a15740e2c652f36eae44bfa0be697703494_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f6465597436f33d08e2a3618ce115617a26dbdebf3ffb6de6092017d84c09881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6465597436f33d08e2a3618ce115617a26dbdebf3ffb6de6092017d84c09881->enter($__internal_f6465597436f33d08e2a3618ce115617a26dbdebf3ffb6de6092017d84c09881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_f6465597436f33d08e2a3618ce115617a26dbdebf3ffb6de6092017d84c09881->leave($__internal_f6465597436f33d08e2a3618ce115617a26dbdebf3ffb6de6092017d84c09881_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
