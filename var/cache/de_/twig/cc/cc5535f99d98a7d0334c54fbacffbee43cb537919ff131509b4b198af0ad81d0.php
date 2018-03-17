<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a3865aef13d0200ca6348d69771d3ebb1ba944feba51323d7f06c296f05ce234 extends Twig_Template
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
        $__internal_494a3db0675ac5abaf3586d589fa71befba29b8153ee7338b6e5953b0e0138a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494a3db0675ac5abaf3586d589fa71befba29b8153ee7338b6e5953b0e0138a9->enter($__internal_494a3db0675ac5abaf3586d589fa71befba29b8153ee7338b6e5953b0e0138a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_494a3db0675ac5abaf3586d589fa71befba29b8153ee7338b6e5953b0e0138a9->leave($__internal_494a3db0675ac5abaf3586d589fa71befba29b8153ee7338b6e5953b0e0138a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
