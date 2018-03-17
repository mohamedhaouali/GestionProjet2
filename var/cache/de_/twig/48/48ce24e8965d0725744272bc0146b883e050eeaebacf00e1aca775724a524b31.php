<?php

/* @SonataAdmin/Core/create_button.html.twig */
class __TwigTemplate_1ed09f02d471c5fdbdfa0222870f6171dff46abedb27c772e125e51d15fa376e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/Core/create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_748af0c62832c7321af78279ec6d99c8df609dda85953c96303d71e059da741e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748af0c62832c7321af78279ec6d99c8df609dda85953c96303d71e059da741e->enter($__internal_748af0c62832c7321af78279ec6d99c8df609dda85953c96303d71e059da741e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_748af0c62832c7321af78279ec6d99c8df609dda85953c96303d71e059da741e->leave($__internal_748af0c62832c7321af78279ec6d99c8df609dda85953c96303d71e059da741e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/create_button.html.twig";
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
