<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_4955a2ccd827d7b28788f7e8ad904211c470e11f8ccabaaaccfcac8da43a8f10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9075ebacbad6effc09103405956e8dfeea9be89e6ac6119cd93e734fcb3f8d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9075ebacbad6effc09103405956e8dfeea9be89e6ac6119cd93e734fcb3f8d87->enter($__internal_9075ebacbad6effc09103405956e8dfeea9be89e6ac6119cd93e734fcb3f8d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9075ebacbad6effc09103405956e8dfeea9be89e6ac6119cd93e734fcb3f8d87->leave($__internal_9075ebacbad6effc09103405956e8dfeea9be89e6ac6119cd93e734fcb3f8d87_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_146b71a23d15ac2260c45c787ae891ba1425cd74f266fc414cb1604c3161d621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_146b71a23d15ac2260c45c787ae891ba1425cd74f266fc414cb1604c3161d621->enter($__internal_146b71a23d15ac2260c45c787ae891ba1425cd74f266fc414cb1604c3161d621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_146b71a23d15ac2260c45c787ae891ba1425cd74f266fc414cb1604c3161d621->leave($__internal_146b71a23d15ac2260c45c787ae891ba1425cd74f266fc414cb1604c3161d621_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
