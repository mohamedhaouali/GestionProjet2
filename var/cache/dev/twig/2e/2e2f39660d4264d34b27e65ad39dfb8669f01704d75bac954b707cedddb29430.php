<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5954def149e34133c2db5825c86cccfd480708bd695ed5f33aae71fa70b294fc extends Twig_Template
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
        $__internal_725ec977616548bda3eafab53c64f7bedbe6d97ebc0fe0c43c628e626fb7b522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725ec977616548bda3eafab53c64f7bedbe6d97ebc0fe0c43c628e626fb7b522->enter($__internal_725ec977616548bda3eafab53c64f7bedbe6d97ebc0fe0c43c628e626fb7b522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725ec977616548bda3eafab53c64f7bedbe6d97ebc0fe0c43c628e626fb7b522->leave($__internal_725ec977616548bda3eafab53c64f7bedbe6d97ebc0fe0c43c628e626fb7b522_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca4386a677c831403829b677933d443b850dd7c49ff872c82d6bf81666a39afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4386a677c831403829b677933d443b850dd7c49ff872c82d6bf81666a39afe->enter($__internal_ca4386a677c831403829b677933d443b850dd7c49ff872c82d6bf81666a39afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca4386a677c831403829b677933d443b850dd7c49ff872c82d6bf81666a39afe->leave($__internal_ca4386a677c831403829b677933d443b850dd7c49ff872c82d6bf81666a39afe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e19e7b306f3fd71a194be9dfd18d7efcce76b590bdb67b9f8e7bc298d2d45bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19e7b306f3fd71a194be9dfd18d7efcce76b590bdb67b9f8e7bc298d2d45bd1->enter($__internal_e19e7b306f3fd71a194be9dfd18d7efcce76b590bdb67b9f8e7bc298d2d45bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e19e7b306f3fd71a194be9dfd18d7efcce76b590bdb67b9f8e7bc298d2d45bd1->leave($__internal_e19e7b306f3fd71a194be9dfd18d7efcce76b590bdb67b9f8e7bc298d2d45bd1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10b12c86b25979fad8ab8b2398e0ad4593cacdec52405298b5a8a68a76ae8bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b12c86b25979fad8ab8b2398e0ad4593cacdec52405298b5a8a68a76ae8bbe->enter($__internal_10b12c86b25979fad8ab8b2398e0ad4593cacdec52405298b5a8a68a76ae8bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10b12c86b25979fad8ab8b2398e0ad4593cacdec52405298b5a8a68a76ae8bbe->leave($__internal_10b12c86b25979fad8ab8b2398e0ad4593cacdec52405298b5a8a68a76ae8bbe_prof);

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
