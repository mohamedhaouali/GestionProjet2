<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_031eee08a3d3e9208f5b80562c78dde72122f7dd4a28c7a9ed61eccc4cdc5086 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cac339f150733cf1b0d0d36bbf5a5e2e3ec6789daefecd13e9f892bb6a4f368c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac339f150733cf1b0d0d36bbf5a5e2e3ec6789daefecd13e9f892bb6a4f368c->enter($__internal_cac339f150733cf1b0d0d36bbf5a5e2e3ec6789daefecd13e9f892bb6a4f368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cac339f150733cf1b0d0d36bbf5a5e2e3ec6789daefecd13e9f892bb6a4f368c->leave($__internal_cac339f150733cf1b0d0d36bbf5a5e2e3ec6789daefecd13e9f892bb6a4f368c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
