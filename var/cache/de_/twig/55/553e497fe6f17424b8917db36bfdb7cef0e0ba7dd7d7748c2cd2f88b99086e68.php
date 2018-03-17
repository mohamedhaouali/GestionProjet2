<?php

/* GestionProjetBundle:Default:page.html.twig */
class __TwigTemplate_ff95754ce67c78e9b64bfe8b7a10a18c9eb0e861efad595978ec56b56be3cc7b extends Twig_Template
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
        $__internal_4de69daad9ef540c6754f768db91ccfac3ddde06fe2a0b3d136de105b7c89be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de69daad9ef540c6754f768db91ccfac3ddde06fe2a0b3d136de105b7c89be6->enter($__internal_4de69daad9ef540c6754f768db91ccfac3ddde06fe2a0b3d136de105b7c89be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionProjetBundle:Default:page.html.twig"));

        // line 1
        echo "page ";
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
        echo "
";
        
        $__internal_4de69daad9ef540c6754f768db91ccfac3ddde06fe2a0b3d136de105b7c89be6->leave($__internal_4de69daad9ef540c6754f768db91ccfac3ddde06fe2a0b3d136de105b7c89be6_prof);

    }

    public function getTemplateName()
    {
        return "GestionProjetBundle:Default:page.html.twig";
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
