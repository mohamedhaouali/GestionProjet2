<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_72972ef4a2ad035aa3def210a2766a0ce6981c484dd157b9e2a56b74e60c1a84 extends Twig_Template
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
        $__internal_cc466af019c8d080c76c53eecf0020ac0dd6acf609c2577a9d7edf6cd4223cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc466af019c8d080c76c53eecf0020ac0dd6acf609c2577a9d7edf6cd4223cfa->enter($__internal_cc466af019c8d080c76c53eecf0020ac0dd6acf609c2577a9d7edf6cd4223cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc466af019c8d080c76c53eecf0020ac0dd6acf609c2577a9d7edf6cd4223cfa->leave($__internal_cc466af019c8d080c76c53eecf0020ac0dd6acf609c2577a9d7edf6cd4223cfa_prof);

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
