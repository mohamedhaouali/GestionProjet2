<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_0b4bedfb96f5718f8728df39520dc9fbb9963495ef1716c11671ce4a2ddb3bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e9879a65245b9cce829ba2301b1e0193a41b5974f25581abbc2870d147fa4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e9879a65245b9cce829ba2301b1e0193a41b5974f25581abbc2870d147fa4a->enter($__internal_39e9879a65245b9cce829ba2301b1e0193a41b5974f25581abbc2870d147fa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e9879a65245b9cce829ba2301b1e0193a41b5974f25581abbc2870d147fa4a->leave($__internal_39e9879a65245b9cce829ba2301b1e0193a41b5974f25581abbc2870d147fa4a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
";
    }
}
