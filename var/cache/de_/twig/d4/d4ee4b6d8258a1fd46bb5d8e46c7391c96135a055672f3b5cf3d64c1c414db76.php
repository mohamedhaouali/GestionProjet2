<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0dc49e43e9781ebb79f4e43b5fb33cda30c029bad03ff97dc0f6c354f3ec042f extends Twig_Template
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
        $__internal_68dfbe41880ddec0ea148838769b14b2a4791b0312433af5c9b5225ad3ab796d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dfbe41880ddec0ea148838769b14b2a4791b0312433af5c9b5225ad3ab796d->enter($__internal_68dfbe41880ddec0ea148838769b14b2a4791b0312433af5c9b5225ad3ab796d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_68dfbe41880ddec0ea148838769b14b2a4791b0312433af5c9b5225ad3ab796d->leave($__internal_68dfbe41880ddec0ea148838769b14b2a4791b0312433af5c9b5225ad3ab796d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
