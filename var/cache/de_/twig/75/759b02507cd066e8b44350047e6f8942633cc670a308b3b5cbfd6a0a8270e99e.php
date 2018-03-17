<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_bb98160ab3011cc63eedbab816e0d75860b34922e00fe8c913a62763745091fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_642251c45aa31213f5bf1275d463edeef4fe17e1cca79381e2fb01679f2949e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642251c45aa31213f5bf1275d463edeef4fe17e1cca79381e2fb01679f2949e9->enter($__internal_642251c45aa31213f5bf1275d463edeef4fe17e1cca79381e2fb01679f2949e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_642251c45aa31213f5bf1275d463edeef4fe17e1cca79381e2fb01679f2949e9->leave($__internal_642251c45aa31213f5bf1275d463edeef4fe17e1cca79381e2fb01679f2949e9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
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
