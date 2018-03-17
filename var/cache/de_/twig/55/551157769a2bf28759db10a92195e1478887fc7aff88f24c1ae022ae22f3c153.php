<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_d7291ef6d20526b5bf4e5cc678be38a5bffd4a65ed508ab78e802ba234396d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7575de1bea54d773673f92a20987d0258b2dbd2c59a85bc81a1a551df2116fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7575de1bea54d773673f92a20987d0258b2dbd2c59a85bc81a1a551df2116fdd->enter($__internal_7575de1bea54d773673f92a20987d0258b2dbd2c59a85bc81a1a551df2116fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7575de1bea54d773673f92a20987d0258b2dbd2c59a85bc81a1a551df2116fdd->leave($__internal_7575de1bea54d773673f92a20987d0258b2dbd2c59a85bc81a1a551df2116fdd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
";
    }
}
