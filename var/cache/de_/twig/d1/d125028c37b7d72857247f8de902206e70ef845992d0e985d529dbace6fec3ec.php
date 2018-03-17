<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_845904f9755585e5de2bc3b1a7e5a352be08523d0458ee31c108ecc5a9dd9d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a518abc9474eb706450ae3b03d8525e892c229962f4d875db03228dda0233ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a518abc9474eb706450ae3b03d8525e892c229962f4d875db03228dda0233ee9->enter($__internal_a518abc9474eb706450ae3b03d8525e892c229962f4d875db03228dda0233ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a518abc9474eb706450ae3b03d8525e892c229962f4d875db03228dda0233ee9->leave($__internal_a518abc9474eb706450ae3b03d8525e892c229962f4d875db03228dda0233ee9_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_dc1e76b5a6a81bf79df84f3c48f192434d2689cdf10d68d2823a03e51b47d280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1e76b5a6a81bf79df84f3c48f192434d2689cdf10d68d2823a03e51b47d280->enter($__internal_dc1e76b5a6a81bf79df84f3c48f192434d2689cdf10d68d2823a03e51b47d280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_dc1e76b5a6a81bf79df84f3c48f192434d2689cdf10d68d2823a03e51b47d280->leave($__internal_dc1e76b5a6a81bf79df84f3c48f192434d2689cdf10d68d2823a03e51b47d280_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_95e233669942bcf3194fc8dcc8e494f8d3396625a46010c7ad63c02fab397c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e233669942bcf3194fc8dcc8e494f8d3396625a46010c7ad63c02fab397c3c->enter($__internal_95e233669942bcf3194fc8dcc8e494f8d3396625a46010c7ad63c02fab397c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_95e233669942bcf3194fc8dcc8e494f8d3396625a46010c7ad63c02fab397c3c->leave($__internal_95e233669942bcf3194fc8dcc8e494f8d3396625a46010c7ad63c02fab397c3c_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_0223cac690850f7472487c320dbc891f559d9e0af2ca7de09da51b61eb26bdce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0223cac690850f7472487c320dbc891f559d9e0af2ca7de09da51b61eb26bdce->enter($__internal_0223cac690850f7472487c320dbc891f559d9e0af2ca7de09da51b61eb26bdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_0223cac690850f7472487c320dbc891f559d9e0af2ca7de09da51b61eb26bdce->leave($__internal_0223cac690850f7472487c320dbc891f559d9e0af2ca7de09da51b61eb26bdce_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_634859c85eafb9e375c02d192869ede955928394b8c2ffdef888003feed8ddec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634859c85eafb9e375c02d192869ede955928394b8c2ffdef888003feed8ddec->enter($__internal_634859c85eafb9e375c02d192869ede955928394b8c2ffdef888003feed8ddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_634859c85eafb9e375c02d192869ede955928394b8c2ffdef888003feed8ddec->leave($__internal_634859c85eafb9e375c02d192869ede955928394b8c2ffdef888003feed8ddec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
";
    }
}
