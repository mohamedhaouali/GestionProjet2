<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ada3199345ee8cfae84783414cf7f07d5f66e0242f8a26c27b45b8dfd1c35cc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7c549ec09a302791392b992b60ddc765b3bc90ff8b9bf5117ba0fd21dd292a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c549ec09a302791392b992b60ddc765b3bc90ff8b9bf5117ba0fd21dd292a54->enter($__internal_7c549ec09a302791392b992b60ddc765b3bc90ff8b9bf5117ba0fd21dd292a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c549ec09a302791392b992b60ddc765b3bc90ff8b9bf5117ba0fd21dd292a54->leave($__internal_7c549ec09a302791392b992b60ddc765b3bc90ff8b9bf5117ba0fd21dd292a54_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f48cf0963d759829ac899342d67738c1b7335de71f11f68838a75670a457d01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f48cf0963d759829ac899342d67738c1b7335de71f11f68838a75670a457d01->enter($__internal_1f48cf0963d759829ac899342d67738c1b7335de71f11f68838a75670a457d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f48cf0963d759829ac899342d67738c1b7335de71f11f68838a75670a457d01->leave($__internal_1f48cf0963d759829ac899342d67738c1b7335de71f11f68838a75670a457d01_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_98570c31689799a969626d1cb0d771f5513f48552ac5956e4183557a1aa784df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98570c31689799a969626d1cb0d771f5513f48552ac5956e4183557a1aa784df->enter($__internal_98570c31689799a969626d1cb0d771f5513f48552ac5956e4183557a1aa784df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98570c31689799a969626d1cb0d771f5513f48552ac5956e4183557a1aa784df->leave($__internal_98570c31689799a969626d1cb0d771f5513f48552ac5956e4183557a1aa784df_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cebd757f62e4e57102fa615d7afce8f40f27fff09c6e87e7ad2fe520d0b3b72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebd757f62e4e57102fa615d7afce8f40f27fff09c6e87e7ad2fe520d0b3b72d->enter($__internal_cebd757f62e4e57102fa615d7afce8f40f27fff09c6e87e7ad2fe520d0b3b72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cebd757f62e4e57102fa615d7afce8f40f27fff09c6e87e7ad2fe520d0b3b72d->leave($__internal_cebd757f62e4e57102fa615d7afce8f40f27fff09c6e87e7ad2fe520d0b3b72d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
