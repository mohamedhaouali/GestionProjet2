<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_947b258f360f928b5eaa525819392777a18868c39462c0b22f805aeb5c5d6d3d extends Twig_Template
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
        $__internal_50cf2d3ab40b04f83a238c228294765da014568fef7ad7f10a818dfacb17abf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cf2d3ab40b04f83a238c228294765da014568fef7ad7f10a818dfacb17abf7->enter($__internal_50cf2d3ab40b04f83a238c228294765da014568fef7ad7f10a818dfacb17abf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_50cf2d3ab40b04f83a238c228294765da014568fef7ad7f10a818dfacb17abf7->leave($__internal_50cf2d3ab40b04f83a238c228294765da014568fef7ad7f10a818dfacb17abf7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
