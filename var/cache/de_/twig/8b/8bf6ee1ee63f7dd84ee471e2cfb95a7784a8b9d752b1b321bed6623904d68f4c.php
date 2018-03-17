<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_66bce37f4ea669e2cfd183045bf8aa85437af4771f2177caaad194e0065be055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
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
        $__internal_e261d926ac33d0c9100c9f4879a417a178d099aadf090d937f42ed672a56c3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e261d926ac33d0c9100c9f4879a417a178d099aadf090d937f42ed672a56c3dc->enter($__internal_e261d926ac33d0c9100c9f4879a417a178d099aadf090d937f42ed672a56c3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e261d926ac33d0c9100c9f4879a417a178d099aadf090d937f42ed672a56c3dc->leave($__internal_e261d926ac33d0c9100c9f4879a417a178d099aadf090d937f42ed672a56c3dc_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_8549ec2f8cd9306c190730ca705e24f52bc16554d89fc42b5941fa2375a6e47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8549ec2f8cd9306c190730ca705e24f52bc16554d89fc42b5941fa2375a6e47c->enter($__internal_8549ec2f8cd9306c190730ca705e24f52bc16554d89fc42b5941fa2375a6e47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_8549ec2f8cd9306c190730ca705e24f52bc16554d89fc42b5941fa2375a6e47c->leave($__internal_8549ec2f8cd9306c190730ca705e24f52bc16554d89fc42b5941fa2375a6e47c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
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
