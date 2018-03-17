<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_2f705c16d2192c99562108565149ca0eea08ca59b04b7737bb343def47999285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e59bab4b6455e54d5ad462f9b9e4eea135f2070db0ff86740134cd1879d7d947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59bab4b6455e54d5ad462f9b9e4eea135f2070db0ff86740134cd1879d7d947->enter($__internal_e59bab4b6455e54d5ad462f9b9e4eea135f2070db0ff86740134cd1879d7d947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e59bab4b6455e54d5ad462f9b9e4eea135f2070db0ff86740134cd1879d7d947->leave($__internal_e59bab4b6455e54d5ad462f9b9e4eea135f2070db0ff86740134cd1879d7d947_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fdab723fde8c5471e3d275b8c0f29599f60a19f2cef8b184d61ca61544a646ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdab723fde8c5471e3d275b8c0f29599f60a19f2cef8b184d61ca61544a646ca->enter($__internal_fdab723fde8c5471e3d275b8c0f29599f60a19f2cef8b184d61ca61544a646ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_fdab723fde8c5471e3d275b8c0f29599f60a19f2cef8b184d61ca61544a646ca->leave($__internal_fdab723fde8c5471e3d275b8c0f29599f60a19f2cef8b184d61ca61544a646ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
