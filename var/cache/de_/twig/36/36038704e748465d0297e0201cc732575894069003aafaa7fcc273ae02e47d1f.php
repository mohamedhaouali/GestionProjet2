<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_06c5bcebbe416cf32659d145e82a590d5027f7dc99bc5c0e5b64dfd234514649 extends Twig_Template
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
        $__internal_8d0a63b5bed6f2d9ef38148a7ca19135f81048cca9e059434ae3bd6fa2f0ff36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0a63b5bed6f2d9ef38148a7ca19135f81048cca9e059434ae3bd6fa2f0ff36->enter($__internal_8d0a63b5bed6f2d9ef38148a7ca19135f81048cca9e059434ae3bd6fa2f0ff36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8d0a63b5bed6f2d9ef38148a7ca19135f81048cca9e059434ae3bd6fa2f0ff36->leave($__internal_8d0a63b5bed6f2d9ef38148a7ca19135f81048cca9e059434ae3bd6fa2f0ff36_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
