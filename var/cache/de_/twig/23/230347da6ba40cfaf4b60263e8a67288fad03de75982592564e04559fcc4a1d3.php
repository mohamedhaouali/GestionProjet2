<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_3b27e6d8b246ba27360a0c489e3e99bb6b8ce9bd4b73323adfd12f43b8d47945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1094d4bf7f0b912421407afb405174eabb08bb92e42cea67ec5e655704af4bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1094d4bf7f0b912421407afb405174eabb08bb92e42cea67ec5e655704af4bd7->enter($__internal_1094d4bf7f0b912421407afb405174eabb08bb92e42cea67ec5e655704af4bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1094d4bf7f0b912421407afb405174eabb08bb92e42cea67ec5e655704af4bd7->leave($__internal_1094d4bf7f0b912421407afb405174eabb08bb92e42cea67ec5e655704af4bd7_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_c95ff434cf9f7e4dcf24003a5ebb882ef7fccd8bd868d29074a65c5d07baa30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95ff434cf9f7e4dcf24003a5ebb882ef7fccd8bd868d29074a65c5d07baa30e->enter($__internal_c95ff434cf9f7e4dcf24003a5ebb882ef7fccd8bd868d29074a65c5d07baa30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_c95ff434cf9f7e4dcf24003a5ebb882ef7fccd8bd868d29074a65c5d07baa30e->leave($__internal_c95ff434cf9f7e4dcf24003a5ebb882ef7fccd8bd868d29074a65c5d07baa30e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
";
    }
}
