<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_ca57dc1bc0a728c291405ac2cfd3f522a8d55d9d94c6db9e48ebc08a547559bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_563cb0a0d1e225f2b862d292b7b4d02745dccf035eb14a15a2110fbde0961f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563cb0a0d1e225f2b862d292b7b4d02745dccf035eb14a15a2110fbde0961f2b->enter($__internal_563cb0a0d1e225f2b862d292b7b4d02745dccf035eb14a15a2110fbde0961f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_563cb0a0d1e225f2b862d292b7b4d02745dccf035eb14a15a2110fbde0961f2b->leave($__internal_563cb0a0d1e225f2b862d292b7b4d02745dccf035eb14a15a2110fbde0961f2b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}
