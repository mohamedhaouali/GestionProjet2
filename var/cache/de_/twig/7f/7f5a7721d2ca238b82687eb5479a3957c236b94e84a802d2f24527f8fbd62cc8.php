<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_aa7948840fa426a262ff3cea89187f7aa9c3d47ffefd9146c2c5ef3def5a1be3 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c93ba62f270f6ed18a25fd089c27175de78bd08d8191f069bf9d2b3624c7112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c93ba62f270f6ed18a25fd089c27175de78bd08d8191f069bf9d2b3624c7112->enter($__internal_7c93ba62f270f6ed18a25fd089c27175de78bd08d8191f069bf9d2b3624c7112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c93ba62f270f6ed18a25fd089c27175de78bd08d8191f069bf9d2b3624c7112->leave($__internal_7c93ba62f270f6ed18a25fd089c27175de78bd08d8191f069bf9d2b3624c7112_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_51d4c976d29e811ce90440e79daa1c41bd3aa8bf9bbdf423115e6790c5d67e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d4c976d29e811ce90440e79daa1c41bd3aa8bf9bbdf423115e6790c5d67e8a->enter($__internal_51d4c976d29e811ce90440e79daa1c41bd3aa8bf9bbdf423115e6790c5d67e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_51d4c976d29e811ce90440e79daa1c41bd3aa8bf9bbdf423115e6790c5d67e8a->leave($__internal_51d4c976d29e811ce90440e79daa1c41bd3aa8bf9bbdf423115e6790c5d67e8a_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_9622abd9f994b7f4037afbe26953309dc5cb70b6c44ed26ad6b083e6fdde64ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9622abd9f994b7f4037afbe26953309dc5cb70b6c44ed26ad6b083e6fdde64ed->enter($__internal_9622abd9f994b7f4037afbe26953309dc5cb70b6c44ed26ad6b083e6fdde64ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_9622abd9f994b7f4037afbe26953309dc5cb70b6c44ed26ad6b083e6fdde64ed->leave($__internal_9622abd9f994b7f4037afbe26953309dc5cb70b6c44ed26ad6b083e6fdde64ed_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_3b679a60bc79f07e6c23dc64c441aebdb14c7d891214277a2ed741b03ce8c948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b679a60bc79f07e6c23dc64c441aebdb14c7d891214277a2ed741b03ce8c948->enter($__internal_3b679a60bc79f07e6c23dc64c441aebdb14c7d891214277a2ed741b03ce8c948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_3b679a60bc79f07e6c23dc64c441aebdb14c7d891214277a2ed741b03ce8c948->leave($__internal_3b679a60bc79f07e6c23dc64c441aebdb14c7d891214277a2ed741b03ce8c948_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_20b6520b7a7f72c4b7f0920ee400bde8989f3a1c0c4d5395a8e5f1adffdd7438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b6520b7a7f72c4b7f0920ee400bde8989f3a1c0c4d5395a8e5f1adffdd7438->enter($__internal_20b6520b7a7f72c4b7f0920ee400bde8989f3a1c0c4d5395a8e5f1adffdd7438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_20b6520b7a7f72c4b7f0920ee400bde8989f3a1c0c4d5395a8e5f1adffdd7438->leave($__internal_20b6520b7a7f72c4b7f0920ee400bde8989f3a1c0c4d5395a8e5f1adffdd7438_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
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
