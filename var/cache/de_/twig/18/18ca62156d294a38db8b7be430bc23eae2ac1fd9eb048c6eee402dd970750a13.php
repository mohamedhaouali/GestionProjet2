<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a5b2411209cda4093f299be03a370274d80c0247b6ca20496bc62f47b6abb543 extends Twig_Template
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
        $__internal_009b84a625a0af2621ae7cd39886e53e9ce0737c05eaf9851220b443b6f21866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009b84a625a0af2621ae7cd39886e53e9ce0737c05eaf9851220b443b6f21866->enter($__internal_009b84a625a0af2621ae7cd39886e53e9ce0737c05eaf9851220b443b6f21866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_009b84a625a0af2621ae7cd39886e53e9ce0737c05eaf9851220b443b6f21866->leave($__internal_009b84a625a0af2621ae7cd39886e53e9ce0737c05eaf9851220b443b6f21866_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
