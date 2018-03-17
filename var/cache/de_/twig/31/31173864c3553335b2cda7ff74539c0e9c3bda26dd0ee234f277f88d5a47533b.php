<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_64c71ff8bbb4431415415511371c6edba8937a789073498e005dd670931b67f4 extends Twig_Template
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
        $__internal_c28d0db0e82f1764942239b6d0c93ed710da67f8b3ec838816a100fbbf9ff70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28d0db0e82f1764942239b6d0c93ed710da67f8b3ec838816a100fbbf9ff70e->enter($__internal_c28d0db0e82f1764942239b6d0c93ed710da67f8b3ec838816a100fbbf9ff70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c28d0db0e82f1764942239b6d0c93ed710da67f8b3ec838816a100fbbf9ff70e->leave($__internal_c28d0db0e82f1764942239b6d0c93ed710da67f8b3ec838816a100fbbf9ff70e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
