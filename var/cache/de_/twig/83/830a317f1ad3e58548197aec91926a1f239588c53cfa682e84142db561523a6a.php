<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_57ca79c06c5a8b7447faeb66495237f90447fb1c568b813dd029ce4b27942a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c18f0af13ac7837cb40410da6b30b555f86e9d6846d1669b18d2844ac8b003b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18f0af13ac7837cb40410da6b30b555f86e9d6846d1669b18d2844ac8b003b7->enter($__internal_c18f0af13ac7837cb40410da6b30b555f86e9d6846d1669b18d2844ac8b003b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18f0af13ac7837cb40410da6b30b555f86e9d6846d1669b18d2844ac8b003b7->leave($__internal_c18f0af13ac7837cb40410da6b30b555f86e9d6846d1669b18d2844ac8b003b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab99a3660a1bc66c3468e02ea24cc5205c93eeafdcde998e9e08ddebe2f82394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab99a3660a1bc66c3468e02ea24cc5205c93eeafdcde998e9e08ddebe2f82394->enter($__internal_ab99a3660a1bc66c3468e02ea24cc5205c93eeafdcde998e9e08ddebe2f82394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ab99a3660a1bc66c3468e02ea24cc5205c93eeafdcde998e9e08ddebe2f82394->leave($__internal_ab99a3660a1bc66c3468e02ea24cc5205c93eeafdcde998e9e08ddebe2f82394_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77d8eb43fc0e1724812a20b2d913d2ba1e7ecc3537863004be55fab21cc5cd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d8eb43fc0e1724812a20b2d913d2ba1e7ecc3537863004be55fab21cc5cd75->enter($__internal_77d8eb43fc0e1724812a20b2d913d2ba1e7ecc3537863004be55fab21cc5cd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_77d8eb43fc0e1724812a20b2d913d2ba1e7ecc3537863004be55fab21cc5cd75->leave($__internal_77d8eb43fc0e1724812a20b2d913d2ba1e7ecc3537863004be55fab21cc5cd75_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9ef5380db63bf3974e44eb1b65397df419a69cd66bba4aad732589a3494dfb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ef5380db63bf3974e44eb1b65397df419a69cd66bba4aad732589a3494dfb2->enter($__internal_a9ef5380db63bf3974e44eb1b65397df419a69cd66bba4aad732589a3494dfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a9ef5380db63bf3974e44eb1b65397df419a69cd66bba4aad732589a3494dfb2->leave($__internal_a9ef5380db63bf3974e44eb1b65397df419a69cd66bba4aad732589a3494dfb2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
