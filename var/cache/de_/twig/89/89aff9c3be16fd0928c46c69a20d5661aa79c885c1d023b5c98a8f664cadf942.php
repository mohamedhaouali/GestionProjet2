<?php

/* @SonataAdmin/CRUD/history.html.twig */
class __TwigTemplate_2c33125d2b974e98b8b3a34b0b2e4e395e5b3b4f2627ec50b7d98136ba05cb30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "@SonataAdmin/CRUD/history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_853ddefa1bf636f42e50c47056b50519977549ad5b5366508befa8dd2b3c1b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853ddefa1bf636f42e50c47056b50519977549ad5b5366508befa8dd2b3c1b82->enter($__internal_853ddefa1bf636f42e50c47056b50519977549ad5b5366508befa8dd2b3c1b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853ddefa1bf636f42e50c47056b50519977549ad5b5366508befa8dd2b3c1b82->leave($__internal_853ddefa1bf636f42e50c47056b50519977549ad5b5366508befa8dd2b3c1b82_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
";
    }
}
