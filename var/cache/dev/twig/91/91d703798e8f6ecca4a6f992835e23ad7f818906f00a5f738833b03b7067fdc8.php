<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1200121bb7133871472ff8a7b37960b5f1123fc4f1702fa3ac3b85f860957d25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_1617499f8e15f3423de549d57f0539de97ae9de3373db8591f6197b38771e308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1617499f8e15f3423de549d57f0539de97ae9de3373db8591f6197b38771e308->enter($__internal_1617499f8e15f3423de549d57f0539de97ae9de3373db8591f6197b38771e308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1617499f8e15f3423de549d57f0539de97ae9de3373db8591f6197b38771e308->leave($__internal_1617499f8e15f3423de549d57f0539de97ae9de3373db8591f6197b38771e308_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7edd802f80e8c7109965cbae9634b52c01a75c5f406df1547e07e126f984cca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edd802f80e8c7109965cbae9634b52c01a75c5f406df1547e07e126f984cca5->enter($__internal_7edd802f80e8c7109965cbae9634b52c01a75c5f406df1547e07e126f984cca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_7edd802f80e8c7109965cbae9634b52c01a75c5f406df1547e07e126f984cca5->leave($__internal_7edd802f80e8c7109965cbae9634b52c01a75c5f406df1547e07e126f984cca5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
