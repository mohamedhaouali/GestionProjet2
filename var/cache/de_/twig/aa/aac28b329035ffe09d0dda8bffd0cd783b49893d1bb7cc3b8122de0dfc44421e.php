<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c59bab690d994b17aed5442041d28548792e05af7b5ab16d312e37593a7416d1 extends Twig_Template
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
        $__internal_7e51bc5ac76b68b4a109441779339a4b0eae37aba93c54c2d4b508822c1b6711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e51bc5ac76b68b4a109441779339a4b0eae37aba93c54c2d4b508822c1b6711->enter($__internal_7e51bc5ac76b68b4a109441779339a4b0eae37aba93c54c2d4b508822c1b6711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_7e51bc5ac76b68b4a109441779339a4b0eae37aba93c54c2d4b508822c1b6711->leave($__internal_7e51bc5ac76b68b4a109441779339a4b0eae37aba93c54c2d4b508822c1b6711_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
