<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_26e3b85febf578e1a689e1d080387f8feb378fe7f066ba3897cdf6537c4b54c5 extends Twig_Template
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
        $__internal_4a70ad3eb30dd43218b1353b9710ab50ee656f9d9d32195413c81c1b538b15a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a70ad3eb30dd43218b1353b9710ab50ee656f9d9d32195413c81c1b538b15a8->enter($__internal_4a70ad3eb30dd43218b1353b9710ab50ee656f9d9d32195413c81c1b538b15a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4a70ad3eb30dd43218b1353b9710ab50ee656f9d9d32195413c81c1b538b15a8->leave($__internal_4a70ad3eb30dd43218b1353b9710ab50ee656f9d9d32195413c81c1b538b15a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
