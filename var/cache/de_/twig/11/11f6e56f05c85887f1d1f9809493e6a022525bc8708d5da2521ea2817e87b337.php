<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_b3baeb50848fc503de717c1e2ad23963255ed9c8afb821d3197cc2e9732755ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0afeac8fd385f3c10e6cf640c374abf7456848e727183cac01240fc52b1653d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afeac8fd385f3c10e6cf640c374abf7456848e727183cac01240fc52b1653d2->enter($__internal_0afeac8fd385f3c10e6cf640c374abf7456848e727183cac01240fc52b1653d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0afeac8fd385f3c10e6cf640c374abf7456848e727183cac01240fc52b1653d2->leave($__internal_0afeac8fd385f3c10e6cf640c374abf7456848e727183cac01240fc52b1653d2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
";
    }
}
