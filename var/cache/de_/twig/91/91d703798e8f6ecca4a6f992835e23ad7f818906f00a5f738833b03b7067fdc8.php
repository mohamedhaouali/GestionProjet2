<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_1200121bb7133871472ff8a7b37960b5f1123fc4f1702fa3ac3b85f860957d25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d84ed2795fb0a05097424f1882df3804d1f244723064b3302ba13e83bf14e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d84ed2795fb0a05097424f1882df3804d1f244723064b3302ba13e83bf14e63->enter($__internal_5d84ed2795fb0a05097424f1882df3804d1f244723064b3302ba13e83bf14e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d84ed2795fb0a05097424f1882df3804d1f244723064b3302ba13e83bf14e63->leave($__internal_5d84ed2795fb0a05097424f1882df3804d1f244723064b3302ba13e83bf14e63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b49b90c5d20a4a05420dcea4b4b4e2f6d3127cbc85ae2d47551dd2780118446e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49b90c5d20a4a05420dcea4b4b4e2f6d3127cbc85ae2d47551dd2780118446e->enter($__internal_b49b90c5d20a4a05420dcea4b4b4e2f6d3127cbc85ae2d47551dd2780118446e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_b49b90c5d20a4a05420dcea4b4b4e2f6d3127cbc85ae2d47551dd2780118446e->leave($__internal_b49b90c5d20a4a05420dcea4b4b4e2f6d3127cbc85ae2d47551dd2780118446e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
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
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
