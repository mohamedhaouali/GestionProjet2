<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_764e1a756c7817bcbdccc9207c2d9fcf5524371cd7283a3f1f64f0c054c9c696 extends Twig_Template
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
        $__internal_64b9a610f26d3afc18ac9f29f873a973b0264544339243a4feae4c9f76313f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b9a610f26d3afc18ac9f29f873a973b0264544339243a4feae4c9f76313f20->enter($__internal_64b9a610f26d3afc18ac9f29f873a973b0264544339243a4feae4c9f76313f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_64b9a610f26d3afc18ac9f29f873a973b0264544339243a4feae4c9f76313f20->leave($__internal_64b9a610f26d3afc18ac9f29f873a973b0264544339243a4feae4c9f76313f20_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
