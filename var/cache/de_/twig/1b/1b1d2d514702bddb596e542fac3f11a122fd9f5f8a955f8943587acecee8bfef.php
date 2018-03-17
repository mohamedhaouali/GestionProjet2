<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_610d915f77ff1d1ca976532a9b4a75d98e2ca1d581d9af93e94d18300fedb699 extends Twig_Template
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
        $__internal_9b3a1747e1ae17186dba7d65138addc10af5d99da6059963e773145acbf9a609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3a1747e1ae17186dba7d65138addc10af5d99da6059963e773145acbf9a609->enter($__internal_9b3a1747e1ae17186dba7d65138addc10af5d99da6059963e773145acbf9a609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9b3a1747e1ae17186dba7d65138addc10af5d99da6059963e773145acbf9a609->leave($__internal_9b3a1747e1ae17186dba7d65138addc10af5d99da6059963e773145acbf9a609_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
