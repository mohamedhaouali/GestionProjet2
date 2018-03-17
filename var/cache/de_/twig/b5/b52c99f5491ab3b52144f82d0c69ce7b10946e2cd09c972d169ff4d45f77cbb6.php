<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_50e01c07896c54d11be746bf8a24ebd186ab7aa58d41cad48ad007219ef3911e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_503f9dd7587d7799a6eb641ce756b652c067b153bf032bb1d3475d8b52a6c976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503f9dd7587d7799a6eb641ce756b652c067b153bf032bb1d3475d8b52a6c976->enter($__internal_503f9dd7587d7799a6eb641ce756b652c067b153bf032bb1d3475d8b52a6c976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_503f9dd7587d7799a6eb641ce756b652c067b153bf032bb1d3475d8b52a6c976->leave($__internal_503f9dd7587d7799a6eb641ce756b652c067b153bf032bb1d3475d8b52a6c976_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ce2ac87c6e92ceef0a39b473f95c1d5d09d4d66a9fa889e1237b318ee8886de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce2ac87c6e92ceef0a39b473f95c1d5d09d4d66a9fa889e1237b318ee8886de->enter($__internal_5ce2ac87c6e92ceef0a39b473f95c1d5d09d4d66a9fa889e1237b318ee8886de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5ce2ac87c6e92ceef0a39b473f95c1d5d09d4d66a9fa889e1237b318ee8886de->leave($__internal_5ce2ac87c6e92ceef0a39b473f95c1d5d09d4d66a9fa889e1237b318ee8886de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_119f2906df95251a5ce289b66d50fa650b805ed17d1a1bcf9dcdb9e04bad1d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119f2906df95251a5ce289b66d50fa650b805ed17d1a1bcf9dcdb9e04bad1d8f->enter($__internal_119f2906df95251a5ce289b66d50fa650b805ed17d1a1bcf9dcdb9e04bad1d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_119f2906df95251a5ce289b66d50fa650b805ed17d1a1bcf9dcdb9e04bad1d8f->leave($__internal_119f2906df95251a5ce289b66d50fa650b805ed17d1a1bcf9dcdb9e04bad1d8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a4f59db26d726c1f2c076567afc88366afc93969fb77252d71e7a1e5cbcb118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4f59db26d726c1f2c076567afc88366afc93969fb77252d71e7a1e5cbcb118->enter($__internal_9a4f59db26d726c1f2c076567afc88366afc93969fb77252d71e7a1e5cbcb118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9a4f59db26d726c1f2c076567afc88366afc93969fb77252d71e7a1e5cbcb118->leave($__internal_9a4f59db26d726c1f2c076567afc88366afc93969fb77252d71e7a1e5cbcb118_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
