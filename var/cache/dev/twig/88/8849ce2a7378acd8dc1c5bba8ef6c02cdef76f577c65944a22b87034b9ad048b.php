<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4f54c558ea38497fc29e95352b52de1a9e3c725b5d18c43250b7d88d7f4494d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f192764ac4a6a3da1cb862b4af8384bc56a1e4a655f043aecaa6d48948a1ce2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f192764ac4a6a3da1cb862b4af8384bc56a1e4a655f043aecaa6d48948a1ce2a->enter($__internal_f192764ac4a6a3da1cb862b4af8384bc56a1e4a655f043aecaa6d48948a1ce2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f192764ac4a6a3da1cb862b4af8384bc56a1e4a655f043aecaa6d48948a1ce2a->leave($__internal_f192764ac4a6a3da1cb862b4af8384bc56a1e4a655f043aecaa6d48948a1ce2a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e8a7186fd4b771833be5c076f9c114e952bfdf99dbe8dba879cd77cbe295ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8a7186fd4b771833be5c076f9c114e952bfdf99dbe8dba879cd77cbe295ec5->enter($__internal_1e8a7186fd4b771833be5c076f9c114e952bfdf99dbe8dba879cd77cbe295ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e8a7186fd4b771833be5c076f9c114e952bfdf99dbe8dba879cd77cbe295ec5->leave($__internal_1e8a7186fd4b771833be5c076f9c114e952bfdf99dbe8dba879cd77cbe295ec5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96c8f3e5dd221aa6d62e898a9f40b2b9d5be404685b7587a7c5d587bcb000002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c8f3e5dd221aa6d62e898a9f40b2b9d5be404685b7587a7c5d587bcb000002->enter($__internal_96c8f3e5dd221aa6d62e898a9f40b2b9d5be404685b7587a7c5d587bcb000002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96c8f3e5dd221aa6d62e898a9f40b2b9d5be404685b7587a7c5d587bcb000002->leave($__internal_96c8f3e5dd221aa6d62e898a9f40b2b9d5be404685b7587a7c5d587bcb000002_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89daa379f5008af9ea844a58d7d634cef8747ee9ed858db1deb8f4d22f381238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89daa379f5008af9ea844a58d7d634cef8747ee9ed858db1deb8f4d22f381238->enter($__internal_89daa379f5008af9ea844a58d7d634cef8747ee9ed858db1deb8f4d22f381238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89daa379f5008af9ea844a58d7d634cef8747ee9ed858db1deb8f4d22f381238->leave($__internal_89daa379f5008af9ea844a58d7d634cef8747ee9ed858db1deb8f4d22f381238_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
