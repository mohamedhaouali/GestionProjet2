<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ccc168de6f99bc3fb59b72119c762d499d361b4064d36a0f107413e2f78bce21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_fc696407dffead4e962bb3483f4fa677a0929fecf51ccad2bb236a40fd8d8b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc696407dffead4e962bb3483f4fa677a0929fecf51ccad2bb236a40fd8d8b72->enter($__internal_fc696407dffead4e962bb3483f4fa677a0929fecf51ccad2bb236a40fd8d8b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc696407dffead4e962bb3483f4fa677a0929fecf51ccad2bb236a40fd8d8b72->leave($__internal_fc696407dffead4e962bb3483f4fa677a0929fecf51ccad2bb236a40fd8d8b72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_04259538e4baedd0db955981292107f737bf10c6b8530ccb1bb837ff5f52dd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04259538e4baedd0db955981292107f737bf10c6b8530ccb1bb837ff5f52dd4f->enter($__internal_04259538e4baedd0db955981292107f737bf10c6b8530ccb1bb837ff5f52dd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_04259538e4baedd0db955981292107f737bf10c6b8530ccb1bb837ff5f52dd4f->leave($__internal_04259538e4baedd0db955981292107f737bf10c6b8530ccb1bb837ff5f52dd4f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d50f5a489f46d58e877d1395961e0ba199e7b09b256a2d8155b2ae4f251bab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d50f5a489f46d58e877d1395961e0ba199e7b09b256a2d8155b2ae4f251bab9->enter($__internal_6d50f5a489f46d58e877d1395961e0ba199e7b09b256a2d8155b2ae4f251bab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6d50f5a489f46d58e877d1395961e0ba199e7b09b256a2d8155b2ae4f251bab9->leave($__internal_6d50f5a489f46d58e877d1395961e0ba199e7b09b256a2d8155b2ae4f251bab9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
