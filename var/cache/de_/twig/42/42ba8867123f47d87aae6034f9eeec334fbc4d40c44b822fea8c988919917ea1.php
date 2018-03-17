<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_8e92257e3e695ef4ae86b5b7b39fe428c07d2cc932f844dab467c342f4e6f127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3747b9012a1d68429dcbe5e3d12a82b2325429c038937b21af408345d6bddac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3747b9012a1d68429dcbe5e3d12a82b2325429c038937b21af408345d6bddac4->enter($__internal_3747b9012a1d68429dcbe5e3d12a82b2325429c038937b21af408345d6bddac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3747b9012a1d68429dcbe5e3d12a82b2325429c038937b21af408345d6bddac4->leave($__internal_3747b9012a1d68429dcbe5e3d12a82b2325429c038937b21af408345d6bddac4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}
