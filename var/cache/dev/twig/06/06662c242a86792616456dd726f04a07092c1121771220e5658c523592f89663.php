<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_008b3df48051b4395afa0482d32efe8b676c3824989e61987fd679f300aa8d7d extends Twig_Template
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
        $__internal_0f390deb7a9f4f24c010b0f6aa6298fced434ac70fbc3262cd54387dddcc31ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f390deb7a9f4f24c010b0f6aa6298fced434ac70fbc3262cd54387dddcc31ae->enter($__internal_0f390deb7a9f4f24c010b0f6aa6298fced434ac70fbc3262cd54387dddcc31ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f390deb7a9f4f24c010b0f6aa6298fced434ac70fbc3262cd54387dddcc31ae->leave($__internal_0f390deb7a9f4f24c010b0f6aa6298fced434ac70fbc3262cd54387dddcc31ae_prof);

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
