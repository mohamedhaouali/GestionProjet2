<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a8fa2c43ee149732d933ebd9fe2d6f95d35b89243256418d1d4ccd7e236a9150 extends Twig_Template
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
        $__internal_54706f637fc6443bf314d78fe30399cbbdadde6e4d74132becc79469c3eeb04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54706f637fc6443bf314d78fe30399cbbdadde6e4d74132becc79469c3eeb04b->enter($__internal_54706f637fc6443bf314d78fe30399cbbdadde6e4d74132becc79469c3eeb04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_54706f637fc6443bf314d78fe30399cbbdadde6e4d74132becc79469c3eeb04b->leave($__internal_54706f637fc6443bf314d78fe30399cbbdadde6e4d74132becc79469c3eeb04b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
