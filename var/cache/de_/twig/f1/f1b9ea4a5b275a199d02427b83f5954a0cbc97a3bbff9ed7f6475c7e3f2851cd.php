<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_0c7a1a0a2d43e6f2db3975acc4904afae68060e36f4c4c9e3bdfe2694bb9bc96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5088efe0204a7c7e52b534ee142acf96b51dd885223ae7202fff818822c5945b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5088efe0204a7c7e52b534ee142acf96b51dd885223ae7202fff818822c5945b->enter($__internal_5088efe0204a7c7e52b534ee142acf96b51dd885223ae7202fff818822c5945b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5088efe0204a7c7e52b534ee142acf96b51dd885223ae7202fff818822c5945b->leave($__internal_5088efe0204a7c7e52b534ee142acf96b51dd885223ae7202fff818822c5945b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
";
    }
}
