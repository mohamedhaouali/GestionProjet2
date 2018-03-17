<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4a6f124ae6d47678f5380583e1998959ec8a6d3f21a82a83adffe9169e99cf37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a195547d8cedd96504e05e20c68e674ea1d697e6d9e3cf955357f0c1122b1e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a195547d8cedd96504e05e20c68e674ea1d697e6d9e3cf955357f0c1122b1e41->enter($__internal_a195547d8cedd96504e05e20c68e674ea1d697e6d9e3cf955357f0c1122b1e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a195547d8cedd96504e05e20c68e674ea1d697e6d9e3cf955357f0c1122b1e41->leave($__internal_a195547d8cedd96504e05e20c68e674ea1d697e6d9e3cf955357f0c1122b1e41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78ac6e98c3aeb3ffd0c861499adbbb3a2a3b775143e64b5dc39b3e73a38823ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ac6e98c3aeb3ffd0c861499adbbb3a2a3b775143e64b5dc39b3e73a38823ff->enter($__internal_78ac6e98c3aeb3ffd0c861499adbbb3a2a3b775143e64b5dc39b3e73a38823ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_78ac6e98c3aeb3ffd0c861499adbbb3a2a3b775143e64b5dc39b3e73a38823ff->leave($__internal_78ac6e98c3aeb3ffd0c861499adbbb3a2a3b775143e64b5dc39b3e73a38823ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_37de69da32f0ca4ae6cba1fccb20f8ca6d6367f3f1f4ff314a36b3427d49406b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37de69da32f0ca4ae6cba1fccb20f8ca6d6367f3f1f4ff314a36b3427d49406b->enter($__internal_37de69da32f0ca4ae6cba1fccb20f8ca6d6367f3f1f4ff314a36b3427d49406b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_37de69da32f0ca4ae6cba1fccb20f8ca6d6367f3f1f4ff314a36b3427d49406b->leave($__internal_37de69da32f0ca4ae6cba1fccb20f8ca6d6367f3f1f4ff314a36b3427d49406b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c48f95f0087b07d9628729522c96818abf11b2ea78b24ce01013d5f0d1aa8ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48f95f0087b07d9628729522c96818abf11b2ea78b24ce01013d5f0d1aa8ab6->enter($__internal_c48f95f0087b07d9628729522c96818abf11b2ea78b24ce01013d5f0d1aa8ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c48f95f0087b07d9628729522c96818abf11b2ea78b24ce01013d5f0d1aa8ab6->leave($__internal_c48f95f0087b07d9628729522c96818abf11b2ea78b24ce01013d5f0d1aa8ab6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
