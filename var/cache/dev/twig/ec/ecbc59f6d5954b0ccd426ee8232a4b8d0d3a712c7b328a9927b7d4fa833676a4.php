<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_3caea39b1840e28574c994359434a221acfc9abb2dafa0101700c780a224e1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c74a0044057b84d06ba65f87a8b81ef7afba501b1b6df9001718634622bdd56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74a0044057b84d06ba65f87a8b81ef7afba501b1b6df9001718634622bdd56d->enter($__internal_c74a0044057b84d06ba65f87a8b81ef7afba501b1b6df9001718634622bdd56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c74a0044057b84d06ba65f87a8b81ef7afba501b1b6df9001718634622bdd56d->leave($__internal_c74a0044057b84d06ba65f87a8b81ef7afba501b1b6df9001718634622bdd56d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
";
    }
}
