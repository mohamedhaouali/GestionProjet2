<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_c7455e0906ab440fa7c2d4e68b3089724a211f1214c59dc14d69e2c097cacf2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f65c754dc93cdc3ca6b9dca047bec7624847d678e55dd98d42a00d14451b1744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65c754dc93cdc3ca6b9dca047bec7624847d678e55dd98d42a00d14451b1744->enter($__internal_f65c754dc93cdc3ca6b9dca047bec7624847d678e55dd98d42a00d14451b1744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65c754dc93cdc3ca6b9dca047bec7624847d678e55dd98d42a00d14451b1744->leave($__internal_f65c754dc93cdc3ca6b9dca047bec7624847d678e55dd98d42a00d14451b1744_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_cd241dbfbd9563030205e6d9cd296a8fcf45c913db4d77d8544f37428033043a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd241dbfbd9563030205e6d9cd296a8fcf45c913db4d77d8544f37428033043a->enter($__internal_cd241dbfbd9563030205e6d9cd296a8fcf45c913db4d77d8544f37428033043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_cd241dbfbd9563030205e6d9cd296a8fcf45c913db4d77d8544f37428033043a->leave($__internal_cd241dbfbd9563030205e6d9cd296a8fcf45c913db4d77d8544f37428033043a_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0687407061fde48a3a8d4022d7bced7a0d6fcb1f7a5735c7d9ae312bd24a59ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0687407061fde48a3a8d4022d7bced7a0d6fcb1f7a5735c7d9ae312bd24a59ff->enter($__internal_0687407061fde48a3a8d4022d7bced7a0d6fcb1f7a5735c7d9ae312bd24a59ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_0687407061fde48a3a8d4022d7bced7a0d6fcb1f7a5735c7d9ae312bd24a59ff->leave($__internal_0687407061fde48a3a8d4022d7bced7a0d6fcb1f7a5735c7d9ae312bd24a59ff_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2baad440153b5f2351b409e556891e561691b0ce3cb7dc8a9a524bb16f9c606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2baad440153b5f2351b409e556891e561691b0ce3cb7dc8a9a524bb16f9c606->enter($__internal_b2baad440153b5f2351b409e556891e561691b0ce3cb7dc8a9a524bb16f9c606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_b2baad440153b5f2351b409e556891e561691b0ce3cb7dc8a9a524bb16f9c606->leave($__internal_b2baad440153b5f2351b409e556891e561691b0ce3cb7dc8a9a524bb16f9c606_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
";
    }
}
