<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ec6065707b6d2b2449da59005fe0e94e031dffe0015c45a6593f1255e08c0c4d extends Twig_Template
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
        $__internal_39acb45a34370d1100a95f02305e95e65d222f8ad5444731c6c5dac3b3a1dfec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39acb45a34370d1100a95f02305e95e65d222f8ad5444731c6c5dac3b3a1dfec->enter($__internal_39acb45a34370d1100a95f02305e95e65d222f8ad5444731c6c5dac3b3a1dfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39acb45a34370d1100a95f02305e95e65d222f8ad5444731c6c5dac3b3a1dfec->leave($__internal_39acb45a34370d1100a95f02305e95e65d222f8ad5444731c6c5dac3b3a1dfec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b683dd0ae664bc5a074ecaaaf970f8d67f623c908877b8eca2c47f318ca3e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b683dd0ae664bc5a074ecaaaf970f8d67f623c908877b8eca2c47f318ca3e83->enter($__internal_6b683dd0ae664bc5a074ecaaaf970f8d67f623c908877b8eca2c47f318ca3e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6b683dd0ae664bc5a074ecaaaf970f8d67f623c908877b8eca2c47f318ca3e83->leave($__internal_6b683dd0ae664bc5a074ecaaaf970f8d67f623c908877b8eca2c47f318ca3e83_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_98fc2fcbef136733fc682b6d23f0939e62bb7056298d037035580d02c4837c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98fc2fcbef136733fc682b6d23f0939e62bb7056298d037035580d02c4837c03->enter($__internal_98fc2fcbef136733fc682b6d23f0939e62bb7056298d037035580d02c4837c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_98fc2fcbef136733fc682b6d23f0939e62bb7056298d037035580d02c4837c03->leave($__internal_98fc2fcbef136733fc682b6d23f0939e62bb7056298d037035580d02c4837c03_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36dba5c30cb6d9bc23e62cdcb62a1a5629c99b1219fb70992314ac8a3c7a7165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dba5c30cb6d9bc23e62cdcb62a1a5629c99b1219fb70992314ac8a3c7a7165->enter($__internal_36dba5c30cb6d9bc23e62cdcb62a1a5629c99b1219fb70992314ac8a3c7a7165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_36dba5c30cb6d9bc23e62cdcb62a1a5629c99b1219fb70992314ac8a3c7a7165->leave($__internal_36dba5c30cb6d9bc23e62cdcb62a1a5629c99b1219fb70992314ac8a3c7a7165_prof);

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
