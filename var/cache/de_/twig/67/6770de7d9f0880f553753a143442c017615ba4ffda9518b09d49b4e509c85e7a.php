<?php

/* @GestionProjet/Default/page.html.twig */
class __TwigTemplate_5c3106034f96b7c339bbb3b9fa1b77878f80291effeb6ffb93eeead1daf32e90 extends Twig_Template
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
        $__internal_513d4991443111bc3f6f95fb1b7556f62d542b899c7bc2773b6bb0096d6244b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513d4991443111bc3f6f95fb1b7556f62d542b899c7bc2773b6bb0096d6244b0->enter($__internal_513d4991443111bc3f6f95fb1b7556f62d542b899c7bc2773b6bb0096d6244b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestionProjet/Default/page.html.twig"));

        // line 1
        echo "page ";
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
        echo "
";
        
        $__internal_513d4991443111bc3f6f95fb1b7556f62d542b899c7bc2773b6bb0096d6244b0->leave($__internal_513d4991443111bc3f6f95fb1b7556f62d542b899c7bc2773b6bb0096d6244b0_prof);

    }

    public function getTemplateName()
    {
        return "@GestionProjet/Default/page.html.twig";
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
        return "page {{ nbr }}
";
    }
}
