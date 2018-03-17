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
        $__internal_28e43363afaaf8c9b794b389afc402a1792e35bffc4fc35d6bdb065d08768f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e43363afaaf8c9b794b389afc402a1792e35bffc4fc35d6bdb065d08768f62->enter($__internal_28e43363afaaf8c9b794b389afc402a1792e35bffc4fc35d6bdb065d08768f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e43363afaaf8c9b794b389afc402a1792e35bffc4fc35d6bdb065d08768f62->leave($__internal_28e43363afaaf8c9b794b389afc402a1792e35bffc4fc35d6bdb065d08768f62_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7654a0a2e5e60fa7f1382c9b31261f0da09da85dfae6f1c36f1b2476099de6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7654a0a2e5e60fa7f1382c9b31261f0da09da85dfae6f1c36f1b2476099de6be->enter($__internal_7654a0a2e5e60fa7f1382c9b31261f0da09da85dfae6f1c36f1b2476099de6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7654a0a2e5e60fa7f1382c9b31261f0da09da85dfae6f1c36f1b2476099de6be->leave($__internal_7654a0a2e5e60fa7f1382c9b31261f0da09da85dfae6f1c36f1b2476099de6be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7256ba5a30ba53a4ac191d10bcf02ebedaa7dfaff85f53fe031835e1c716ec17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7256ba5a30ba53a4ac191d10bcf02ebedaa7dfaff85f53fe031835e1c716ec17->enter($__internal_7256ba5a30ba53a4ac191d10bcf02ebedaa7dfaff85f53fe031835e1c716ec17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7256ba5a30ba53a4ac191d10bcf02ebedaa7dfaff85f53fe031835e1c716ec17->leave($__internal_7256ba5a30ba53a4ac191d10bcf02ebedaa7dfaff85f53fe031835e1c716ec17_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_461b5cf1c7027cdcae4451bb8513ceda2fad0bdff951da65758a6858b004999d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461b5cf1c7027cdcae4451bb8513ceda2fad0bdff951da65758a6858b004999d->enter($__internal_461b5cf1c7027cdcae4451bb8513ceda2fad0bdff951da65758a6858b004999d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_461b5cf1c7027cdcae4451bb8513ceda2fad0bdff951da65758a6858b004999d->leave($__internal_461b5cf1c7027cdcae4451bb8513ceda2fad0bdff951da65758a6858b004999d_prof);

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
