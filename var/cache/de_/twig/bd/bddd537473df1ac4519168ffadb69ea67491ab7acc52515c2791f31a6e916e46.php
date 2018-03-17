<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_f686273b9db8a901ff7cd0bb9a1265f7ea894344d5af8a0e5b781c0dce471146 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dbeae39928013dd10552209fc193cff6286866d7dfce9d96f1b252e6d383ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbeae39928013dd10552209fc193cff6286866d7dfce9d96f1b252e6d383ed2->enter($__internal_8dbeae39928013dd10552209fc193cff6286866d7dfce9d96f1b252e6d383ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dbeae39928013dd10552209fc193cff6286866d7dfce9d96f1b252e6d383ed2->leave($__internal_8dbeae39928013dd10552209fc193cff6286866d7dfce9d96f1b252e6d383ed2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
";
    }
}
