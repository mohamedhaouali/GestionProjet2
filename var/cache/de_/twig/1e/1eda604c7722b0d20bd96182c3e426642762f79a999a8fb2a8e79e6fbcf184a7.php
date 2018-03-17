<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_3835e71af66f8785cc68893c5b7ee68e0dc305440e305dd5ff329da0a4f78a8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c6285b838daa2d6bf04320159c449627b215b30501d749ce425e8e96dea9631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6285b838daa2d6bf04320159c449627b215b30501d749ce425e8e96dea9631->enter($__internal_1c6285b838daa2d6bf04320159c449627b215b30501d749ce425e8e96dea9631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c6285b838daa2d6bf04320159c449627b215b30501d749ce425e8e96dea9631->leave($__internal_1c6285b838daa2d6bf04320159c449627b215b30501d749ce425e8e96dea9631_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
";
    }
}
