<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_953c645c528c465082d1752db011ace6ed970bd862669948c4a588bddf66438b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c95cf78fce1d80a98810f332c2eef47f52ae07f17c6faf812c08dca2d0bb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c95cf78fce1d80a98810f332c2eef47f52ae07f17c6faf812c08dca2d0bb01->enter($__internal_a5c95cf78fce1d80a98810f332c2eef47f52ae07f17c6faf812c08dca2d0bb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c95cf78fce1d80a98810f332c2eef47f52ae07f17c6faf812c08dca2d0bb01->leave($__internal_a5c95cf78fce1d80a98810f332c2eef47f52ae07f17c6faf812c08dca2d0bb01_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
