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
        $__internal_87080995d2e7f21ed02125964166c04a68c3edaa8d61810da5dd8aba3ab9a8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87080995d2e7f21ed02125964166c04a68c3edaa8d61810da5dd8aba3ab9a8c7->enter($__internal_87080995d2e7f21ed02125964166c04a68c3edaa8d61810da5dd8aba3ab9a8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87080995d2e7f21ed02125964166c04a68c3edaa8d61810da5dd8aba3ab9a8c7->leave($__internal_87080995d2e7f21ed02125964166c04a68c3edaa8d61810da5dd8aba3ab9a8c7_prof);

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
