<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_2f2616de5fa45a4818845346c0a566cb7aba70c57b2d8bb2d73515ab76736af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc4ecff1eb0e4296fc9238dbe7ea7270ec6fdea33e2fff6fe70c9ea28ca5b5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4ecff1eb0e4296fc9238dbe7ea7270ec6fdea33e2fff6fe70c9ea28ca5b5b1->enter($__internal_dc4ecff1eb0e4296fc9238dbe7ea7270ec6fdea33e2fff6fe70c9ea28ca5b5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc4ecff1eb0e4296fc9238dbe7ea7270ec6fdea33e2fff6fe70c9ea28ca5b5b1->leave($__internal_dc4ecff1eb0e4296fc9238dbe7ea7270ec6fdea33e2fff6fe70c9ea28ca5b5b1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
";
    }
}
