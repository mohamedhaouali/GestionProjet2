<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_fab63b538b61ae58b47b4b9047c9e1acc6cc32a5e7f1831f3a389b05f36e5565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49fc686eba0414668c2cd786b92a3de03fedfd7d628ac6625dd8be2bb20976ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fc686eba0414668c2cd786b92a3de03fedfd7d628ac6625dd8be2bb20976ec->enter($__internal_49fc686eba0414668c2cd786b92a3de03fedfd7d628ac6625dd8be2bb20976ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49fc686eba0414668c2cd786b92a3de03fedfd7d628ac6625dd8be2bb20976ec->leave($__internal_49fc686eba0414668c2cd786b92a3de03fedfd7d628ac6625dd8be2bb20976ec_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
";
    }
}
