<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_9bf7afcf7ed7111bef4c7d2a31310382be72884916d43335eee7bdc39a48ed2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a602d4c39752992351de297d8b895d281ccafffb1060261c2ce95d42532486d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a602d4c39752992351de297d8b895d281ccafffb1060261c2ce95d42532486d8->enter($__internal_a602d4c39752992351de297d8b895d281ccafffb1060261c2ce95d42532486d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a602d4c39752992351de297d8b895d281ccafffb1060261c2ce95d42532486d8->leave($__internal_a602d4c39752992351de297d8b895d281ccafffb1060261c2ce95d42532486d8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
