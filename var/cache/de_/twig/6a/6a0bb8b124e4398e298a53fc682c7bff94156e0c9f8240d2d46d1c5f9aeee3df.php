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
        $__internal_71742950c164ad4054a8fcadd28c7130de383df6a5623eba6480e4a9748b743f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71742950c164ad4054a8fcadd28c7130de383df6a5623eba6480e4a9748b743f->enter($__internal_71742950c164ad4054a8fcadd28c7130de383df6a5623eba6480e4a9748b743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71742950c164ad4054a8fcadd28c7130de383df6a5623eba6480e4a9748b743f->leave($__internal_71742950c164ad4054a8fcadd28c7130de383df6a5623eba6480e4a9748b743f_prof);

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
