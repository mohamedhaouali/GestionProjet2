<?php

/* UserBundle:Group:list.html.twig */
class __TwigTemplate_e4f2e4589ca33adf9915002065ebeff4156c6eac4eff0a3fa35ed6afb9f9f724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Group:list.html.twig", 1);
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
        $__internal_29cd53a395c8abcff58c293e9f5d3d02766c3db271d0219c965512f26fdd4ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cd53a395c8abcff58c293e9f5d3d02766c3db271d0219c965512f26fdd4ab1->enter($__internal_29cd53a395c8abcff58c293e9f5d3d02766c3db271d0219c965512f26fdd4ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29cd53a395c8abcff58c293e9f5d3d02766c3db271d0219c965512f26fdd4ab1->leave($__internal_29cd53a395c8abcff58c293e9f5d3d02766c3db271d0219c965512f26fdd4ab1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22c7997cfa902c6b720c182f6c0953b2f3fd6418a4759a7646c1ac7f387e8dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c7997cfa902c6b720c182f6c0953b2f3fd6418a4759a7646c1ac7f387e8dbc->enter($__internal_22c7997cfa902c6b720c182f6c0953b2f3fd6418a4759a7646c1ac7f387e8dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "UserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_22c7997cfa902c6b720c182f6c0953b2f3fd6418a4759a7646c1ac7f387e8dbc->leave($__internal_22c7997cfa902c6b720c182f6c0953b2f3fd6418a4759a7646c1ac7f387e8dbc_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
