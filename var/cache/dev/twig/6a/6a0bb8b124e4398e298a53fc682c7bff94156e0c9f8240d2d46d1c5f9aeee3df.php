<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_0de2018c5350448c3e54f19016e6d1e03b543f18b8074c4f8bdba5ce7eb11c27 extends Twig_Template
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
        $__internal_29ae5fe21fd339b4999a90c6ac9398814b5879ee7c9ea2cf6db9a78583442ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ae5fe21fd339b4999a90c6ac9398814b5879ee7c9ea2cf6db9a78583442ed1->enter($__internal_29ae5fe21fd339b4999a90c6ac9398814b5879ee7c9ea2cf6db9a78583442ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29ae5fe21fd339b4999a90c6ac9398814b5879ee7c9ea2cf6db9a78583442ed1->leave($__internal_29ae5fe21fd339b4999a90c6ac9398814b5879ee7c9ea2cf6db9a78583442ed1_prof);

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
