<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_8a47a96acc53a7d15353d19ad1beb3f078834b2270025e877533d866b4007161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e5e75fc1a8039a2568c4932a6d9b041f0e86a8eb750fad58819071f9bceb12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5e75fc1a8039a2568c4932a6d9b041f0e86a8eb750fad58819071f9bceb12a->enter($__internal_6e5e75fc1a8039a2568c4932a6d9b041f0e86a8eb750fad58819071f9bceb12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e5e75fc1a8039a2568c4932a6d9b041f0e86a8eb750fad58819071f9bceb12a->leave($__internal_6e5e75fc1a8039a2568c4932a6d9b041f0e86a8eb750fad58819071f9bceb12a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
";
    }
}
