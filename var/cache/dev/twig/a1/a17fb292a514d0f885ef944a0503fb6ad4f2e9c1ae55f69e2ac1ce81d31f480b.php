<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_96f8e0d90d38c7d7e1a275b1742b5d8dcf395561759809ab5003ac4662624a8b extends Twig_Template
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
        $__internal_8b5492dd0d2c7226cf84cc77e63eef612db7f92f320450ec1263b55a4086b1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5492dd0d2c7226cf84cc77e63eef612db7f92f320450ec1263b55a4086b1d0->enter($__internal_8b5492dd0d2c7226cf84cc77e63eef612db7f92f320450ec1263b55a4086b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5492dd0d2c7226cf84cc77e63eef612db7f92f320450ec1263b55a4086b1d0->leave($__internal_8b5492dd0d2c7226cf84cc77e63eef612db7f92f320450ec1263b55a4086b1d0_prof);

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
